<nav v-if="shouldShowPagination">
    <ul class="pagination justify-content-center">
        <li class="page-item" :class="{'disabled': !enabledPrevPageButton}" @click.prevent="fetchPrevPage">
            <a class="page-link">
                @lang('links.pagination.previous')
            </a>
        </li>

        <li class="page-item" v-for="button in paginationButtons" @click.prevent="changePage(button.page)"
            :class="{'active': button.active, 'disabled': button.disabled}" :ref="'paginationButton' + button.page">
            <a class="page-link">
                @{{button.text}}
            </a>
        </li>

        <li class="page-item" :class="{'disabled': !enabledNextPageButton}" @click.prevent="fetchNextPage">
            <a class="page-link">
                @lang('links.pagination.next')
            </a>
        </li>
    </ul>
</nav>