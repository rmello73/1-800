@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="jumbotron jumbotron-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2>Contact 1-800RealEstate.com</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-3">
                &nbsp;
            </div>

            <div class="col-md-6">

                <form>

                    @if(get_option('site_email_address'))
                        <address>
                            <strong>@lang('app.email')</strong>
                            <a href="mailto:{{ get_option('site_email_address') }}"> {{ get_option('site_email_address') }} </a>
                        </address>
                    @endif

                </form>

                <div class="well well-sm">
                    <form action="" method="post"> @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                    <label for="name">@lang('app.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" value="{{ old('name') }}" required="required" />
                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <label for="email">@lang('app.email')</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required="required" />
                                    {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}" required="required" />
                                    {!! $errors->has('phone')? '<p class="help-block">'.$errors->first('phone').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('message')? 'has-error':'' }}">
                                    <label for="name">@lang('app.message')</label>
                                    <textarea name="message" id="message" class="form-control" required="required" placeholder="@lang('app.message')">{{ old('message') }}</textarea>
                                    {!! $errors->has('message')? '<p class="help-block">'.$errors->first('message').'</p>':'' !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> @lang('app.send_message')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                &nbsp;
            </div>

        </div>
    </div>

@endsection

@section('page-js')


    <script>
        @if(session('success'))
        toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection