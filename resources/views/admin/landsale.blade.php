					{{ Form::open(['id'=>'adsPostForm', 'class' => 'form-horizontal',
					'files' => true]) }}

					<legend>@lang('app.ad_info')</legend>
					
					<div
    						class="form-group {{ $errors->has('start_date')? 'has-error':'' }}">
    						<label for="start_date" class="col-sm-4 control-label">Start Date</label>
    						<div class="col-sm-8">
    							<input type="text" maxlength="64" class="date form-control" id="datepicker2"
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
							<input type="text" class="form-control" id="ad_comment"
								value="{{ old('ad_comment') ? old('ad_comment') : $ad->comment }}"
								name="ad_comment" placeholder="@lang('app.ad_comment')"  maxlength="64"> {!!
							$errors->has('ad_comment')? '
							<p class="help-block">'.$errors->first('ad_comment').'</p>
							':'' !!}
							<p class="text-info">@lang('app.comment_info')</p>
						</div>
					</div>
					
					<div class="form-group {{ $errors->has('land_type')? 'has-error':'' }}">
							<label for="land_type" class="col-sm-4 control-label">Land Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="land_type" id="land_status">
                                    <option value=""></option>
                                    <option value="residential" {{ $ad->land_type == 'residential' ? 'selected':'' }}>Residential</option>
                                    <option value="commercial" {{ $ad->land_type == 'commercial' ? 'selected':'' }}>Commercial</option>
                                </select> {!! $errors->has('land_type')? '
								<p class="help-block">'.$errors->first('land_type').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group  {{ $errors->has('price')? 'has-error':'' }}">
							<label for="price" class="col-md-4 control-label">@lang('app.price')</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="text" placeholder="@lang('app.ex_price')"
										class="form-control" name="price" id="price"
										value="{{ old('price') ? old('price') : $ad->price }}">
								</div>
							</div>
							<div class="col-sm-8 col-md-offset-4">
								{!! $errors->has('price')? '
								<p class="help-block">'.$errors->first('price').'</p>
								':'' !!}
							</div>
						</div>

						<legend>Land Detail</legend>

						<div
							class="form-group {{ $errors->has('taxes')? 'has-error':'' }}">
							<label for="taxes" class="col-sm-4 control-label">Taxes</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="taxes"
									value="{{ old('taxes') ? old('taxes') : $ad->taxes }}" name="taxes"
									placeholder="Taxes"> {!!
								$errors->has('taxes')? '
								<p class="help-block">'.$errors->first('taxes').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('tax_year')? 'has-error':'' }}">
							<label for="tax_year" class="col-sm-4 control-label">Tax Year</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="tax_year"
									value="{{ old('tax_year') ? old('tax_year') : $ad->tax_year }}" name="tax_year"
									placeholder="Tax Year"> {!!
								$errors->has('tax_year')? '
								<p class="help-block">'.$errors->first('tax_year').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('assessment')? 'has-error':'' }}">
							<label for="assessment" class="col-sm-4 control-label">Assessment</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="assessment"
									value="{{ old('assessment') ? old('assessment') : $ad->assessment }}" name="assessment"
									placeholder="Assessment"> {!!
								$errors->has('assessment')? '
								<p class="help-block">'.$errors->first('assessment').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('lot_sqft')? 'has-error':'' }}">
							<label for="lot_sqft" class="col-sm-4 control-label">Lot Square Footage</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="lot_sqft"
									value="{{ old('lot_sqft') ? old('lot_sqft') : $ad->lot_sqft }}" name="lot_sqft"
									placeholder="Lot Square Footage"> {!!
								$errors->has('lot_sqft')? '
								<p class="help-block">'.$errors->first('lot_sqft').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('lot_acres')? 'has-error':'' }}">
							<label for="lot_acres" class="col-sm-4 control-label">Lot Acres </label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="lot_acres"
									value="{{ old('lot_acres') ? old('lot_acres') : $ad->lot_acres }}" name="lot_acres"
									placeholder="Lot Acres"> {!!
								$errors->has('lot_acres')? '
								<p class="help-block">'.$errors->first('lot_acres').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('lot_frontage')? 'has-error':'' }}">
							<label for="lot_frontage" class="col-sm-4 control-label">Lot Frontage </label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="lot_frontage"
									value="{{ old('lot_frontage') ? old('lot_frontage') : $ad->lot_frontage }}" name="lot_frontage"
									placeholder="Lot Frontage"> {!!
								$errors->has('lot_frontage')? '
								<p class="help-block">'.$errors->first('lot_frontage').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('approved_lots')? 'has-error':'' }}">
							<label for="approved_lots" class="col-sm-4 control-label">Number of Approved Lots</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lot_frontage"
									value="{{ old('approved_lots') ? old('approved_lots') : $ad->approved_lots }}" name="approved_lots"
									placeholder="Number of Approved Lots"> {!!
								$errors->has('approved_lots')? '
								<p class="help-block">'.$errors->first('approved_lots').'</p>
								':'' !!}
							</div>
						</div>
						
						<div class="form-group {{ $errors->has('approvals_needed')? 'has-error':'' }}">
							<label for="approvals_needed" class="col-sm-4 control-label">Approval(s) Needed</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="approvals_needed"
                                                                id="approvals_needed">
                                                                <option value=""></option>
<option value="Yes" {{ $ad->approvals_needed == 'Yes' ? 'selected':'' }}>Yes</option>
<option value="No" {{ $ad->approvals_needed == 'No' ? 'selected':'' }}>No</option>
                                                        </select> {!! $errors->has('approvals_needed')? '
								<p class="help-block">'.$errors->first('approvals_needed').'</p>
								':'' !!}
							</div>
						</div>

                                                <div class="form-group {{ $errors->has('land_status')? 'has-error':'' }}">
							<label for="land_status" class="col-sm-4 control-label">Land Status</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="land_status"
                                                                id="land_status">
                                                                <option value=""></option>
                                                                <option value="approval" {{ $ad->land_status == 'approval' ? 'selected':'' }}>Approval(s) Needed</option>
<option value="Finished Lot" {{ $ad->land_status == 'Finished Lot' ? 'selected':'' }}>Finished Lot</option>
<option value="Other" {{ $ad->land_status == 'Other' ? 'selected':'' }}>Other</option>
<option value="Raw Land" {{ $ad->land_status == 'Raw Land' ? 'selected':'' }}>Raw Land</option>
<option value="Rough Grade" {{ $ad->land_status == 'Rough Grade' ? 'selected':'' }}>Rough Grade</option>
                                                        </select> {!! $errors->has('land_status')? '
								<p class="help-block">'.$errors->first('land_status').'</p>
								':'' !!}
							</div>
						</div>

                                                <div class="form-group {{ $errors->has('prop_zoning')? 'has-error':'' }}">
							<label for="prop_zoning" class="col-sm-4 control-label">Property Zoning</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="prop_zoning"
                                                                id="prop_zoning">
                                                                <option value=""></option>
                                                                <option value="Commercial" {{ $ad->prop_zoning == 'Commercial' ? 'selected':'' }}>Commercial</option>
<option value="Residential" {{ $ad->prop_zoning == 'Residential' ? 'selected':'' }}>Residential</option>
                                                        </select> {!! $errors->has('prop_zoning')? '
								<p class="help-block">'.$errors->first('prop_zoning').'</p>
								':'' !!}
							</div>
						</div>
						
						<div
							class="form-group {{ $errors->has('proposed_use')? 'has-error':'' }}">
							<label for="proposed_use" class="col-sm-4 control-label">Proposed Use</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="proposed_use"
									value="{{ old('proposed_use') ? old('proposed_use') : $ad->proposed_use }}" name="proposed_use"
									placeholder="Proposed Use"> {!!
								$errors->has('proposed_use')? '
								<p class="help-block">'.$errors->first('proposed_use').'</p>
								':'' !!}
							</div>
						</div>

                                                <div class="form-group {{ $errors->has('area_utilities')? 'has-error':'' }}">
							<label for="area_utilities" class="col-sm-4 control-label">Utilities Available</label>
							<div class="col-sm-8">
								<label> <input type="checkbox" value="1" {{{ (isset($ad->electric_lu) && $ad->electric_lu == '1') ? "checked" : "" }}} name="electric_lu"> Electric
            					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->gas_lu) && $ad->gas_lu == '1') ? "checked" : "" }}} name="gas_lu">
            						Gas
            					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->muniwater_lu) && $ad->muniwater_lu == '1') ? "checked" : "" }}} name="muniwater_lu"> Muni Water
            					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->none_lu) && $ad->none_lu == '1') ? "checked" : "" }}} name="none_lu">
            						None
            					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->sewer_lu) && $ad->sewer_lu == '1') ? "checked" : "" }}} name="sewer_lu">
            						Sewer
            					</label>
								<!--<select class="form-control select2NoSearch" name="area_utilities"
                                                                id="area_utilities">
                                                                <option value=""></option>
                                                                <option value="Electric" {{ $ad->area_utilities == 'Electric' ? 'selected':'' }}>Electric</option>
