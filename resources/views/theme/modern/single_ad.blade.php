@extends('layout.main') @section('title') @if( ! empty($title)) {{
$title }} | @endif @parent @endsection @section('social-meta')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="{{ $ad->title }}">
<meta property="og:description"
	content="{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}">
@if($ad->media_img->first())
<meta property="og:image"
	content="{{ media_url($ad->media_img->first(), true) }}">
@else
<meta property="og:image"
	content="{{ asset('uploads/placeholder.png') }}">
@endif
<meta property="og:url" content="{{ route('single_ad', $ad->slug) }}">
<meta name="twitter:card" content="summary_large_image">
<!--  Non-Essential, But Recommended -->
<meta name="og:site_name" content="{{ get_option('site_name') }}">
@endsection @section('page-css')
<style>
/*
    Theme Name: OnePage
    Theme URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
*/
/* ==== Google font ==== */
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,700,900);
@import url('https://fonts.googleapis.com/css?family=Ek+Mukta:400,600,700');
body {
    background-color: #f3f2f3;
}
.navbar-default {
    background-color: #ffffff !important;
}
.portfolio-items,
.portfolio-filter {
  list-style: none outside none;
  margin: 0 0 40px 0;
  padding: 0;
}

.portfolio-filter > li {
  display: inline-block;
}

.portfolio-filter > li a {
  background: none repeat scroll 0 0 #FFFFFF;
  font-size: 14px;
  font-weight: 400;
  margin-right: 20px;
  text-transform: uppercase;
  transition: all 0.9s ease 0s;
  -moz-transition: all 0.9s ease 0s;
  -webkit-transition: all 0.9s ease 0s;
  -o-transition: all 0.9s ease 0s;
  border: 1px solid #F2F2F2;
  outline: none;
  border-radius: 0;
}

.portfolio-filter > li a:hover,
.portfolio-filter > li a.active{
  color:#fff;
  background: #2487cd ;
  border: 1px solid #2487cd ;
  box-shadow: none;
  -webkit-box-shadow: none;
}

.portfolio-items > li {
  float: left;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.portfolio-item {
  margin: 0;
  padding:0;
}

.recent-work-wrap {
  position: relative;
}

.recent-work-wrap img{
  width: 100%;
  height: auto;
}

.recent-work-wrap .recent-work-inner{
  top: 0;
  background: transparent;
  opacity: .8;
  width: 100%;
  border-radius: 0;
  margin-bottom: 0;
}

.recent-work-wrap .recent-work-inner h3{
  margin: 10px 0;
}

.recent-work-wrap .recent-work-inner h3 a{
  font-size: 24px;
  color: #fff;
}

.recent-work-wrap .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  border-radius: 0;
  background: #333;
  color: #fff;
  vertical-align: middle;
  -webkit-transition: opacity 500ms;
  -moz-transition: opacity 500ms;
  -o-transition: opacity 500ms;
  transition: opacity 500ms;
  padding: 30px;
}

.recent-work-wrap .overlay .preview {
  bottom: 0;
  display: inline-block;
  height: 35px;
  line-height: 35px;
  border-radius: 0;
  background: transparent;
  text-align: center;
  color: #fff;
}

.recent-work-wrap:hover .overlay {
  opacity: 1;
}

.big-box,
.mini-box {
    background-color: #10BCFF;
    color: white;
    text-align: center;
    margin: 2px;
    font-size: 1.5em;
}
.big-box {
    background-color: #10BCFF;
    width:100%;
    height: 412px;
    line-height: 65px;
}
.mini-box {
    line-height: 30px;
}
.tall {
  height: 400px;
  border-radius: 25px;
  border: 1px solid #ececec;
  padding: 10px;
}
.listing-contact {
  height: 570px;
  border-radius: 25px;
  border: 1px solid #ececec;
  padding: 10px;
}
.tenant-info {
  height: 320px;
  border-radius: 25px;
  border: 1px solid #ececec;
  padding: 10px;
}

