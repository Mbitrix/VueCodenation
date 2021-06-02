<div class="form-group col">
	<label>{{$label}}</label>
@foreach($options as $option)
<div class="form-check">
		@if(old($name) == $option['value'] || $option['selected'] ==true)
		<input class="form-check-input @error($name) is-invalid @enderror" type="radio" name="{{$name}}" id="{{$id}}" value="{{$option['value']}}">
		@else
		<input class="form-check-input @error($name) is-invalid @enderror" type="radio" name="{{$name}}" id="{{$id}}" value="{{$option['value']}}">
		@endif
		<label class="form-check-label" for="{{$id}}">
		   {{$option['text']}}
		 </label>
		</div>
	@endforeach

@error($name)
<span class="invalid-feedback" role="alert">
	<strong>{{ $message }}</strong>
</span>
@enderror
</div>