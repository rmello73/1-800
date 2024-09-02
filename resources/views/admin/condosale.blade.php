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
						<label for="ad_title" class="col-sm-4 control-label">@lang('app.property_name')</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="ad_title"
								value="{{ old('ad_title')? old('ad_title') : $ad->title }}" name="ad_title"
								placeholder="@lang('app.property_name')"> {!!
							$errors->has('ad_title')? '
							<p class="help-block">'.$errors->first('ad_title').'</p>
							':'' !!}
							<p class="text-info">@lang('app.great_title_info')</p>
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('ad_description')? 'has-error':'' }}">
						<label for="ad_description" class="col-sm-4 control-label">@lang('app.ad_description')</label>
						<div class="col-sm-8">
							<textarea name="ad_description" class="form-control" rows="8">{{ old('ad_description')? old('ad_description') : $ad->description }}</textarea>
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
								value="{{ old('ad_comment')? old('ad_comment') : $ad->comment }}" name="ad_comment"
								placeholder="@lang('app.ad_comment')" maxlength="64"> {!!
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

										<div class="form-group {{ $errors->has('sale_type')? 'has-error':'' }}">
						<label for="sale_type" class="col-sm-4 control-label">@lang('app.property_type')</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="sale_type"
								id="sale_type">
								<option value="">Please select Property Type</option>
								<option value="Condo" {{ $ad->sale_type == 'Condo' ?
                                                                        'selected':'' }}>@lang('app.condo')</option>
								<option value="Single-Family" {{ $ad->sale_type == 'Single-Family' ?
                                                                        'selected':'' }}>@lang('app.single')</option>
								<option value="Multi-Family" {{ $ad->sale_type == 'Multi-Family' ?
                                                                        'selected':'' }}>@lang('app.multi')</option>
                                                                <option value="land_sale" {{ $ad->sale_type == 'land_sale' ?
                                                                        'selected':'' }}>Land</option>
							</select> {!! $errors->has('sale_type')? '
							<p class="help-block">'.$errors->first('sale_type').'</p>
							':'' !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('condo_style')? 'has-error':'' }}">
						<label for="condo_style" class="col-sm-4 control-label">Property Style</label>
						<div class="col-sm-8">
							<select class="form-control select2NoSearch" name="condo_style"
								id="condo_style">
								<option value="">Please select Property Style</option>
                                                                <option value="Below Ground Unit" {{ $ad->condo_style == 'Below Ground Unit' ?
                                                                        'selected':'' }}>Below Ground Unit</option>
<option value="Co-Op" {{ $ad->condo_style == 'Co-Op' ?
                                                                        'selected':'' }}>Co-Op</option>
<option value="Dock" {{ $ad->condo_style == 'Dock' ?
                                                                        'selected':'' }}>Dock</option>
<option value="High Rise" {{ $ad->condo_style == 'High Rise' ?
                                                                        'selected':'' }}>High Rise</option>
<option value="Loft" {{ $ad->condo_style == 'Loft' ?
                                                                        'selected':'' }}>Loft</option>
<option value="One Level" {{ $ad->condo_style == 'One Level' ?
                                                                        'selected':'' }}>One Level</option>
<option value="Other" {{ $ad->condo_style == 'Other' ?
                                                                        'selected':'' }}>Other</option>
<option value="Slip" {{ $ad->condo_style == 'Slip' ?
                                                                        'selected':'' }}>Slip</option>
<option value="Town House" {{ $ad->condo_style == 'Town House' ?
                                                                        'selected':'' }}>Town House</option>
							</select> {!! $errors->has('condo_style')? '
							<p class="help-block">'.$errors->first('condo_style').'</p>
							':'' !!}
						</div>
					</div>

						<div class="form-group  {{ $errors->has('price')? 'has-error':'' }}">
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

						<div class="form-group  {{ $errors->has('square_unit_space')? 'has-error':'' }}">
							<label for="square_unit_space" class="col-md-4 control-label">@lang('app.square_unit_space')</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="text" placeholder="@lang('app.square_unit_space')"
										class="form-control" name="square_unit_space" id="square_unit_space"
										value="{{ old('square_unit_space')? old('square_unit_space') : $ad->square_unit_space }}">
								</div>
							</div>
							<div class="col-sm-8 col-md-offset-4">
								{!! $errors->has('square_unit_space')? '
								<p class="help-block">'.$errors->first('square_unit_space').'</p>
								':'' !!}
							</div>
						</div>

						<legend>@lang('app.property_detail')</legend>

						<div
							class="form-group {{ $errors->has('year_built')? 'has-error':'' }}">
							<label for="year_built" class="col-sm-4 control-label">Year Built</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="year_built"
									value="{{ old('year_built')? old('year_built') : $ad->year_built }}" name="year_built"
									placeholder="Year Built"> {!!
								$errors->has('year_built')? '
								<p class="help-block">'.$errors->first('year_built').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('taxes')? 'has-error':'' }}">
							<label for="taxes" class="col-sm-4 control-label">Taxes</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="taxes"
									value="{{ old('taxes')? old('taxes') : $ad->taxes }}" name="taxes"
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
									value="{{ old('tax_year')? old('tax_year') : $ad->tax_year }}" name="tax_year"
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
								<input type="text" class="form-control" id="assessment"
									value="{{ old('assessment')? old('assessment') : $ad->assessment }}" name="assessment"
									placeholder="Assessment"> {!!
								$errors->has('assessment')? '
								<p class="help-block">'.$errors->first('assessment').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('county')? 'has-error':'' }}">
							<label for="county" class="col-sm-4 control-label">County</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="county"
									value="{{ old('county')? old('county') : $ad->county }}" name="county"
									placeholder="County"> {!!
								$errors->has('county')? '
								<p class="help-block">'.$errors->first('county').'</p>
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

						<div class="form-group {{ $errors->has('attached_bath')? 'has-error':'' }}">
							<label for="attached_bath" class="col-sm-4 control-label">Full Bathrooms</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="attached_bath"
                                                                id="attached_bath">
                                                                <option value=""></option>
                                                                <option value="0" {{ $ad->attached_bath == '0' ?
                                                                        'selected':'' }}>0</option>
                                                                <option value="1" {{ $ad->attached_bath == '1' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->attached_bath == '2' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->attached_bath == '3' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->attached_bath == '4' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->attached_bath == '5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->attached_bath == '6' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->attached_bath == '7' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->attached_bath == '8' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->attached_bath == '9' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->attached_bath == '10' ?
                                                                        'selected':'' }}>10</option>

                                                        </select> {!! $errors->has('attached_bath')? '
								<p class="help-block">'.$errors->first('attached_bath').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('half_bath')? 'has-error':'' }}">
							<label for="half_bath" class="col-sm-4 control-label">Half Bathrooms</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="half_bath"
                                                                id="half_bath">
                                                                <option value=""></option>
                                                                <option value="0" {{ $ad->half_bath == '0' ?
                                                                        'selected':'' }}>0</option>
                                                                <option value="0.5" {{ $ad->half_bath == '0.5' ?
                                                                        'selected':'' }}>1</option>
                                                                <option value="1" {{ $ad->half_bath == '1' ?
                                                                        'selected':'' }}>2</option>
                                                                <option value="1.5" {{ $ad->half_bath == '1.5' ?
                                                                        'selected':'' }}>3</option>
                                                                <option value="2" {{ $ad->half_bath == '2' ?
                                                                        'selected':'' }}>4</option>
                                                                <option value="2.5" {{ $ad->half_bath == '2.5' ?
                                                                        'selected':'' }}>5</option>
                                                                <option value="3" {{ $ad->half_bath == '3' ?
                                                                        'selected':'' }}>6</option>
                                                                <option value="3.5" {{ $ad->half_bath == '3.5' ?
                                                                        'selected':'' }}>7</option>
                                                                <option value="4" {{ $ad->half_bath == '4' ?
                                                                        'selected':'' }}>8</option>
                                                                <option value="4.5" {{ $ad->half_bath == '4.5' ?
                                                                        'selected':'' }}>9</option>
                                                                <option value="5" {{ $ad->half_bath == '5' ?
                                                                        'selected':'' }}>10</option>

                                                        </select> {!! $errors->has('half_bath')? '
								<p class="help-block">'.$errors->first('half_bath').'</p>
								':'' !!}
							</div>
						</div>

					<div
						class="form-group {{ $errors->has('lot_size')? 'has-error':'' }}">
						<label for="lot_size" class="col-sm-4 control-label">Lot Size</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="lot_size"
								value="{{ old('lot_size')? old('lot_size') : $ad->lot_size }}" name="lot_size"
								placeholder="Lot Size"> {!!
							$errors->has('lot_size')? '
							<p class="help-block">'.$errors->first('lot_size').'</p>
							':'' !!}
						</div>
					</div>

						<div class="form-group {{ $errors->has('water')? 'has-error':'' }}">
							<label for="water" class="col-sm-4 control-label">Water</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="water"
                                                                id="water">
                                                                <option value=""></option>
<option value="Available" {{ $ad->water == 'Available' ? 'selected':'' }}>Available</option>
<option value="Cistern" {{ $ad->water == 'Cistern' ? 'selected':'' }}>Cistern</option>
<option value="Common Meter" {{ $ad->water == 'Common Meter' ? 'selected':'' }}>Common Meter</option>
<option value="Connected" {{ $ad->water == 'Connected' ? 'selected':'' }}>Connected</option>
<option value="In Fee" {{ $ad->water == 'In Fee' ? 'selected':'' }}>In Fee</option>
<option value="Individual Meter" {{ $ad->water == 'Individual Meter' ? 'selected':'' }}>Individual Meter</option>
<option value="Municipal" {{ $ad->water == 'Municipal' ? 'selected':'' }}>Municipal</option>
<option value="None" {{ $ad->water == 'None' ? 'selected':'' }}>None</option>
<option value="private" {{ $ad->water == 'Private' ? 'selected':'' }}>Private</option>
<option value="Public Available" {{ $ad->water == 'Public Available' ? 'selected':'' }}>Public Available</option>
<option value="Public Connected" {{ $ad->water == 'Public Connected' ? 'selected':'' }}>Public Connected</option>
<option value="Well" {{ $ad->water == 'Well' ? 'selected':'' }}>Well</option>
                                                        </select> {!! $errors->has('water')? '
								<p class="help-block">'.$errors->first('water').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('sewer')? 'has-error':'' }}">
							<label for="sewer" class="col-sm-4 control-label">Sewer</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="sewer"
                                                                id="sewer">
                                                                <option value=""></option>
<option value="Available" {{ $ad->sewer == 'Available' ? 'selected':'' }}>Available</option>
<option value="Cesspool" {{ $ad->sewer == 'Cesspool' ? 'selected':'' }}>Cesspool</option>
<option value="Common Meter" {{ $ad->sewer == 'Common Meter' ? 'selected':'' }}>Common Meter</option>
<option value="Connected" {{ $ad->sewer == 'Connected' ? 'selected':'' }}>Connected</option>
<option value="In Fee" {{ $ad->sewer == 'In Fee' ? 'selected':'' }}>In Fee</option>
<option value="Municipal" {{ $ad->sewer == 'Municipal' ? 'selected':'' }}>Municipal</option>
<option value="None" {{ $ad->sewer == 'None' ? 'selected':'' }}>None</option>
<option value="Other" {{ $ad->sewer == 'Other' ? 'selected':'' }}>Other</option>
<option value="Pre-Treatment" {{ $ad->sewer == 'Pre-Treatment' ? 'selected':'' }}>Pre-Treatment</option>
<option value="Public Avail" {{ $ad->sewer == 'Public Avail' ? 'selected':'' }}>Public Avail</option>
<option value="Septic System" {{ $ad->sewer == 'Septic System' ? 'selected':'' }}>Septic System</option>
<option value="Storm" {{ $ad->sewer == 'Storm' ? 'selected':'' }}>Storm</option>
<option value="Unknown" {{ $ad->sewer == 'Unknown' ? 'selected':'' }}>Unknown</option>
                                                        </select> {!! $errors->has('sewer')? '
								<p class="help-block">'.$errors->first('sewer').'</p>
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

					<legend>Additional Details</legend>

						<legend>Condo Details</legend>

						<div
							class="form-group {{ $errors->has('complex_name')? 'has-error':'' }}">
							<label for="complex_name" class="col-sm-4 control-label">Complex Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="complex_name"
									value="{{ old('complex_name')? old('complex_name') : $ad->complex_name }}" name="complex_name"
									placeholder="Complex Name"> {!!
								$errors->has('complex_name')? '
								<p class="help-block">'.$errors->first('complex_name').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('condo_fee')? 'has-error':'' }}">
							<label for="condo_fee" class="col-sm-4 control-label">HOA Fee</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="condo_fee"
									value="{{ old('condo_fee')? old('condo_fee') : $ad->condo_fee }}" name="condo_fee"
									placeholder="HOA Fee"> {!!
								$errors->has('condo_fee')? '
								<p class="help-block">'.$errors->first('condo_fee').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('assoc_fee')? 'has-error':'' }}">
							<label for="assoc_fee" class="col-sm-4 control-label">HOA Fee Frequency</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="assoc_fee"
                                                                id="assoc_fee">
                                                                <option value=""></option>
                                                                <option value="Per Month" {{ $ad->assoc_fee == 'Per Month' ? 'selected':'' }}>Per Month</option>
                                                                <option value="Quarterly" {{ $ad->assoc_fee == 'Quarterly' ? 'selected':'' }}>Quarterly</option>
                                                                <option value="Annually" {{ $ad->assoc_fee == 'Annually' ? 'selected':'' }}>Annually</option>
                                                        </select> {!! $errors->has('assoc_fee')? '
								<p class="help-block">'.$errors->first('assoc_fee').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('total_units')? 'has-error':'' }}">
							<label for="total_units" class="col-sm-4 control-label">Total Units in Complex</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="total_units"
									value="{{ old('total_units')? old('total_units') : $ad->total_units }}" name="total_units"
									placeholder="Total Units in Complex"> {!!
								$errors->has('total_units')? '
								<p class="help-block">'.$errors->first('total_units').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('pool_type')? 'has-error':'' }}">
							<label for="pool_type" class="col-sm-4 control-label">Pool Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="pool_type"
                                                                id="pool_type">
                                                                <option value=""></option>
                                                                <option value="aboveground" {{ $ad->pool_type == 'aboveground' ? 'selected':'' }}>Above Ground</option>
                                                                <option value="inground" {{ $ad->pool_type == 'inground' ? 'selected':'' }}>Inground</option>
                                                                <option value="indoor" {{ $ad->pool_type == 'indoor' ? 'selected':'' }}>Indoor</option>
                                                                <option value="none" {{ $ad->pool_type == 'none' ? 'selected':'' }}>None</option>
                                                        </select> {!! $errors->has('pool_type')? '
								<p class="help-block">'.$errors->first('pool_type').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('reg_adult')? 'has-error':'' }}">
							<label for="reg_adult" class="col-sm-4 control-label">Registered Adult Community</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="reg_adult"
                                                                id="reg_adult">
                                                                <option value=""></option>
                                                                <option value="yes" {{ $ad->reg_adult == 'yes' ? 'selected':'' }}>Yes</option>
                                                                <option value="no" {{ $ad->reg_adult == 'no' ? 'selected':'' }}>No</option>
                                                        </select> {!! $errors->has('reg_adult')? '
								<p class="help-block">'.$errors->first('reg_adult').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('timeshare')? 'has-error':'' }}">
							<label for="timeshare" class="col-sm-4 control-label">Timeshare</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="timeshare"
                                                                id="timeshare">
                                                                <option value=""></option>
                                                                <option value="yes" {{ $ad->timeshare == 'yes' ? 'selected':'' }}>Yes</option>
                                                                <option value="no" {{ $ad->timeshare == 'no' ? 'selected':'' }}>No</option>
                                                        </select> {!! $errors->has('timeshare')? '
								<p class="help-block">'.$errors->first('timeshare').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('prop_mgmt')? 'has-error':'' }}">
							<label for="prop_mgmt" class="col-sm-4 control-label">Property Management</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="prop_mgmt"
                                                                id="prop_mgmt">
                                                                <option value=""></option>
                                                                <option value="yes" {{ $ad->prop_mgmt == 'yes' ? 'selected':'' }}>Yes</option>
                                                                <option value="no" {{ $ad->prop_mgmt == 'no' ? 'selected':'' }}>No</option>
                                                        </select> {!! $errors->has('prop_mgmt')? '
								<p class="help-block">'.$errors->first('prop_mgmt').'</p>
								':'' !!}
							</div>
						</div>
						
						<div
						class="form-group {{ $errors->has('floors')? 'has-error':'' }}">
    						<label for="floors" class="col-sm-4 control-label">Pets Allowed?</label>
    						<div class="col-sm-8">
    						    <input type="checkbox" value="1" name="pets_nopets" {{ $ad->pets_nopets == '1'? 'checked="checked"' : '' }}> No Pets</label>
    							<input type="checkbox" value="1" name="pets_cats" {{ $ad->pets_cats == '1'? 'checked="checked"' : '' }}> Cats</label>
    							<input type="checkbox" value="1" name="pets_large" {{ $ad->pets_large == '1'? 'checked="checked"' : '' }}> Large (25 lbs+)</label>
    							<input type="checkbox" value="1" name="pets_norestrict" {{ $ad->pets_norestrict == '1'? 'checked="checked"' : '' }}> No Restrictions</label>
    							<input type="checkbox" value="1" name="pets_negotiable" {{ $ad->pets_negotiable == '1'? 'checked="checked"' : '' }}> Negotiable</label>
    							<input type="checkbox" value="1" name="pets_small" {{ $ad->pets_small == '1'? 'checked="checked"' : '' }}> Small Dogs (under 25 lbs)</label>
    						</div>
					    </div>

					<legend>Heating & Cooling</legend>

						<div class="form-group {{ $errors->has('heating_type')? 'has-error':'' }}">
							<label for="heating_type" class="col-sm-4 control-label">Heating Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="heating_type"
                                                                id="heating_type">
                                                                <option value=""></option>
                                                                <option value="Baseboard" {{ $ad->heating_type == 'Baseboard' ? 'selected':'' }}>Baseboard</option>
<option value="Central Heat" {{ $ad->heating_type == 'Central Heat' ? 'selected':'' }}>Central Heat</option>
<option value="Steam" {{ $ad->heating_type == 'Steam' ? 'selected':'' }}>Steam</option>
<option value="Forced Air" {{ $ad->heating_type == 'Forced Air' ? 'selected':'' }}>Forced Air</option>
<option value="Forced Water" {{ $ad->heating_type == 'Forced Water' ? 'selected':'' }}>Forced Water</option>
<option value="Gas on Gas" {{ $ad->heating_type == 'Gas on Gas' ? 'selected':'' }}>Gas on Gas</option>
<option value="Geothermal" {{ $ad->heating_type == 'Geothermal' ? 'selected':'' }}>Geothermal</option>
<option value="Heat Pump" {{ $ad->heating_type == 'Heat Pump' ? 'selected':'' }}>Heat Pump</option>
<option value="Hydro-Air" {{ $ad->heating_type == 'Hydro-Air' ? 'selected':'' }}>Hydro-Air</option>
<option value="No Heat" {{ $ad->heating_type == 'No Heat' ? 'selected':'' }}>No Heat</option>
<option value="Other Heat" {{ $ad->heating_type == 'Other Heat' ? 'selected':'' }}>Other Heat</option>
<option value="Partially Heated" {{ $ad->heating_type == 'Partially Heated' ? 'selected':'' }}>Partially Heated</option>
<option value="Radiant Heat" {{ $ad->heating_type == 'Radiant Heat' ? 'selected':'' }}>Radiant Heat</option>
                                                        </select> {!! $errors->has('heating_type')? '
								<p class="help-block">'.$errors->first('heating_type').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('heating_fuel')? 'has-error':'' }}">
							<label for="heating_fuel" class="col-sm-4 control-label">Heating Fuel</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="heating_fuel"
                                                                id="heating_fuel">
                                                                <option value=""></option>
                                                                <option value="coal" {{ $ad->heating_fuel == 'coal' ? 'selected':'' }}>Coal</option>
<option value="electric" {{ $ad->heating_fuel == 'electric' ? 'selected':'' }}>Electric</option>
<option value="gas" {{ $ad->heating_fuel == 'gas' ? 'selected':'' }}>Gas</option>
<option value="bottle" {{ $ad->heating_fuel == 'bottle' ? 'selected':'' }}>Bottle Gas</option>
<option value="kerosene" {{ $ad->heating_fuel == 'kerosene' ? 'selected':'' }}>Kerosene</option>
<option value="oil" {{ $ad->heating_fuel == 'oil' ? 'selected':'' }}>Oil</option>
<option value="solar" {{ $ad->heating_fuel == 'solar' ? 'selected':'' }}>Solar</option>
<option value="wood" {{ $ad->heating_fuel == 'wood' ? 'selected':'' }}>Wood</option>
<option value="other" {{ $ad->heating_fuel == 'other' ? 'selected':'' }}>Other Fuel</option>
<option value="none" {{ $ad->heating_fuel == 'none' ? 'selected':'' }}>None</option>
                                                        </select> {!! $errors->has('heating_fuel')? '
								<p class="help-block">'.$errors->first('heating_fuel').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('cooling')? 'has-error':'' }}">
							<label for="cooling" class="col-sm-4 control-label">Cooling</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="cooling"
                                                                id="cooling">
                                                                <option value=""></option>
                                                                <option value="fan" {{ $ad->cooling == 'fan' ? 'selected':'' }}>Attic Fan</option>
<option value="central" {{ $ad->cooling == 'central' ? 'selected':'' }}>Central Air</option>
<option value="ductless" {{ $ad->cooling == 'ductless' ? 'selected':'' }}>Ductless AC</option>
<option value="heat" {{ $ad->cooling == 'heat' ? 'selected':'' }}>Heat Pump</option>
<option value="individual" {{ $ad->cooling == 'individual' ? 'selected':'' }}>Individual Unit</option>
<option value="none" {{ $ad->cooling == 'none' ? 'selected':'' }}>None</option>
<option value="wall" {{ $ad->cooling == 'wall' ? 'selected':'' }}>Wall Unit</option>
<option value="whole" {{ $ad->cooling == 'whole' ? 'selected':'' }}>Whole Hse Fan</option>
<option value="window" {{ $ad->cooling == 'window' ? 'selected':'' }}>Window Units</option>
                                                        </select> {!! $errors->has('cooling')? '
								<p class="help-block">'.$errors->first('cooling').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('hw_fuel')? 'has-error':'' }}">
							<label for="hw_fuel" class="col-sm-4 control-label">Hot Water Fuel</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="hw_fuel"
                                                                id="hw_fuel">
                                                                <option value=""></option>
                                                                <option value="Common" {{ $ad->hw_fuel == 'Common' ? 'selected':'' }}>Common</option>
<option value="Electric" {{ $ad->hw_fuel == 'Electric' ? 'selected':'' }}>Electric</option>
<option value="Gas" {{ $ad->hw_fuel == 'Gas' ? 'selected':'' }}>Gas</option>
<option value="In Fee" {{ $ad->hw_fuel == 'In Fee' ? 'selected':'' }}>In Fee</option>
<option value="None" {{ $ad->hw_fuel == 'None' ? 'selected':'' }}>None</option>
<option value="Oil" {{ $ad->hw_fuel == 'Oil' ? 'selected':'' }}>Oil</option>
<option value="Rented" {{ $ad->hw_fuel == 'Rented' ? 'selected':'' }}>Rented</option>
<option value="Solar" {{ $ad->hw_fuel == 'Solar' ? 'selected':'' }}>Solar</option>
                                                        </select> {!! $errors->has('hw_fuel')? '
								<p class="help-block">'.$errors->first('hw_fuel').'</p>
								':'' !!}
							</div>
						</div>

					<legend>Garage & Parking</legend>

						<div class="form-group {{ $errors->has('num_park')? 'has-error':'' }}">
							<label for="num_park" class="col-sm-4 control-label">Number Parking Spaces</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="num_park"
                                                                id="num_park">
                                                                <option value=""></option>
                                                                <option value="1" {{ $ad->num_park == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->num_park == '2' ? 'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->num_park == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->num_park == '4' ? 'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->num_park == '5' ? 'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->num_park == '6' ? 'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->num_park == '7' ? 'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->num_park == '8' ? 'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->num_park == '9' ? 'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->num_park == '10' ? 'selected':'' }}>10</option>
                                                                <option value="11" {{ $ad->num_park == '11' ? 'selected':'' }}>11</option>
                                                                <option value="12" {{ $ad->num_park == '12' ? 'selected':'' }}>12</option>
                                                                <option value="13" {{ $ad->num_park == '13' ? 'selected':'' }}>13</option>
                                                                <option value="14" {{ $ad->num_park == '14' ? 'selected':'' }}>14</option>
                                                                <option value="15" {{ $ad->num_park == '15' ? 'selected':'' }}>15</option>
                                                        </select> {!! $errors->has('num_park')? '
								<p class="help-block">'.$errors->first('num_park').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('num_garage')? 'has-error':'' }}">
							<label for="num_garage" class="col-sm-4 control-label">Number Garage Spaces</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="num_garage"
                                                                id="num_garage">
                                                                <option value=""></option>
                                                                <option value="1" {{ $ad->num_garage == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->num_garage == '2' ? 'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->num_garage == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->num_garage == '4' ? 'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->num_garage == '5' ? 'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->num_garage == '6' ? 'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->num_garage == '7' ? 'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->num_garage == '8' ? 'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->num_garage == '9' ? 'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->num_garage == '10' ? 'selected':'' }}>10</option>
</select> {!! $errors->has('num_garage')? '
								<p class="help-block">'.$errors->first('num_garage').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('garage_type')? 'has-error':'' }}">
							<label for="garage_type" class="col-sm-4 control-label">Garage Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="garage_type"
                                                                id="garage_type">
                                                                <option value=""></option>                                                               
                                                                <option value="attached" {{ $ad->garage_type == 'attached' ? 'selected':'' }}>Attached</option>
                                                                <option value="carport" {{ $ad->garage_type == 'carport' ? 'selected':'' }}>Carport</option>
                                                                <option value="detached" {{ $ad->garage_type == 'detached' ? 'selected':'' }}>Detached</option>
                                                                <option value="integral" {{ $ad->garage_type == 'integral' ? 'selected':'' }}>Integral</option>
                                                                <option value="none" {{ $ad->garage_type == 'none' ? 'selected':'' }}>None</option>                                                        </select> {!! $errors->has('garage_type')? '
								<p class="help-block">'.$errors->first('garage_type').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('assigned_parking')? 'has-error':'' }}">
							<label for="assigned_parking" class="col-sm-4 control-label">Assigned Parking</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="assigned_parking"
                                                                id="assigned_parking">
                                                                <option value=""></option>
                                                                <option value="yes" {{ $ad->assigned_parking == 'yes' ? 'selected':'' }}>Yes</option>
                                                                <option value="no" {{ $ad->assigned_parking == 'no' ? 'selected':'' }}>No</option>
                                                        </select> {!! $errors->has('assigned_parking')? '
								<p class="help-block">'.$errors->first('assigned_parking').'</p>
								':'' !!}
							</div>
						</div>


					<legend>Interior Details</legend>

					<div
						class="form-group {{ $errors->has('num_rooms')? 'has-error':'' }}">
						<label for="num_rooms" class="col-sm-4 control-label">Number of Rooms</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="num_rooms"
								value="{{ old('num_rooms')? old('num_rooms') : $ad->num_rooms }}" name="num_rooms"
								placeholder="Number of Rooms"> {!!
							$errors->has('num_rooms')? '
							<p class="help-block">'.$errors->first('num_rooms').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('above')? 'has-error':'' }}">
						<label for="above" class="col-sm-4 control-label">Above Grade Living Space</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="above"
								value="{{ old('above')? old('above') : $ad->above }}" name="above"
								placeholder="Above Grade Living Space"> {!!
							$errors->has('above')? '
							<p class="help-block">'.$errors->first('above').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('below')? 'has-error':'' }}">
						<label for="below" class="col-sm-4 control-label">Below Grade Living Space</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="below"
								value="{{ old('below')? old('below') : $ad->below }}" name="below"
								placeholder="Below Grade Living Space"> {!!
							$errors->has('below')? '
							<p class="help-block">'.$errors->first('below').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('num_levels')? 'has-error':'' }}">
						<label for="num_levels" class="col-sm-4 control-label">Number of Levels</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="num_levels"
								value="{{ old('num_levels')? old('num_levels') : $ad->num_levels }}" name="num_levels"
								placeholder="Number of Levels"> {!!
							$errors->has('num_levels')? '
							<p class="help-block">'.$errors->first('num_levels').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('floors')? 'has-error':'' }}">
						<label for="floors" class="col-sm-4 control-label">Finished Floor</label>
						<div class="col-sm-8">
							<input type="checkbox" value="1" name="ceramic" {{ $ad->ceramic
						== '1'? 'checked="checked"' : '' }}>Ceramic</label>
<input type="checkbox" value="1" name="hardwood" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Hardwood</label>
<input type="checkbox" value="1" name="laminate" {{ $ad->laminate
						== '1'? 'checked="checked"' : '' }}>Laminate</label>
<input type="checkbox" value="1" name="marble" {{ $ad->marble
						== '1'? 'checked="checked"' : '' }}>Marble</label>
<input type="checkbox" value="1" name="other" {{ $ad->other
						== '1'? 'checked="checked"' : '' }}>Other</label>
<input type="checkbox" value="1" name="parquet" {{ $ad->parquet
						== '1'? 'checked="checked"' : '' }}>Parquet</label>
<input type="checkbox" value="1" name="particle" {{ $ad->particle
						== '1'? 'checked="checked"' : '' }}>Particle Board</label>
<input type="checkbox" value="1" name="pine" {{ $ad->pine
						== '1'? 'checked="checked"' : '' }}>Pine</label>
<input type="checkbox" value="1" name="plywood" {{ $ad->plywood
						== '1'? 'checked="checked"' : '' }}>Plywood</label>
<input type="checkbox" value="1" name="vinyl" {{ $ad->vinyl
						== '1'? 'checked="checked"' : '' }}>Vinyl</label>
<input type="checkbox" value="1" name="wall" {{ $ad->wall
						== '1'? 'checked="checked"' : '' }}>Wall to Wall Carpet</label>
						</div>
					</div>
						<div class="form-group {{ $errors->has('basement_type')? 'has-error':'' }}">
							<label for="basement_type" class="col-sm-4 control-label">Basement Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="basement_type"
                                                                id="basement_type">
                                                                <option value=""></option>                                                               
                                                                <option value="crawl" {{ $ad->basement_type == 'crawl' ? 'selected':'' }}>Crawl Space</option>
                                                                <option value="full" {{ $ad->basement_type == 'full' ? 'selected':'' }}>Full</option>
                                                                <option value="none" {{ $ad->basement_type == 'none' ? 'selected':'' }}>None</option>
                                                                <option value="partially" {{ $ad->basement_type == 'partially' ? 'selected':'' }}>Partially Finished</option>
                                                                                  </select> {!! $errors->has('basement_type')? '
								<p class="help-block">'.$errors->first('basement_type').'</p>
								':'' !!}
							</div>
						</div>
					
						<div id="base_block">
						<div class="form-group {{ $errors->has('base_access')? 'has-error':'' }}">
							<label for="base_access" class="col-sm-4 control-label">Basement Access</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="base_access"
                                                                id="base_access">
                                                                <option value="" ></option>                                                               
                                                                <option value="bulkhead" {{ $ad->base_access == 'bulkhead' ? 'selected':'' }}>Bulkhead</option>
                                                                <option value="intext" {{ $ad->base_access == 'intext' ? 'selected':'' }}>Interior and Exterior</option>
                                                                <option value="int" {{ $ad->base_access == 'int' ? 'selected':'' }}>Interior Only</option>
                                                                <option value="walkout" {{ $ad->base_access == 'walkout' ? 'selected':'' }}>Walkout</option>
                                                                                  </select> {!! $errors->has('base_access')? '
								<p class="help-block">'.$errors->first('base_access').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('base_finish')? 'has-error':'' }}">
							<label for="base_finish" class="col-sm-4 control-label">Basement Finish</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="base_finish"
                                                                id="base_finish">
                                                                <option value=""></option>                                                               
                                                                <option value="finished" {{ $ad->base_finish == 'finished' ? 'selected':'' }}>Finished</option>
                                                                <option value="partially" {{ $ad->base_finish == 'partially' ? 'selected':'' }}>Partially Finished</option>
                                                                <option value="unfinished" {{ $ad->base_finish == 'unfinished' ? 'selected':'' }}>Unfinished</option>
                                                                                 </select> {!! $errors->has('base_finish')? '
								<p class="help-block">'.$errors->first('base_finish').'</p>
								':'' !!}
							</div>
						</div>
						</div>

					<legend>Included Appliances</legend>
					<label> <input type="checkbox" value="1" name="owned" {{ $ad->owned
						== '1'? 'checked="checked"' : '' }}>Alarm Owned</label>
<label> <input type="checkbox" value="1" name="rented" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Alarm Rented</label>
<label> <input type="checkbox" value="1" name="grill" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Barbecue Grill</label>
<label> <input type="checkbox" value="1" name="cable" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Cable TV</label>
<label> <input type="checkbox" value="1" name="ceilingfan" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Ceiling Fan</label>
<label> <input type="checkbox" value="1" name="antenna" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Central Antenna</label>
<label> <input type="checkbox" value="1" name="vacuum" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Central Vacuum</label>
<label> <input type="checkbox" value="1" name="coal" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Coal Stove</label>
<label> <input type="checkbox" value="1" name="compressor" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Compressor</label>
<label> <input type="checkbox" value="1" name="dish" {{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Dishwasher</label>
<label> <input type="checkbox" value="1" name="dryer">Dryer</label>
<label> <input type="checkbox" value="1" name="elevator">Elevator</label>
<label> <input type="checkbox" value="1" name="exhaust">Exhaust Fan</label>
<label> <input type="checkbox" value="1" name="freight">Freight Elevator</label>
<label> <input type="checkbox" value="1" name="furniture">Furniture</label>
<label> <input type="checkbox" value="1" name="disposal">Garbage Disposal</label>
<label> <input type="checkbox" value="1" name="grease">Grease Pit</label>
<label> <input type="checkbox" value="1" name="hood">Hood</label>
<label> <input type="checkbox" value="1" name="hottub">Hot Tub</label>
<label> <input type="checkbox" value="1" name="hydraulic">Hydraulic Lift</label>
<label> <input type="checkbox" value="1" name="intercom">Intercom</label>
<label> <input type="checkbox" value="1" name="microwave">Microwave</label>
<label> <input type="checkbox" value="1" name="oven">Oven/Range</label>
<label> <input type="checkbox" value="1" name="pellet">Pellet Stove</label>
<label> <input type="checkbox" value="1" name="fridge">Refrigerator</label>
<label> <input type="checkbox" value="1" name="sat">Satellite Dish</label>
<label> <input type="checkbox" value="1" name="suana">Sauna</label>
<label> <input type="checkbox" value="1" name="trash">Trash Compactor</label>
<label> <input type="checkbox" value="1" name="tvantenna">TV Antenna</label>
<label> <input type="checkbox" value="1" name="washer">Washer</label>
<label> <input type="checkbox" value="1" name="whirlpoool">Whirlpool</label>
<label> <input type="checkbox" value="1" name="wood"{{ $ad->hardwood
						== '1'? 'checked="checked"' : '' }}>Wood Stove</label>