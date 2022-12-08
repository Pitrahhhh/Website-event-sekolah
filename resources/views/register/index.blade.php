@extends('layouts/main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
         <h1 class="h3 mb-3 fw-normal text-white text-center">Daftar Akun</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Nama Pengguna</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
              
                <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Alamat Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Kata Sandi</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="checkbox mb-3">
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">DAFTAR</button>
            </form>
            <small class="d-block text-center text-white mt-3">Sudah Punya Akun? <strong><a href="/login" class="text-decoratiom-none text-white">Masuk</a></strong></small>
        </main>
    </div>
</div>



@endsection