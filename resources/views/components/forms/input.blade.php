<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}">
            {{ $label }}
        </label>
    @endif
    <input
        class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes }}
        >
    @if ($errors->has($name))
        <p class="invalid-feedback">
            {{ $errors->first($name) }}
        </p>
    @endif
</div>
