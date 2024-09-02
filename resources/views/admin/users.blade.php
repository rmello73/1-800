@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Users</h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>{{ trans('app.name') }}</th>
                                <th>{{ trans('app.email') }}</th>
                                <th>{{ trans('app.last_login') }}</th>
                                <th>{{ trans('app.action') }}</th>
                            </tr>
                            @foreach($users as $u)
                            <tr>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->last_login }}</td>
                                <td>
					<a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
					<a href="javascript:;" class="btn btn-danger deletePage" data-slug="{{ $u->slug }}"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->
        </div>   <!-- /#wrapper -->
@endsection

@section('page-js')

    <script type="text/javascript">

        $(document).ready(function() {
            /**
             * Blck User
             */
            $('body').on('click','.blockAdministrator',function (e) {
                e.preventDefault();
                var this_btn = $(this);
                var user_id = this_btn.data('id');
                $.ajax({
                    url: '{{ route('administratorBlockUnblock') }}',
                    type: "POST",
                    data: { user_id : user_id, status : 'block', _token : '{{csrf_token()}}' },
                    success: function (data) {
                        if (data.success == 1) {
                            this_btn.hide();
                            this_btn.closest('tr').find('.unblockAdministrator').show();
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
            $('body').on('click','.unblockAdministrator',function (e) {
                e.preventDefault();
                var this_btn = $(this);
                var user_id = this_btn.data('id');
                $.ajax({
                    url: '{{ route('administratorBlockUnblock') }}',
                    type: "POST",
                    data: { user_id : user_id, status : 'unblock', _token : '{{csrf_token()}}' },
                    success: function (data) {
                        if (data.success == 1) {
                            this_btn.hide();
                            this_btn.closest('tr').find('.blockAdministrator').show();
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });

    </script>

@endsection
