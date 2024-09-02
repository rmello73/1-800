@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection

@section('page-css')
<link rel="stylesheet" href="http://1-800.lenoxproperty.com/assets/css/bootstrap-3.min.css">
<link href="http://1-800.lenoxproperty.com/assets/css/dropzone.min.css" rel="stylesheet">
@endsection

@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open([ 'route' => [ 'images_store', $ad->id ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}
            <div>
                <h3>Upload / Add Your Images</h3>
            </div>
            
            {!! Form::close() !!}
                        <p>&nbsp;</p>
					<div align="center">
						<a href="{{ url('/dashboard/u/posts/images/') }}/{{ $ad->id }}" class="btn btn-primary">Finished</a>
					</div><br />
					
			<a href="javascript:void(0);" class="btn btn-warning reorder" id="updateReorder">Click here to organize your images.</a>
                <div id="reorder-msg" class="alert alert-warning mt-3" style="display:none;">
                    <i class="fa fa-3x fa-exclamation-triangle float-right"></i><br>1. Drag photos to organize them.<br>2. Click 'Save Reordering' above when finished.
                </div>
                        <!--<div class="form-group {{ $errors->has('images')? 'has-error':'' }}">
                            <div class="col-sm-12">

                                <div class="gallery">
                                    <div id="uploaded-ads-image-wrap">
                                        <ul class="nav nav-pills">
                                        @if($ads_images->count() > 0)
                                        @foreach($ads_images as $img)
                                        <div class="creating-ads-img-wrap">
                                            <li id="image_li_{{ $img->id }}" class="ui-sortable-handle mr-2 mt-2">
                                                <div><a href="javascript:void(0);" class="img-link"><img src="{{ media_url($img, false) }}" class="img-responsive" />
                                                    <div class="img-action-wrap" id="{{ $img->id }}">
                                                        <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                        @endforeach
                                        @else
                                        <p>&nbsp;</p>
                                        <p>No images to show</p>
                                        <p>&nbsp;</p>
                                        @endif
                                        </ul>
                                    </div>
                                </div>
                        </div>-->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="gallery">
            <div id="uploaded-ads-image-wrap">
            <ul class="nav nav-pills">
                @if($ad->media_img->count() > 0)
                    @foreach($ad->media_img as $img)
                    <div class="creating-ads-img-wrap">
                <li id="image_li_{{ $img->id }}" class="ui-sortable-handle mr-2 mt-2">
                    <div><a href="javascript:void(0);" class="img-link"><img src="{{ media_url($img, false) }}"  alt="" class="img-thumbnail" width="200"></a>
                        <div class="img-action-wrap" id="{{ $img->id }}">
                            <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                        </div>
                    </div>
                </li>
                </div>
                    @endforeach
                @endif
            </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-js')
<script>
        $(document).ready(function(){
            $("#images").change(function() {
                var fd = new FormData(document.querySelector("form#adsPostForm"));
                //$('#loadingOverlay').show();
                $('.progress').show();
                $.ajax({
                    url : '{{ route('upload_ads_image') }}',
                    type: "POST",
                    data: fd,

                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                //console.log(percentComplete);

                                var progress_bar = '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: '+percentComplete+'%">'+percentComplete+'% </div>';

                                if (percentComplete === 100) {
                                    $('.progress').hide();
                                }
                            }
                        }, false);

                        return xhr;
                    },

                    cache: false,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,   // tell jQuery not to set contentType
                    success : function (data) {
                        $('#loadingOverlay').hide('slow');
                        if (data.success == 1){
                            $('#uploaded-ads-image-wrap').load('{{ route('append_media_image') }}');
                        } else{
                            toastr.error(data.msg, '<?php echo trans('app.error') ?>', toastr_options);
                        }
                    }
                });
            });


            $('body').on('click', '.imgDeleteBtn', function(){
                //Get confirm from user
                if ( ! confirm('{{ trans('app.are_you_sure') }}')){
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url : '{{ route('delete_media') }}',
                    type: "POST",
                    data: { media_id : img_id, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });
    </script>

<script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function(){
    $('.reorder').on('click',function(){
        $("ul.nav").sortable({ tolerance: 'pointer' });
        $('.reorder').html('Save Reordering');
        $('.reorder').attr("id","updateReorder");
        $('#reorder-msg').slideDown('');
        $('.img-link').attr("href","javascript:;");
        $('.img-link').css("cursor","move");
        $("#updateReorder").click(function( e ){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            if(!$("#updateReorder i").length){
                $(this).html('').prepend('<i class="fa fa-spin fa-spinner"></i>');
                $("ul.nav").sortable('destroy');
                $("#reorder-msg").html( "Reordering Photos - This could take a moment. Please don't navigate away from this page." ).removeClass('light_box').addClass('notice notice_error');

                var h = [];
                $("ul.nav-pills li").each(function() {  h.push($(this).attr('id').substr(9));  });
                console.log(h);
                 
                $.ajax({
                    type: "GET",
                    url: '/reorderimages',
                    data: {_token:"{{csrf_token()}}", ids: "" + h + ""},
                    success: function(data){
                         setTimeout(function(){// wait for 5 secs(2)
                               location.reload(); // then reload the page.(3)
                          }, 2000); 
                    }
                }); 
                return false;
            }       
            e.preventDefault();     
        });
    });
     
    $(function() {
      $("#image-upload").sortable({
        items: '.dz-preview',
        cursor: 'move',
        opacity: 0.5,
        containment: '#image-upload',
        distance: 20,
        tolerance: 'pointer',
      });
 
      $("#image-upload").disableSelection();
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>

<script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
    </script>
@endsection
