@extends('layout.main')
@section('title') Log-In | @parent @endsection

@section('main')

    <div class="container">
        <div class="row">

        <h1 align="center">Login using your sign up information for testing!!!</h1>
        <p align="center"> Typically, you would need to authenticate via email.</p>

            <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                <div class="login">

                    @if(session('registration_success'))
                        <div class="alert alert-success">{!! session('registration_success') !!}</div>
                    @endif

                    <h3 class="authTitle"><a href="https://1-800.lenoxproperty.com/user/create" target="_self"><button class="btn btn-lg btn-primary btn-block">Not Registered? Sign-Up</button></a></h3>

                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">

                            <form action="" class="loginForm" method="post" autocomplete="off"> @csrf

                                <div class="input-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email address">

                                </div>
                                {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                <span class="help-block"></span>

                                <div class="input-group {{ $errors->has('password')? 'has-error':'' }}">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                {!! $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':'' !!}

                                <span class="help-block"></span>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me">Remember Me
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <p class="forgotPassword">
                                    <a href="#" data-toggle="modal" data-target="#forgotPasswordEmail"> @lang('app.forgot_password')</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="forgotPasswordEmail" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('send_reset_link')}}" method="post"> @csrf

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">@lang('app.enter_email_to_reset_password')</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="email" class="control-label">@lang('app.email'):</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div id="email_info"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('app.close')</button>
                        <button type="submit" class="btn btn-primary" id="send_reset_link">@lang('app.send_reset_link')</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('page-js')
    <script>
        var options = {closeButton : true};
        @if(session('error'))
        toastr.error('{{ session('error') }}', 'Error!', options)
        @endif
    </script>
@endsection
