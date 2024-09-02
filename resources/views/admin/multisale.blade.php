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
								value="{{ old('ad_title') ? old('ad_title') : $ad->title }}" name="ad_title"
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
							<textarea name="ad_description" class="form-control" rows="8">{{ old('ad_description') ? old('ad_description') : $ad->description }}</textarea>
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

					<div class="form-group {{ $errors->has('multi_type')? 'has-error':'' }}">
						<label for="multi_type" class="col-sm-4 control-label">Type</label>
						<div class="col-sm-8">
                                                        <select class="form-control select2NoSearch" name="multi_type"
                                                                id="multi_type">
                                                                <option value="apartment" {{ $ad->multi_type == 'apartment' ?
                                                                        'selected':'' }}>Apartment</option>
                                                                <option value="mixed-use" {{ $ad->multi_type == 'mixed-use' ?
                                                                        'selected':'' }}>Mixed Use</option>
                                                        </select> {!! $errors->has('multi_type')? '
                                                        <p class="help-block">'.$errors->first('multi_type').'</p>
                                                        ':'' !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('multi_style')? 'has-error':'' }}">
						<label for="multi_style" class="col-sm-4 control-label">Style</label>
						<div class="col-sm-8">
                                                        <select class="form-control select2NoSearch" name="multi_style"
                                                                id="multi_style">
                                                                <option value="up-down" {{ $ad->multi_style == 'up-down' ?
                                                                        'selected':'' }}>Up/Down</option>
                                                                <option value="side-by-side" {{ $ad->multi_style == 'side-by-side' ?
                                                                        'selected':'' }}>Side by Side</option>
                                                        </select> {!! $errors->has('multi_style')? '
                                                        <p class="help-block">'.$errors->first('multi_style').'</p>
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
							<label for="price" class="col-md-4 control-label">@lang('app.square_unit_space')</label>
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
							class="form-group {{ $errors->has('building_size')? 'has-error':'' }}">
							<label for="building_size" class="col-sm-4 control-label">Building Size</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="year_built"
									value="{{ old('building_size')? old('building_size') : $ad->building_size }}" name="building_size"
									placeholder="Building Size"> {!!
								$errors->has('building_size')? '
								<p class="help-block">'.$errors->first('building_size').'</p>
								':'' !!}
							</div>
						</div>

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
								<input type="number" class="form-control" id="taxes"
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
								<input type="number" class="form-control" id="assessment"
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

					<legend>Multi-Family Information</legend>

					<div
						class="form-group {{ $errors->has('multi_units')? 'has-error':'' }}">
						<label for="multi_units" class="col-sm-4 control-label">Number of Units</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="multi_units"
								value="{{ old('multi_units')? old('multi_units') : $ad->multi_units }}" name="multi_units"
								placeholder="Multi-Family Units"> {!!
							$errors->has('multi_units')? '
							<p class="help-block">'.$errors->first('multi_units').'</p>
							':'' !!}
						</div>
					</div>

						<div class="form-group {{ $errors->has('pandl')? 'has-error':'' }}">
							<label for="pandl" class="col-sm-4 control-label">P and L Statement</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="pandl" id="pandl">
                                	<option value=""></option>
                                	<option value="yes" {{ $ad->pandl == 'yes' ? 'selected':'' }}>Yes</option>
									<option value="no" {{ $ad->pandl == 'no' ? 'selected':'' }}>No</option>
                                </select> {!! $errors->has('pandl')? '
								<p class="help-block">'.$errors->first('pandl').'</p>
								':'' !!}
							</div>
						</div>

					<div
						class="form-group {{ $errors->has('owner_exp')? 'has-error':'' }}">
						<label for="owner_exp" class="col-sm-4 control-label">Owner Annual Expenses</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="owner_exp"
								value="{{ old('owner_exp')? old('owner_exp') : $ad->owner_exp }}" name="owner_exp"
								placeholder="Owner Annual Expenses"> {!!
							$errors->has('owner_exp')? '
							<p class="help-block">'.$errors->first('owner_exp').'</p>
							':'' !!}
						</div>
					</div>

					<div
						class="form-group {{ $errors->has('owner_inc')? 'has-error':'' }}">
						<label for="owner_inc" class="col-sm-4 control-label">Owner Annual Income</label>
						<div class="col-sm-8">
							<input type="number" class="form-control" id="owner_inc"
								value="{{ old('owner_inc')? old('owner_inc') : $ad->owner_inc }}" name="owner_inc"
								placeholder="Owner Annual Income"> {!!
							$errors->has('owner_inc')? '
							<p class="help-block">'.$errors->first('owner_inc').'</p>
							':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('num_heat')? 'has-error':'' }}">
						<label for="num_heat" class="col-sm-4 control-label">Number of Heating Systems</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="num_heat"
								value="{{ old('num_heat')? old('num_heat') : $ad->num_heat }}" name="num_heat"
								placeholder="Number of Heating Systems"> {!!
							$errors->has('num_heat')? '
							<p class="help-block">'.$errors->first('num_heat').'</p>
							':'' !!}
						</div>
					</div>
					
					<div class="form-group {{ $errors->has('heat_paid')? 'has-error':'' }}">
							<label for="heat_paid" class="col-sm-4 control-label">Heat Paid By Owner/Tenant</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="heat_paid"
                                                                id="heat_paid">
                                                                <option value="">Select Owner/Tenant</option>
                                                                <option value="Owner" {{ $ad->heat_paid == 'Owner' ? 'selected':'' }}>Owner</option>
                                                                <option value="Tenant" {{ $ad->heat_paid == 'Tenant' ? 'selected':'' }}>Tenant</option>
                                                        </select> {!! $errors->has('heat_paid')? '
								<p class="help-block">'.$errors->first('heat_paid').'</p>
								':'' !!}
							</div>
						</div>
						
					<div class="form-group {{ $errors->has('mf_laundry')? 'has-error':'' }}">
							<label for="mf_laundry" class="col-sm-4 control-label">Laundry</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="mf_laundry"
                                                                id="mf_laundry">
                                                                <option value="">Select Laundry Type</option>
                                                                <option value="None" {{ $ad->mf_laundry == 'None' ? 'selected':'' }}>None</option>
                                                                <option value="In Building" {{ $ad->mf_laundry == 'In Building' ? 'selected':'' }}>In Building</option>
                                                                <option value="In Units" {{ $ad->mf_laundry == 'In Units' ? 'selected':'' }}>In Units</option>
                                                        </select> {!! $errors->has('mf_laundry')? '
								<p class="help-block">'.$errors->first('mf_laundry').'</p>
								':'' !!}
							</div>
						</div>

						<legend>Multi-Family Unit Information</legend>
            			
            			<div class="row">
                            <div class="col-sm-3">
                					<select class="form-control select2NoSearch" name="num_additional"
                                                                id="num_additional">
                                                                <option value="">Select Number of Units</option>
                                                                <option value="1" {{ $ad->num_additional == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->num_additional == '2' ? 'selected':'' }}>2</option>
                                                                <option value="3" {{ $ad->num_additional == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->num_additional == '4' ? 'selected':'' }}>4</option>
                                                        </select>
                            </div>
            			</div>

                        <div id="info-unit1" style="display: none">
    						<legend>Unit 1</legend>
    						<div class="form-group {{ $errors->has('multi_beds')? 'has-error':'' }}">
    							<label for="beds" class="col-sm-4 control-label">@lang('app.beds')</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_beds"
                                                                    id="multi_beds">
                                                                    <option value=""></option>
                                                                    <option value="0.5" {{ $ad->multi_beds == '0.5' ? 'selected':'' }}>Studio</option>
                                                                    <option value="1" {{ $ad->multi_beds == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_beds == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_beds == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_beds == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_beds == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_beds == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_beds == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_beds == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_beds == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_beds == '10' ? 'selected':'' }}>10</option>
                                                                    <option value="11" {{ $ad->multi_beds == '11' ? 'selected':'' }}>11</option>
                                                                    <option value="12" {{ $ad->multi_beds == '12' ? 'selected':'' }}>12</option>
                                                                    <option value="13" {{ $ad->multi_beds == '13' ? 'selected':'' }}>13</option>
                                                                    <option value="14" {{ $ad->multi_beds == '14' ? 'selected':'' }}>14</option>
                                                                    <option value="15" {{ $ad->multi_beds == '15' ? 'selected':'' }}>15</option>
                                                            </select> {!! $errors->has('multi_beds')? '
    								<p class="help-block">'.$errors->first('multi_beds').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_baths')? 'has-error':'' }}">
    							<label for="multi_baths" class="col-sm-4 control-label">Full Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_baths"
                                                                    id="multi_baths">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_baths == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_baths == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_baths == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_baths == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_baths == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_baths == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_baths == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_baths == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_baths == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_baths == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_baths == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_baths')? '
    								<p class="help-block">'.$errors->first('multi_baths').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_half')? 'has-error':'' }}">
    							<label for="multi_half" class="col-sm-4 control-label">Half Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_half"
                                                                    id="multi_half">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_half == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_half == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_half == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_half == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_half == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_half == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_half == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_half == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_half == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_half == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_half == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_half')? '
    								<p class="help-block">'.$errors->first('multi_half').'</p>
    								':'' !!}
    							</div>
    						</div>
    					<div
    						class="form-group {{ $errors->has('multi_sqft')? 'has-error':'' }}">
    						<label for="multi_sqft" class="col-sm-4 control-label">Square Footage</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_sqft"
    								value="{{ old('multi_sqft')? old('owner_exp') : $ad->owner_exp }}" name="multi_sqft"
    								placeholder="Square Footage"> {!!
    							$errors->has('multi_sqft')? '
    							<p class="help-block">'.$errors->first('multi_sqft').'</p>
    							':'' !!}
    						</div>
    					</div>
    					<div
    						class="form-group {{ $errors->has('multi_rent')? 'has-error':'' }}">
    						<label for="multi_rent" class="col-sm-4 control-label">Rent</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_rent"
    								value="{{ old('multi_rent')? old('multi_rent') : $ad->multi_rent }}" name="multi_rent"
    								placeholder="Rent"> {!!
    							$errors->has('multi_rent')? '
    							<p class="help-block">'.$errors->first('multi_rent').'</p>
    							':'' !!}
    						</div>
    					</div>
    						<div class="form-group {{ $errors->has('multi_lease')? 'has-error':'' }}">
    							<label for="multi_lease" class="col-sm-4 control-label">Lease</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_lease"
                                                                    id="multi_lease">
                                                                    <option value=""></option>
                                                                    <option value="vacant" {{ $ad->multi_lease == 'vacant' ? 'selected':'' }}>Vacant</option>
                                                                    <option value="owner" {{ $ad->multi_lease == 'owner' ? 'selected':'' }}>Owner</option>
                                                                    <option value="relative" {{ $ad->multi_lease == 'relative' ? 'selected':'' }}>Relative</option>
                                                                    <option value="leased" {{ $ad->multi_lease == 'leased' ? 'selected':'' }}>Leased</option>
                                                                    <option value="no lease" {{ $ad->multi_lease == 'no lease' ? 'selected':'' }}>No Lease</option>
                                                            </select> {!! $errors->has('multi_lease')? '
    								<p class="help-block">'.$errors->first('multi_lease').'</p>
    								':'' !!}
    							</div>
    						</div>
    					</div>

                        <div id="info-unit2" style="display: none">
    						<legend>Unit 2</legend>
    						<div class="form-group {{ $errors->has('multi_beds2')? 'has-error':'' }}">
    							<label for="multi_beds2" class="col-sm-4 control-label">@lang('app.beds')</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_beds2"
                                                                    id="multi_beds2">
                                                                    <option value=""></option>
                                                                    <option value="0.5" {{ $ad->multi_beds2 == '0.5' ? 'selected':'' }}>Studio</option>
                                                                    <option value="1" {{ $ad->multi_beds2 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_beds2 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_beds2 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_beds2 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_beds2 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_beds2 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_beds2 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_beds2 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_beds2 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_beds2 == '10' ? 'selected':'' }}>10</option>
                                                                    <option value="11" {{ $ad->multi_beds2 == '11' ? 'selected':'' }}>11</option>
                                                                    <option value="12" {{ $ad->multi_beds2 == '12' ? 'selected':'' }}>12</option>
                                                                    <option value="13" {{ $ad->multi_beds2 == '13' ? 'selected':'' }}>13</option>
                                                                    <option value="14" {{ $ad->multi_beds2 == '14' ? 'selected':'' }}>14</option>
                                                                    <option value="15" {{ $ad->multi_beds2 == '15' ? 'selected':'' }}>15</option>
                                                            </select> {!! $errors->has('multi_beds2')? '
    								<p class="help-block">'.$errors->first('multi_beds2').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_baths2')? 'has-error':'' }}">
    							<label for="multi_baths2" class="col-sm-4 control-label">Full Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_baths2"
                                                                    id="multi_baths2">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_baths2 == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_baths2 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_baths2 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_baths2 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_baths2 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_baths2 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_baths2 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_baths2 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_baths2 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_baths2 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_baths2 == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_baths2')? '
    								<p class="help-block">'.$errors->first('multi_baths2').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_half2')? 'has-error':'' }}">
    							<label for="multi_half2" class="col-sm-4 control-label">Half Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_half2"
                                                                    id="multi_half2">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_half2 == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_half2 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_half2 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_half2 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_half2 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_half2 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_half2 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_half2 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_half2 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_half2 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_half2 == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_half2')? '
    								<p class="help-block">'.$errors->first('multi_half2').'</p>
    								':'' !!}
    							</div>
    						</div>
    					<div
    						class="form-group {{ $errors->has('multi_sqft2')? 'has-error':'' }}">
    						<label for="multi_sqft2" class="col-sm-4 control-label">Square Footage</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_sqft2"
    								value="{{ old('multi_sqft2')? old('multi_sqft2') : $ad->multi_sqft2 }}" name="multi_sqft2"
    								placeholder="Square Footage"> {!!
    							$errors->has('multi_sqft2')? '
    							<p class="help-block">'.$errors->first('multi_sqft2').'</p>
    							':'' !!}
    						</div>
    					</div>
    					<div
    						class="form-group {{ $errors->has('multi_rent2')? 'has-error':'' }}">
    						<label for="multi_rent2" class="col-sm-4 control-label">Rent</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_rent2"
    								value="{{ old('multi_rent2')? old('multi_rent2') : $ad->multi_rent2 }}" name="multi_rent2"
    								placeholder="Rent"> {!!
    							$errors->has('multi_rent2')? '
    							<p class="help-block">'.$errors->first('multi_rent2').'</p>
    							':'' !!}
    						</div>
    					</div>
    						<div class="form-group {{ $errors->has('multi_lease2')? 'has-error':'' }}">
    							<label for="multi_lease2" class="col-sm-4 control-label">Lease</label>
    							<div class="col-sm-8">
    								<select class="form-control select2NoSearch" name="multi_lease2"
                                                                    id="multi_lease2">
                                                                    <option value=""></option>
                                                                    <option value="vacant" {{ $ad->multi_lease2 == 'vacant' ? 'selected':'' }}>Vacant</option>
                                                                    <option value="owner" {{ $ad->multi_lease2 == 'owner' ? 'selected':'' }}>Owner</option>
                                                                    <option value="relative" {{ $ad->multi_lease2 == 'relative' ? 'selected':'' }}>Relative</option>
                                                                    <option value="leased" {{ $ad->multi_lease2 == 'leased' ? 'selected':'' }}>Leased</option>
                                                                    <option value="no lease" {{ $ad->multi_lease2 == 'no lease' ? 'selected':'' }}>No Lease</option>
                                                            </select> {!! $errors->has('multi_lease2')? '
    								<p class="help-block">'.$errors->first('multi_lease2').'</p>
    								':'' !!}
    							</div>
    						</div>
    					</div>

                        <div id="info-unit3" style="display: none">
						<legend>Unit 3</legend>
						<div class="form-group {{ $errors->has('multi_beds3')? 'has-error':'' }}">
							<label for="multi_beds3" class="col-sm-4 control-label">@lang('app.beds')</label>
							<div class="col-sm-8">
								<select class="form-control select3NoSearch" name="multi_beds3"
                                                                id="multi_beds3">
                                                                <option value=""></option>
                                                                <option value="0.5" {{ $ad->multi_beds3 == '0.5' ? 'selected':'' }}>Studio</option>
                                                                <option value="1" {{ $ad->multi_beds3 == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->multi_beds3 == '2' ? 'selected':'' }}>3</option>
                                                                <option value="3" {{ $ad->multi_beds3 == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->multi_beds3 == '4' ? 'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->multi_beds3 == '5' ? 'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->multi_beds3 == '6' ? 'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->multi_beds3 == '7' ? 'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->multi_beds3 == '8' ? 'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->multi_beds3 == '9' ? 'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->multi_beds3 == '10' ? 'selected':'' }}>10</option>
                                                                <option value="11" {{ $ad->multi_beds3 == '11' ? 'selected':'' }}>11</option>
                                                                <option value="13" {{ $ad->multi_beds3 == '13' ? 'selected':'' }}>13</option>
                                                                <option value="13" {{ $ad->multi_beds3 == '13' ? 'selected':'' }}>13</option>
                                                                <option value="14" {{ $ad->multi_beds3 == '14' ? 'selected':'' }}>14</option>
                                                                <option value="15" {{ $ad->multi_beds3 == '15' ? 'selected':'' }}>15</option>
                                                        </select> {!! $errors->has('multi_beds3')? '
								<p class="help-block">'.$errors->first('multi_beds3').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('multi_baths3')? 'has-error':'' }}">
							<label for="multi_baths3" class="col-sm-4 control-label">Full Bathrooms</label>
							<div class="col-sm-8">
								<select class="form-control select3NoSearch" name="multi_baths3"
                                                                id="multi_baths3">
                                                                <option value=""></option>
                                                                <option value="0" {{ $ad->multi_baths3 == '0' ? 'selected':'' }}>0</option>
                                                                <option value="1" {{ $ad->multi_baths3 == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->multi_baths3 == '2' ? 'selected':'' }}>3</option>
                                                                <option value="3" {{ $ad->multi_baths3 == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->multi_baths3 == '4' ? 'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->multi_baths3 == '5' ? 'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->multi_baths3 == '6' ? 'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->multi_baths3 == '7' ? 'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->multi_baths3 == '8' ? 'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->multi_baths3 == '9' ? 'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->multi_baths3 == '10' ? 'selected':'' }}>10</option>

                                                        </select> {!! $errors->has('multi_baths3')? '
								<p class="help-block">'.$errors->first('multi_baths3').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('multi_half3')? 'has-error':'' }}">
							<label for="multi_half3" class="col-sm-4 control-label">Half Bathrooms</label>
							<div class="col-sm-8">
								<select class="form-control select3NoSearch" name="multi_half3"
                                                                id="multi_half3">
                                                                <option value=""></option>
                                                                <option value="0" {{ $ad->multi_half3 == '0' ? 'selected':'' }}>0</option>
                                                                <option value="1" {{ $ad->multi_half3 == '1' ? 'selected':'' }}>1</option>
                                                                <option value="2" {{ $ad->multi_half3 == '2' ? 'selected':'' }}>3</option>
                                                                <option value="3" {{ $ad->multi_half3 == '3' ? 'selected':'' }}>3</option>
                                                                <option value="4" {{ $ad->multi_half3 == '4' ? 'selected':'' }}>4</option>
                                                                <option value="5" {{ $ad->multi_half3 == '5' ? 'selected':'' }}>5</option>
                                                                <option value="6" {{ $ad->multi_half3 == '6' ? 'selected':'' }}>6</option>
                                                                <option value="7" {{ $ad->multi_half3 == '7' ? 'selected':'' }}>7</option>
                                                                <option value="8" {{ $ad->multi_half3 == '8' ? 'selected':'' }}>8</option>
                                                                <option value="9" {{ $ad->multi_half3 == '9' ? 'selected':'' }}>9</option>
                                                                <option value="10" {{ $ad->multi_half3 == '10' ? 'selected':'' }}>10</option>

                                                        </select> {!! $errors->has('multi_half3')? '
								<p class="help-block">'.$errors->first('multi_half3').'</p>
								':'' !!}
							</div>
						</div>
					<div
						class="form-group {{ $errors->has('multi_sqft3')? 'has-error':'' }}">
						<label for="multi_sqft3" class="col-sm-4 control-label">Square Footage</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="multi_sqft3"
								value="{{ old('multi_sqft3')? old('multi_sqft3') : $ad->multi_sqft3 }}" name="multi_sqft3"
								placeholder="Square Footage"> {!!
							$errors->has('multi_sqft3')? '
							<p class="help-block">'.$errors->first('multi_sqft3').'</p>
							':'' !!}
						</div>
					</div>
					<div
						class="form-group {{ $errors->has('multi_rent3')? 'has-error':'' }}">
						<label for="multi_rent3" class="col-sm-4 control-label">Rent</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="multi_rent3"
								value="{{ old('multi_rent3')? old('multi_rent3') : $ad->multi_rent3 }}" name="multi_rent3"
								placeholder="Rent"> {!!
							$errors->has('multi_rent3')? '
							<p class="help-block">'.$errors->first('multi_rent3').'</p>
							':'' !!}
						</div>
					</div>
						<div class="form-group {{ $errors->has('multi_lease3')? 'has-error':'' }}">
							<label for="multi_lease3" class="col-sm-4 control-label">Lease</label>
							<div class="col-sm-8">
								<select class="form-control select3NoSearch" name="multi_lease3"
                                                                id="multi_lease3">
                                                                <option value=""></option>
                                                                <option value="vacant" {{ $ad->multi_lease3 == 'vacant' ? 'selected':'' }}>Vacant</option>
                                                                <option value="owner" {{ $ad->multi_lease3 == 'owner' ? 'selected':'' }}>Owner</option>
                                                                <option value="relative" {{ $ad->multi_lease3 == 'relative' ? 'selected':'' }}>Relative</option>
                                                                <option value="leased" {{ $ad->multi_lease3 == 'leased' ? 'selected':'' }}>Leased</option>
                                                                <option value="no lease" {{ $ad->multi_lease3 == 'no lease' ? 'selected':'' }}>No Lease</option>
                                                        </select> {!! $errors->has('multi_lease3')? '
								<p class="help-block">'.$errors->first('multi_lease3').'</p>
								':'' !!}
							</div>
						</div>

                        <div id="info-unit4" style="display: none">
    						<legend>Unit 4</legend>
    						<div class="form-group {{ $errors->has('multi_beds4')? 'has-error':'' }}">
    							<label for="multi_beds4" class="col-sm-4 control-label">@lang('app.beds')</label>
    							<div class="col-sm-8">
    								<select class="form-control select4NoSearch" name="multi_beds4"
                                                                    id="multi_beds4">
                                                                    <option value=""></option>
                                                                    <option value="0.5" {{ $ad->multi_beds4 == '0.5' ? 'selected':'' }}>Studio</option>
                                                                    <option value="1" {{ $ad->multi_beds4 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_beds4 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_beds4 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_beds4 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_beds4 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_beds4 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_beds4 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_beds4 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_beds4 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_beds4 == '10' ? 'selected':'' }}>10</option>
                                                                    <option value="11" {{ $ad->multi_beds4 == '11' ? 'selected':'' }}>11</option>
                                                                    <option value="14" {{ $ad->multi_beds4 == '14' ? 'selected':'' }}>14</option>
                                                                    <option value="14" {{ $ad->multi_beds4 == '14' ? 'selected':'' }}>14</option>
                                                                    <option value="14" {{ $ad->multi_beds4 == '14' ? 'selected':'' }}>14</option>
                                                                    <option value="15" {{ $ad->multi_beds4 == '15' ? 'selected':'' }}>15</option>
                                                            </select> {!! $errors->has('multi_beds4')? '
    								<p class="help-block">'.$errors->first('multi_beds4').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_baths4')? 'has-error':'' }}">
    							<label for="multi_baths4" class="col-sm-4 control-label">Full Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select4NoSearch" name="multi_baths4"
                                                                    id="multi_baths4">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_baths4 == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_baths4 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_baths4 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_baths4 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_baths4 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_baths4 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_baths4 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_baths4 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_baths4 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_baths4 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_baths4 == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_baths4')? '
    								<p class="help-block">'.$errors->first('multi_baths4').'</p>
    								':'' !!}
    							</div>
    						</div>
    
    						<div class="form-group {{ $errors->has('multi_half4')? 'has-error':'' }}">
    							<label for="multi_half4" class="col-sm-4 control-label">Half Bathrooms</label>
    							<div class="col-sm-8">
    								<select class="form-control select4NoSearch" name="multi_half4"
                                                                    id="multi_half4">
                                                                    <option value=""></option>
                                                                    <option value="0" {{ $ad->multi_half4 == '0' ? 'selected':'' }}>0</option>
                                                                    <option value="1" {{ $ad->multi_half4 == '1' ? 'selected':'' }}>1</option>
                                                                    <option value="2" {{ $ad->multi_half4 == '2' ? 'selected':'' }}>2</option>
                                                                    <option value="3" {{ $ad->multi_half4 == '3' ? 'selected':'' }}>3</option>
                                                                    <option value="4" {{ $ad->multi_half4 == '4' ? 'selected':'' }}>4</option>
                                                                    <option value="5" {{ $ad->multi_half4 == '5' ? 'selected':'' }}>5</option>
                                                                    <option value="6" {{ $ad->multi_half4 == '6' ? 'selected':'' }}>6</option>
                                                                    <option value="7" {{ $ad->multi_half4 == '7' ? 'selected':'' }}>7</option>
                                                                    <option value="8" {{ $ad->multi_half4 == '8' ? 'selected':'' }}>8</option>
                                                                    <option value="9" {{ $ad->multi_half4 == '9' ? 'selected':'' }}>9</option>
                                                                    <option value="10" {{ $ad->multi_half4 == '10' ? 'selected':'' }}>10</option>
    
                                                            </select> {!! $errors->has('multi_half4')? '
    								<p class="help-block">'.$errors->first('multi_half4').'</p>
    								':'' !!}
    							</div>
    						</div>
    					<div
    						class="form-group {{ $errors->has('multi_sqft4')? 'has-error':'' }}">
    						<label for="multi_sqft4" class="col-sm-4 control-label">Square Footage</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_sqft4"
    								value="{{ old('multi_sqft4')? old('multi_sqft4') : $ad->multi_sqft4 }}" name="multi_sqft4"
    								placeholder="Square Footage"> {!!
    							$errors->has('multi_sqft4')? '
    							<p class="help-block">'.$errors->first('multi_sqft4').'</p>
    							':'' !!}
    						</div>
    					</div>
    					<div
    						class="form-group {{ $errors->has('multi_rent4')? 'has-error':'' }}">
    						<label for="multi_rent4" class="col-sm-4 control-label">Rent</label>
    						<div class="col-sm-8">
    							<input type="text" class="form-control" id="multi_rent4"
    								value="{{ old('multi_rent4')? old('multi_rent4') : $ad->multi_rent4 }}" name="multi_rent4"
    								placeholder="Rent"> {!!
    							$errors->has('multi_rent4')? '
    							<p class="help-block">'.$errors->first('multi_rent4').'</p>
    							':'' !!}
    						</div>
    					</div>
    						<div class="form-group {{ $errors->has('multi_lease4')? 'has-error':'' }}">
    							<label for="multi_lease4" class="col-sm-4 control-label">Lease</label>
    							<div class="col-sm-8">
    								<select class="form-control select4NoSearch" name="multi_lease4"
                                                                    id="multi_lease4">
                                                                    <option value=""></option>
                                                                    <option value="vacant" {{ $ad->multi_lease4 == 'vacant' ? 'selected':'' }}>Vacant</option>
                                                                    <option value="owner" {{ $ad->multi_lease4 == 'owner' ? 'selected':'' }}>Owner</option>
                                                                    <option value="relative" {{ $ad->multi_lease4 == 'relative' ? 'selected':'' }}>Relative</option>
                                                                    <option value="leased" {{ $ad->multi_lease4 == 'leased' ? 'selected':'' }}>Leased</option>
                                                                    <option value="no lease" {{ $ad->multi_lease4 == 'no lease' ? 'selected':'' }}>No Lease</option>
                                                            </select> {!! $errors->has('multi_lease4')? '
    								<p class="help-block">'.$errors->first('multi_lease4').'</p>
    								':'' !!}
    							</div>
    						</div>
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
                                                                <option value="Coal" {{ $ad->heating_fuel == 'Coal' ? 'selected':'' }}>Coal</option>
<option value="Electric" {{ $ad->heating_fuel == 'electric' ? 'selected':'' }}>Electric</option>
<option value="Gas" {{ $ad->heating_fuel == 'Gas' ? 'selected':'' }}>Gas</option>
<option value="Bottle Gas" {{ $ad->heating_fuel == 'Bottle Gas' ? 'selected':'' }}>Bottle Gas</option>
<option value="Kerosene" {{ $ad->heating_fuel == 'Kerosene' ? 'selected':'' }}>Kerosene</option>
<option value="Oil" {{ $ad->heating_fuel == 'Oil' ? 'selected':'' }}>Oil</option>
<option value="Solar" {{ $ad->heating_fuel == 'Solar' ? 'selected':'' }}>Solar</option>
<option value="Wood" {{ $ad->heating_fuel == 'Wood' ? 'selected':'' }}>Wood</option>
<option value="Other Fuel" {{ $ad->heating_fuel == 'Other Fuel' ? 'selected':'' }}>Other Fuel</option>
<option value="None" {{ $ad->heating_fuel == 'None' ? 'selected':'' }}>None</option>
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
                                                                <option value="none">None</option>
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
                                                                <option value="none">None</option>
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
                                                                <option value="Attached" {{ $ad->garage_type == 'Attached' ? 'selected':'' }}>Attached</option>
                                                                <option value="Carport" {{ $ad->garage_type == 'Carport' ? 'selected':'' }}>Carport</option>
                                                                <option value="Detached" {{ $ad->garage_type == 'Detached' ? 'selected':'' }}>Detached</option>
                                                                <option value="Integral" {{ $ad->garage_type == 'Integral' ? 'selected':'' }}>Integral</option>
                                                                <option value="None" {{ $ad->garage_type == 'None' ? 'selected':'' }}>None</option>                                                        </select> {!! $errors->has('garage_type')? '
								<p class="help-block">'.$errors->first('garage_type').'</p>
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
                                                                <option value="Crawl Space" {{ $ad->basement_type == 'Crawl Space' ? 'selected':'' }}>Crawl Space</option>
                                                                <option value="Full" {{ $ad->basement_type == 'Full' ? 'selected':'' }}>Full</option>
                                                                <option value="None" {{ $ad->basement_type == 'None' ? 'selected':'' }}>None</option>
                                                                <option value="Partially Finished" {{ $ad->basement_type == 'Partially Finished' ? 'selected':'' }}>Partially Finished</option>
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
                                                                <option value="Bulkhead" {{ $ad->base_access == 'Bulkhead' ? 'selected':'' }}>Bulkhead</option>
                                                                <option value="Interior and Exterior" {{ $ad->base_access == 'Interior and Exterior' ? 'selected':'' }}>Interior and Exterior</option>
                                                                <option value="Interior Only" {{ $ad->base_access == 'Interior Only' ? 'selected':'' }}>Interior Only</option>
                                                                <option value="Walkout" {{ $ad->base_access == 'Walkout' ? 'selected':'' }}>Walkout</option>
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
                                                                <option value="Finished" {{ $ad->base_finish == 'Finished' ? 'selected':'' }}>Finished</option>
                                                                <option value="Partially Finished" {{ $ad->base_finish == 'Partially Finished' ? 'selected':'' }}>Partially Finished</option>
                                                                <option value="Unfinished" {{ $ad->base_finish == 'Unfinished' ? 'selected':'' }}>Unfinished</option>
                                                                                 </select> {!! $errors->has('base_finish')? '
								<p class="help-block">'.$errors->first('base_finish').'</p>
								':'' !!}
							</div>
						</div>
						</div>
						
						<div
						class="form-group {{ $errors->has('floors')? 'has-error':'' }}">
						<label for="floors" class="col-sm-4 control-label">Electric</label>
						<div class="col-sm-8">
							<input type="checkbox" value="1" name="elec_none" {{ $ad->elec_none
						== '1'? 'checked="checked"' : '' }}>None</label>
						<input type="checkbox" value="1" name="elec_gen" {{ $ad->elec_gen
						== '1'? 'checked="checked"' : '' }}>Generator-Whole House</label>
						<input type="checkbox" value="1" name="elec_fee" {{ $ad->elec_fee
						== '1'? 'checked="checked"' : '' }}>In Fee</label>
						<input type="checkbox" value="1" name="elec_under" {{ $ad->elec_under
						== '1'? 'checked="checked"' : '' }}>Underground</label>
						<input type="checkbox" value="1" name="elec_upgrade" {{ $ad->elec_upgrade
						== '1'? 'checked="checked"' : '' }}>Upgradeable</label>
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
