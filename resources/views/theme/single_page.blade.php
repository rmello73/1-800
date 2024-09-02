@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
    <style>
        img {
            width: 100% !important;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_wrapper page-{{ $page->id }}">
                    {!! $page->post_content !!}

                </div>
            </div>
        </div>
@endsection

@section('page-js')
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection