@extends('layouts.app') @section('pageTitle', 'Liste Carte Pokemon')
@section('content') @push('css')
<link href="{{ asset('css/pokemon/liste-carte-series.css') }}"
	rel="stylesheet">
@endpush

<div id="main-wrapper">
	<div class="block-series-container">
		@foreach($blocks as $block) <a
			href="{{ url('/pk/li/' . $block->id) }}"> {{ $block->name }}</a>
		@endforeach
	</div>
</div>
@endsection
