@extends('layouts.app') @section('pageTitle', 'Liste Carte Pokemon')
@section('content') @push('css')
<link href="{{ asset('css/pokemon/liste-carte.css') }}" rel="stylesheet">
@endpush

<div id="main-wrapper">

	<div class="block-cards-container">
		<div>
			<a href="{{ url('/pk/li/'. $serie . '/' . $setCode) }}"> Revenir � la liste des cartes</a>
		</div>
		<div>
		<div> <?php var_dump($card)?></div>
		</div>
	</div>
</div>
@endsection
