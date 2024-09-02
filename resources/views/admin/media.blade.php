@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection 
@section('page-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; cursor:move; }
#sortable li span { position: absolute; margin-left: -1.3em; }
#sortable li.fixed{cursor:default; color:#959595; opacity:0.5;}
</style>
@endsection

@section('main')
	<div id="wrapper">

		@include('admin.sidebar_menu')

		<div id="page-wrapper">
			@if( ! empty($title))
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">{{ $title }}</h1>
				</div>
			</div>
			
			<div class="container pakainfo">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div> 
                @endif
                <h3 class="well">Laravel 5.6 Multiple File Upload</h3>
                <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="input-group members control-group pakainfo increment" >
                      <input type="file" name="liveimgname[]" class="liveForm form-control">
                      <div class="input-group-btn"> 
                        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                      </div>
                    </div>
                    <div class="clone hide">
                      <div class="members control-group pakainfo input-group" style="margin-top:10px">
                        <input type="file" name="liveimgname[]" class="liveForm form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                </form>        
                </div>
		</div>
	</div>
@endsection

@section('page-js')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var paramval = $(".clone").html();
          $(".increment").after(paramval);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".members control-group pakainfo").remove();
      });
    });
</script>
@endsection