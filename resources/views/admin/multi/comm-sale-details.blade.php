					<h2>Commercial Property Details</h2>

					<div
            						class="form-group {{ $errors->has('building_size')? 'has-error':'' }}">
            							<label for="title" class="col-sm-4 control-label">Building Size (in SQFT) *</label>
            							<input type="number" class="date form-control" id="building_size"
            								value="{{ @$ad->building_size }}"
            								name="building_size" placeholder="Building Size" autocomplete="off"> {!!
            							$errors->has('building_size')? '
            							<p class="help-block">'.$errors->first('building_size').'</p>
            							':'' !!}
            					</div>

					<div class="form-group">
                                                <label for="lot_size" class="col-sm-4 control-label">@lang('app.lot_size')</label>
                                                        <input type="number" class="form-control" id="lot_size"
                                                                value="{{ $ad->lot_size }}" name="lot_size"
                                                                placeholder="@lang('app.lot_size')">
                                        </div>

					<div class="form-group">
                                                <label for="year_built" class="col-sm-4 control-label">@lang('app.year_built')</label>
                                                        <input type="text" class="form-control" id="year_built"
                                                                value="{{ $ad->year_built }}" name="year_built"
                                                                placeholder="@lang('app.year_built')">
                                        </div>

					<div
            						class="form-group {{ $errors->has('total_units')? 'has-error':'' }}">
            							<label for="title" class="col-sm-4 control-label">Number of Units *</label>
            							<input type="text" class="date form-control" id="total_units"
            								value="{{ @$ad->total_units }}"
            								name="total_units" placeholder="Number of Units" autocomplete="off"> {!!
            							$errors->has('total_units')? '
            							<p class="help-block">'.$errors->first('total_units').'</p>
            							':'' !!}
            					</div>

					<div class="form-group">
							<label for="stories" class="col-sm-4 control-label">Number of Stories</label>
								<input type="text" class="form-control" id="stories"
									value="{{ $ad->stories }}" name="stories"
									placeholder="Number of Stories">
						</div>
						
						<div class="form-group">
							<label for="comm_units" class="col-sm-4 control-label">Number of Commercial Units</label>
								<input type="text" class="form-control" id="comm_units"
									value="{{ $ad->comm_units }}" name="comm_units"
									placeholder="Number of Commercial Units">
						</div>
						
						<div class="form-group">
							<label for="res_units" class="col-sm-4 control-label">Number of Residential Units</label>
								<input type="text" class="form-control" id="res_units"
									value="{{ $ad->res_units }}" name="res_units"
									placeholder="Number of Residential Units">
						</div>

					<div class="form-group">
							<label for="tenancy" class="col-sm-4 control-label">Tenancy</label>
								<select class="form-control select2NoSearch" name="tenancy"
                                                                id="tenancy">
                                                                <option value=""></option>
                                                                <option value="Single" {{{ (isset($ad->tenancy) && $ad->tenancy == 'Single') ? "selected=\"selected\"" : "" }}}>Single</option>
                                                                <option value="Multiple" {{{ (isset($ad->tenancy) && $ad->tenancy == 'Multiple') ? "selected=\"selected\"" : "" }}}>Multiple</option>
                                                        </select>
						</div>

					<div class="form-group">
							<label for="opercentage" class="col-sm-4 control-label">Occupancy %</label>
								<input type="text" class="form-control" id="opercentage"
									value="{{ $ad->opercentage }}" name="opercentage"
									placeholder="Occupancy %">
						</div>

					<div class="form-group">
							<label for="caprate" class="col-sm-4 control-label">Cap Rate %</label>
								<input type="text" class="form-control" id="caprate"
									value="{{ $ad->caprate }}" name="caprate"
									placeholder="Cap Rate %">
						</div>

						<div class="form-group">
							<label for="comm_use" class="col-sm-4 control-label">Property Use</label>
								<input type="text" class="form-control" id="comm_use"
									value="{{ $ad->comm_use }}" name="comm_use"
									placeholder="Property Use">
						</div>

						<div class="form-group">
							<label for="building_class" class="col-sm-4 control-label">Building Class</label>
								<input type="text" class="form-control" id="building_class"
									value="{{ $ad->building_class }}" name="building_class"
									placeholder="Building Class">
						</div>

					@if($ad->comm_type == "Mixed Use")
					<legend>Mixed Use Unit Information</legend>
					<div
						class="form-group {{ $errors->has('res_units')? 'has-error':'' }}">
						<label for="res_units" class="col-sm-4 control-label">Residential Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="res_units"
    									value="{{ $ad->res_units }}" name="res_units"
    									placeholder="Total Units"> {!! $errors->has('res_units')?
							'
							<p class="help-block">'.$errors->first('res_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="res_sqft"
    									value="{{ $ad->res_sqft }}" name="res_sqft"
    									placeholder="Total sqft"> {!! $errors->has('res_sqft')?
							'
							<p class="help-block">'.$errors->first('res_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="res_rent"
    									value="{{ $ad->res_rent }}" name="res_rent"
    									placeholder="Total rent">
                                                        {!! $errors->has('res_rent')? '
								<p class="help-block">'.$errors->first('res_rent').'</p>
								':'' !!}
						</div>
					</div>
					
					<div
						class="form-group {{ $errors->has('flex_units')? 'has-error':'' }}">
						<label for="flex_units" class="col-sm-4 control-label">Flex Unit Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="flex_units"
    									value="{{ $ad->flex_units }}" name="flex_units"
    									placeholder="Total Units"> {!! $errors->has('flex_units')?
							'
							<p class="help-block">'.$errors->first('flex_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="flex_sqft"
    									value="{{ $ad->flex_sqft }}" name="flex_sqft"
    									placeholder="Total sqft"> {!! $errors->has('flex_sqft')?
							'
							<p class="help-block">'.$errors->first('flex_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="flex_rent"
    									value="{{ $ad->flex_rent }}" name="flex_rent"
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
    									value="{{ $ad->industrial_units }}" name="industrial_units"
    									placeholder="Total Units"> {!! $errors->has('industrial_units')?
							'
							<p class="help-block">'.$errors->first('industrial_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="industrial_sqft"
    									value="{{ $ad->industrial_sqft }}" name="industrial_sqft"
    									placeholder="Total sqft"> {!! $errors->has('industrial_sqft')?
							'
							<p class="help-block">'.$errors->first('industrial_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="industrial_rent"
    									value="{{ $ad->industrial_rent }}" name="industrial_rent"
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
    									value="{{ $ad->medical_units }}" name="medical_units"
    									placeholder="Total Units"> {!! $errors->has('medical_units')?
							'
							<p class="help-block">'.$errors->first('medical_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="medical_sqft"
    									value="{{ $ad->medical_sqft }}" name="medical_sqft"
    									placeholder="Total sqft"> {!! $errors->has('medical_sqft')?
							'
							<p class="help-block">'.$errors->first('medical_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="medical_rent"
    									value="{{ $ad->medical_rent }}" name="medical_rent"
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
    									value="{{ $ad->office_units }}" name="office_units"
    									placeholder="Total Units"> {!! $errors->has('office_units')?
							'
							<p class="help-block">'.$errors->first('office_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="office_sqft"
    									value="{{ $ad->office_sqft }}" name="office_sqft"
    									placeholder="Total sqft"> {!! $errors->has('office_sqft')?
							'
							<p class="help-block">'.$errors->first('office_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="office_rent"
    									value="{{ $ad->office_rent }}" name="office_rent"
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
    									value="{{ $ad->other_units }}" name="other_units"
    									placeholder="Total Units"> {!! $errors->has('other_units')?
							'
							<p class="help-block">'.$errors->first('other_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="other_sqft"
    									value="{{ $ad->other_sqft }}" name="other_sqft"
    									placeholder="Total sqft"> {!! $errors->has('other_sqft')?
							'
							<p class="help-block">'.$errors->first('other_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="other_rent"
    									value="{{ $ad->other_rent }}" name="other_rent"
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
    									value="{{ $ad->restaurant_units }}" name="restaurant_units"
    									placeholder="Total Units"> {!! $errors->has('restaurant_units')?
							'
							<p class="help-block">'.$errors->first('restaurant_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="restaurant_sqft"
    									value="{{ $ad->restaurant_sqft }}" name="restaurant_sqft"
    									placeholder="Total sqft"> {!! $errors->has('restaurant_sqft')?
							'
							<p class="help-block">'.$errors->first('restaurant_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="restaurant_rent"
    									value="{{ $ad->restaurant_rent }}" name="restaurant_rent"
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
    									value="{{ $ad->storefront_units }}" name="storefront_units"
    									placeholder="Total Units"> {!! $errors->has('storefront_units')?
							'
							<p class="help-block">'.$errors->first('storefront_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="storefront_sqft"
    									value="{{ $ad->storefront_sqft }}" name="storefront_sqft"
    									placeholder="Total sqft"> {!! $errors->has('storefront_sqft')?
							'
							<p class="help-block">'.$errors->first('storefront_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="storefront_rent"
    									value="{{ $ad->storefront_rent }}" name="storefront_rent"
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
    									value="{{ $ad->warehouse_units }}" name="warehouse_units"
    									placeholder="Total Units"> {!! $errors->has('warehouse_units')?
							'
							<p class="help-block">'.$errors->first('warehouse_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="warehouse_sqft"
    									value="{{ $ad->warehouse_sqft }}" name="warehouse_sqft"
    									placeholder="Total sqft"> {!! $errors->has('warehouse_sqft')?
							'
							<p class="help-block">'.$errors->first('warehouse_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="warehouse_rent"
    									value="{{ $ad->warehouse_rent }}" name="warehouse_rent"
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
    									value="{{ $ad->retail_units }}" name="retail_units"
    									placeholder="Total Units"> {!! $errors->has('retail_units')?
							'
							<p class="help-block">'.$errors->first('retail_units').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="retail_sqft"
    									value="{{ $ad->retail_sqft }}" name="retail_sqft"
    									placeholder="Total sqft"> {!! $errors->has('retail_sqft')?
							'
							<p class="help-block">'.$errors->first('retail_sqft').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="retail_rent"
    									value="{{ $ad->retail_rent }}" name="retail_rent"
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
    									value="{{ $ad->mf_studiou }}" name="mf_studiou"
    									placeholder="Total Units"> {!! $errors->has('mf_studiou')?
							'
							<p class="help-block">'.$errors->first('mf_studiou').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_studios"
    									value="{{ $ad->mf_studios }}" name="mf_studios"
    									placeholder="Total sqft"> {!! $errors->has('mf_studios')?
							'
							<p class="help-block">'.$errors->first('mf_studios').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_studior"
    									value="{{ $ad->mf_studior }}" name="mf_studior"
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
    									value="{{ $ad->mf_oneu }}" name="mf_oneu"
    									placeholder="Total Units"> {!! $errors->has('mf_oneu')?
							'
							<p class="help-block">'.$errors->first('mf_oneu').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_ones"
    									value="{{ $ad->mf_ones }}" name="mf_ones"
    									placeholder="Total sqft"> {!! $errors->has('mf_ones')?
							'
							<p class="help-block">'.$errors->first('mf_ones').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_oner"
    									value="{{ $ad->mf_oner }}" name="mf_oner"
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
    									value="{{ $ad->mf_twou }}" name="mf_twou"
    									placeholder="Total Units"> {!! $errors->has('mf_twou')?
							'
							<p class="help-block">'.$errors->first('mf_twou').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_twos"
    									value="{{ $ad->mf_twos }}" name="mf_twos"
    									placeholder="Total sqft"> {!! $errors->has('mf_twos')?
							'
							<p class="help-block">'.$errors->first('mf_twos').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_twor"
    									value="{{ $ad->mf_twor }}" name="mf_twor"
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
    									value="{{ $ad->mf_threeu }}" name="mf_threeu"
    									placeholder="Total Units"> {!! $errors->has('mf_threeu')?
							'
							<p class="help-block">'.$errors->first('mf_threeu').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_threes"
    									value="{{ $ad->mf_threes }}" name="mf_threes"
    									placeholder="Total sqft"> {!! $errors->has('mf_threes')?
							'
							<p class="help-block">'.$errors->first('mf_threes').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_threer"
    									value="{{ $ad->mf_threer }}" name="mf_threer"
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
    									value="{{ $ad->mf_fouru }}" name="mf_fouru"
    									placeholder="Total Units"> {!! $errors->has('mf_fouru')?
							'
							<p class="help-block">'.$errors->first('mf_fouru').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_fours"
    									value="{{ $ad->retail_units }}" name="mf_fours"
    									placeholder="Total sqft"> {!! $errors->has('mf_fours')?
							'
							<p class="help-block">'.$errors->first('mf_fours').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-3">
							<input type="text" class="form-control" id="mf_fourr"
    									value="{{ $ad->mf_fourr }}" name="mf_fourr"
    									placeholder="Total rent">
                                                        {!! $errors->has('mf_fourr')? '
								<p class="help-block">'.$errors->first('mf_fourr').'</p>
								':'' !!}
						</div>
					</div>
					@endif

					<div class="form-group">
						<label for="location">Location Description</label>
							<textarea name="location" class="form-control" rows="8">{{ $ad->neighborhood_video_url }}</textarea>
							<p class="text-info">This description will help the viewer to learn details about the location of your property</p>
					</div>

					<legend>Property Features</legend>
					<p class="text-info">These features will show up as a bullet-ed list on the property listing.</p>

						<div class="form-group">
								<input type="text" class="form-control" id="pf1"
									value="{{ $ad->pf1 }}" name="pf1"
									placeholder="Property Feature">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="pf2"
									value="{{ $ad->pf2 }}" name="pf2"
									placeholder="Property Feature">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="pf3"
									value="{{ $ad->pf3 }}" name="pf3"
									placeholder="Property Feature">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="pf4"
									value="{{ $ad->pf4 }}" name="pf4"
									placeholder="Property Feature">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="pf5"
									value="{{ $ad->pf5 }}" name="pf5"
									placeholder="Property Feature">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" id="pf6"
									value="{{ $ad->pf6 }}" name="pf6"
									placeholder="Property Feature">
						</div>