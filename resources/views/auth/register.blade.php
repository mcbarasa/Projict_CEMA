 @include('home.navbar')
 <style>
    body {
  background: #f0fbf9;
}

.container {
  padding-top: 80px;
  justify-content: center;
  display: flex;
}

.card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
  height: 25rem;
  width: 29rem;
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
  transition: border-color 0.3s ease;
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

@media (max-width: 576px) {
  .card-body {
    padding: 20px;
  }

  .form-label {
    text-align: left !important;
  }
}
#one, #two,#three, #four{
    padding-bottom: 16px;
}
#left{
    float: right;
    margin-right: 7rem;
}

 </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3" id="one">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="two">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="three">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" id="four">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0" id="left">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- @include('home.footer') -->
