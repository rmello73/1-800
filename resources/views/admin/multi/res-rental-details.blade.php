                        <h2>Residential Rental Details</h2>
                                                
						<div
            						class="form-group {{ $errors->has('square_unit_space')? 'has-error':'' }}">
            							<label for="title">Square Unit Space (in SQFT) *</label>
            							<input type="text" class="date form-control" id="square_unit_space"
            								value="{{ @$ad->square_unit_space }}"
            								name="square_unit_space" placeholder="Square Unit Space" autocomplete="off"> {!!
            							$errors->has('square_unit_space')? '
            							<p class="help-block">'.$errors->first('square_unit_space').'</p>
            							':'' !!}
            					</div>
						
						<div class="form-group {{ $errors->has('beds')? 'has-error':'' }}">
							<label for="title">@lang('app.beds')</label>
								<select class="form-control select2NoSearch" name="beds" id="beds">
                                        <option value="">Please select bedrooms</option>
                                                                <option value="0.5" {{{ (isset($ad->beds) && $ad->beds == '0.5') ? "selected=\"selected\"" : "" }}}>0.5</option>
                                                                <option value="1" {{{ (isset($ad->beds) && $ad->beds == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                                                <option value="2" {{{ (isset($ad->beds) && $ad->beds == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                                                <option value="3" {{{ (isset($ad->beds) && $ad->beds == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                                                <option value="4" {{{ (isset($ad->beds) && $ad->beds == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                                                <option value="5" {{{ (isset($ad->beds) && $ad->beds == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                                                <option value="6" {{{ (isset($ad->beds) && $ad->beds == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                                                <option value="7" {{{ (isset($ad->beds) && $ad->beds == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                                                <option value="8" {{{ (isset($ad->beds) && $ad->beds == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                                                <option value="9" {{{ (isset($ad->beds) && $ad->beds == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                                                <option value="10" {{{ (isset($ad->beds) && $ad->beds == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                                                        {!!
            							$errors->has('beds')? '
            							<p class="help-block">'.$errors->first('beds').'</p>
            							':'' !!}
						</div>

						<div class="form-group {{ $errors->has('attached_bath')? 'has-error':'' }}">
							<label for="title">@lang('app.attached_bath')</label>
								<select class="form-control select2NoSearch" name="attached_bath" id="attached_bath">
                                        <option value="">Please select bathrooms</option>
                                                                <option value="0.5" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '0.5') ? "selected=\"selected\"" : "" }}}>0.5</option>
                                                                <option value="1" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                                                <option value="2" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                                                <option value="3" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                                                <option value="4" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                                                <option value="5" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                                                <option value="6" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                                                <option value="7" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                                                <option value="8" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                                                <option value="9" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                                                <option value="10" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                                                        {!!
            							$errors->has('attached_bath')? '
            							<p class="help-block">'.$errors->first('attached_bath').'</p>
            							':'' !!}
						</div>

					<legend>Amenities</legend>

                                        <div class="form-group">
						<label for="title">Dogs</label>
							<select class="form-control select2NoSearch" name="dogs"
								id="dogs">
							    <option value="">Please select</option>
                                                                <option value="Dogs NOT Allowed" {{{ (isset($ad->dogs) && $ad->dogs == 'Dogs NOT Allowed') ? "selected=\"selected\"" : "" }}}>Dogs NOT Allowed</option>
								<option value="Dogs Allowed" {{{ (isset($ad->dogs) && $ad->dogs == 'Dogs Allowed') ? "selected=\"selected\"" : "" }}}>Dogs Allowed</option>
								<option value="See Description" {{{ (isset($ad->dogs) && $ad->dogs == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
					</div>

                                        <div class="form-group">
						<label for="title">Cats</label>
							<select class="form-control select2NoSearch" name="cats"
								id="cats">
							    <option value="">Please select</option>
                                                                <option value="Cats NOT Allowed" {{{ (isset($ad->cats) && $ad->cats == 'Cats NOT Allowed') ? "selected=\"selected\"" : "" }}}>Cats NOT Allowed</option>
								<option value="Cats Allowed" {{{ (isset($ad->cats) && $ad->cats == 'Cats Allowed') ? "selected=\"selected\"" : "" }}}>Cats Allowed</option>
								<option value="See Description" {{{ (isset($ad->cats) && $ad->cats == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
					</div>

                                        <div class="form-group">
						<label for="title">Laundry</label>
							<select class="form-control select2NoSearch" name="laundry"
								id="laundry">
							    <option value="">Please select</option>
								<option value="No Laundry" {{{ (isset($ad->laundry) && $ad->laundry == 'No Laundry') ? "selected=\"selected\"" : "" }}}>No Laundry</option>
								<option value="Laundry on Site" {{{ (isset($ad->laundry) && $ad->laundry == 'Laundry on Site') ? "selected=\"selected\"" : "" }}}>Laundry on Site</option>
								<option value="Laundry in Unit" {{{ (isset($ad->laundry) && $ad->laundry == 'Laundry in Unit') ? "selected=\"selected\"" : "" }}}>Laundry in Unit</option>
								<option value="Washer / Dryer Hookups" {{{ (isset($ad->laundry) && $ad->laundry == 'Washer / Dryer Hookups') ? "selected=\"selected\"" : "" }}}>Washer / Dryer Hookups</option>
								<option value="See Description" {{{ (isset($ad->laundry) && $ad->laundry == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
					</div>

					<div class="form-group">
						<label for="title">Heat</label>
							<select class="form-control select2NoSearch" name="heat"
								id="heat">
							    <option value="">Please select</option>
                                                                <option value="">Please select heat type</option>
								<option value="Gas Heat" {{{ (isset($ad->heat) && $ad->heat == 'Gas Heat') ? "selected=\"selected\"" : "" }}}>Gas Heat</option>
								<option value="Oil Heat" {{{ (isset($ad->heat) && $ad->heat == 'Oil Heat') ? "selected=\"selected\"" : "" }}}>Oil Heat</option>
								<option value="Electric Heat" {{{ (isset($ad->heat) && $ad->heat == 'Electric Heat') ? "selected=\"selected\"" : "" }}}>Electric Heat</option>
								<option value="See Description" {{{ (isset($ad->heat) && $ad->heat == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
					</div>

					<div class="form-group">
						<label for="title">Parking</label>
							<select class="form-control select2NoSearch" name="parking"
								id="parking">
							    <option value="">Please select</option>
								<option value="No Parking" {{{ (isset($ad->parking) && $ad->parking == 'No Parking') ? "selected=\"selected\"" : "" }}}>No Parking</option>
								<option value="Off Street Parking" {{{ (isset($ad->parking) && $ad->parking == 'Off Street Parking') ? "selected=\"selected\"" : "" }}}>Off Street Parking</option>
								<option value="Garage Parking" {{{ (isset($ad->parking) && $ad->parking == 'Garage Parking') ? "selected=\"selected\"" : "" }}}>Garage Parking</option>
								<option value="See Description" {{{ (isset($ad->parking) && $ad->parking == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
					</div>

					<div class="form-group">
						<label for="title">Utilities</label>
							<select class="form-control select2NoSearch" name="utilities"
								id="utilities">
							    <option value="">Please select</option>
								<option value="No Utilities Included" {{{ (isset($ad->utilities) && $ad->utilities == 'No Utilities Included') ? "selected=\"selected\"" : "" }}}>No Utilities Included</option>
								<option value="Heat Included" {{{ (isset($ad->utilities) && $ad->utilities == 'Heat Included') ? "selected=\"selected\"" : "" }}}>Heat Included</option>
								<option value="Electricity Included" {{{ (isset($ad->utilities) && $ad->utilities == 'Electricity Included') ? "selected=\"selected\"" : "" }}}>Electricity Included</option>
								<option value="Heat and Electric Included" {{{ (isset($ad->utilities) && $ad->utilities == 'Heat and Electric Included') ? "selected=\"selected\"" : "" }}}>Heat and Electric Included</option>
								<option value="See Description" {{{ (isset($ad->utilities) && $ad->utilities == 'See Description') ? "selected=\"selected\"" : "" }}}>See Description</option>
							</select>
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
