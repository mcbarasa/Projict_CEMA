@include('home.navbar')
<style>
    body {
  background: #f0fbf9;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
  height: 20rem;
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

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
  border-radius: 6px;
  padding: 10px 15px;
  margin-bottom: 15px;
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
#new{
    padding-top: 1.2rem;
    float: right;
    margin-right: 5.2rem;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0" id="new">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
