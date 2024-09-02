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
					
					<div class="form-group {{ $errors->has('comm_type')? 'has-error':'' }}">
							<label for="comm_type" class="col-sm-4 control-label">Property Type</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="comm_type"
                                                                id="comm_type">
                                                                <option value=""></option>
                                                                <option value="Office" {{ $ad->comm_type == 'Office' ? 'selected':'' }}>Office</option>
                                                                <option value="Retail" {{ $ad->comm_type == 'Retail' ? 'selected':'' }}>Retail</option>
                                                                <option value="Multi-Family" {{ $ad->comm_type == 'Multi-Family' ? 'selected':'' }}>Multi-Family</option>
                                                                <option value="Industrial" {{ $ad->comm_type == 'Industrial' ? 'selected':'' }}>Industrial</option>
                                                                <option value="Health" {{ $ad->comm_type == 'Health' ? 'selected':'' }}>Health</option>
                                                                <option value="Hotel" {{ $ad->comm_type == 'Hotel' ? 'selected':'' }}>Hotel</option>
                                                                <option value="Special" {{ $ad->comm_type == 'Special' ? 'selected':'' }}>Special</option>
                                                                <option value="Mixed Use" {{ $ad->comm_type == 'Mixed Use' ? 'selected':'' }}>Mixed Use</option>
                                                        </select> {!! $errors->has('comm_type')? '
								<p class="help-block">'.$errors->first('comm_type').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('comm_sub')? 'has-error':'' }}">
							<label for="comm_sub" class="col-sm-4 control-label">Property Subtype</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="comm_sub"
                                                                id="comm_sub">
                                                                <option value=""></option>
                                                                <option value="Office Condo" {{ $ad->comm_sub == 'Office Condo' ? 'selected':'' }}>Office Condo</option>
                                                                <option value="Office Buiding" {{ $ad->comm_sub == 'Office Buiding' ? 'selected':'' }}>Office Buiding</option>
                                                                <option value="Office Medical office" {{ $ad->comm_sub == 'Office Medical office' ? 'selected':'' }}>Office Medical office</option>
                                                                <option value="Industrial  Flex Space" {{ $ad->comm_sub == 'Industrial  Flex Space' ? 'selected':'' }}>Industrial  Flex Space</option>
                                                                <option value="Industrial  Manufacturing" {{ $ad->comm_sub == 'Industrial  Manufacturing' ? 'selected':'' }}>Industrial  Manufacturing</option>
                                                                <option value="Industrial  Warehouse" {{ $ad->comm_sub == 'Industrial  Warehouse' ? 'selected':'' }}>Industrial  Warehouse</option>
                                                                <option value="Industrial  Storage Facility" {{ $ad->comm_sub == 'Industrial  Storage Facility' ? 'selected':'' }}>Industrial  Storage Facility</option>
                                                                <option value="Industrial  R&D" {{ $ad->comm_sub == 'Industrial  R&D' ? 'selected':'' }}>Industrial  R&D</option>
                                                                <option value="Industrial  Office Showroom" {{ $ad->comm_sub == 'Industrial  Office Showroom' ? 'selected':'' }}>Industrial  Retail Condo Showroom</option>
                                                                <option value="Retail Condo" {{ $ad->comm_sub == 'Retail Condo' ? 'selected':'' }}>Retail Condo</option>
                                                                <option value="Retail Strip Center" {{ $ad->comm_sub == 'Retail Strip Center' ? 'selected':'' }}>Retail Strip Center</option>
                                                                <option value="Retail Restaurant" {{ $ad->comm_sub == 'Retail Restaurant' ? 'selected':'' }}>Retail Restaurant</option>
                                                                <option value="Retail Mall" {{ $ad->comm_sub == 'Retail Mall' ? 'selected':'' }}>Retail Mall</option>
                                                                <option value="Retail Free Standing Building" {{ $ad->comm_sub == 'Retail Free Standing Building' ? 'selected':'' }}>Retail Free Standing Building</option>
                                                                <option value="Retail Service/ Gas Station" {{ $ad->comm_sub == 'Retail Service/ Gas Station' ? 'selected':'' }}>Retail Service/ Gas Station</option>
                                                                <option value="Retail Special Use" {{ $ad->comm_sub == 'Retail Special Use' ? 'selected':'' }}>Retail Special Use</option>
                                                                <option value="Retail Auto" {{ $ad->comm_sub == 'Retail Auto' ? 'selected':'' }}>Retail Auto</option>
                                                                <option value="Health Care Hospital" {{ $ad->comm_sub == 'Health Care Hospital' ? 'selected':'' }}>Health Care Hospital</option>
                                                                <option value="Health Care Assisted Living Center" {{ $ad->comm_sub == 'Health Care Assisted Living Center' ? 'selected':'' }}>Health Care Assisted Living Center</option>
                                                                <option value="Health Care Nursing Home" {{ $ad->comm_sub == 'Health Care Nursing Home' ? 'selected':'' }}>Health Care Nursing Home</option>
                                                                <option value="Special Purpose Religious Facility" {{ $ad->comm_sub == 'Special Purpose Religious Facility' ? 'selected':'' }}>Special Purpose Religious Facility</option>
                                                                <option value="Special Purpose Marina" {{ $ad->comm_sub == 'Special Purpose Marina' ? 'selected':'' }}>Special Purpose Marina</option>
                                                                <option value="Special Purpose Golf Course" {{ $ad->comm_sub == 'Special Purpose Golf Course' ? 'selected':'' }}>Special Purpose Golf Course</option>
                                                                <option value="Special Purpose Theater" {{ $ad->comm_sub == 'Special Purpose Theater' ? 'selected':'' }}>Special Purpose Theater</option>
                                                                <option value="Special Purpose Theme / activity center" {{ $ad->comm_sub == 'Special Purpose Theme / activity center' ? 'selected':'' }}>Special Purpose Theme / activity center</option>
                                                                <option value="Special Purpose" {{ $ad->comm_sub == 'Special Purpose' ? 'selected':'' }}>Special Purpose</option>
                                                                <option value="Hotel Motel  Bed and Breakfast" {{ $ad->comm_sub == 'Hotel Motel  Bed and Breakfast' ? 'selected':'' }}>Hotel Motel  Bed and Breakfast</option>
                                                                <option value="Hotel/Motel Full Service" {{ $ad->comm_sub == 'Hotel/Motel Full Service' ? 'selected':'' }}>Hotel/Motel Full Service</option>
                                                                <option value="Hotel/Motel Limited Service" {{ $ad->comm_sub == 'Hotel/Motel Limited Service' ? 'selected':'' }}>Hotel/Motel Limited Service</option>
                                                                <option value="Multi Family Garden Low Rise" {{ $ad->comm_sub == 'Multi Family Garden Low Rise' ? 'selected':'' }}>Multi Family Garden Low Rise</option>
                                                                <option value="Multi Family Mid/ High Rise" {{ $ad->comm_sub == 'Multi Family Mid/ High Rise' ? 'selected':'' }}>Multi Family Mid/ High Rise</option>
                                                                <option value="Multi Family Mobile Home" {{ $ad->comm_sub == 'Multi Family Mobile Home' ? 'selected':'' }}>Multi Family Mobile Home</option>
                                                        </select> {!! $errors->has('comm_sub')? '
								<p class="help-block">'.$errors->first('comm_sub').'</p>
								':'' !!}
							</div>
						</div>

<div
                                            	class="form-group {{ $errors->has('price')? 'has-error':'' }}">
                                                <label for="price" class="col-sm-4 control-label">@lang('app.price')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="price"
                                                                value="{{ old('price')? old('price') : $ad->price }}" name="price"
                                                                placeholder="@lang('app.price')"> {!!
                                                        $errors->has('price')? '
                                                        <p class="help-block">'.$errors->first('price').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

						<legend>Commercial Property Details</legend>

<div
                                               	class="form-group {{ $errors->has('building_size')? 'has-error':'' }}">
                                                <label for="building_size" class="col-sm-4 control-label">@lang('app.building_size')</label>
                                                <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="building_size"
                                                                value="{{ old('building_size')? old('building_size') : $ad->building_size }}" name="building_size"
                                                                placeholder="@lang('app.building_size')"> {!!
                                                        $errors->has('building_size')? '
                                                        <p class="help-block">'.$errors->first('building_size').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

					<div
                                                class="form-group {{ $errors->has('lot_size')? 'has-error':'' }}">
                                                <label for="lot_size" class="col-sm-4 control-label">@lang('app.lot_size')</label>
                                                <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="lot_size"
                                                                value="{{ old('lot_size')? old('lot_size') : $ad->lot_size }}" name="lot_size"
                                                                placeholder="@lang('app.lot_size')"> {!!
                                                        $errors->has('lot_size')? '
                                                        <p class="help-block">'.$errors->first('lot_size').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

					<div
                                                class="form-group {{ $errors->has('year_built')? 'has-error':'' }}">
                                                <label for="year_built" class="col-sm-4 control-label">@lang('app.year_built')</label>
						<div class="col-sm-8">
                                                        <input type="text" class="form-control" id="year_built"
                                                                value="{{ old('year_built')? old('year_built') : $ad->year_built }}" name="year_built"
                                                                placeholder="@lang('app.year_built')"> {!!
                                                        $errors->has('year_built')? '
                                                        <p class="help-block">'.$errors->first('year_built').'</p>
                                                        ':'' !!}
                                                </div>
                                        </div>

						<div
							class="form-group {{ $errors->has('total_units')? 'has-error':'' }}">
							<label for="total_units" class="col-sm-4 control-label">Total Number of Units</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="total_units"
									value="{{ old('total_units')? old('total_units') : $ad->total_units }}" name="total_units"
									placeholder="Number of Units"> {!!
								$errors->has('total_units')? '
								<p class="help-block">'.$errors->first('total_units').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('stories')? 'has-error':'' }}">
							<label for="stories" class="col-sm-4 control-label">Number of Stories</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="stories"
									value="{{ old('stories')? old('stories') : $ad->stories }}" name="stories"
									placeholder="Number of Stories"> {!!
								$errors->has('stories')? '
								<p class="help-block">'.$errors->first('stories').'</p>
								':'' !!}
							</div>
						</div>

						<div class="form-group {{ $errors->has('tenancy')? 'has-error':'' }}">
							<label for="tenancy" class="col-sm-4 control-label">Tenancy</label>
							<div class="col-sm-8">
								<select class="form-control select2NoSearch" name="tenancy"
                                                                id="tenancy">
                                                                <option value=""></option>
                                                                <option value="Single" {{ $ad->tenancy == 'Single' ? 'selected':'' }}>Single</option>
                                                                <option value="Multiple" {{ $ad->tenancy == 'Multiple' ? 'selected':'' }}>Multiple</option>
                                                        </select> {!! $errors->has('tenancy')? '
								<p class="help-block">'.$errors->first('tenancy').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('opercentage')? 'has-error':'' }}">
							<label for="opercentage" class="col-sm-4 control-label">Occupancy %</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="opercentage"
									value="{{ old('opercentage')? old('opercentage') : $ad->opercentage }}" name="opercentage"
									placeholder="Occupancy %"> {!!
								$errors->has('opercentage')? '
								<p class="help-block">'.$errors->first('opercentage').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('caprate')? 'has-error':'' }}">
							<label for="caprate" class="col-sm-4 control-label">Cap Rate %</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="caprate"
									value="{{ old('caprate')? old('caprate') : $ad->caprate }}" name="caprate"
									placeholder="Cap Rate %"> {!!
								$errors->has('caprate')? '
								<p class="help-block">'.$errors->first('caprate').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('comm_use')? 'has-error':'' }}">
							<label for="comm_use" class="col-sm-4 control-label">Property Use</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="comm_use"
									value="{{ old('comm_use')? old('comm_use') : $ad->comm_use }}" name="comm_use"
									placeholder="Property Use"> {!!
								$errors->has('comm_use')? '
								<p class="help-block">'.$errors->first('comm_use').'</p>
								':'' !!}
							</div>
						</div>

						<div
							class="form-group {{ $errors->has('building_class')? 'has-error':'' }}">
							<label for="building_class" class="col-sm-4 control-label">Building Class</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="building_class"
									value="{{ old('building_class')? old('building_class') : $ad->building_class }}" name="building_class"
									placeholder="Building Class"> {!!
								$errors->has('building_class')? '
								<p class="help-block">'.$errors->first('building_class').'</p>
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

					<div
						class="form-group {{ $errors->has('location')? 'has-error':'' }}">
						<label for="location" class="col-sm-4 control-label">Location Description</label>
						<div class="col-sm-8">
							<textarea name="location" class="form-control" rows="8">{{ old('location')? old('location') : $ad->location }}</textarea>
							{!! $errors->has('location')? '
							<p class="help-block">'.$errors->first('location').'</p>
							':'' !!}
							<p class="text-info">This description will help the viewer to learn details about the location of your property</p>
						</div>
					</div>
					
					@if($ad->comm_type == "Mixed Use")
					<legend>Mixed Use Unit Information</legend>
					
					<div class="row">
                        <div
        						class="form-group  {{ $errors->has('res_unitcb')? 'has-error':'' }}">
            			    <div class="col-sm-8">
            			        <label> <input type="checkbox" value="1" name="res_unitcb" id="res_unitcb" {{ $ad->res_unitcb
            						== '1'? 'checked="checked"' : '' }}> Residential Units
            					</label>
            				</div>
            			</div>
        			</div>
					
					<div id="res-unit" style="display: none">
						<div
						class="form-group {{ $errors->has('res_units')? 'has-error':'' }}">
						<label for="res_units" class="col-sm-4 control-label">Residential Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="res_units"
    									value="{{ old('res_units')? old('res_units') : $ad->res_units }}" name="res_units"
    									placeholder="Total Units"> {!! $errors->has('res_units')?
							'
							<p class="help-block">'.$errors->first('res_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="res_sqft"
    									value="{{ old('res_sqft')? old('res_sqft') : $ad->res_sqft }}" name="res_sqft"
    									placeholder="Total sqft"> {!! $errors->has('res_sqft')?
							'
							<p class="help-block">'.$errors->first('res_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="res_rent"
    									value="{{ old('res_rent')? old('res_rent') : $ad->res_rent }}" name="res_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('res_rent')? '
								<p class="help-block">'.$errors->first('res_rent').'</p>
								':'' !!}
						</div>
					</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('flex_units')? 'has-error':'' }}">
						<label for="flex_units" class="col-sm-4 control-label">Flex Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="flex_units"
    									value="{{ old('flex_units')? old('flex_units') : $ad->flex_units }}" name="flex_units"
    									placeholder="Total Units"> {!! $errors->has('flex_units')?
							'
							<p class="help-block">'.$errors->first('flex_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="flex_sqft"
    									value="{{ old('flex_sqft')? old('flex_sqft') : $ad->flex_sqft }}" name="flex_sqft"
    									placeholder="Total sqft"> {!! $errors->has('flex_sqft')?
							'
							<p class="help-block">'.$errors->first('flex_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="flex_rent"
    									value="{{ old('flex_rent')? old('flex_rent') : $ad->flex_rent }}" name="flex_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('flex_rent')? '
								<p class="help-block">'.$errors->first('flex_rent').'</p>
								':'' !!}
						</div>
					</div>
					
				    <div
						class="form-group {{ $errors->has('industrial_units')? 'has-error':'' }}">
						<label for="industrial_units" class="col-sm-4 control-label">Industrial Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="industrial_units"
    									value="{{ old('industrial_units')? old('industrial_units') : $ad->industrial_units }}" name="industrial_units"
    									placeholder="Total Units"> {!! $errors->has('industrial_units')?
							'
							<p class="help-block">'.$errors->first('industrial_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="industrial_sqft"
    									value="{{ old('industrial_sqft')? old('industrial_sqft') : $ad->industrial_sqft }}" name="industrial_sqft"
    									placeholder="Total sqft"> {!! $errors->has('industrial_sqft')?
							'
							<p class="help-block">'.$errors->first('industrial_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="industrial_rent"
    									value="{{ old('industrial_rent')? old('industrial_rent') : $ad->industrial_rent }}" name="industrial_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('industrial_rent')? '
								<p class="help-block">'.$errors->first('industrial_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('medical_units')? 'has-error':'' }}">
						<label for="medical_units" class="col-sm-4 control-label">Medical Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="medical_units"
    									value="{{ old('medical_units')? old('medical_units') : $ad->medical_units }}" name="medical_units"
    									placeholder="Total Units"> {!! $errors->has('medical_units')?
							'
							<p class="help-block">'.$errors->first('medical_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="medical_sqft"
    									value="{{ old('medical_sqft')? old('medical_sqft') : $ad->medical_sqft }}" name="medical_sqft"
    									placeholder="Total sqft"> {!! $errors->has('medical_sqft')?
							'
							<p class="help-block">'.$errors->first('medical_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="medical_rent"
    									value="{{ old('medical_rent')? old('medical_rent') : $ad->medical_rent }}" name="medical_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('medical_rent')? '
								<p class="help-block">'.$errors->first('medical_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('office_units')? 'has-error':'' }}">
						<label for="office_units" class="col-sm-4 control-label">Office Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="office_units"
    									value="{{ old('office_units')? old('office_units') : $ad->office_units }}" name="office_units"
    									placeholder="Total Units"> {!! $errors->has('office_units')?
							'
							<p class="help-block">'.$errors->first('office_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="office_sqft"
    									value="{{ old('office_sqft')? old('office_sqft') : $ad->office_sqft }}" name="office_sqft"
    									placeholder="Total sqft"> {!! $errors->has('office_sqft')?
							'
							<p class="help-block">'.$errors->first('office_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="office_rent"
    									value="{{ old('office_rent')? old('office_rent') : $ad->office_rent }}" name="office_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('office_rent')? '
								<p class="help-block">'.$errors->first('office_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('other_units')? 'has-error':'' }}">
						<label for="other_units" class="col-sm-4 control-label">Other Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="other_units"
    									value="{{ old('other_units')? old('other_units') : $ad->other_units }}" name="other_units"
    									placeholder="Total Units"> {!! $errors->has('other_units')?
							'
							<p class="help-block">'.$errors->first('other_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="other_sqft"
    									value="{{ old('other_sqft')? old('other_sqft') : $ad->other_sqft }}" name="other_sqft"
    									placeholder="Total sqft"> {!! $errors->has('other_sqft')?
							'
							<p class="help-block">'.$errors->first('other_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="other_rent"
    									value="{{ old('other_rent')? old('other_rent') : $ad->other_rent }}" name="other_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('other_rent')? '
								<p class="help-block">'.$errors->first('other_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('restaurant_units')? 'has-error':'' }}">
						<label for="restaurant_units" class="col-sm-4 control-label">Restaurant Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="restaurant_units"
    									value="{{ old('restaurant_units')? old('restaurant_units') : $ad->restaurant_units }}" name="restaurant_units"
    									placeholder="Total Units"> {!! $errors->has('restaurant_units')?
							'
							<p class="help-block">'.$errors->first('restaurant_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="restaurant_sqft"
    									value="{{ old('restaurant_sqft')? old('restaurant_sqft') : $ad->restaurant_sqft }}" name="restaurant_sqft"
    									placeholder="Total sqft"> {!! $errors->has('restaurant_sqft')?
							'
							<p class="help-block">'.$errors->first('restaurant_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="restaurant_rent"
    									value="{{ old('restaurant_rent')? old('restaurant_rent') : $ad->restaurant_rent }}" name="restaurant_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('restaurant_rent')? '
								<p class="help-block">'.$errors->first('restaurant_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('storefront_units')? 'has-error':'' }}">
						<label for="storefront_units" class="col-sm-4 control-label">Storefront Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="storefront_units"
    									value="{{ old('storefront_units')? old('storefront_units') : $ad->storefront_units }}" name="storefront_units"
    									placeholder="Total Units"> {!! $errors->has('storefront_units')?
							'
							<p class="help-block">'.$errors->first('storefront_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="storefront_sqft"
    									value="{{ old('storefront_sqft')? old('storefront_sqft') : $ad->storefront_sqft }}" name="storefront_sqft"
    									placeholder="Total sqft"> {!! $errors->has('storefront_sqft')?
							'
							<p class="help-block">'.$errors->first('storefront_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="storefront_rent"
    									value="{{ old('storefront_rent')? old('storefront_rent') : $ad->storefront_rent }}" name="storefront_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('storefront_rent')? '
								<p class="help-block">'.$errors->first('storefront_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('warehouse_units')? 'has-error':'' }}">
						<label for="warehouse_units" class="col-sm-4 control-label">Warehouse Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="warehouse_units"
    									value="{{ old('warehouse_units')? old('warehouse_units') : $ad->warehouse_units }}" name="warehouse_units"
    									placeholder="Total Units"> {!! $errors->has('warehouse_units')?
							'
							<p class="help-block">'.$errors->first('warehouse_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="warehouse_sqft"
    									value="{{ old('warehouse_sqft')? old('warehouse_sqft') : $ad->warehouse_sqft }}" name="warehouse_sqft"
    									placeholder="Total sqft"> {!! $errors->has('warehouse_sqft')?
							'
							<p class="help-block">'.$errors->first('warehouse_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="warehouse_rent"
    									value="{{ old('warehouse_rent')? old('warehouse_rent') : $ad->warehouse_rent }}" name="warehouse_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('warehouse_rent')? '
								<p class="help-block">'.$errors->first('warehouse_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('retail_units')? 'has-error':'' }}">
						<label for="retail_units" class="col-sm-4 control-label">Retail Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="retail_units"
    									value="{{ old('retail_units')? old('retail_units') : $ad->retail_units }}" name="retail_units"
    									placeholder="Total Units"> {!! $errors->has('retail_units')?
							'
							<p class="help-block">'.$errors->first('retail_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="retail_sqft"
    									value="{{ old('retail_sqft')? old('retail_sqft') : $ad->retail_sqft }}" name="retail_sqft"
    									placeholder="Total sqft"> {!! $errors->has('retail_sqft')?
							'
							<p class="help-block">'.$errors->first('retail_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="retail_rent"
    									value="{{ old('retail_rent')? old('retail_rent') : $ad->retail_rent }}" name="retail_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('retail_rent')? '
								<p class="help-block">'.$errors->first('retail_rent').'</p>
								':'' !!}
						</div>
					</div>
					@endif
					
					@if($ad->comm_type == "Multi-Family")
					<legend>Multi-Family Unit Information</legend>
					
						<div
						class="form-group {{ $errors->has('mf_studiou')? 'has-error':'' }}">
						<label for="mf_studiou" class="col-sm-4 control-label">Studio</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="mf_studiou"
    									value="{{ old('mf_studiou')? old('mf_studiou') : $ad->mf_studiou }}" name="mf_studiou"
    									placeholder="Total Units"> {!! $errors->has('mf_studiou')?
							'
							<p class="help-block">'.$errors->first('mf_studiou').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_studios"
    									value="{{ old('mf_studios')? old('mf_studios') : $ad->mf_studios }}" name="mf_studios"
    									placeholder="Total sqft"> {!! $errors->has('mf_studios')?
							'
							<p class="help-block">'.$errors->first('mf_studios').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_studior"
    									value="{{ old('mf_studior')? old('mf_studior') : $ad->mf_studior }}" name="mf_studior"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_studior')? '
								<p class="help-block">'.$errors->first('mf_studior').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('mf_oneu')? 'has-error':'' }}">
						<label for="mf_oneu" class="col-sm-4 control-label">1 Bed</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="mf_oneu"
    									value="{{ old('mf_oneu')? old('mf_oneu') : $ad->mf_oneu }}" name="mf_oneu"
    									placeholder="Total Units"> {!! $errors->has('mf_oneu')?
							'
							<p class="help-block">'.$errors->first('mf_oneu').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_ones"
    									value="{{ old('mf_ones')? old('mf_ones') : $ad->mf_ones }}" name="mf_ones"
    									placeholder="Total sqft"> {!! $errors->has('mf_ones')?
							'
							<p class="help-block">'.$errors->first('mf_ones').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_oner"
    									value="{{ old('mf_oner')? old('mf_oner') : $ad->mf_oner }}" name="mf_oner"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_oner')? '
								<p class="help-block">'.$errors->first('mf_oner').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('mf_twou')? 'has-error':'' }}">
						<label for="mf_twou" class="col-sm-4 control-label">2 Beds</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="mf_twou"
    									value="{{ old('mf_twou')? old('mf_twou') : $ad->mf_twou }}" name="mf_twou"
    									placeholder="Total Units"> {!! $errors->has('mf_twou')?
							'
							<p class="help-block">'.$errors->first('mf_twou').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_twos"
    									value="{{ old('mf_twos')? old('mf_twos') : $ad->mf_twos }}" name="mf_twos"
    									placeholder="Total sqft"> {!! $errors->has('mf_twos')?
							'
							<p class="help-block">'.$errors->first('mf_twos').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_twor"
    									value="{{ old('mf_twor')? old('mf_twor') : $ad->mf_twor }}" name="mf_twor"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_twor')? '
								<p class="help-block">'.$errors->first('mf_twor').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('mf_threeu')? 'has-error':'' }}">
						<label for="mf_threeu" class="col-sm-4 control-label">3 Beds</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="mf_threeu"
    									value="{{ old('mf_threeu')? old('mf_threeu') : $ad->mf_threeu }}" name="mf_threeu"
    									placeholder="Total Units"> {!! $errors->has('mf_threeu')?
							'
							<p class="help-block">'.$errors->first('mf_threeu').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_threes"
    									value="{{ old('mf_threes')? old('mf_threes') : $ad->mf_threes }}" name="mf_threes"
    									placeholder="Total sqft"> {!! $errors->has('mf_threes')?
							'
							<p class="help-block">'.$errors->first('mf_threes').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_threer"
    									value="{{ old('mf_threer')? old('mf_threer') : $ad->mf_threer }}" name="mf_threer"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_threer')? '
								<p class="help-block">'.$errors->first('mf_threer').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('mf_fouru')? 'has-error':'' }}">
						<label for="mf_fouru" class="col-sm-4 control-label">4 Beds</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="mf_fouru"
    									value="{{ old('mf_fouru')? old('mf_fouru') : $ad->mf_fouru }}" name="mf_fouru"
    									placeholder="Total Units"> {!! $errors->has('mf_fouru')?
							'
							<p class="help-block">'.$errors->first('mf_fouru').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_fours"
    									value="{{ old('mf_fours')? old('mf_fours') : $ad->mf_fours }}" name="mf_fours"
    									placeholder="Total sqft"> {!! $errors->has('mf_fours')?
							'
							<p class="help-block">'.$errors->first('mf_fours').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_fourr"
    									value="{{ old('mf_fourr')? old('mf_fourr') : $ad->mf_fourr }}" name="mf_fourr"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_fourr')? '
								<p class="help-block">'.$errors->first('mf_fourr').'</p>
								':'' !!}
						</div>
					</div>
					@endif

					<legend>Property Features</legend>

						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 1</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf1"
									value="{{ old('pf1')? old('pf1') : $ad->pf1 }}" name="pf1"
									placeholder="Property Feature"> {!!
								$errors->has('pf1')? '
								<p class="help-block">'.$errors->first('pf1').'</p>
								':'' !!}
							</div>
						</div>
						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 2</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf2"
									value="{{ old('pf2')? old('pf2') : $ad->pf2 }}" name="pf2"
									placeholder="Property Feature"> {!!
								$errors->has('pf2')? '
								<p class="help-block">'.$errors->first('pf2').'</p>
								':'' !!}
							</div>
						</div>
						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 3</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf3"
									value="{{ old('pf3')? old('pf3') : $ad->pf3 }}" name="pf3"
									placeholder="Property Feature"> {!!
								$errors->has('pf3')? '
								<p class="help-block">'.$errors->first('pf3').'</p>
								':'' !!}
							</div>
						</div>
						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 4</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf4"
									value="{{ old('pf4')? old('pf4') : $ad->pf4 }}" name="pf4"
									placeholder="Property Feature"> {!!
								$errors->has('pf4')? '
								<p class="help-block">'.$errors->first('pf4').'</p>
								':'' !!}
							</div>
						</div>
						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 5</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf5"
									value="{{ old('pf5')? old('pf5') : $ad->pf5 }}" name="pf5"
									placeholder="Property Feature"> {!!
								$errors->has('pf5')? '
								<p class="help-block">'.$errors->first('pf5').'</p>
								':'' !!}
							</div>
						</div>
						<div
							class="form-group {{ $errors->has('pf1')? 'has-error':'' }}">
						    <label for="lot_size" class="col-sm-4 control-label">Feature 6</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="pf6"
									value="{{ old('pf6')? old('pf6') : $ad->pf6 }}" name="pf6"
									placeholder="Property Feature"> {!!
								$errors->has('pf6')? '
								<p class="help-block">'.$errors->first('pf6').'</p>
								':'' !!}
							</div>
						</div>
<p class="text-info">These features will show up as a bullet-ed list on the property listing.</p>