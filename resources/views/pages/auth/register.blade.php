@extends('layouts.auth')

@section('body')
<div class="text-center mt-4">
    <p class="lead">
        Silakan membuat akun untuk melanjutkan
    </p>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Masukkan nama lengkap" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input class="form-control form-control-lg" type="password" name="password_confirmation" placeholder="Masukkan ulang password" />
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('dashboard') }}" class="btn btn-lg btn-dark">Buat Akun</a>
                    <!-- <button type="submit" class="btn btn-lg btn-dark">Buat Akun</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
