@extends('layouts.form')

@section('title', 'Registro')

@section('content')
<!-- Left Text-->
<div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
    <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('images/pages/register-v2-dark.svg') }}" alt="Register V2" /></div>
</div>
<!-- /Left Text-->
<!-- Register-->
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title font-weight-bold mb-1">Todo comienza aquí 🚀</h2>
        <p class="card-text mb-2">Ingrese sus datos para registrarse.</p>
        <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <div class="alert-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info mr-50 align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    <span>The value is <strong>invalid</strong>. {{ $errors->first() }}</span>
                </div>
            </div>
            @endif
            <div class="form-group">
                <label class="form-label" for="register-username">Usuario</label>
                <input class="form-control" id="register-username" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" aria-describedby="register-username" autofocus="" tabindex="1" required/>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Correo Electrónico</label>
                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" required/>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="register-password" tabindex="3" required/>
                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password2">Confirmar Contraseña</label>
                <div class="input-group input-group-merge form-password-toggle">
                    <input class="form-control form-control-merge" id="password2" type="password" name="password_confirmation" placeholder="············" aria-describedby="register-password" tabindex="3" required/>
                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block" tabindex="5">Confirmar Registro</button>
        </form>
        <p class="text-center mt-2"><span>¿Ya tiene una cuenta?</span><a href="page-auth-login-v2.html"><span>&nbsp;Ingresar</span></a></p>
        <div class="divider my-2">
            <div class="divider-text">o</div>
        </div>
        <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>
    </div>
</div>
<!-- /Register-->
@endsection
