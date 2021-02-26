@extends('layouts.app')

@push('header')

@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-lg-4 col-md-5 col-12 mb-4">
			@include('sections.main')
		</div>
		<div class="col-lg-8 col-md-7 col-12">
			@include('sections.studio')
			@include('sections.bio')
			@include('sections.methodology')
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
$('.toggle-collapse').click(function() {
	$(this).siblings('div').toggleClass('collapsed');
});
</script>
@endpush