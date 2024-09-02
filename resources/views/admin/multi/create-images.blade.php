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
                    <font color="red">4. Add Images & Publish Listing&nbsp;-&nbsp;</font>
                    5. Success!
                </h5>
            </div>
    <hr>
            <div class="container">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-10" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
    {{ Form::open(['id'=>'adsPostForm', 'class' => 'form-horizontal',
					'files' => true]) }}
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
        <legend>Upload Your @lang('app.image')s</legend>
                        
                        <div class="form-group  {{ $errors->has('photo6')? 'has-error':'' }}">
                            <div class="col-sm-8">
                                <div class="file-upload-wrap">
                                    <label>
                                        <input type="file" name="photo6[]" id="photo6" style="display: none;" multiple />
                                        <i class="fa fa-plus"></i>
                                        <p>@lang('app.upload_image')s by Clicking Here</p>
                                    </label>
                                </div>
                                {!! $errors->has('photo6')? '<p class="help-block">'.$errors->first('photo6').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <br />
                        <div class="row">
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                        <ul id="img" class="sortable-list nav nav-pills"></ul>
                                </div>
                            </div>
                        </div>
                        
                        <legend>Property Documents</legend>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group  {{ $errors->has('company_pdf')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf" name="company_pdf" class="filestyle" placeholder="{{ $ad->company_pdf }}" >
                                        {!! $errors->has('company_pdf')? '<p class="help-block">'.$errors->first('company_pdf').'</p>':'' !!}
                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title')? 'has-error':'' }}">
                                    <label for="pdf_title" class="col-sm-4 control-label">PDF Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title" class="form-control" id="pdf_title" value="{{ $ad->pdf_title }}" name="pdf_title" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title')? '<p class="help-block">'.$errors->first('pdf_title').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group  {{ $errors->has('company_pdf2')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf2" name="company_pdf2" class="filestyle" placeholder="{{ $ad->company_pdf2 }}" >
                                        {!! $errors->has('company_pdf2')? '<p class="help-block">'.$errors->first('company_pdf2').'</p>':'' !!}
                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title2')? 'has-error':'' }}">
                                    <label for="pdf_title2" class="col-sm-4 control-label">PDF Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title2" class="form-control" id="pdf_title2" value="{{ $ad->pdf_title2 }}" name="pdf_title2" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title2')? '<p class="help-block">'.$errors->first('pdf_title2').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">    
                                <div class="form-group  {{ $errors->has('company_pdf3')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf3" name="company_pdf3" class="filestyle" placeholder="{{ $ad->company_pdf3 }}" >
                                        {!! $errors->has('company_pdf3')? '<p class="help-block">'.$errors->first('company_pdf3').'</p>':'' !!}
                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title3')? 'has-error':'' }}">
                                    <label for="pdf_title3" class="col-sm-4 control-label">PDF Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title3" class="form-control" id="pdf_title3" value="{{ $ad->pdf_title3 }}" name="pdf_title3" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title3')? '<p class="help-block">'.$errors->first('pdf_title3').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <p>&nbsp;</p>
                        <p>Once you're all set selecting your images and files, click "Publish Listing" to make your property live! Otherwise, click the links below to go back and make any necessary changes.</p>

        <a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="./create-detail" class="btn btn-warning">Back to Step 2</a>
        <button type="submit" class="btn btn-primary">Publish Listing</button>
    {{ Form::close() }}
        </div>
        <div class="col-md-1">&nbsp;</div>
    <br />
<p>&nbsp;</p>
</div>
</div>
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