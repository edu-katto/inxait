@extends('layouts.template')

@section('title') Login @endsection

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('inicio')}}">
                            Subaru Colombia
                        </a>
                        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{route('inicio')}}">
                            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                            Concurso
                        </a>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                @if($errors->any())
                                    <div class="alert alert-danger text-white" role="alert">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Iniciar Sesion</h4>
                                    <p class="mb-0">Ingresa tu correo y contraseña</p>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">
                                        </div>
                                            <div class="mb-3">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar Sesion</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
