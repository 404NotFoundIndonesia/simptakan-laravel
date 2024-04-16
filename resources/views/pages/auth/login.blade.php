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
            <form>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('dashboard') }}" class="btn btn-lg btn-dark">Masuk</a>
                    <!-- <button type="submit" class="btn btn-lg btn-dark">Masuk</button> -->
                </div>
                <small>
                    <a href="{{ route('auth.register') }}">Buat akun</a>
                </small>
            </form>
        </div>
    </div>
</div>
@endsection
