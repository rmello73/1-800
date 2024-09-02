@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" />
@stop


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

                        <table class="table table-bordered table-striped" id="jDataTable">
                            <thead>
                                <tr>
                                    <th>Rated User</th>
                                    <th>Rating User</th>
                                    <th>Rating</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        </table>

                    </div>
                </div>




            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->
@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#jDataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('get_ratings_data') }}',
                "aaSorting": []
            });

            $(document).on('click','.rating-delete-btn', function(){
                var id = $(this).data('rating-id');
                $that = $(this);
                $.ajax({
                    type : 'POST',
                    url : '{{ route('delete_rating') }}',
                    data: { id : id, _token : '{{csrf_token()}}' },
                    success : function(data){
                        $that.html(data);
                    }
                });
            });

        });
    </script>
@endsection
