FROM ambientum/php:7.3-nginx

COPY . .
RUN sudo chown -R ambientum . \
        && composer global require hirak/prestissimo \
        && composer install

RUN php artisan key:generate
