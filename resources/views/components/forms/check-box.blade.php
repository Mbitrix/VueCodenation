<div class="form-check col">
  <input type="checkbox" class="form-check-input @error($name) is-invalid @enderror"  name="{{$name}}"  value="{{old($name) ?? $value}}" id="{{$id}}" {{$attributes}}>
  <label class="form-check-label" for="{{$id}}">
    {{$label}}
  </label>
</div>

@error($name)
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror