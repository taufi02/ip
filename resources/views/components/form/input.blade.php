<div class="input-group flex-nowrap mt-2">
    <span class='input-group-text w-75 ' id="{{ $label }}">
        {{ $label }} @error($nama) <span class="text-danger">| {{ $message }} </span>@enderror
    </span>
    <input type="text" 
        class="form-control @error($nama) is-invalid @enderror"
        placeholder="{{ $label }}"
        aria-label="{{ $label}}"
        aria-describedby="addon-wrapping"
        name={{ $nama }}
        value="{{ old($nama) ?? $edit ?? ' ' }}"
        >
</div>
