@extends('layout.main')

@section('page-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
</style>
@endsection

@section('main')
<div class="container">

    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

    <div class="row" align="center">
        <div class="col-md-1">
            &nbsp;
        </div>
        <div class="col-md-2">
            <h3>Step 1</h3>
            <p>Basic Info</p>
        </div>
        <div class="col-md-2">
            <h3>Step 2</h3>
            <p>Property Details</p>
        </div>
        <div class="col-md-2">
            <h3>Step 3</h3>
            <p>Videos</p>
        </div>
        <div class="col-md-2">
            <h3>Step 4</h3>
            <p>Review Info</p>
        </div>
        <div class="col-md-2">
            <h3><font color="red">Step 5</font></h3>
            <p>Images</p>
        </div>
        <div class="col-md-1">
            &nbsp;
        </div>
    </div>
    <hr>
    <form action="./show-images" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <p>If you're all set, click "Publish Property" to make your property live! Otherwise, click the links below to go back and make any necessary changes.</p>

        <a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="./create-detail" class="btn btn-warning">Back to Step 2</a>
        <a type="button" href="./create-review" class="btn btn-warning">Back to Step 3</a>
        <a type="button" href="./create-images" class="btn btn-warning">Back to Step 4</a>
        <button type="submit" class="btn btn-primary">Publish Property</button>
    </form>
</div>
<p>&nbsp;</p>
@endsection