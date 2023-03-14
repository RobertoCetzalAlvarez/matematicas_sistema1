@extends('layouts.app')

@section('content')
<body background="img/pe.jpg" style="background-repeat:no-repeat; background-size: cover;">
<!-- Section: Design Block -->
<!-- <section class="background-radial-gradient overflow-hidden"> -->
  <style>
    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#FFE500, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#FFE500, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-0">
    <div class="row gx-lg-5 align-items-center mb-0">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 100%, 100%)">
          Quiz Matemático <br />
          <span style="color: hsl(220, 100%, 55%)">Pon a prueba tus conocimientos</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 100%, 100%)">
          Defiende a tu equipo con este quiz y ¡Mucha Suerte!
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-header text-center">{{ __('Login') }}</div>
          <div class="card-body px-4 py-5 px-md-5">
          
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="email">{{ __('Correo Electrónico') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Recuérdame') }}
                </label>
              </div>
                
              <div class="text-center">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        {{ __('Acceder') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<!-- Section: Design Block -->
@endsection
