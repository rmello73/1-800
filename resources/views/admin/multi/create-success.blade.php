@extends('layout.main')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('page-css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; cursor:move; }
#sortable li span { position: absolute; margin-left: -1.3em; }
#sortable li.fixed{cursor:default; color:#959595; opacity:0.5;}
.thumb {
    border: 1px solid #000000;
    height: 150px;
    margin: 10px 5px 0 0;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    2. Enter Basic Info&nbsp;-&nbsp;
                    3. Enter Property Details&nbsp;-&nbsp;
                    4. Add Images & Publish Listing&nbsp;-&nbsp;
                    <font color="red">5. Success!</font>
                </h5>
            </div>
    		<hr>
    		
    		<div class="row">
    				<div class="col-lg-12">
    					<a href="http://1-800.lenoxproperty.com/dashboard/u/posts/multi/intro-info" class="btn btn-primary pull-right">+ Add Property</a></h1>
    				</div>
    		</div>
    		<br />
    			
            <div class="container">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
			
				<p>Congratulations your property listing has been successfully published to 1-800RealEstate.com! Please use the links below to view or edit your property listing.</p>
				<a href="{{ route('single_ad', $ad->slug) }}" target="_blank" class="btn btn-primary pull-right"><p>View Property</p></a>
				<a href="{{ route('edit_ad', $ad->id) }}" class="btn btn-primary pull-right"><p>Edit Property</p></a>
				<p>We also suggest that you link your ad to your social media to get as many eyeballs on it as possible.</p>
        		Share:
        		<a href="http://www.facebook.com/sharer/sharer.php?u=https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}" class="btn btn-default s_facebook" target="_blank"><i
                            class="fa fa-facebook fa-2x"></i> </a> 
             	<a href="http://twitter.com/home?status={{ $ad->title }}:%20https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}" class="btn btn-default s_twitter" target="_blank"><i
                            class="fa fa-twitter fa-2x"></i> </a>
              	<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://1-800.lenoxproperty.com/real-estate/{{ $ad->slug }}&title={{ $ad->title }}"
                            class="btn btn-default share s_linkedin" target="_blank"><i class="fa fa-linkedin fa-2x"></i>
                </a>
        		</div>
        		<div class="col-md-2">&nbsp;</div>
<p>&nbsp;</p>
@endsection

@section('page-js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
$(document).ready(function () {
    $('.sortable-list').sortable({
                  connectWith: '.sortable-list',
                  update: function(event, ui) {
                    var changedList = this.id;
                    var order = $(this).sortable('toArray');
                    var positions = order.join(';');
                    
                    $.ajax({
                        url: '{{ route('upload_ajax_images') }}',
                        type: 'post',
                        data: { order: order },
                        success: function(response){
                            console.log({
                              id: changedList,
                              order: order,
                              positions: positions
                            });
                        }
                    });
                  }
                });
});
</script>

<script>
    $(document).ready(function () {
        $('#photo6').change(function () {
            var files = event.target.files  // FileList Object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function (theFile) {
            return function (e) {
                // Render thumbnail.
                var li = document.createElement('li');
                li.setAttribute("id", escape(theFile.name));
                li.innerHTML = ['<img class="thumb" src="', e.target.result,
                    '" title="', escape(theFile.name), '"/><div class="img-action-wrap" title="', escape(theFile.name), '"><a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a></div>'].join('');
                document.getElementById('img').insertBefore(li, null);
            };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    }

        });
    });
</script>

<script>
$(document).ready(function () {
     $('body').on('click', '.imgDeleteBtn', function(){
                //Get confirm from user
                if ( ! confirm('{{ trans('app.are_you_sure') }}')){
                    return '';
                }

                var current_selector = $(this);
                var media_name = $(this).closest('.img-action-wrap').attr('title');
                console.log(media_name);
                $.ajax({
                    url : '{{ route('delete_ajax_media') }}',
                    type: "POST",
                    data: { media_name : media_name, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            current_selector.closest("li").remove();
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
@endsection