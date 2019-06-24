<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input
            type="text"
            name="clinic[name]"
            value="{{ old('clinic.name') }}"
            class="form-control form-control-custom {{ $errors->has('clinic.name') ? 'is-invalid' : '' }}"
            placeholder="@lang('labels.common.name')">
        @errorblock('clinic.name')
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input
            type="text"
            name="clinic[cnpj]"
            value="{{ old('clinic.cnpj') }}"
            class="form-control form-control-custom {{ $errors->has('clinic.cnpj') ? 'is-invalid' : '' }}"
            placeholder="@lang('labels.common.cnpj')">
        @errorblock('clinic.cnpj')
    </div>
</div>

    <address-component>
    </address-component>

