@extends('layout.main')
@section('title') @if( ! empty($title)) Professionals | @endif @parent @endsection

@section('page-css')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" />
@stop


@section('main')

    <div class="container">

        <div id="wrapper">

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Professionals  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')


                <div class="row">
                    <div class="col-xs-12">

                        <table class="table table-bordered table-striped" id="jDataTable">
                            <thead>
                                <tr>
                                    <th>@lang('app.name')</th>
                                    <th>@lang('app.email')</th>
                                    <th>@lang('app.created_at')</th>
                                </tr>
                            </thead>

                        </table>

                    </div>
                </div>




            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#jDataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('get_prof_data') }}',
                "aaSorting": []
            });

            $(document).on('click','.agent-feature-btn', function(){
                var user_id = $(this).data('user-id');
                $that = $(this);
                $.ajax({
                    type : 'POST',
                    url : '{{ route('change_user_feature') }}',
                    data: { user_id : user_id, _token : '{{csrf_token()}}' },
                    success : function(data){
                        $that.html(data);
                    }
                });
            });

        });
    </script>
@endsection
