@extends('layouts.app') @section('pageTitle', 'Liste Carte Pokemon')
@section('content') @push('css')
<link href="{{ asset('css/pokemon/liste-carte-sets.css') }}"
	rel="stylesheet">
@endpush
<div id="main-wrapper">
	<div class="block-sets-container">
		<div>
			<a href="{{ url('/pk/li') }}"> Revenir � la liste des blocks</a>
		</div>
		@foreach($sets as $set) <a
			href="{{ url('/pk/li/' . $serie . '/' . $set->getCode()) }}"> {{
			$set->getName() }}</a> @endforeach
	</div>
</div>
@endsection
