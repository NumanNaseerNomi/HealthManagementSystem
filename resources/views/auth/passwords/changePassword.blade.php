@extends('layouts.master-without-nav')

@section('title') {{ __("Change Password") }} @endsection

@section('body')
<body>
@endsection

@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('login') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{ url('/') }}">
                                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="" class="rounded-circle" height="34">
                                </a>
                            </div>
                            <h2 class="text-center">Change Password</h2>
                            <div class="p-2">
                                <form class="form-horizontal mt-4" method="POST" action="{{ url('change-password') }}">
                                    @csrf
                                    @if ($msg = Session::get('error'))
                                        <div class="alert alert-danger">
                                            <span> {{ $msg }} </span>
                                        </div>
                                    @endif

                                    @if ($msg = Session::get('success'))
                                        <div class="alert alert-success">
                                            <span> {{ $msg }} </span>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="oldpassword">{{ __("Current Password ") }}<span
                                            class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" id="oldpassword" placeholder="{{ __("Enter Current password") }}">
                                        @error('oldpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="newpassword">{{ __("New Password ") }}<span
                                            class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="newpassword" placeholder="{{ __("Enter New password") }}">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="userpassword">{{ __("Confirm Password ") }}<span
                                            class="text-danger">*</span></label>
                                        <input type="password" id="userpassword" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __("Enter confirm password") }}">
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-success w-md waves-effect waves-light" type="submit">{{ __("Change Password") }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mt-5 text-center">
                        <p>© {{ date('Y') }} {{ config('app.name'); }}. Crafted with <i class="mdi mdi-heart text-danger"></i> {{ __("by Themesbrand") }}</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
