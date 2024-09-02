@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <legend>Professional Services Directory</legend>
            <p>Contractors</p>
            <p>Events Calendar</p>
            <p>Home Inspectors</p>
            <p>Insurance Agents</p>
            <p>Photography</p>
            <p>Mortgage Brokers</p>
            <p>Real Estate Attorney</p>
            <p>Restaurants</p>
            <p>Videography</p>
            </div>
        </div>
    </div>

@endsection
