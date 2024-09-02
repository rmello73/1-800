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

                        <div id="return_msg"></div>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>@lang('app.account_status')</th>
                                <td>
                                    <label>
                                        <input type="radio" name="account_status" value="1" data-user-id="{{$user->id}}" @if($user->active_status == '1') checked="checked" @endif />
                                        @lang('app.active')
                                    </label>

                                    <label>
                                        <input type="radio" name="account_status" value="2" data-user-id="{{$user->id}}" @if($user->active_status == '2') checked="checked" @endif />
                                        @lang('app.block')
                                    </label>
                                </td>
                            </tr>
                            @if($lUser->is_admin())
                            <tr>
                                <th>Edit</th>
                                <td><a href="http://1-800.lenoxproperty.com/dashboard/user/edit/{{ $user->id }}"><i class="fa fa-pencil-square-o"></i> @lang('app.edit') </a></td>
                            </tr>
                            @endif
                            <tr>
                                <th>@lang('app.name')</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Business Address</th>
                                <td>{{ $user->baddress }}</td>
                            </tr>
                            <tr>
                                <th>Street Address</th>
                                <td>{{ $user->saddress }}</td>
                            </tr>
                            <tr>
                                <th>City, State Zip</th>
                                <td>{{ $user->city }}, {{ $user->state }} {{ $user->zip }}</td>
                            </tr>
                            <tr>
                                <th>Office</th>
                                <td>{{ $user->office }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.mobile')</th>
                                <td>{{ $user->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Fax</th>
                                <td>{{ $user->fax }}</td>
                            </tr>
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
                                <td><a href="{{ $user->video }}" target="_blank">{{ $user->video }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.email')</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>@lang('app.status')</th>
                                <td>{{ $user->status_context() }}</td>
                            </tr>
                            @if($lUser->is_admin())
                            <tr>
                                <th>Edit</th>
                                <td><a href="http://1-800.lenoxproperty.com/dashboard/user/edit/{{ $user->id }}"><i class="fa fa-pencil-square-o"></i> @lang('app.edit') </a></td>
                            </tr>
                            @endif
                        </table>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->
@endsection

@section('page-js')

    <script>

        $(function(){
            $(document).on('click','[name="account_status"]', function(){
                var user_id = $(this).data('user-id');
                var status = $(this).val();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('change_user_status') }}',
                    data: { user_id : user_id, status : status, _token : '{{csrf_token()}}' },
                    success : function(data){
                        $('#return_msg').html(data);
                    }
                });
            });
        })
    </script>



@endsection