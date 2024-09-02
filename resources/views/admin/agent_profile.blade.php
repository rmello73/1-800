@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">

        <div id="wrapper">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Agent Information </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->

                <div class="row">
                    <div class="col-xs-12">
                        <div class="profile-avatar">
                            <img src="{{ $user->get_photo(150) }}" class="img-thumbnail" />
                        </div>
                        
                        <div class="profile-avatar">
                            <img src="{{ $user->get_agent_logo() }}" class="img-thumbnail" />
                        </div>
                                <p><b>@lang('app.name'):</b>
                                {{ $user->name }}<p>
                                <p><b>@lang('app.email'):</b>
                                {{ $user->email }}<p>
                                <p><b>@lang('app.mobile'):</b>
                                {{ $user->mobile }}<p>
                                <p><b>@lang('app.office'):</b>
                                {{ $user->office }}<p>
                                <p><b>Business Address:</b>
                                {{ $user->baddress }}<p>
                                <p><b>Street Address:</b>
                                {{ $user->saddress }}<p>
                                <p><b>City, State Zip:</b>
                                {{ $user->city }}, {{ $user->state }} {{ $user->zip }}<p>
                                <p><b>Office:</b>
                                {{ $user->office }}<p>
                                <p><b>@lang('app.mobile'):</b>
                                {{ $user->mobile }}<p>
                                <p><b>Fax:</b>
                                {{ $user->fax }}<p>
                                <p><b>Company:</b>
                                {{ $user->company }}<p>
                                <p><b>Title:</b>
                                {{ $user->title }}<p>
                                <p><b>Video Link:</b>
                                <a href="{{ $user->video }}" target="_blank">{{ $user->video }}</a><p>
                                <p><b>@lang('app.website'):</b>
                                <a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a><p>
                                <p><b>About Me:</b>
                                {{ $user->desc }}<p>
                    </div>
                </div>

        </div>   <!-- /#wrapper -->

    </div> <!-- /#container -->
@endsection
