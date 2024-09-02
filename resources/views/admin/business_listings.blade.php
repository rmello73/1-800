
@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }} </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>@lang('app.name')</th>
                                <th>Company Name</th>
                                <th>@lang('app.email')</th>
                                <th>@lang('app.created_at')</th>
                                <th>{{ trans('app.action') }}</th>
                            </tr>
                            @foreach($users as $u)
                            <tr>
                                <td>{{ $u->name }}</td>
				                <td>{{ $u->company }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td>

                                    @if($u->id >2)

                                    <a href="javascript:;" class="btn btn-danger blockAdministrator" data-id="{{ $u->id }}" style="display: {{ $u->active_status ==1? '': 'none' }}"><i class="fa fa-ban"></i> </a>
                                    <a href="javascript:;" class="btn btn-success unblockAdministrator" data-id="{{ $u->id }}" style="display: {{ $u->active_status ==1? 'none': '' }}"><i class="fa fa-ban"></i> </a>
                                    @endif

				&nbsp;

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
