@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection 
@section('page-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; cursor:move; }
#sortable li span { position: absolute; margin-left: -1.3em; }
#sortable li.fixed{cursor:default; color:#959595; opacity:0.5;}
</style>
@endsection

@section('main')
    <div id="wrapper">
        @include('admin.sidebar_menu')
        <div id="page-wrapper">
            <div class="panel panel-default">
              <div class="panel-heading">
              <h1>Property & User Import / Export Utility</h1>
              </div>
              <div class="panel-body">

                  <div class="card bg-light mt-3">
                      <div class="card-body">
                          <form action="{{ route('importAds') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="file" name="file" class="form-control">
                              	<br>
                              	<button class="btn btn-success">Import Properties</button>
                              	<a class="btn btn-warning" href="{{ route('exportAds') }}">Export Properties</a>
                          </form>
                      </div>
                  </div>

              </div>
		<div class="panel-body">

                  <div class="card bg-light mt-3">
                      <div class="card-body">
                          <form action="{{ route('importUsers') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="file" name="file" class="form-control">
                                <br>
                                <button class="btn btn-success">Import Users</button>
                                <a class="btn btn-warning" href="{{ route('exportUsers') }}">Export Users</a>
                          </form>
                      </div>
                  </div>

              </div>

            </div>
        </div>
    </div>
@endsection
