@include('home.navbar')
<style>
body {
  background: #f0fbf9;
}

.container {
  padding-top: 80px;
  display: flex;
  justify-content: center;
}

.card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
  width: 29rem;
  height: 23rem;
}
#email{
  margin-bottom: 1.2rem;
}
#sty{
  margin-right: 15rem;
}
#remember{
  height: 1rem;
}
.card-header {
  background-color: #379683;
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  text-align: center;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  padding: 16px;
}

.card-body {
  padding: 30px;
}

.form-label {
  font-weight: 500;
  color: #05386b;
}

.form-control {
  border-radius: 6px;
  padding: 10px 12px;
  border: 1px solid #ced4da;
  transition: border-color 0.3s;
}

.form-control:focus {
  border-color: #379683;
  box-shadow: 0 0 0 0.2rem rgba(55, 150, 131, 0.25);
}

.invalid-feedback {
  color: #e63946;
  font-size: 0.9rem;
}

.btn-primary {
  background-color: #379683;
  border-color: #379683;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 6px;
}

.btn-primary:hover {
  cursor: pointer;
  background-color: #2d7a6a;
  border-color: #2d7a6a;
}

.btn-link {
  color: #05386b;
  font-size: 0.9rem;
}

.btn-link:hover {
  color: #379683;
  text-decoration: underline;
}

.form-check-label {
  font-size: 0.9rem;
  color: #333;
}
.form-check{
  margin-top: 14px;
  display: flex;
}
#log{
  margin-top: 1.2rem;
  margin-left: 7rem;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" id="email">{{ __('Email Address:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" id="password">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" id="sty">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4" id="log">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- @include('home.footer') -->