.home-improvement-pros {
  height: 19px;
  font-family: Roboto;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #25357f;
  text-align: center;
}
.prof-services {
  font-family: OpenSans;
  font-size: 13px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #25357f;
}
.cost {
  height: 32px;
  font-family: Roboto;
  font-size: 24px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.schedule-button {
  border-radius: 4px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
  background-color: #454fbc;
}
.schedule-meeting {
  object-fit: contain;
  font-family: Roboto;
  font-size: 18px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
}
.description-header {
  height: 26px;
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.description-text {
  font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.63;
  letter-spacing: normal;
  color: #000000;
}
.location-header {
  height: 26px;
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.neighborhood-header {
  height: 26px;
  font-family: Roboto;
  font-size: 20px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.movie {
  height: 386px;
  border: solid 1px #979797;
  background-color: #d8d8d8;
}
.please-note {
  font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.63;
  letter-spacing: normal;
  color: #000000;
}
.address {
  font-family: Roboto;
  font-size: 30px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
}
.divider {
  width: 100%;
  border: solid 1px #ececec;
}
.header {
  font-family: josefin sans,sans-serif;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
  font-size: 18px;
  line-height: 1.33em;
}
.small-info {
  font-family: Roboto;
  font-size: 11px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #929292;
}
.top-details {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 10px;
  padding-bottom: 15px;
}
.top-rectangle {
  border-radius: 5px;
  box-shadow: 0 6px 30px 0 rgba(211, 211, 211, 0.5);
  background-color: #ffffff;
  padding-top: 15px !important;
  padding-bottom: 15px;
}
.left-pane {
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 1px 30px 0 #dfdfdf;
  background-color: #ffffff;
  box-model: border-box;
  border: 10px solid #ffffff;
  background-clip:padding-box;
  padding: 10px;
}
.right-pane {
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 3px 15px 0 rgba(198, 198, 198, 0.5);
  background-color: #ffffff;
  box-model: border-box;
  border: 10px solid #ffffff;
  background-clip:padding-box;
  padding: 10px;
  margin-left: 20px;
}
.right-bottom-pane {
  height: 100%;
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.22);
  background-color: #ffffff;
  padding-top: 20px;
  margin-left: 20px;
  margin-top: 20px;
}
.right-tenant-pane {
  height: 105%;
  object-fit: contain;
  border-radius: 5px;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.22);
  background-color: #ffffff;
  padding-top: 20px;
  margin-left: 20px;
  margin-top: 20px;
}
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #fc0 !important;
    color: #000;
}
.line {
  width: 170px;
  height: 1px;
  border: solid 1px #efefef;
}
.property-details {
  font-family: Roboto;
  font-size: 16px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.88;
  letter-spacing: normal;
  color: #000000;
}
.nopadding {
   padding: 1px !important;
   margin: 0 !important;
}
.top-left-listing {
  border-right: solid 1px #dddddd;
  padding-left: 40px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Roboto;
  font-size: 18px;
  font-weight: 500;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 10000;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: black;
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    height: 100%:
    width: 100%;
    text-align: center;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 5px;
    right: 15px;
    font-size: 60px;
    z-index: 10001;
}
.image-container {
  position: relative;
  height: "100%";
}
.top-left {
  position: absolute;
  top: 50px;
  left: 20px;
  background: rgba(6, 66, 136, 0.4);
  color: white;
  padding: 5px;
}
.btn-solid {
                border-radius: 60px;
                width: 251px;
                height: 68px;
            }
.modern-details-img-indicator {
    z-index: 100;
    background: rgba(6, 66, 136, 0.7);
    color: white;
    font-size: 14px;
    position: relative;
    padding: 10px;
}
.btn-theme {
    background-color: #ececec;
}
.ad-price {
    position: relative;
    display: table-cell;
    height: 100%;
    vertical-align: middle;
    width: 15%;
    padding: 5px 15px 0 0;
    font-size: 36px;
    font-weight: 600;
    color: #4dc7ed;
    font-family: josefin sans,sans-serif;
}
/* Blue */
.info {
  border-color: #1D387D;
  color: #1D387D;
}

.info:hover {
  background: #1D387D;
  color: white;
}
.new-share-buttons {
    position: absolute; top: 5px;
    z-index: 1;
    width: 100%;
    text-align: center;
}
.extra-padding {
    padding-top: 10px;
}
.phone-number {
    font-size: 18px;
}
.big-price {
    font-family: Roboto;
    font-size: 30px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #4dc7ed;
}
.logo {
    max-width: 100% !important;
    max-height: 200px !important;
}
.video-responsive{
    overflow:hidden;
    padding-bottom:66.25%;
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
a.button-showing{
    display:inline-block;
    padding:1.2em 2.0em;
    border:0.1em solid #000000;
    margin:0 0.3em 0.3em 0;
    border-radius:0.12em;
    box-sizing: border-box;
    text-decoration:none;
    font-family:'Roboto',sans-serif;
    font-size: 10px;
    font-weight:400;
    color:#000000;
    text-align:center;
    transition: all 0.2s;
    background-color:#fc0;
}
a.button-showing:hover{
    border:0.1em solid #fc0;
    color:#000000;
    background-color:#ffffff;
}
@media all and (max-width:30em){
    a.button-showing{
    display:block;
    margin:0.4em auto;
    }
}
a.button-contact{
    display:inline-block;
    padding:1.2em 2.0em;
    border:0.1em solid #000000;
    margin:0 0.3em 0.3em 0;
    border-radius:0.12em;
    box-sizing: border-box;
    text-decoration:none;
    font-family:'Roboto',sans-serif;
    font-size: 12px;
    font-weight:400;
    color:#000000;
    text-align:center;
    transition: all 0.2s;
    background-color:#fc0;
}
a.button-contact:hover{
    border:0.1em solid #fc0;
    color:#000000;
    background-color:#ffffff;
}
@media all and (max-width:30em){
    a.button-contact{
    display:block;
    margin:0.4em auto;
    }
}
</style>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">
@endsection @section('main')

            @if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family")
                @include('theme.modern.template')
            @elseif ($ad->type == "pmc")
                @include('theme.modern.template')
            @elseif ($ad->type == "office" or $ad->type =="flex" or
                                    $ad->type =="medical" or $ad->type =="restaurant" or $ad->type
                                    =="retail" or $ad->type =="storefront" or $ad->type =="industrial"
                                    or $ad->type =="warehouse" or $ad->type =="commercial")
                @include('theme.modern.template')
            @elseif ($ad->sale_type == "Single-Family")
                @include('theme.modern.template')
            @elseif ($ad->sale_type == "Multi-Family")
                @include('theme.modern.template')
            @elseif ($ad->sale_type == "Condo")
                @include('theme.modern.template')
            @elseif ($ad->category == "land_sale")
                @include('theme.modern.template')
            @elseif ($ad->sale_type == "Commercial")
                @include('theme.modern.template')
            @elseif ($ad->category == "mixed_sale")
                @include('theme.modern.template')
            @elseif($ad->category == "commercial_sale")
              @include('theme.modern.template')
            @endif

            <div class="modal fade" id="reportAdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">@lang('app.report_ad_title')</h4>
                        </div>
                        <div class="modal-body">

                            <p>@lang('app.report_ad_description')</p>

                            <form>

                                <div class="form-group">
                                    <label class="control-label">@lang('app.reason'):</label>
                                    <select class="form-control" name="reason">
                                        <option value="">@lang('app.select_a_reason')</option>
                                        <option value="unavailable">@lang('app.item_sold_unavailable')</option>
                                        <option value="fraud">@lang('app.fraud')</option>
                                        <option value="duplicate">@lang('app.duplicate')</option>
                                        <option value="spam">@lang('app.spam')</option>
                                        <option value="wrong_category">@lang('app.wrong_category')</option>
                                        <option value="offensive">@lang('app.offensive')</option>
                                        <option value="other">@lang('app.other')</option>
                                    </select>

                                    <div id="reason_info"></div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">@lang('app.email'):</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <div id="email_info"></div>

                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">@lang('app.message'):</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                    <div id="message_info"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('app.close')</button>
                            <button type="button" class="btn btn-primary" id="report_ad">@lang('app.report_ad')</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="replyByEmail" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"></h4>
                        </div>

                        <form action="" id="replyByEmailForm" method="post"> @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name" class="control-label">@lang('app.name'):</label>
                                    <input type="text" class="form-control" id="name" name="name" data-validation="required">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">@lang('app.email'):</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone_number" class="control-label">@lang('app.phone_number'):</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                                </div>

                                <div class="form-group">
                                    <label for="message-text" class="control-label">@lang('app.message'):</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="ad_id" value="{{ $ad->id }}" />
                                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('app.close')</button>
                                <button type="submit" class="btn btn-primary" id="reply_by_email_btn">@lang('app.send_email')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="shareByEmail" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">@lang('app.embedded_preview')</h4>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="embedded_width" class="control-label">@lang('app.embedded_width'):</label>
                                        <input type="number" class="form-control" id="embedded_width" name="embedded_width" value="300" placeholder="@lang('app.embedded_width')">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="embedded_height" class="control-label">@lang('app.embedded_height'):</label>
                                    <input type="number" class="form-control" id="embedded_height" name="embedded_height" value="460" placeholder="@lang('app.embedded_width')">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="control-label">@lang('app.embedded_code'):</label>
                                <textarea class="form-control" readonly id="embedded_code">{{'<iframe src="'.route('embedded_ad', $ad->slug).'" style="border:0;width:300px;height:460px;"></iframe>'}}</textarea>
                            </div>

                            <div class="form-group">
                                <iframe src="{{ route('embedded_ad', $ad->slug) }}" style="border:0;width:300px;height:460px;"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

@endsection @section('page-js')
<script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>
<script
	src="{{ asset('assets/plugins/form-validator/form-validator.min.js') }}"></script>

<script>
        $('.share').ShareLink({
            title: '{{ $ad->title }}', // title for share message
            text: '{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}', // text for share message

            @if($ad->media_img->first())
            image: '{{ media_url($ad->media_img->first(), true) }}', // optional image for share message (not for all networks)
            @else
            image: '{{ asset('uploads/placeholder.png') }}', // optional image for share message (not for all networks)
            @endif
            url: '{{ route('single_ad', $ad->slug) }}', // link on shared page
            class_prefix: 's_', // optional class prefix for share elements (buttons or links or everything), default: 's_'
            width: 640, // optional popup initial width
            height: 480 // optional popup initial height
        })
    </script>
<script>
        $.validate();
    </script>

<script>
        $(function(){
            $('#onClickShowPhone').click(function(){
                $('#ShowPhoneWrap').html('<i class="fa fa-phone"></i> {{ $ad->seller_phone }}');
            });

	    $("#close").click(function (e) {
                $("#overlay").hide();
		$("#close").hide();
            });

            $('#save_as_favorite').click(function(){
                var selector = $(this);
                var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '{{ route('save_ad_as_favorite') }}',
                    data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.status == 1){
                            selector.html(data.msg);
                        }else {
                            if (data.redirect_url){
                                location.href= data.redirect_url;
                            }
                        }
                    }
                });
            });

            $(document).on('change past keyup', '#embedded_width', function(){
                var width = $(this).val();
                var height = $('#embedded_height').val();
                $('iframe').css('width', width+'px');

                var iframe_code = '<iframe src="http://localhost/real-estate/source/embedded/2-beds-nice-apertment-in-ny-united-states" style="border:0;width:'+width+'px;height:'+height+'px;"></iframe> ';

                $('#embedded_code').val(iframe_code);
            });
            $(document).on('change past keyup', '#embedded_height', function(){
                var height = $(this).val();
                var width = $('#embedded_width').val();
                $('iframe').css('height', height+'px');

                var iframe_code = '<iframe src="http://localhost/real-estate/source/embedded/2-beds-nice-apertment-in-ny-united-states" style="border:0;width:'+width+'px;height:'+height+'px;"></iframe> ';

                $('#embedded_code').val(iframe_code);
            });

        });
    </script>
@endsection

