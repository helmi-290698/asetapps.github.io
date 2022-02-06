@extends('layouts.main_login')
@section('container')
<div class="accountbg"></div>
<div class="home-btn d-none d-sm-block">
        <a href="/home" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>
<div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                @if (session()->has('gagal'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('gagal') }}
                    </div>
                </div>
                @endif
                {{-- <div class="text-center m-t-0 m-b-15">
                        <a href="/home" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                </div> --}}
                <h5 class="font-18 text-center">Sign in to continue to Hybrid Plus.</h5>

                <form method="post" class="form-horizontal m-t-30" action="/login">
                    @csrf
                    <div class="form-group">
                        <div class="col-12">
                                <label>Email</label>
                            <input class="form-control @error('email') is-invalid  @enderror" type="Email" name="email" required placeholder="name@example.com" value="{{ old('email') }}" autofocus >
                            @error('email')
                            <div class="form-control-feedback mt-2">{{ $message }}.</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                                <label>Password</label>
                            <input class="form-control" name="password" type="password" required placeholder="Password">
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                    <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                          </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group text-center m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit" name="submit">Log In</button>
                        </div>
                    </div>

                    {{-- <div class="form-group row m-t-30 m-b-0">
                        <div class="col-sm-7">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="pages-register.html" class="text-muted">Create an account</a>
                        </div>
                    </div> --}}
                </form>
            </div>

        </div>
    </div>
    
@endsection

    