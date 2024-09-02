@extends('layout.main')

@section('main')
<div class="container">

    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">
            
    <div class="row">
        <h2>What kind of residential property are you looking to list for sale?</h2>
        <p><a href="/dashboard/u/posts/multi/create-info?sale_type=Condo">Condo</a></p>
        <p><a href="#">Multi-Family</a></p>
        <p><a href="#">Single-Family</a></p>
    </div>
    <hr />
</div>
<p>&nbsp;</p>
@endsection