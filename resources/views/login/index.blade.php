@extends('template.dashboard-master')

@section('content-master')

    <div class="container">

        <div class="row">
            <div class="col-xs-12">

                <div id="login-box">
                    <div id="login-box-holder">

                        <div class="row">
                            <div class="col-xs-12">

                                <header id="login-header">
                                    <div id="login-logo" style="padding: 25px 0;">
                                        <img src="{{ url('cube/img/logo.png') }}" alt=""/>
                                    </div>
                                </header>

                                <div id="login-box-inner">

                                    @include('template.notification')

                                    {!! Form::open(['url' => route('login-validate'), 'id'=>'formValida']) !!}

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" data-toggle="tooltip type="text" name="email" id="email" value="{{ old('email', session('email')) }}" placeholder="E-mail">
                                        </div>
                                        
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" value="{{ old('senha', session('senha')) }}" name="senha" placeholder="Senha">
                                        </div>
                                        <div id="remember-me-wrapper">
                                            <div class="row">
                                                <a href="{{ route('login-pass-reset') }}" id="login-forget-link" class="col-xs-12">
                                                    Esqueceu a senha?
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button type="submit" id="submit" class="btn btn-success col-xs-12">
                                                    Login
                                                </button>
                                            </div>
                                        </div><br />

                                    {!! Form::close() !!}
                                    
                                    <div class="row">
                                        <div class="col-xs-12" id="login-forget-link">
                                           
                                        </div>
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

@section('script')

    <!-- <script src="{{ url('js/autenticacao/login.js') }}"></script> -->

@endsection