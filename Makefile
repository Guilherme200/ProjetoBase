## Variables
COLOR_RESET   = \033[0m
COLOR_INFO    = \033[32m
COLOR_COMMENT = \033[33m
COLOR_ERROR   = \033[0;31m

## Aliases
DC = docker-compose

## Show console logs if debug=true before make comand
out = >/dev/null 2>&1
ifeq ($(debug), true)
  out=$(libs_for_gcc)
endif

## Help
help:
	@echo "$(COLOR_COMMENT)Usage:$(COLOR_RESET)"
	@echo " make [target]\n"
	@echo "$(COLOR_COMMENT)Available targets:$(COLOR_RESET)"
	@awk '/^[a-zA-Z\-\_0-9\.@]+:/ { \
		helpMessage = match(lastLine, /^## (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":")); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf " $(COLOR_INFO)%-16s$(COLOR_RESET) %s\n", helpCommand, helpMessage; \
		} \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST)

## Build and start all application components
setup:
	@echo "$(COLOR_INFO)==> Building and running docker images ...$(COLOR_RESET)"
		@$(DC) build --no-cache $(out)
		@$(DC) up -d --remove-orphans $(out)

	@echo "$(COLOR_INFO)==> Installing composer dependencies ...$(COLOR_RESET)"
		@$(DC) exec app composer install $(out)

	@echo "$(COLOR_INFO)==> Verifying .env and generating encryption key ...$(COLOR_RESET)"
		@$(DC) exec app php -r "file_exists('.env') || copy('.env.example', '.env');" $(out)
		@$(DC) exec app php artisan key:generate --ansi $(out)

	@echo "$(COLOR_INFO)==> Running migrations & seeding ...$(COLOR_RESET)"
		@$(DC) exec app php artisan migrate --seed $(out)
		@$(DC) exec app php artisan upgrade --dev $(out)

	@echo "$(COLOR_INFO)==> Generating passport keys ...$(COLOR_RESET)"
		@$(DC) exec app php artisan passport:install $(out)

	@echo "$(COLOR_INFO)==> Installing NPM dependencies ...$(COLOR_RESET)"
		@$(DC) exec front npm ci $(out)

	@echo "$(COLOR_INFO)==> Building NPM ...$(COLOR_RESET)"
		@$(DC) exec front npm run dev $(out)

	@echo "$(COLOR_COMMENT)App: $(COLOR_RESET)http://localhost"
	@echo "$(COLOR_COMMENT)Mailhog: $(COLOR_RESET)http://localhost:8025"
	@echo "$(COLOR_COMMENT)PhpMyAdmin: $(COLOR_RESET)http://localhost:5001"

## Clear all application data and components
clean:
	@echo "$(COLOR_INFO)==> Cleaning node_modules NPM ...$(COLOR_RESET)"
		@$(DC) run front npm cache clean --force $(out)
		@$(DC) run front rm -rf node_modules $(out)

	@echo "$(COLOR_INFO)==> Removing containers ...$(COLOR_RESET)"
		@$(DC) down $(out)

	@echo "$(COLOR_INFO)==> Cleaning volumes ...$(COLOR_RESET)"
		@make remove_volumes $(out)

	@echo "$(COLOR_COMMENT)Completed!$(COLOR_RESET)"

upgrade_dev:
	@$(DC) exec app php artisan upgrade --dev

remove_volumes:
	@docker volume rm admin_mysql-data
	@docker volume rm admin_myadmin-data
	@docker volume rm admin_redis-data

## Initialize docker containers
start:
	@echo "$(COLOR_INFO)==> Starting application containers ...$(COLOR_RESET)"
		@$(DC) stop $(out)
		@$(DC) up -d --remove-orphans $(out)

## Stop docker containers
stop:
	@echo "$(COLOR_INFO)==> Stopping application containers ...$(COLOR_RESET)"
		@$(DC) stop $(out)

## Restart docker containers
restart:
	@make stop
	@make start
	@echo "$(COLOR_COMMENT)Completed!$(COLOR_RESET)"