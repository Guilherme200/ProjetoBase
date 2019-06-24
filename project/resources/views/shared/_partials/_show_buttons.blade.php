    <div class="text-center">
    <a href="{{ $urlBack ?? URL::previous() }}" class="btn btn-light shadow-sm">
        <i class="fas fa-undo fa-sm text-gray-600"></i> @lang('buttons.common.back')
    </a>
    <a class="btn btn-info shadow-sm ml-2" href="{{ $urlEdit }}">
        <i class="fas fa-pencil-alt fa-sm text-white-50"></i> @lang('buttons.common.edit')
    </a>
</div>
