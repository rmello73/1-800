@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}</h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Name</th>
				<th>E-mail</th>
				<th>Phone</th>
                                <th>Message</th>
                                <th>Property</th>
				<th>Created At</th>
				<th>Actions</th>
                            </tr>
                            @foreach($contact_messages as $u)
                            <tr>
                                <td>{{ $u->name }}</td>
				<td>{{ $u->email }}</td>
				<td>{{ $u->phone_number }}</td>
                                <td>{{ $u->message }}</td>
                                <td><a href="{{ route('single_ad', $u->slug ?? '') }}" target="_blank">@if( $u->ad_id != 0 ){{ $u->ad_id }}@endif</a></td>
				<td>{{ $u->created_at }}</td>
                                <td>
					<a href="javascript:;" class="btn btn-danger deletePage" data-id="{{ $u->id }}"><i class="fa fa-trash"></i> </a>
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
<script>
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
                    url: '{{ route('delete_contact') }}',
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