<option value="Gas" {{ $ad->area_utilities == 'Gas' ? 'selected':'' }}>Gas</option>
<option value="Muni Water" {{ $ad->area_utilities == 'Muni Water' ? 'selected':'' }}>Muni Water</option>
<option value="None" {{ $ad->area_utilities == 'None' ? 'selected':'' }}>None</option>
<option value="Sewer" {{ $ad->area_utilities == 'Sewer' ? 'selected':'' }}>Sewer</option>
                                                        </select>--> {!! $errors->has('area_utilities')? '
								<p class="help-block">'.$errors->first('area_utilities').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('road')? 'has-error':'' }}">
							<label for="road" class="col-sm-4 control-label">Road</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="road"
                                                                id="road">
                                                                <option value=""></option>
                                                                <option value="blacktar" {{ $ad->road == 'blacktar' ? 'selected':'' }}>Black Tar</option>
<option value="Blacktop" {{ $ad->road == 'Blacktop' ? 'selected':'' }}>Blacktop</option>
<option value="Concrete" {{ $ad->road == 'Concrete' ? 'selected':'' }}>Concrete</option>
<option value="Dirt" {{ $ad->road == 'Dirt' ? 'selected':'' }}>Dirt</option>
<option value="Gravel" {{ $ad->road == 'Gravel' ? 'selected':'' }}>Gravel</option>
<option value="High Traffic" {{ $ad->road == 'High Traffic' ? 'selected':'' }}>High Traffic</option>
<option value="Municipal" {{ $ad->road == 'Municipal' ? 'selected':'' }}>Municipal</option>
<option value="None" {{ $ad->road == 'None' ? 'selected':'' }}>None</option>
<option value="Oil" {{ $ad->road == 'Oil' ? 'selected':'' }}>Oil</option>
<option value="Paper" {{ $ad->road == 'Paper' ? 'selected':'' }}>Paper</option>
<option value="Private" {{ $ad->road == 'Private' ? 'selected':'' }}>Private</option>
<option value="Sidewalks" {{ $ad->road == 'Sidewalks' ? 'selected':'' }}>Sidewalks</option>
<option value="State" {{ $ad->road == 'State' ? 'selected':'' }}>State</option>
<option value="St Lites" {{ $ad->road == 'St Lites' ? 'selected':'' }}>St Lites</option>
<option value="Tar & Chip" {{ $ad->road == 'Tar & Chip' ? 'selected':'' }}>Tar & Chip</option>
<option value="Unimproved" {{ $ad->road == 'Unimproved' ? 'selected':'' }}>Unimproved</option>
                                                        </select> {!! $errors->has('road')? '
								<p class="help-block">'.$errors->first('road').'</p>
								':'' !!}
							</div>
						</div>

<legend>Water Supply</legend>

						<div class="form-group {{ $errors->has('water')? 'has-error':'' }}">
							<label for="water" class="col-sm-4 control-label">Water</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="water"
                                                                id="water">
                                                                <option value=""></option>
                                                                <option value="assessment" {{ $ad->water == 'assessment' ? 'selected':'' }}>Assessment</option>
<option value="Available" {{ $ad->water == 'Available' ? 'selected':'' }}>Available</option>
<option value="Cistern" {{ $ad->water == 'Cistern' ? 'selected':'' }}>Cistern</option>
<option value="Common Meter" {{ $ad->water == 'Common Meter' ? 'selected':'' }}>Common Meter</option>
<option value="Connected" {{ $ad->water == 'Connected' ? 'selected':'' }}>Connected</option>
<option value="In Fee" {{ $ad->water == 'In Fee' ? 'selected':'' }}>In Fee</option>
<option value="Individual Meter" {{ $ad->water == 'Individual Meter' ? 'selected':'' }}>Individual Meter</option>
<option value="Municipal" {{ $ad->water == 'Municipal' ? 'selected':'' }}>Municipal</option>
<option value="None" {{ $ad->water == 'None' ? 'selected':'' }}>None</option>
<option value="Private" {{ $ad->water == 'Private' ? 'selected':'' }}>Private</option>
<option value="Public Available" {{ $ad->water == 'Public Available' ? 'selected':'' }}>Public Available</option>
<option value="Public Connected" {{ $ad->water == 'Public Connected' ? 'selected':'' }}>Public Connected</option>
<option value="Well" {{ $ad->water == 'Well' ? 'selected':'' }}>Well</option>
                                                        </select> {!! $errors->has('water')? '
								<p class="help-block">'.$errors->first('water').'</p>
								':'' !!}
							</div>
						</div>

<legend>Topography</legend>

						<div class="form-group {{ $errors->has('topography')? 'has-error':'' }}">
							<label for="topography" class="col-sm-4 control-label">Topography</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="topography"
                                                                id="topography">
                                                                <option value=""></option>
                                                                <option value="Level" {{ $ad->topography == 'Level' ? 'selected':'' }}>Level</option>
<option value="Lowland" {{ $ad->topography == 'Lowland' ? 'selected':'' }}>Lowland</option>
<option value="Open" {{ $ad->topography == 'Open' ? 'selected':'' }}>Open</option>
<option value="Rocky" {{ $ad->topography == 'Rocky' ? 'selected':'' }}>Rocky</option>
<option value="Rolling" {{ $ad->topography == 'Rolling' ? 'selected':'' }}>Rolling</option>
<option value="Wetlands" {{ $ad->topography == 'Wetlands' ? 'selected':'' }}>Wetlands</option>
<option value="Wooded" {{ $ad->topography == 'Wooded' ? 'selected':'' }}>Wooded</option>
                                                        </select> {!! $errors->has('topography')? '
								<p class="help-block">'.$errors->first('topography').'</p>
								':'' !!}
							</div>
						</div>

						<div
						class="form-group {{ $errors->has('commission')? 'has-error':'' }}">
						<label for="commission" class="col-sm-4 control-label">Commission Offered</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="commission"
								value="{{ old('commission')? old('commission') : $ad->commission }}" name="commission"
								placeholder="Commission Offered"> {!!
							$errors->has('ad_comment')? '
							<p class="help-block">'.$errors->first('ad_comment').'</p>
							':'' !!}
						</div>
					</div>