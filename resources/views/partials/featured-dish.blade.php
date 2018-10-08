<div class="col-xs-12 col-lg-6 col-md-6 text-center">

	<h4><b>{{ $item->name }}</b></h4>

	@if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

            <img class="img-rounded center-block" src="/img/medium/{{ $item->slug }}.png">

    @endif

		{!! $item->description !!}

	<p>
		<a class="btn btn-default" role="button" data-toggle="modal" data-target="#{{ $item->slug }}">Order now! &raquo;</a>
	</p>

</div>
@include('partials.modal')