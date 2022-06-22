@extends('auth.layouts.layout')
@section('conten')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('assets/images/login.png') }}" height="500px"class=""alt="Sample image" />
                </div>

                <div class="col-md-8 text-white col-lg-6 col-xl-4 offset-xl-1 borderlog">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-center text-white fw-bold mx-3 mb-0">Login</h3>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input id="email" type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Email atau Password tidak cocok</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2"type="checkbox"value=""id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">Remember me</label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4">
                            <button
                                type="submit"class="btn btn-lg btnlogin"style="padding-left: 2.5rem; padding-right: 2.5rem">
                                Login
                            </button>

                            <p class="small fw-bold mt-2 pt-1 mb-0"> Don't have an account? <a
                                    href="{{ route('register') }}" class="link-danger">Register</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
