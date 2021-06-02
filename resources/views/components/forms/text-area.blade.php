<div class="form-group col">
	<label>{{$label}}</label>
<textarea name="{{$name}}" class="form-control @error($name) is-invalid @enderror" {{ $attributes }}>{{old($name) ?? $value}}</textarea>

@error($name)
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror
</div>