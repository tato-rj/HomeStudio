<div class="mb-5">
	@isset($title)
	<h4>{{$title}}</h4>
	@endisset
	
	<div class="{{$collapsible ? 'collapsed' : null}}">
		{{$slot}}
	</div>

	@if($collapsible)
	<p class="text-red cursor-pointer text-right toggle-collapse">read more</p>
	@endif
</div>