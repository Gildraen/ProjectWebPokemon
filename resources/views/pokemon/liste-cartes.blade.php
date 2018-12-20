@extends('layouts.app') @section('pageTitle', 'Liste Carte Pokemon')
@section('content') @push('css')
<link href="{{ asset('css/pokemon/liste-carte.css') }}" rel="stylesheet">
@endpush

<div id="main-wrapper">

	<div class="block-cards-container">
	<div>
<a href="{{ url('/pk/li/'. $serie) }}"> Revenir à la liste des sets</a>
</div>
	<ul>
		@foreach($cards as $card) <li><a
			href="{{ url('/pk/li/card/' . $card->getid()) }}"> {{
			$card->getName() }}</a></li> @endforeach
			</ul>
	</div>
</div>
@endsection
