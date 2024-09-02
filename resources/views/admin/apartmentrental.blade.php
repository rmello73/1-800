			<div class="row">
				<div class="col-md-10 col-xs-12">

					{{ Form::open(['id'=>'adsPostForm', 'class' => 'form-horizontal',
					'files' => true]) }}

					<legend>@lang('app.ad_info')</legend>
					
					<div
    						class="form-group {{ $errors->has('start_date')? 'has-error':'' }}">
    						<label for="start_date" class="col-sm-4 control-label">Start Date</label>
    						<div class="col-sm-8">
    							<input type="text" class="date form-control" id="datepicker2"
    								value="{{ old('start_date')? old('start_date') : $ad->start_date }}"
    								name="start_date" placeholder="Expiration Start Date"> {!!
    							$errors->has('start_date')? '
    							<p class="help-block">'.$errors->first('start_date').'</p>
    							':'' !!}
    						</div>
    					</div>
    
    			<div
    						class="form-group {{ $errors->has('end_date')? 'has-error':'' }}">
    						<label for="end_date" class="col-sm-4 control-label">End Date</label>
    						<div class="col-sm-8">
    							<input type="text" class="date form-control" id="datepicker3"
    								value="{{ old('end_date')? old('end_date') : $ad->end_date }}"
    								name="end_date" placeholder="Expiration End Date"> {!!
    							$errors->has('end_date')? '
    							<p class="help-block">'.$errors->first('end_date').'</p>
    							':'' !!}
    						</div>
    					</div>

					<div
						class="form-group {{ $errors->has('ad_title')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.ad_title')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ad_title"
								value="{{ old('ad_title') ? old('ad_title') : $ad->title }}"
								name="ad_title" placeholder="@lang('app.ad_title')"> {!!
							$errors->has('ad_title')? '
							<p class="help-block">'.$errors->first('ad_title').'</p>
							':'' !!}
							<p class="text-info">@lang('app.great_title_info')</p>
						</div>
					</div>



					<div
						class="form-group {{ $errors->has('ad_description')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.ad_description')</label>
						<div class="col-sm-8">
							<textarea name="ad_description" class="form-control" rows="8">{{ old('ad_description')?  old('ad_description') : $ad->description }}</textarea>
							{!! $errors->has('ad_description')? '
							<p class="help-block">'.$errors->first('ad_description').'</p>
							':'' !!}
							<p class="text-info">@lang('app.ad_description_info_text')</p>
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('ad_comment')? 'has-error':'' }}">
						<label for="ad_comment" class="col-sm-4 control-label">@lang('app.ad_comment')</label>
						<div class="col-sm-8">
							<input type="text" maxlength="64" class="form-control" id="ad_comment"
								value="{{ old('ad_comment') ? old('ad_comment') : $ad->comment }}"
								name="ad_comment" placeholder="@lang('app.ad_comment')"  maxlength="64"> {!!
							$errors->has('ad_comment')? '
							<p class="help-block">'.$errors->first('ad_comment').'</p>
							':'' !!}
							<p class="text-info">@lang('app.comment_info')</p>
						</div>
					</div>

					<!--<div
                                            	class="form-group {{ $errors->has('category')? 'has-error':'' }}">
                                                <label for="category" class="col-sm-4 control-label">Category</label>
                                                <div class="col-sm-8">
                                                        <select class="form-control select2NoSearch" name="category"
                                                                id="category">
                                                                <option value="">&nbsp;</option>
                                                                <option value="residential_rental" {{ $ad->category == 'residential_rental' ?
                                                                        'selected':'' }}>Apartments & Homes for Rent</option>
                                                                <option value="residential_sale" {{ $ad->category == 'residential_sale' ?
                                                                        'selected':'' }}>Homes for Sale</option>
                                                                <option value="commercial_rental" {{ $ad->category == 'commercial_rental' ?
                                                                        'selected':'' }}>Commercial Spaces for Lease</option>
                                                                <option value="commercial_sale" {{ $ad->category == 'commercial_sale' ?
                                                                        'selected':'' }}>Commercial Spaces for Sale</option>
                                                        </select> {!! $errors->has('category')? '
                                                        <p class="help-block">'.$errors->first('category').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>-->

					<div class="form-group {{ $errors->has('type')? 'has-error':'' }}">
						<label for="purpose" class="col-sm-4 control-label">@lang('app.property_type')</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="type"
								id="purpose">
                                                                @if($lUser->is_admin())
								<option value="pmc" {{ $ad->type == 'pmc' ? 'selected':''
									}}>@lang('app.pmc')</option>
                                                                @endif
                                                                @if($ad->category == 'commercial')
								<option value="office" {{ $ad->type == 'office' ? 'selected':''
									}}>@lang('app.office')</option>
								<option value="medical" {{ $ad->type == 'medical' ?
									'selected':'' }}>@lang('app.medical')</option>
								<option value="restaurant" {{ $ad->type == 'restaurant' ?
									'selected':'' }}>@lang('app.restaurant')</option>
								<option value="retail" {{ $ad->type == 'retail' ? 'selected':''
									}}>@lang('app.retail')</option>
								<option value="storefront" {{ $ad->type == 'storefront' ?
									'selected':'' }}>@lang('app.storefront')</option>
								<option value="industrial" {{ $ad->type == 'industrial' ?
									'selected':'' }}>@lang('app.industrial')</option>
								<option value="warehouse" {{ $ad->type == 'warehouse' ?
									'selected':'' }}>@lang('app.warehouse')</option>
								<option value="land" {{ $ad->type == 'land' ? 'selected':''
									}}>@lang('app.land')</option>
								<option value="other" {{ $ad->type == 'other' ? 'selected':''
									}}>@lang('app.other')</option>
								<option value="flex" {{ $ad->type == 'flex' ? 'selected':''
									}}>@lang('app.flex')</option>
                                                                @else
								<option value="condo" {{ $ad->type == 'condo' ? 'selected':''
									}}>@lang('app.condo')</option>
								<option value="loft" {{ $ad->type == 'loft' ? 'selected':''
									}}>@lang('app.loft')</option>
								<option value="single-family" {{ $ad->type == 'single-family' ?
									'selected':'' }}>@lang('app.single')</option>
                                                                <option value="apartment" {{ $ad->type == 'apartment' ?
									'selected':'' }}>@lang('app.apartment')</option>
                                                                @endif
							</select> {!! $errors->has('type')? '
							<p class="help-block">'.$errors->first('type').'</p>
							':'' !!}
						</div>
					</div>

					@if($ad->type == "apartment" or $ad->type =="condo" or $ad->type == "single-family" or $ad->type == "loft")
					<div
						class="form-group  {{ $errors->has('price')? 'has-error':'' }}">
						<label for="price" class="col-md-4 control-label">@lang('app.price')</label>
						<div class="col-md-4">
							<div class="input-group">
								<input type="text" placeholder="@lang('app.ex_price')"
									class="form-control" name="price" id="price"
									value="{{ old('price')? old('price') : $ad->price }}">
							</div>
						</div>

						<div class="col-sm-8 col-md-offset-4">
							{!! $errors->has('price')? '
							<p class="help-block">'.$errors->first('price').'</p>
							':'' !!}
						</div>
					</div>

					@if($ad->type == "apartment" or $ad->type =="condo" or $ad->type == "single-family" or $ad->type == "loft")
					<legend>@lang('app.property_detail')</legend>

					<div
						class="form-group {{ $errors->has('square_unit_space')? 'has-error':'' }}">
						<label for="square_unit_space" class="col-sm-4 control-label">@lang('app.square_unit_space')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="square_unit_space"
								value="{{ $ad->square_unit_space }}" name="square_unit_space"
								placeholder="@lang('app.square_unit_space')"> {!!
							$errors->has('square_unit_space')? '
							<p class="help-block">'.$errors->first('square_unit_space').'</p>
							':'' !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('beds')? 'has-error':'' }}">
						<label for="beds" class="col-sm-4 control-label">@lang('app.beds')</label>
						<div class="col-sm-8">
                                                        <select class="form-control select2NoSearch" name="beds"
                                                                id="beds">
                                                                <option value="0.5" {{ $ad->beds == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->beds == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->beds == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->beds == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->beds == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->beds == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->beds == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->beds == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->beds == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->beds == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->beds == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select> {!! $errors->has('beds')? '
                                                        <p class="help-block">'.$errors->first('beds').'</p>
                                                        ':'' !!}
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('attached_bath')? 'has-error':'' }}">
						<label for="attached_bath" class="col-sm-4 control-label">@lang('app.attached_bath')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="attached_bath"
								value="{{ $ad->attached_bath }}" name="attached_bath"
								placeholder="@lang('app.attached_bath')"> {!!
							$errors->has('attached_bath')? '
							<p class="help-block">'.$errors->first('attached_bath').'</p>
							':'' !!}
						</div>
					</div>
					@endif

					@if($ad->type == "apartment" or $ad->type =="condo" or $ad->type == "single-family" or $ad->type == "loft")
                                        <legend>Amenities</legend>
                                        <div class="form-group {{ $errors->has('dogs')? 'has-error':'' }}">
						<label for="dogs" class="col-sm-4 control-label">Dogs</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="dogs"
								id="dogs">
								<option value="Dogs Allowed" {{ $ad->dogs == 'Dogs Allowed' ? 'selected':''
									}}>Dogs Allowed</option>
								<option value="Dogs Not Allowed" {{ $ad->dogs == 'Dogs Not Allowed' ? 'selected':''
									}}>No Dogs Allowed</option>
								<option value="See Description" {{ $ad->dogs == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('dogs')? '
							<p class="help-block">'.$errors->first('dogs').'</p>
							':'' !!}
						</div>
					</div>

                                        <div class="form-group {{ $errors->has('cats')? 'has-error':'' }}">
						<label for="cats" class="col-sm-4 control-label">Cats</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="cats"
								id="cats">
								<option value="Cats Allowed" {{ $ad->cats == 'Cats Allowed' ? 'selected':''
									}}>Cats Allowed</option>
								<option value="Cats Not Allowed" {{ $ad->cats == 'Cats Not Allowed' ? 'selected':''
									}}>No Cats Allowed</option>
								<option value="See Description" {{ $ad->cats == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('cats')? '
							<p class="help-block">'.$errors->first('cats').'</p>
							':'' !!}
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('laundry')? 'has-error':'' }}">
						<label for="laundry" class="col-sm-4 control-label">Laundry</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="laundry"
								id="laundry">
								<option value="Laundry on Site" {{ $ad->laundry == 'Laundry on Site' ?
									'selected':'' }}>Laundry on Site</option>
								<option value="Laundry in Unit" {{ $ad->laundry == 'Laundry in Unit' ?
									'selected':'' }}>Laundry in Unit</option>
								<option value="Washer / Dryer Hookups" {{ $ad->laundry == 'Washer / Dryer Hookups' ?
									'selected':'' }}>Washer / Dryer Hookups</option>
								<option value="No Laundry" {{ $ad->laundry == 'No Laundry' ?
									'selected':'' }}>No Laundry</option>
								<option value="See Description" {{ $ad->laundry == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('laundry')? '
							<p class="help-block">'.$errors->first('laundry').'</p>
							':'' !!}
						</div>
					</div>
					
					<div class="form-group {{ $errors->has('heat')? 'has-error':'' }}">
						<label for="heat" class="col-sm-4 control-label">Heat</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="heat"
								id="heat">
								<option value="Gas Heat" {{ $ad->heat == 'Gas
									Heat' ? 'selected':'' }}>Gas
									Heat</option>
								<option value="Oil Heat" {{ $ad->heat == 'Oil
									Heat' ? 'selected':'' }}>Oil
									Heat</option>
								<option value="Electric Heat" {{ $ad->heat == 'Electric Heat' ?
									'selected':'' }}>Electric Heat</option>
								<option value="See Description" {{ $ad->heat == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('heat')? '
							<p class="help-block">'.$errors->first('heat').'</p>
							':'' !!}
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('parking')? 'has-error':'' }}">
						<label for="parking" class="col-sm-4 control-label">Parking</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="parking"
								id="parking">
								<option value="Off Street Parking" {{ $ad->parking == 'Off Street Parking' ?
									'selected':'' }}>Off Street Parking</option>
								<option value="Garage Parking" {{ $ad->parking == 'Garage Parking' ?
									'selected':'' }}>Garage Parking</option>
								<option value="No Parking" {{ $ad->parking == 'No Parking' ?
									'selected':'' }}>No Parking</option>
								<option value="See Description" {{ $ad->parking == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('parking')? '
							<p class="help-block">'.$errors->first('parking').'</p>
							':'' !!}
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('utilities')? 'has-error':'' }}">
						<label for="utilities" class="col-sm-4 control-label">Utilities</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="utilities"
								id="utilities">
								<option value="Heat Included" {{ $ad->utilities == 'Heat Included' ? 'selected':''
									}}>Heat Included</option>
								<option value="Electricity Included" {{ $ad->utilities == 'Electricity Included' ?
									'selected':'' }}>Electricity Included</option>
								<option value="No Utilities Included" {{ $ad->utilities == 'No Utilities Included' ?
									'selected':'' }}>No Utilities Included</option>
								<option value="Heat and Electric Included" {{ $ad->utilities ==
									'Heat and Electric Included' ? 'selected':'' }}>Heat and Electric Included</option>
								<option value="See Description" {{ $ad->utilities == 'See Description' ? 'selected':''
                                                                        }}>See Description</option>
							</select> {!! $errors->has('utilities')? '
							<p class="help-block">'.$errors->first('utilities').'</p>
							':'' !!}
						</div>
					</div>

					<legend>Additional Amenities</legend>
					<label> <input type="checkbox" value="1" {{{ (isset($ad->hfloors) && $ad->hfloors == '1') ? "checked" : "" }}} name="hfloors"> Hardwood
						Floors
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->carpet) && $ad->carpet == '1') ? "checked" : "" }}} name="carpet">
						Carpeted Floors
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->tile) && $ad->tile == '1') ? "checked" : "" }}} name="tile"> Tile
						Flooring
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->stainless) && $ad->stainless == '1') ? "checked" : "" }}} name="stainless">
						Stainless Steel Appliances
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->granite) && $ad->granite == '1') ? "checked" : "" }}} name="granite">
						Granite Countertops
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->central) && $ad->central == '1') ? "checked" : "" }}} name="central">
						Central Air Conditioning
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->furnishedapt) && $ad->furnishedapt == '1') ? "checked" : "" }}}
						name="furnishedapt"> Furnished Apartment
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->basementstorage) && $ad->basementstorage == '1') ? "checked" : "" }}}
						name="basementstorage"> Basement Storage
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->fireplace) && $ad->fireplace == '1') ? "checked" : "" }}}
						name="fireplace"> Fireplace
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->yard) && $ad->yard == '1') ? "checked" : "" }}}
						name="yard"> Yard
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->ceiling) && $ad->ceiling == '1') ? "checked" : "" }}}
						name="ceiling"> Ceiling Fan
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->gourmet) && $ad->gourmet == '1') ? "checked" : "" }}}
						name="gourmet"> Gourmet Kitchen
					</label>
					@endif <br /> <br /> 
                    @if($ad->type == "pmc")
					<legend>@lang('app.pmc-amenities')</legend>
					<div class="col-sm-12">
                                                <label> <input type="checkbox" value="1" name="pmcdogs" {{ $ad->pmcdogs ==
							'1'? 'checked="checked"' : '' }}> Dog Friendly
						</label>
                                                <label> <input type="checkbox" value="1" name="pmccats" {{ $ad->pmccats ==
							'1'? 'checked="checked"' : '' }}> Cat Friendly
						</label>
						<label> <input type="checkbox" value="1" name="pmcair" {{ $ad->pmcair ==
							'1'? 'checked="checked"' : '' }}> Air Conditioning
						</label> <label> <input type="checkbox" value="1"
							name="pmcbasketball" {{ $ad->pmcbasketball == '1'? 'checked="checked"'
							: '' }}> Basketball Court
						</label> <label> <input type="checkbox" value="1" name="pmcbusiness"
							{{ $ad->pmcbusiness == '1'? 'checked="checked"' : '' }}> Business
							Center
						</label> <label> <input type="checkbox" value="1" name="pmccable"
							{{ $ad->pmccable == '1'? 'checked="checked"' : '' }}> Cable Ready
						</label> <label> <input type="checkbox" value="1" name="pmccarpeting"
							{{ $ad->pmccarpeting == '1'? 'checked="checked"' : '' }}> Carpeting
						</label> <label> <input type="checkbox" value="1" name="pmcclubhouse"
							{{ $ad->pmcclubhouse == '1'? 'checked="checked"' : '' }}> Clubhouse
						</label> <label> <input type="checkbox" value="1"
							name="pmccontrolled" {{ $ad->pmccontrolled == '1'? 'checked="checked"'
							: '' }}> Controlled Access
						</label> <label> <input type="checkbox" value="1" name="pmcdeck"
							{{ $ad->pmcdeck == '1'? 'checked="checked"' : '' }}> Deck / Balcony
						</label> <label> <input type="checkbox" value="1" name="pmcelevator"
							{{ $ad->pmcelevator == '1'? 'checked="checked"' : '' }}> Elevator
						</label> <label> <input type="checkbox" value="1" name="pmcceiling"
							{{ $ad->pmcceiling == '1'? 'checked="checked"' : '' }}> Ceiling Fan
						</label> <label> <input type="checkbox" value="1" name="pmcfireplace"
							{{ $ad->pmcfireplace == '1'? 'checked="checked"' : '' }}> Fireplace
						</label> <label> <input type="checkbox" value="1" name="pmcfitness"
							{{ $ad->pmcfitness == '1'? 'checked="checked"' : '' }}> Fitness
							Center
						</label> <label> <input type="checkbox" value="1" name="pmcfurnished"
							{{ $ad->pmcfurnished == '1'? 'checked="checked"' : '' }}> Furnished
							Units Available
						</label> <label> <input type="checkbox" value="1" name="pmchandicap"
							{{ $ad->pmchandicap == '1'? 'checked="checked"' : '' }}> Handicap
							Access
						</label> <label> <input type="checkbox" value="1" name="pmchardwood"
							{{ $ad->pmchardwood == '1'? 'checked="checked"' : '' }}> Hardwood
							Floors
						</label> <label> <input type="checkbox" value="1" name="pmcinternet"
							{{ $ad->pmcinternet == '1'? 'checked="checked"' : '' }}> High Speed
							Internet Available
						</label> <label> <input type="checkbox" value="1" name="pmcroom"
							{{ $ad->pmcroom == '1'? 'checked="checked"' : '' }}> Laundry Room
						</label> <label> <input type="checkbox" value="1" name="pmclaundry"
							{{ $ad->pmclaundry == '1'? 'checked="checked"' : '' }}> Laundry in
							Unit
						</label> <label> <input type="checkbox" value="1" name="pmcmedia"
							{{ $ad->pmcmedia == '1'? 'checked="checked"' : '' }}> Media Center
						</label> <label> <input type="checkbox" value="1" name="pmcpool"
							{{ $ad->pmcpool == '1'? 'checked="checked"' : '' }}> Pool
						</label> <label> <input type="checkbox" value="1" name="pmcspa"
							{{ $ad->pmcspa == '1'? 'checked="checked"' : '' }}> Spa / Hot Tub
						</label> <label> <input type="checkbox" value="1" name="pmcstorage"
							{{ $ad->pmcstorage == '1'? 'checked="checked"' : '' }}> Extra
							Storage units
						</label> <label> <input type="checkbox" value="1" name="pmctennis"
							{{ $ad->pmctennis == '1'? 'checked="checked"' : '' }}> Tennis Court
						</label> <label> <input type="checkbox" value="1" name="pmcvaulted"
							{{ $ad->pmcvaulted == '1'? 'checked="checked"' : '' }}> Vaulted
							Ceilings
						</label> <label> <input type="checkbox" value="1" name="pmcwalk"
							{{ $ad->pmcwalk == '1'? 'checked="checked"' : '' }}> Walk-in Closet
						</label> <label> <input type="checkbox" value="1" name="pmcwasher"
							{{ $ad->pmcwasher == '1'? 'checked="checked"' : '' }}> Washer /
							Dryer hookups
						</label> <label> <input type="checkbox" value="1" name="pmcyard"
							{{ $ad->pmcyard == '1'? 'checked="checked"' : '' }}> Yard
						</label> <label> <input type="checkbox" value="1" name="pmcdish"
							{{ $ad->pmcdish == '1'? 'checked="checked"' : '' }}> Dishwasher
						</label> <label> <input type="checkbox" value="1" name="pmcplay"
							{{ $ad->pmcplay == '1'? 'checked="checked"' : '' }}> Playground
						</label> <label> <input type="checkbox" value="1" name="pmcheat"
							{{ $ad->pmcheat == '1'? 'checked="checked"' : '' }}> Heat Included
						</label> <label> <input type="checkbox" value="1" name="pmcwater"
							{{ $ad->pmcwater == '1'? 'checked="checked"' : '' }}> Hot Water Included
						</label> <label> <input type="checkbox" value="1" name="pmcelectric"
							{{ $ad->pmcelectric == '1'? 'checked="checked"' : '' }}> Electricity Included
						</label> <label> <input type="checkbox" value="1" name="pmcgarage"
							{{ $ad->pmcgarage == '1'? 'checked="checked"' : '' }}> Garage Parking
						</label> <label> <input type="checkbox" value="1" name="pmcassigned"
							{{ $ad->pmcassigned == '1'? 'checked="checked"' : '' }}> Assigned Parking
						</label>
					</div>
					@endif

                    @if($ad->type == "pmc")
                    <legend>Website</legend>
					<div
						class="form-group {{ $errors->has('website')? 'has-error':'' }}">
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.website')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="website"
								value="{{ old('website')? old('website') : $ad->website }}"
								name="website" placeholder="@lang('app.website')"> {!!
							$errors->has('website')? '
							<p class="help-block">'.$errors->first('website').'</p>
							':'' !!}
							<p class="help-block">@lang('app.website')</p>
						</div>
					</div>
					
<br /><br />
                    @endif
					@endif

					@if($ad->type == "pmc")
					<legend>PMC Unit Information</legend>

					<legend>Unit 1</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds"
                                                                id="pmcbeds">
                                                                <option value="" {{ $ad->pmcbeds == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths"
								value="{{ isset($ad->pmcbaths) ? $ad->pmcbaths : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent"
								value="{{ isset($ad->pmcrent) ? $ad->pmcrent : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft"
								value="{{ isset($ad->pmcsqft) ? $ad->pmcsqft : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan"
								value="{{ isset($ad->pmcfloorplan) ? $ad->pmcfloorplan : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 2</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds2"
                                                                id="pmcbeds2">
                                                                <option value="" {{ $ad->pmcbeds2 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds2 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds2 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds2 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds2 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds2 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds2 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds2 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds2 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds2 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds2 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds2 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths2"
								value="{{ isset($ad->pmcbaths2) ? $ad->pmcbaths2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent2"
								value="{{ isset($ad->pmcrent2) ? $ad->pmcrent2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft2"
								value="{{ isset($ad->pmcsqft2) ? $ad->pmcsqft2 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan2')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan2"
								value="{{ isset($ad->pmcfloorplan2) ? $ad->pmcfloorplan2 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 3</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds3"
                                                                id="pmcbeds3">
                                                                <option value="" {{ $ad->pmcbeds3 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds3 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds3 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds3 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds3 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds3 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds3 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds3 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds3 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds3 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds3 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds3 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths3"
								value="{{ isset($ad->pmcbaths3) ? $ad->pmcbaths3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent3"
								value="{{ isset($ad->pmcrent3) ? $ad->pmcrent3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft3"
								value="{{ isset($ad->pmcsqft3) ? $ad->pmcsqft3 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan3')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan3"
								value="{{ isset($ad->pmcfloorplan3) ? $ad->pmcfloorplan3 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 4</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds4"
                                                                id="pmcbeds4">
                                                                <option value="" {{ $ad->pmcbeds4 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds4 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds4 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds4 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds4 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds4 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds4 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds4 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <opti{{ $ad->state_id == 1 ? 'selected':'' }}on value="7" {{ $ad->pmcbeds4 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds4 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds4 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds4 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths4"
								value="{{ isset($ad->pmcbaths4) ? $ad->pmcbaths4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent4"
								value="{{ isset($ad->pmcrent4) ? $ad->pmcrent4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft4"
								value="{{ isset($ad->pmcsqft4) ? $ad->pmcsqft4 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan4')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan4"
								value="{{ isset($ad->pmcfloorplan4) ? $ad->pmcfloorplan4 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 5</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds5"
                                                                id="pmcbeds5">
                                                                <option value="" {{ $ad->pmcbeds5 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds5 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds5 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds5 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds5 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds5 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds5 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds5 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds5 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds5 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds5 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds5 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths5"
								value="{{ isset($ad->pmcbaths5) ? $ad->pmcbaths5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent5"
								value="{{ isset($ad->pmcrent5) ? $ad->pmcrent5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft5"
								value="{{ isset($ad->pmcsqft5) ? $ad->pmcsqft5 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan5')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan5"
								value="{{ isset($ad->pmcfloorplan5) ? $ad->pmcfloorplan5 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 6</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds6"
                                                                id="pmcbeds6">
                                                                <option value="" {{ $ad->pmcbeds6 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds6 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds6 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds6 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds6 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds6 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds6 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds6 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds6 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds6 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds6 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds6 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths6"
								value="{{ isset($ad->pmcbaths6) ? $ad->pmcbaths6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent6"
								value="{{ isset($ad->pmcrent6) ? $ad->pmcrent6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft6"
								value="{{ isset($ad->pmcsqft6) ? $ad->pmcsqft6 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan6')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan6"
								value="{{ isset($ad->pmcfloorplan6) ? $ad->pmcfloorplan6 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 7</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds7"
                                                                id="pmcbeds7">
                                                                <option value="" {{ $ad->pmcbeds7 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds7 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds7 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds7 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds7 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds7 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds7 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds7 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds7 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds7 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds7 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds7 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths7"
								value="{{ isset($ad->pmcbaths7) ? $ad->pmcbaths7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent7"
								value="{{ isset($ad->pmcrent7) ? $ad->pmcrent7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft7"
								value="{{ isset($ad->pmcsqft7) ? $ad->pmcsqft7 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan7')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan7"
								value="{{ isset($ad->pmcfloorplan7) ? $ad->pmcfloorplan7 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 8</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds8"
                                                                id="pmcbeds8">
                                                                <option value="" {{ $ad->pmcbeds8 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds8 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds8 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds8 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds8 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds8 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds8 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds8 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds8 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds8 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds8 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds8 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths8"
								value="{{ isset($ad->pmcbaths8) ? $ad->pmcbaths8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent8"
								value="{{ isset($ad->pmcrent8) ? $ad->pmcrent8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft8"
								value="{{ isset($ad->pmcsqft8) ? $ad->pmcsqft8 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan8')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan8"
								value="{{ isset($ad->pmcfloorplan8) ? $ad->pmcfloorplan8 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 9</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds9"
                                                                id="pmcbeds9">
                                                                <option value="" {{ $ad->pmcbeds9 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds9 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds9 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds9 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds9 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds9 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds9 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds9 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds9 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds9 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds9 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds9 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths9"
								value="{{ isset($ad->pmcbaths9) ? $ad->pmcbaths9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent9"
								value="{{ isset($ad->pmcrent9) ? $ad->pmcrent9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft9"
								value="{{ isset($ad->pmcsqft9) ? $ad->pmcsqft9 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan9')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan9"
								value="{{ isset($ad->pmcfloorplan9) ? $ad->pmcfloorplan9 : null }}"
								class="form-control">
						</div>
					</div>

					<legend>Unit 10</legend>
					<div
						class="form-group {{ $errors->has('pmcbeds10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Beds</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="pmcbeds10"
                                                                id="pmcbeds10">
                                                                <option value="" {{ $ad->pmcbeds10 == '' ?
                                                                        'selected':'' }}></option>
                                                                <option value="0.5" {{ $ad->pmcbeds10 == '0.5' ?
                                                                        'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->pmcbeds10 == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->pmcbeds10 == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->pmcbeds10 == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->pmcbeds10 == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->pmcbeds10 == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->pmcbeds10 == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->pmcbeds10 == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->pmcbeds10 == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->pmcbeds10 == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->pmcbeds10 == '10' ?
                                                                        'selected':'' }}>10</option>
                                                        </select>
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcbaths10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Baths</label>
						<div class="col-sm-8">
							<input type="text" name="pmcbaths10"
								value="{{ isset($ad->pmcbaths10) ? $ad->pmcbaths10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcrent10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" name="pmcrent10"
								value="{{ isset($ad->pmcrent10) ? $ad->pmcrent10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcsqft10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Square Feet</label>
						<div class="col-sm-8">
							<input type="text" name="pmcsqft10"
								value="{{ isset($ad->pmcsqft10) ? $ad->pmcsqft10 : null }}"
								class="form-control">
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('pmcfloorplan10')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Floorplan</label>
						<div class="col-sm-8">
							<input type="text" name="pmcfloorplan10"
								value="{{ isset($ad->pmcfloorplan10) ? $ad->pmcfloorplan10 : null }}"
								class="form-control">
						</div>
					</div>

					@endif @if($ad->type == "pmc")
					<legend>Office Hours</legend>
					<div class="form-group {{ $errors->has('mh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Monday</label>
						<div class="col-sm-8">
							<input type="text" name="mh" value="{{ $ad->mh }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('th')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Tuesday</label>
						<div class="col-sm-8">
							<input type="text" name="th" value="{{ $ad->th }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('wh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Wednesday</label>
						<div class="col-sm-8">
							<input type="text" name="wh" value="{{ $ad->wh }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('rh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Thursday</label>
						<div class="col-sm-8">
							<input type="text" name="rh" value="{{ $ad->rh }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('fh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Friday</label>
						<div class="col-sm-8">
							<input type="text" name="fh" value="{{ $ad->fh }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('sh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Saturday</label>
						<div class="col-sm-8">
							<input type="text" name="sh" value="{{ $ad->sh }}"
								class="form-control">
						</div>
					</div>
					<div class="form-group {{ $errors->has('uh')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Sunday</label>
						<div class="col-sm-8">
							<input type="text" name="uh" value="{{ $ad->uh }}"
								class="form-control">
						</div>
					</div>

					<hr />

					<legend>Office Phone</legend>
					<div
						class="form-group {{ $errors->has('officephone')? 'has-error':'' }}">
						<label for="" class="col-sm-4 control-label">Office Phone</label>
						<div class="col-sm-8">
							<input type="text" name="officephone"
								value="{{ $ad->officephone }}" class="form-control">
						</div>
					</div>
					@endif