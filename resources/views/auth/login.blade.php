@extends('layouts.appmodif') 
@section('pageTitle', 'Page Title') 
@section('content') @push('css')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
@endpush

<!-- Start Main Container -->
<div class="main-container">
	<!-- Start Pokemon Ball Top Part -->
	<div class="pokemon-top-part"></div>
	<!-- End Pokemon Ball Top Part -->
	<!-- Start Main Forms -->
	<div class="main-forms">
		<div class="signup-form">
			<form class="sign-back" method="POST" action="{{ route('login') }}">
				@csrf
				<h1>Me connecter</h1>
				<div class="signup-row">
					<i class="fa fa-user"></i> <input id="email" type="email" placeholder="IDENTIFIANT" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
					 name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email')) <span class="invalid-feedback"
					 role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span> @endif
				</div>

				<div class="signup-row">
					<input id="password" type="password" placeholder="MOT DE PASSE" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
					 name="password" required> @if ($errors->has('password')) <span class="invalid-feedback" role="alert"> <strong>{{
							$errors->first('password') }}</strong>
					</span> @endif
				</div>

				<div class="form-bottom">
					<div class="form-info">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">						<label class="form-check-label" for="remember"> {{ __('Memoriser') }} </label>
					</div>
					<div class="form-info">
						<a class="btn btn-link" href="{{ route('password.request') }}"> {{
							__('Mot de passe oublié ?') }} </a>
					</div>
					<div class="form-info">
						<button type="submit" class="btn btn-primary">{{ __('Connexion')
							}}</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- End Main Forms -->
	<!-- Start Pokemon Ball Bottom Part -->
	<div class="pokemon-bottom-part">
		<div class="white-part"></div>
		<div class="black-line"></div>
	</div>
	<!-- End Pokemon Ball Bottom Part -->
</div>
<!-- End Main Container -->
<!-- Start Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/login.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<!--         <script src="https://use.fontawesome.com/7dddae9ad9.js"></script> -->
<!--         <script type="text/javascript" src="main.js"></script> -->
<!-- End Scripts -->
@endsection