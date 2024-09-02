@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <div class="profile-avatar">
                            <p>Profile Photo</p>
                            <img src="{{ $user->get_photo(150) }}" class="img-thumbnail" />
                        </div>
                        
                        <div class="profile-avatar">
                            <p>Profile Logo</p>
                            <img src="{{ $user->get_agent_logo() }}" class="img-thumbnail" />
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Edit</th>
                                <td><a href="{{ route('profile_edit') }}"><i class="fa fa-pencil-square-o"></i> @lang('app.edit') </a></td>
                            </tr>
                            <tr>
                                <th>@lang('app.name')</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.email')</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.mobile') Phone</th>
                                <td>{{ $user->mobile }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.office') Phone</th>
                                <td>{{ $user->office }}</td>
                            </tr>
                            <tr>
                                <th>Street Address</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <th>City, State Zip</th>
                                <td>{{ $user->city }}, {{ $user->state }} {{ $user->zip }}</td>
                            </tr>
                            <tr>
                                <th>Fax</th>
                                <td>{{ $user->fax }}</td>
                            </tr>
                            @if($user->category)
                            <tr>
                                <th>Category</th>
                                <td>{{ ucwords($user->category) }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th>Company</th>
                                <td>{{ $user->company }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $user->title }}</td>
                            </tr>
                            <tr>
                                <th>Video Link</th>
                                <td><a href="{{ $user->video }}" target="_blank">{{ $user->video }}</a></td>
                            </tr>
                            <tr>
                                <th>Video 2 Link</th>
                                <td><a href="{{ $user->video2 }}" target="_blank">{{ $user->video2 }}</a></td>
                            </tr>
                            <tr>
                                <th>Video 3 Link</th>
                                <td><a href="{{ $user->video3 }}" target="_blank">{{ $user->video3 }}</a></td>
                            </tr>
                            <tr>
                                <th>Video 4 Link</th>
                                <td><a href="{{ $user->video4 }}" target="_blank">{{ $user->video4 }}</a></td>
                            </tr>
                            <tr>
                                <th>@lang('app.website')</th>
                                <td>{{ $user->website }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.status')</th>
                                <td>{{ $user->status_context() }}</td>
                            </tr>
			    <tr>
                                <th>About Me</th>
                                <td>{{ $user->description }}</td>
                            </tr>
                            @if($user->mh)
                            <tr>
                                <th>Monday Hours</th>
                                <td>{{ $user->mh }}</td>
                            </tr>
                            @endif
                            @if($user->th)
                            <tr>
                                <th>Tuesday Hours</th>
                                <td>{{ $user->th }}</td>
                            </tr>
                            @endif
                            @if($user->wh)
                            <tr>
                                <th>Wednesday Hours</th>
                                <td>{{ $user->wh }}</td>
                            </tr>
                            @endif
                            @if($user->rh)
                            <tr>
                                <th>Thursday Hours</th>
                                <td>{{ $user->rh }}</td>
                            </tr>
                            @endif
                            @if($user->fh)
                            <tr>
                                <th>Friday Hours</th>
                                <td>{{ $user->fh }}</td>
                            </tr>
                            @endif
                            @if($user->sh)
                            <tr>
                                <th>Saturday Hours</th>
                                <td>{{ $user->sh }}</td>
                            </tr>
                            @endif
                            @if($user->uh)
                            <tr>
                                <th>Sunday</th>
                                <td>{{ $user->uh }}</td>
                            </tr>
                            @endif
                            @if($user->asp)
                            <tr>
                                <th>Specialty 1</th>
                                <td>{{ $user->asp }}</td>
                            </tr>
                            @endif
                            @if($user->asp2)
                            <tr>
                                <th>Specialty 2</th>
                                <td>{{ $user->asp2 }}</td>
                            </tr>
                            @endif
                            @if($user->asp3)
                            <tr>
                                <th>Specialty 3</th>
                                <td>{{ $user->asp3 }}</td>
                            </tr>
                            @endif
                            @if($user->asp4)
                            <tr>
                                <th>Specialty 4</th>
                                <td>{{ $user->asp4 }}</td>
                            </tr>
                            @endif
                            @if($user->asp5)
                            <tr>
                                <th>Specialty 5</th>
                                <td>{{ $user->asp5 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa)
                            <tr>
                                <th>Service Area 1</th>
                                <td>{{ $user->tsa }}</td>
                            </tr>
                            @endif
                            @if($user->tsa2)
                            <tr>
                                <th>Service Area 2</th>
                                <td>{{ $user->tsa2 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa3)
                            <tr>
                                <th>Service Area 3</th>
                                <td>{{ $user->tsa3 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa4)
                            <tr>
                                <th>Service Area 4</th>
                                <td>{{ $user->tsa4 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa5)
                            <tr>
                                <th>Service Area 5</th>
                                <td>{{ $user->tsa5 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa6)
                            <tr>
                                <th>Service Area 6</th>
                                <td>{{ $user->tsa6 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa7)
                            <tr>
                                <th>Service Area 7</th>
                                <td>{{ $user->tsa7 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa8)
                            <tr>
                                <th>Service Area 8</th>
                                <td>{{ $user->tsa8 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa9)
                            <tr>
                                <th>Service Area 9</th>
                                <td>{{ $user->tsa9 }}</td>
                            </tr>
                            @endif
                            @if($user->tsa10)
                            <tr>
                                <th>Service Area 10</th>
                                <td>{{ $user->tsa10 }}</td>
                            </tr>
                            @endif
                            @if($user->twitter)
                            <tr>
                                <th>Twitter</th>
                                <td><a href="{{ $user->twitter }}" target="_blank">{{ $user->twitter }}</a></td>
                            </tr>
                            @endif
                            @if($user->facebook)
                            <tr>
                                <th>Facebook</th>
                                <td><a href="{{ $user->facebook }}" target="_blank">{{ $user->facebook }}</a></td>
                            </tr>
                            @endif
                            @if($user->instagram)
                            <tr>
                                <th>Instagram</th>
                                <td><a href="{{ $user->instagram }}" target="_blank">{{ $user->instagram }}</a></td>
                            </tr>
                            @endif
			                <tr>
                                <th>Edit</th>
                                <td><a href="{{ route('profile_edit') }}"><i class="fa fa-pencil-square-o"></i> @lang('app.edit') </a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('page-js')

@endsection
