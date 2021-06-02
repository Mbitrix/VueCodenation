<div class="form-group col">
	<label>{{$label}}</label>
<select class="form-select @error($name) is-invalid @enderror" name="{{$name}}" {{$attributes}}>
	@foreach($options as $option)
		@if(old($name) == $option['value'] || $option['selected'] ==true)
		<option value="{{$option['value']}}" selected="selected">{{$option['text']}}</option>
		@else
		<option value="{{$option['value']}}">{{$option['text']}}</option>
		@endif
	@endforeach
</select>
@error($name)
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror
</div>