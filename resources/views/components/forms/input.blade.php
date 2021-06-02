<div class="form-group col">
	<label>{{$label}}</label>
<input type="{{$type ?? 'text'}}" name="{{$name}}" value="{{old($name) ?? $value}}" class="form-control @error($name) is-invalid @enderror" {{ $attributes }}>
@error($name)
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror
</div>