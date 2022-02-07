@extends('layouts.login')

@section('title','Login')

@section('content')

    <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Login / Register</h2>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li class="active">Login / Register</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login-register-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            {{--                            login--}}
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{route('signIn')}}" method="post">
                                            @csrf
                                            <input type="text" name="email" placeholder="email">
                                            @error('email')
                                            <span class="ui-state-error-text">{{$message}}</span>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{--                            register--}}
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{route('signUp')}}" method="POST">
                                            @csrf
                                            <input name="name" placeholder="Name" type="name">
                                            @error('name')
                                            <span class="ui-state-error-text">{{$message}}</span>
                                            @enderror

                                            <input name="email" placeholder="Email" type="email">

                                            @error('email')
                                            <span class="ui-state-error-text">{{$message}}</span>
                                            @enderror

                                            <input type="password" name="password" placeholder="Password">
                                            @error('password')
                                            <span class="ui-state-error-text">{{$message}}</span>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
