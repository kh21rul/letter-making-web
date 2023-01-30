@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-3">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Form Pendaftaran</h1>
            <form>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah Mempunyai Akun? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection