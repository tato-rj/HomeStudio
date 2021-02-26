<div class="col-lg-3 col-md-6 col-6 p-2">
	@isset($image)
		<img class="w-100 shadow rounded" src="{{asset('images/'.$image.'.jpg')}}">
	@endisset

	@isset($video)
		<iframe class="w-100 shadow rounded" src="https://www.youtube.com/embed/{{$video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	@endisset
</div>