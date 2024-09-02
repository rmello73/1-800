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
				<th>Rating User</th>
				<th>Rated User</th>
                                <th>Rating</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>{{ trans('app.action') }}</th>
                            </tr>
                            @foreach($ratings as $u)
                            <tr>
				<td>{{ $u->rateable_id }}</td>
				<td>{{ $u->user_id }}</td>
                                <td>{{ $u->rating }}</td>
                                <td>{{ $u->comment }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td>
					<a href="javascript:;" class="btn btn-danger deletePage" data-id="{{ $u->id }}"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        <b>Active Users:</b><br /><br />

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                            </tr>
                            @foreach($users as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
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
            $('body').on('click', '.btn-danger', function (e) {
                if (!confirm("<?php echo trans('app.are_you_sure') ?>")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var id = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete_rating') }}',
                    data: {id: id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            var options = {closeButton: true};
                            toastr.success(data.msg, '<?php echo trans('app.success') ?>', options)
                        }
                    }
                });
            });
        });
    </script>
@endsection
