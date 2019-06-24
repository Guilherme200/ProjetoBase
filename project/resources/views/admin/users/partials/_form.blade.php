@csrf
<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="name">
                @lang('labels.common.name')<span class="text-danger ml-1">*</span>
            </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="far fa-user"></i>
                    </span>
                </div>
                <input type="text" name="name" id="name" class="form-control {{ has_error_class('name') }}"
                    value="{{ old('name', $user->name ?? '') }}" placeholder="@lang('phrases.common.name')">
                @errorblock('name')
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="email">
                @lang('labels.common.email')<span class="text-danger ml-1">*</span>
            </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>
                </div>
                <input type="email" name="email" id="email" class="form-control {{ has_error_class('email') }}"
                    value="{{old('email', $user->email ?? '')}}" placeholder="@lang('phrases.common.email')">
                @errorblock('email')
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="password">
                @lang('labels.user.password')@if(!isset($user))<span class="text-danger ml-1">*</span>@endif
            </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-asterisk"></i>
                    </span>
                </div>
                <input type="password" name="password" autocomplete="new-password" class="form-control {{ has_error_class('password') }}"
                    id="password" placeholder="@lang('phrases.user.password')">
                @errorblock('password')
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="password_confirmation">
                @lang('labels.user.password_confirmation')@if(!isset($user))<span class="text-danger ml-1">*</span>@endif
            </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-asterisk"></i>
                    </span>
                </div>
                <input type="password" name="password_confirmation" class="form-control {{ has_error_class('password') }}"
                    placeholder="@lang('phrases.user.password_confirmation')">
            </div>
        </div>
    </div>
</div>