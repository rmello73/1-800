@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">
        <div id="wrapper">
            <legend>Agent Information</legend>
        </div>   <!-- /#wrapper -->
    </div> <!-- /#container -->
@endsection
