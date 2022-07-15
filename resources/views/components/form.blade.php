
{{ $demo }}

<div class="form-group">
    <label for="{{ $placeholder }}">{{ $placeholder }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" value="{{ old($name) }}">    

    <span class="text-danger">
          @error($name)
            {{ $message }}
          @enderror
    </span>
</div>