@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  <a href="{{ route('create_new_page') }}" class="btn btn-info pull-right"><i class="fa fa-user-plus"></i> {{ trans('app.create_new_page') }}</a> </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>{{ trans('app.title') }}</th>
				<th>Author</th>
                                <th>{{ trans('app.created_at') }}</th>
				<th>Actions</th>
                            </tr>
                            @foreach($pages as $u)
                            <tr>
                                <td>{{ $u->title }}</td>
				<td>{{ $u->user_id }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td>
					<a href="{{ route('edit_page',$u->slug) }}" class="btn btn-primary"><i class="fa fa-edit"></i> </a><a href="javascript:;" class="btn btn-danger deletePage" data-slug="{{ $u->slug }}"><i class="fa fa-trash"></i> </a>
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
                var slug = $(this).data('slug');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete_page') }}',
                    data: {slug: slug, _token: '{{ csrf_token() }}'},
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
