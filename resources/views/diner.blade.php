@extends('layouts.diner-layout')

@section('content')
<div id="diner">

	<div class="col-xs-12">

			@include('partials.jumbotron')
		
		<h3 class="text-left">Today's Specials</h3>

		<div class="row" style="height:100%;">

			<div class="col-xs-12 col-md-6 col-lg-6">

			@foreach ($featuredItems as $item)

				@include('partials.featured-dish')

			@endforeach

			</div>

		</div>

	</div>
<hr>

</div>

@endsection