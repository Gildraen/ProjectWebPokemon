@extends('layouts.app') @section('pageTitle', 'Liste Carte Pokemon')
@section('content') @push('css')
<link href="{{ asset('css/pokemon/liste-carte.css') }}" rel="stylesheet">
@endpush

<div id="main-wrapper">

	<div class="block-cards-container">
		<div>
			<a href="{{ url('/pk/li/'. $serie) }}"> Revenir � la liste des sets</a>
		</div>
		<ul class="cards">
			@foreach($cards as $card)
			<li class="card"><a href="{{ url('/pk/li/'. $serie . '/' . $setCode .'/' . $card->getnumber()) }}"> <img alt="" src="{{	$card->getImageUrl()}}">
					</a></li> @endforeach
		</ul>
	</div>
</div>
@endsection
