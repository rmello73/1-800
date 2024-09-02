@extends('layout.main')
@section('title') Register | @parent @endsection
@section('main')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <div class="login">
                    <h3 class="authTitle"><a href="{{ route('user.create') }}"><button class="btn btn-lg btn-primary btn-block">Already Registered? Login</button></a></h3>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    {{ Form::open(['route'=>'user.store', 'role'=> 'form']) }}
                    
                    <p>Fill out the form below so that you can post your properties, advertise your business or save properties that you are looking to either buy or lease.</p>
                    
                    <h3 align="center">Fill out the form below to sign up!</h3><br />
                    <b>All fields are required.</b><br />
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('first_name')? 'has-error':'' }} ">
                                * <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" placeholder="First Name" tabindex="1">

                                {!! $errors->has('first_name')? '<p class="help-block">'.$errors->first('first_name').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('last_name')? 'has-error':'' }} ">
                                * <input type="text" name="last_name" id="last_name" class="form-control"  value="{{ old('last_name') }}" placeholder="Last Name" tabindex="2">
                                {!! $errors->has('last_name')? '<p class="help-block">'.$errors->first('last_name').'</p>':'' !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                                * <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email Address" tabindex="3"> 
                                {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('password_confirmation')? 'has-error':'' }}">
                                * <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}" placeholder="Mobile Phone" tabindex="4">
                                {!! $errors->has('mobile')? '<p class="help-block">'.$errors->first('mobile').'</p>':'' !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                                * <input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="5">
                                {!! $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':'' !!}

                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('password_confirmation')? 'has-error':'' }}">
                                * <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation" tabindex="6">
                                {!! $errors->has('password_confirmation')? '<p class="help-block">'.$errors->first('password_confirmation').'</p>':'' !!}

                            </div>
                        </div>
                    </div>
                    <div class="row  {{ $errors->has('agree')? 'has-error':'' }}">
                        <div class="col-xs-4 col-sm-4 col-md-4">
					<span class="button-checkbox">
						* <label><input type="checkbox" name="agree" value="1" tabindex="7" /> I Agree </label>
					</span>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            By clicking Register you agree to our <a href="{{ route('single_page', 'terms-and-conditions') }}" target="_blank">Terms and Conditions</a> and our <a href="{{ route('single_page', 'privacy-policy') }}" target="_blank">Privacy Policy</a>.  You also acknowledge that you are authorized to post the information, photos and videos.  If you are not and found guilty of posting fraudulent information you will prosecuted to the full extent of the law. 
                        </div>

                        <div class="col-sm-12">
                            {!! $errors->has('agree')? '<p class="help-block">You must agree with the terms and conditions.</p>':'' !!}
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-xs-12"><input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="19"></div>
                    </div>
                    </div>
                    {{ Form::close() }}
                </div>   
            </div>
        </div>
@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $('#phone').keyup(function(){
                $(this).val($(this).val().replace(/[^0-9]/g,""));
            });
        });

    </script>
@endsection
