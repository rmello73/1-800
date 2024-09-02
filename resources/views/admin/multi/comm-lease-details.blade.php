						<h2>Commercial Lease Details</h2>
					
					<div
            						class="form-group {{ $errors->has('space_available')? 'has-error':'' }}">
            							<label for="title">@lang('app.space_available') *</label>
            							<input type="text" class="date form-control" id="space_available"
            								value="{{ @$ad->space_available }}"
            								name="space_available" placeholder="@lang('app.space_available')" autocomplete="off"> {!!
            							$errors->has('space_available')? '
            							<p class="help-block">'.$errors->first('space_available').'</p>
            							':'' !!}
            					</div>
					
										<div class="form-group">
                                                <label for="lease_type">@lang('app.lease_type')</label>
                                                        <select class="form-control select2NoSearch" name="lease_type"
								id="lease_type">
								<option value="">Please select Lease Type</option>
								<option value="N/A">N/A</option>
								<option value="Full Service">Full Service</option>
								<option value="Industrial Gross">Industrial Gross</option>
								<option value="NNN">NNN</option>
								<option value="Modified Gross">Modified Gross</option>
								<option value="Modified Net">Modified Net</option>
								<option value="Other">Other</option>
							</select>
                                        </div>
					<div class="form-group">
                                                <label for="year_built">@lang('app.year_built')</label>
                                                        <input type="text" class="form-control" id="year_built"
                                                                value="{{ $ad->year_built }}" name="year_built"
                                                                placeholder="@lang('app.year_built')">
                                        </div>
					<div class="form-group">
                                                <label for="lot_size">@lang('app.lot_size')</label>
                                                        <input type="text" class="form-control" id="lot_size"
                                                                value="{{ $ad->lot_size }}" name="lot_size"
                                                                placeholder="@lang('app.lot_size')">
                                        </div>
						<div
            						class="form-group {{ $errors->has('sqft_price')? 'has-error':'' }}">
            							<label for="title">@lang('app.sqft_price') *</label>
            							<input type="text" class="date form-control" id="sqft_price"
            								value="{{ @$ad->sqft_price }}"
            								name="sqft_price" placeholder="Square Unit Space" autocomplete="off"> {!!
            							$errors->has('sqft_price')? '
            							<p class="help-block">'.$errors->first('sqft_price').'</p>
            							':'' !!}
            					</div>

					<div class="form-group">
                                                <label for="building_size">@lang('app.building_size')</label>
                                                        <input type="text" class="form-control" id="building_size"
                                                                value="{{ $ad->building_size }}" name="building_size"
                                                                placeholder="@lang('app.building_size')">
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

						<div
    						class="form-group {{ $errors->has('location')? 'has-error':'' }}">
    						<label for="location" class="col-sm-4 control-label">Location Description</label>
    						<div class="col-sm-8">
    							<textarea name="location" class="form-control" rows="8">{{ $ad->location }}</textarea>
    							{!! $errors->has('location')? '
    							<p class="help-block">'.$errors->first('location').'</p>
    							':'' !!}
    							<p class="text-info">This description will help the viewer to learn details about the location of your property</p>
    						</div>
    					</div>
                        <legend>Property Features</legend>
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
                            <p class="text-info">These features will show up as a bullet-ed list on the property listing.</p>