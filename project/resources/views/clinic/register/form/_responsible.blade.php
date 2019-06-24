<div class="form-group">
    <input
        type="text"
        name="responsible[name]"
        value="{{ old('responsible.name' ?? '') }}"
        class="form-control form-control-custom {{ $errors->has('responsible.name') ? 'is-invalid' : '' }}"
        placeholder="Nome completo">
    @errorblock('responsible.name')
</div>

<div class="form-group">
    <input
        type="email"
        name="responsible[email]"
        value="{{ old('responsible.email' ?? '') }}"
        class="form-control form-control-custom {{ $errors->has('responsible.email') ? 'is-invalid' : '' }}"
        placeholder="Email">
    @errorblock('responsible.email')
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input
            type="password"
            name="responsible[password]"
            class="form-control form-control-custom {{
                $errors->has('responsible.password') ? 'is-invalid' : ''
            }}"
            placeholder="Senha">
        @errorblock('responsible.password')
    </div>

    <div class="col-sm-6">
        <input
            type="password"
            name="responsible[password_confirmation]"
            class="form-control form-control-custom {{
                $errors->has('responsible.password_confirmation') ? 'is-invalid' : ''
            }}"
            placeholder="Confirmar senha">
        @errorblock('responsible.password_confirmation')
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input
            type="text"
            name="responsible[cellphone]"
            value="{{ old('responsible.cellphone' ?? '') }}"
            class="form-control form-control-custom {{ $errors->has('responsible.cellphone') ? 'is-invalid' : '' }}"
            placeholder="Telefone">
        @errorblock('responsible.cellphone')
    </div>
    <div class="col-sm-6">
        <input
            type="text"
            name="responsible[phone]"
            value="{{ old('responsible.phone' ?? '') }}"
            class="form-control form-control-custom {{ $errors->has('responsible.phone') ? 'is-invalid' : '' }}"
            placeholder="Celular">
        @errorblock('responsible.phone')
    </div>
</div>
