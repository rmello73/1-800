@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <legend>Service Category</legend>
            <p>Contractors</p>
            </div>
        </div>
    </div>

@endsection
