@extends('layouts.auth')

@section('body')
<div class="text-center mt-4">
    <p class="lead">
        Silakan masuk untuk melanjutkan
    </p>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action="{{ route('auth.sign-in') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror form-control-lg" type="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" />
                    <span class="error invalid-feedback">{{ $errors->first('email') }}</span>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control  @error('password') is-invalid @enderror form-control-lg" type="password" name="password" placeholder="Masukkan password" />
                    <span class="error invalid-feedback">{{ $errors->first('password') }}</span>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-dark">Masuk</button>
                </div>
                <small>
                    <a href="{{ route('register') }}">Buat akun</a>
                </small>
            </form>
        </div>
    </div>
</div>
@endsection
