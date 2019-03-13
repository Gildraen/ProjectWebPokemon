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
            <form class="sign-back" method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Creer un compte</h1>

                <div class="signup-row">
                    <i class="fa fa-user"></i>
                    <input id="name" type="text" placeholder="PSEUDO" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                        value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                </div>
                <div class="signup-row">
                    <i class="fa fa-envelope-o"></i>
                    <input id="email" type="email" placeholder="ADRESSE MAIL" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                </div>

                <div class="signup-row">
                    <i class="fa fa-key"></i>
                    <input id="password" type="password" placeholder="MOT DE PASSE" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required> @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                </div>
                <div class="signup-row">
                    <i class="fa fa-key"></i>
                    <input id="password-confirm" type="password" placeholder="CONFIRMATION" class="form-control" name="password_confirmation"
                        required>
                </div>
                <div class="form-bottom">
                    <div class="form-info">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
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
<script type="text/javascript" src="{{asset('js/register.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<!--         <script src="https://use.fontawesome.com/7dddae9ad9.js"></script> -->
<script type="text/javascript" src="main.js"></script>
<!-- End Scripts -->
@endsection