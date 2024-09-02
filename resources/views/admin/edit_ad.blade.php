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
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			@endif @include('admin.flash_msg')

@if($ad->type == "apartment" or $ad->type == "condo" or $ad->type == "loft" or $ad->type == "single-family" or $ad->type == "multi-family")
            @include('admin.apartmentrental')
        @elseif ($ad->type == "pmc")
            @include('admin.pmcrental')
        @elseif ($ad->type == "office" or $ad->type =="flex" or
                                $ad->type =="medical" or $ad->type =="restaurant" or $ad->type
                                =="retail" or $ad->type =="storefront" or $ad->type =="industrial"
                                or $ad->type =="warehouse" or $ad->type =="commercial")
            @include('admin.commrental')
        @elseif ($ad->sale_type == "Single-Family")
            @include('admin.singlesale')
        @elseif ($ad->sale_type == "Multi-Family")
            @include('admin.multisale')
        @elseif ($ad->sale_type == "Condo")
            @include('admin.condosale')
        @elseif ($ad->category == "land_sale")
            @include('admin.landsale')
        @elseif ($ad->category == "commercial_sale")
            @include('admin.commsale')
        @elseif ($ad->category == "residential_sale")
            @include('admin.multisale')
        @endif

        <legend>Matterport</legend>

        <div
        						class="form-group {{ $errors->has('matterport')? 'has-error':'' }}">
        						<label for="ad_title" class="col-sm-4 control-label">Matterport Key</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control" id="matterport"
        								value="{{ old('matterport')? old('matterport') : $ad->matterport }}"
        								name="matterport" placeholder="Enter Matterport Key"> {!!
        							$errors->has('matterport')? '
        							<p class="help-block">'.$errors->first('matterport').'</p>
        							':'' !!}
        							<p class="help-block">Matterport key only (e.g. hku7BWZ4g8A )</p>
        						</div>
        					</div>

<!--{{ $ad->sale_type }}-->

                        <legend>@lang('app.image')s</legend>
                        
                        <div class="form-group  {{ $errors->has('photo7')? 'has-error':'' }}">
                            <div class="col-sm-8">
                                <div class="file-upload-wrap">
                                    <label>
                                        <input type="file" name="photo7[]" id="photo7" style="display: none;" multiple />
                                        <i class="fa fa-plus"></i>
                                        <p>@lang('app.upload_image')s by Clicking Here</p>
                                    </label>
                                </div>
                                {!! $errors->has('photo7')? '<p class="help-block">'.$errors->first('photo7').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <br />
                        <p class="sortable" id="img"></p>
                        
                        <legend>Existing Photos</legend>
                        
                        <a href="javascript:void(0);" class="btn btn-warning reorder" id="updateReorder">Click here to organize your images.</a>
    <div id="reorder-msg" class="alert alert-warning mt-3" style="display:none;">
        <i class="fa fa-3x fa-exclamation-triangle float-right"></i><br>1. Drag photos to organize them.<br>2. Click 'Save Reordering' above when finished.
    </div>
    
                        <div class="row">
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                    @if($ad->media_img->count() > 0)
                                        @foreach($ad->media_img->sortBy('image_order') as $img)
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
                        
                        <legend>Property Documents</legend>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group  {{ $errors->has('company_pdf')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF 1</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf" name="company_pdf" class="filestyle" placeholder="{{ $ad->company_pdf }}" >
                                        {!! $errors->has('company_pdf')? '<p class="help-block">'.$errors->first('company_pdf').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    @if($ad->company_pdf)
                                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf }}" target="_blank" >
                                        {{ $ad->company_pdf }}
                                    </a>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title')? 'has-error':'' }}">
                                    <label for="pdf_title" class="col-sm-4 control-label">PDF 1 Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title" class="form-control" id="pdf_title" value="{{ old('pdf_title')? old('pdf_title') : $ad->pdf_title }}" name="pdf_title" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title')? '<p class="help-block">'.$errors->first('pdf_title').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group  {{ $errors->has('company_pdf2')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF 2</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf2" name="company_pdf2" class="filestyle" placeholder="{{ $ad->company_pdf2 }}" >
                                        {!! $errors->has('company_pdf2')? '<p class="help-block">'.$errors->first('company_pdf2').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    @if($ad->company_pdf2)
                                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf2 }}" target="_blank" >
                                        {{ $ad->company_pdf2 }}
                                    </a>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title2')? 'has-error':'' }}">
                                    <label for="pdf_title2" class="col-sm-4 control-label">PDF 2 Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title2" class="form-control" id="pdf_title2" value="{{ old('pdf_title2')? old('pdf_title2') : $ad->pdf_title2 }}" name="pdf_title2" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title2')? '<p class="help-block">'.$errors->first('pdf_title2').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">    
                                <div class="form-group  {{ $errors->has('company_pdf3')? 'has-error':'' }}">
                                    <label class="col-sm-4 control-label">Upload PDF 3</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="company_pdf3" name="company_pdf3" class="filestyle" placeholder="{{ $ad->company_pdf3 }}" >
                                        {!! $errors->has('company_pdf3')? '<p class="help-block">'.$errors->first('company_pdf3').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    @if($ad->company_pdf3)
                                    <a href="https://1-800.lenoxproperty.com/pdf/{{ $ad->company_pdf3 }}" target="_blank" >
                                        {{ $ad->company_pdf3 }}
                                    </a>
                                    @endif
                                </div>
                                
                                <div class="form-group {{ $errors->has('pdf_title3')? 'has-error':'' }}">
                                    <label for="pdf_title3" class="col-sm-4 control-label">PDF 3 Title</label>
                                    <div class="col-sm-8">
                                        <input type="pdf_title3" class="form-control" id="pdf_title3" value="{{ old('pdf_title3')? old('pdf_title3') : $ad->pdf_title3 }}" name="pdf_title3" placeholder="PDF Title">
                                        {!! $errors->has('pdf_title3')? '<p class="help-block">'.$errors->first('pdf_title3').'</p>':'' !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    <p>&nbsp;</p>
                    <legend>Videos</legend>
                    <div class="row">
                        <div class="col-md-6">
        					<div
        						class="form-group {{ $errors->has('property_video_url')? 'has-error':'' }}">
        						<label for="ad_title" class="col-sm-4 control-label">@lang('app.property_video_url')</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control" id="property_video_url"
        								value="{{ old('property_video_url')? old('property_video_url') : $ad->property_video_url }}"
        								name="property_video_url" placeholder="@lang('app.property_video_url')"> {!!
        							$errors->has('property_video_url')? '
        							<p class="help-block">'.$errors->first('property_video_url').'</p>
        							':'' !!}
        							<p class="help-block">@lang('app.property_video_url')</p>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div
        						class="form-group {{ $errors->has('neighborhood_video_url')? 'has-error':'' }}">
        						<label for="ad_title" class="col-sm-4 control-label">@lang('app.neighborhood_video_url')</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control" id="neighborhood_video_url"
        								value="{{ old('neighborhood_video_url')? old('neighborhood_video_url') : $ad->neighborhood_video_url }}"
        								name="neighborhood_video_url" placeholder="@lang('app.neighborhood_video_url')"> {!!
        							$errors->has('neighborhood_video_url')? '
        							<p class="help-block">'.$errors->first('neighborhood_video_url').'</p>
        							':'' !!}
        							<p class="help-block">@lang('app.neighborhood_video_url')</p>
        						</div>
        					</div>
        				</div>
        			</div>

					<legend>@lang('app.location_info')</legend>
                        <div
                            class="form-group {{ $errors->has('street_num')? 'has-error':'' }}">
                            <label for="street_num" class="col-sm-2 control-label">Street Num</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="street_num"
                                    value="{{ old('street_num')? old('street_num') : $ad->street_num }}" name="street_num"
                                    placeholder="Street Number"> {!! $errors->has('street_num')?
                                '
                                <p class="help-block">'.$errors->first('street_num').'</p>
                                ':'' !!}
                            </div>

                        <div
                            class="form-group {{ $errors->has('street_num2')? 'has-error':'' }}">
                            <label for="street_num2" class="col-sm-2 control-label">Street Num 2</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="street_num2"
                                    value="{{ old('street_num2')? old('street_num2') : $ad->street_num2 }}" name="street_num2"
                                    placeholder="Street Number"> {!! $errors->has('street_num2')?
                                '
                                <p class="help-block">'.$errors->first('street_num2').'</p>
                                ':'' !!}
                            </div>
                        </div>
                            
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="street_name"
                                    value="{{ old('street_name')? old('street_name') : $ad->street_name }}" name="street_name"
                                    placeholder="Street Name"> {!! $errors->has('street_name')?
                                '
                                <p class="help-block">'.$errors->first('street_name').'</p>
                                ':'' !!}
                            </div>
                            
                            <div class="col-sm-2">
                                <select class="form-control select2" id="street_type"
                                    name="street_type">
                                    <option value="">Street Type</option>
                                    <option value="Avenue" {{ $ad->street_type == 'Avenue' ? 'selected':'' }}>Avenue</option>
                                    <option value="Beach" {{ $ad->street_type == 'Beach' ? 'selected':'' }}>Beach</option>
                                    <option value="Bend" {{ $ad->street_type == 'Bend' ? 'selected':'' }}>Bend</option>
                                    <option value="Boulevard" {{ $ad->street_type == 'blvd' ? 'selected':'' }}>Boulevard</option>
                                    <option value="Circle" {{ $ad->street_type == 'Circle' ? 'selected':'' }}>Circle</option>
                                    <option value="Court" {{ $ad->street_type == 'Court' ? 'selected':'' }}>Court</option>
                                    <option value="Cove" {{ $ad->street_type == 'Cove' ? 'selected':'' }}>Cove</option>
                                    <option value="Crossing" {{ $ad->street_type == 'Crossing' ? 'selected':'' }}>Crossing</option>
                                    <option value="Drive" {{ $ad->street_type == 'Drive' ? 'selected':'' }}>Drive</option>
                                    <option value="Green" {{ $ad->street_type == 'Green' ? 'selected':'' }}>Green</option>
                                    <option value="Highway" {{ $ad->street_type == 'Highway' ? 'selected':'' }}>Highway</option>
                                    <option value="Hill" {{ $ad->street_type == 'Hill' ? 'selected':'' }}>Hill</option>
                                    <option value="Lane" {{ $ad->street_type == 'Lane' ? 'selected':'' }}>Lane</option>
                                    <option value="Meadow" {{ $ad->street_type == 'Meadow' ? 'selected':'' }}>Meadow</option>
                                    <option value="Parkway" {{ $ad->street_type == 'Parkway' ? 'selected':'' }}>Parkway</option>
                                    <option value="Passage" {{ $ad->street_type == 'Passage' ? 'selected':'' }}>Passage</option>
                                    <option value="Path" {{ $ad->street_type == 'Path' ? 'selected':'' }}>Path</option>
                                    <option value="Pike" {{ $ad->street_type == 'Pike' ? 'selected':'' }}>Pike</option>
                                    <option value="Place" {{ $ad->street_type == 'Place' ? 'selected':'' }}>Place</option>
                                    <option value="Point" {{ $ad->street_type == 'Point' ? 'selected':'' }}>Point</option>
                                    <option value="Ridge" {{ $ad->street_type == 'Ridge' ? 'selected':'' }}>Ridge</option>
                                    <option value="River" {{ $ad->street_type == 'River' ? 'selected':'' }}>River</option>
                                    <option value="Road" {{ $ad->street_type == 'Road' ? 'selected':'' }}>Road</option>
                                    <option value="Row" {{ $ad->street_type == 'Row' ? 'selected':'' }}>Row</option>
                                    <option value="Run" {{ $ad->street_type == 'Run' ? 'selected':'' }}>Run</option>
                                    <option value="Shore" {{ $ad->street_type == 'Shore' ? 'selected':'' }}>Shore</option>
                                    <option value="Shores" {{ $ad->street_type == 'Shores' ? 'selected':'' }}>Shores</option>
                                    <option value="Square" {{ $ad->street_type == 'Square' ? 'selected':'' }}>Square</option>
                                    <option value="Street" {{ $ad->street_type == 'Street' ? 'selected':'' }}>Street</option>
                                    <option value="Terrace" {{ $ad->street_type == 'Terrace' ? 'selected':'' }}>Terrace</option>
                                    <option value="Trail" {{ $ad->street_type == 'Trail' ? 'selected':'' }}>Trail</option>
                                    <option value="Turnpike" {{ $ad->street_type == 'Turnpike' ? 'selected':'' }}>Turnpike</option>
                                    <option value="View" {{ $ad->street_type == 'View' ? 'selected':'' }}>View</option>
                                    <option value="Way" {{ $ad->street_type == 'Way' ? 'selected':'' }}>Way</option>
                                    <option value="Wharf" {{ $ad->street_type == 'Wharf' ? 'selected':'' }}>Wharf</option>
                                </select>
                                                            {!! $errors->has('street_type')? '
                                    <p class="help-block">'.$errors->first('street_type').'</p>
                                    ':'' !!}
                            </div>
                            <div
                            class="form-group {{ $errors->has('unit_no')? 'has-error':'' }}">
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="unit_no"
                                    value="{{ old('unit_no')? old('unit_no') : $ad->unit_no }}" name="unit_no"
                                    placeholder="Unit Number"> {!! $errors->has('unit_no')?
                                '
                                <p class="help-block">'.$errors->first('unit_no').'</p>
                                ':'' !!}
                            </div>
                        </div>
                        
                        <div
                            class="form-group {{ $errors->has('floor_no')? 'has-error':'' }}">
                            <label for="category_name" class="col-sm-4 control-label">Floor Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="floor_no"
                                    value="{{ old('floor_no')? old('floor_no') : $ad->floor_no }}" name="floor_no"
                                    placeholder="Floor Number"> {!! $errors->has('floor_no')?
                                '
                                <p class="help-block">'.$errors->first('floor_no').'</p>
                                ':'' !!}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div
                            class="form-group  {{ $errors->has('state')? 'has-error':'' }}">
                            <label for="category_name" class="col-sm-4 control-label">@lang('app.state')</label>
                            <div class="col-sm-8">
                                <select class="form-control select2" id="state_select"
                                    name="state">
                                    <option value="">@lang('app.select_a_state')</option>
                                    <option value="1" {{ $ad->state_id == 1 ? 'selected':'' }}>Rhode
                                        Island</option>
                                    <option value="2" {{ $ad->state_id == 2 ? 'selected':''
                                        }}>Massachusetts</option>
                                </select>
                                <p class="text-info">
                                    <span id="state_loader" style="display: none;"><i
                                        class="fa fa-spin fa-spinner"></i> </span>
                                </p>
                            </div>
                        </div>

                        <div class="form-group  {{ $errors->has('city')? 'has-error':'' }}">
                            <label for="category_name" class="col-sm-4 control-label">@lang('app.city')</label>
                            <div class="col-sm-8">
                                <select class="form-control select2" id="city_select" name="city">
                                    <option value="">@lang('app.select_a_city')</option>
                                    @if($previous_cities->count() > 0) @foreach($previous_cities as
                                    $city)
                                    <option value="{{ $city->id }}" {{ $ad->city_id == $city->id ?
                                        'selected':'' }}>{{ $city->city_name }}</option> @endforeach
                                    @endif

                                </select>
                                <p class="text-info">
                                    <span id="city_loader" style="display: none;"><i
                                        class="fa fa-spin fa-spinner"></i> </span>
                                </p>
                            </div>
                        </div>
                    <div>

                    <div class="form-group {{ $errors->has('neighborhood')? 'has-error':'' }}">
                            <label for="neighborhood" class="col-sm-4 control-label">@lang('app.neighborhood')</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="neighborhood"
                                                                value="{{ old('neighborhood')? old('neighborhood') : $ad->neighborhood }}"
                                                                name="neighborhood" placeholder="@lang('app.neighborhood')"> {!!
                                        $errors->has('neighborhood')? '
                                    <p class="help-block">'.$errors->first('neighborhood').'</p>
                                                        ':'' !!}
                        </div>

                    <div
                                                class="form-group {{ $errors->has('zipcode')? 'has-error':'' }}">
                                                <label for="zipcode" class="col-sm-4 control-label">@lang('app.zipcode')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="zipcode"
                                                                value="{{ old('zipcode')? old('zipcode') : $ad->zipcode }}"
                                                                name="zipcode" placeholder="@lang('app.zipcode')"> {!!
                                                        $errors->has('zipcode')? '
                                                       	<p class="help-block">'.$errors->first('zipcode').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>
			
			<div
						class="form-group  {{ $errors->has('ad_status')? 'has-error':'' }}">
						<label for="category_ad_status" class="col-sm-4 control-label">Ad Status</label>
						<div class="col-sm-8">
							<select class="form-control select2" id="ad_status_select"
								name="ad_status">
								<option value="">Select an Ad Status</option>
								<option value="Active" {{ $ad->ad_status == 'Active' ? 'selected':'' }}>Active</option>
								<option value="Pending" {{ $ad->ad_status == 'Pending' ? 'selected':'' }}>Pending</option>
								<option value="Sold" {{ $ad->ad_status == 'Sold' ? 'selected':'' }}>Sold</option>
							</select>
						</div>
					</div>
                <p>&nbsp;</p>
			    <div class="row">
                    <div
                            class="form-group  {{ $errors->has('ad_status')? 'has-error':'' }}">
                        <label for="category_name" class="col-sm-4 control-label">Active Open House</label>
                        <div class="col-sm-8">
                            <label> <input type="checkbox" value="1" name="open_house" id="open_house" {{ $ad->open_house
                                == '1'? 'checked="checked"' : '' }}>
                            </label>
                        </div>
                    </div>
			    </div>
    			<p>&nbsp;</p>
    			<div id="open-house">
                    <legend>Open House Information</legend>
        			<div class="col-sm-4">
        			<div
        						class="form-group {{ $errors->has('openhouse_date')? 'has-error':'' }}">
        						<label for="openhouse_date" class="col-sm-4 control-label">Open House Date</label>
        						<div class="col-sm-8">
        							<input type="text" class="date form-control" id="datepicker"
        								value="{{ old('openhouse_date')? old('openhouse_date') : $ad->openhouse_date }}"
        								name="openhouse_date" placeholder="Open House Date"> {!!
        							$errors->has('openhouse_date')? '
        							<p class="help-block">'.$errors->first('openhouse_date').'</p>
        							':'' !!}
        						</div>
        					</div>
                    </div>
                    <div class="col-sm-4">
        			<div
        						class="form-group {{ $errors->has('openhouse_time')? 'has-error':'' }}">
        						<label for="openhouse_time" class="col-sm-4 control-label">Start Time</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control" id="openhouse_time"
        								value="{{ old('openhouse_time')? old('openhouse_time') : $ad->openhouse_time }}"
        								name="openhouse_time" placeholder="Open House Time"> {!!
        							$errors->has('openhouse_time')? '
        							<p class="help-block">'.$errors->first('openhouse_time').'</p>
        							':'' !!}
        						</div>
        					</div>
        			</div>
                    <div class="col-sm-4">
        			<div
        						class="form-group {{ $errors->has('openhouse_finish')? 'has-error':'' }}">
        						<label for="openhouse_finish" class="col-sm-4 control-label">Start Time</label>
        						<div class="col-sm-8">
        							<input type="text" class="form-control" id="openhouse_finish"
        								value="{{ old('openhouse_finish')? old('openhouse_finish') : $ad->openhouse_finish }}"
        								name="openhouse_finish" placeholder="Open House Finish"> {!!
        							$errors->has('openhouse_finish')? '
        							<p class="help-block">'.$errors->first('openhouse_finish').'</p>
        							':'' !!}
        						</div>
        					</div>
        			</div>
    			</div>

<div class="col-md-10" align="center">
By posting, you are acknowledging that you are authorized to post this listing and to the best of your knowledge all of the information provided is accurate.
</div>
<hr />

					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary">Save Listing</button>
						</div>
					</div>
</div>

					{{ Form::close() }}
<br /><br /><br />
				</div>
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->
@endsection

@section('page-js')

<script>
$(document).ready(function(){
    $('#num_additional').on('change', function() {
      if ( this.value == '1')
      {
        $("#info-unit1").show();
      } else if( this.value == '2' ) {
          $("#info-unit1").show();
          $("#info-unit2").show();
      } else if( this.value == '3' ) {
          $("#info-unit1").show();
          $("#info-unit2").show();
          $("#info-unit3").show();
      } else if( this.value == '4' ) {
          $("#info-unit1").show();
          $("#info-unit2").show();
          $("#info-unit3").show();
          $("#info-unit4").show();
      }
    });

    $('#basement_type').on('change', function() {
    	if ( this.value == 'None')
        {
          	$("#base_block").hide();
        } else {
        	$("#base_block").show();
        }
    });    
});
</script>

<script type="text/javascript">
$('#open_house').click(function() {
   if($(this).is(":checked")){
      $("#open-house").show();
   }
   else{
      //$("#open-house").hide();
   }
});
$('#mf-unit2').click(function() {
   if($(this).is(":checked")){
      $("#info-unit1").show();
      $("#info-unit2").show();
      $("#info-unit3").show();
      $("#info-unit4").show();
   }
   else{
      $("#info-unit1").hide();
      $("#info-unit2").hide();
      $("#info-unit3").hide();
      $("#info-unit4").hide();
   }
});
$('#res_unitcb').click(function() {
   if($(this).is(":checked")){
      $("#res-unit").show();
   }
   else{
      $("#res-unit").hide();
   }
});
</script>

<script>

        function generate_option_from_json(jsonData, fromLoad){

            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('');

                    $('#brand_select').select2();
                }
                $('#brand_loader').hide('slow');
            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_city') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('');
                    $('#city_select').select2();
                }
                $('#city_loader').hide('slow');
            }else if(fromLoad === 'city_to_neighborhood'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_neighborhood') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].neighborhood_name +' </option>';
                    }
                    $('#neighborhood_select').html(option);
                    $('#neighborhood_select').select2();
                }else {
                    $('#neighborhood_select').html('');
                    $('#neighborhood_select').select2();
                }
                $('#neighborhood_loader').hide('slow');
        	}
        }

        $(document).ready(function(){
            $('[name="category"]').change(function(){
                var category_id = $(this).val();
                $('#brand_loader').show();

                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_brand_by_category') }}',
                    data : { category_id : category_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'category_to_brand');
                    }
                });
            });

            $('[name="state"]').change(function(){
                var state_id = $(this).val();
                $('#city_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_city_by_state') }}',
                    data : { state_id : state_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'state_to_city');
                    }
                });
            });

	    	$('[name="city"]').change(function(){
                var city_id = $(this).val();
                $('#neighborhood_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('get_neighborhood_by_city') }}',
                    data : { city_id : city_id,  _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        generate_option_from_json(data, 'city_to_neighborhood');
                    }
                });
            });

            $("#images").change(function() {
                var fd = new FormData(document.querySelector("form#adsPostForm"));
                $('#loadingOverlay').show();
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
                                console.log(percentComplete);

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
            $('body').on('click', '.imgFeatureBtn', function(){
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                var current_selector = $(this);

                $.ajax({
                    url : '{{ route('feature_media_creating_ads') }}',
                    type: "POST",
                    data: { media_id : img_id, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            $('.imgFeatureBtn').html('<i class="fa fa-star-o"></i>');
                            current_selector.html('<i class="fa fa-star"></i>');
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
            autoclose: true
         });
         $('#datepicker2').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
         $('#datepicker3').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
    </script>
    
<script>
var ad = {!! json_encode($ad->toArray()) !!};
    $(document).ready(function () {

        $('#photo7').change(function () {
            if (this.files.length > 0) {

                $.each(this.files, function () {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var img = new Image();
                        img.src = e.target.result;

                        img.setAttribute('style', 'width:138px;height:95px;padding:5px;');
                        $('#img').append(img);
                        $.ajax({
                            type: "POST",
                            url: '/dashboard/u/posts/edit/' + ad.id,
                            data: $(this).serialize(),
                            success: function(msg) {
                            }
                        });
                    };
                    reader.readAsDataURL(this);
                });
            }
        });
    });
</script>

<script>
$(function(){
    $( ".sortable" ).sortable();
})
</script>

<script>
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'ad_description' );
    </script>

@endsection
