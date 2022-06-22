@extends('auth.layouts.layout')
@section('conten')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('assets/images/register.png') }}" class="mb-5" alt="Sample image" />
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 borderlog">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center text-white fw-bold mx-3 mb-0">Daftar</h3>
                        </div>

                        <div class="row text-white">
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Nama Lengkap</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control form-control-md @error('name') is-invalid @enderror"
                                        placeholder="Nama Lengkap" value="{{ old('name') }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example3">Email</label>
                                    <input
                                        id="email"type="email"class="form-control @error('email') is-invalid @enderror"
                                        placeholder="email" name="email" required autocomplete="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example3">Username</label>
                                    <input type="text" id="form3Example3" name="username"
                                        class="form-control form-control-md @error('username') is-invalid @enderror "placeholder="Username"
                                        value="{{ old('username') }}">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" name="password" id="form3Example4"
                                        class="form-control form-control-md @error('password') is-invalid @enderror "
                                        placeholder="Masukkan password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-outline mb-3">
                                    <label class="form-label" for="form3Example4">Confirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="form3Example4"
                                        class="form-control form-control-md" placeholder="Masukkan password" />
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-lg-start text-lg-center">
                            <button type="submit"
                                class="btn btn-lg btnlogin"style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Daftar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0"> Sudah punya akun? <a href="{{ route('login') }}"
                                    class="link-danger">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
