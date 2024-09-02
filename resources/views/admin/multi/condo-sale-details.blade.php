                    <h2>Condo Sale Details</h2>
					<div class="form-group {{ $errors->has('condo_style')? 'has-error':'' }}">
						<label for="condo_style">Property Style *</label>
							<select class="form-control select2NoSearch" name="condo_style"
								id="condo_style">
								<option value="">Please select Property Style</option>
                                <option value="Below Ground Unit" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Below Ground Unit') ? "selected=\"selected\"" : "" }}}>Below Ground Unit</option>
                                <option value="Co-Op" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Co-Op') ? "selected=\"selected\"" : "" }}}>Co-Op</option>
                                <option value="Dock" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Dock') ? "selected=\"selected\"" : "" }}}>Dock</option>
                                <option value="High Rise" {{{ (isset($ad->condo_style) && $ad->condo_style == 'High Rise') ? "selected=\"selected\"" : "" }}}>High Rise</option>
                                <option value="Loft" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Loft') ? "selected=\"selected\"" : "" }}}>Loft</option>
                                <option value="One Level" {{{ (isset($ad->condo_style) && $ad->condo_style == 'One Level') ? "selected=\"selected\"" : "" }}}>One Level</option>
                                <option value="Other" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Other') ? "selected=\"selected\"" : "" }}}>Other</option>
                                <option value="Slip" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Slip') ? "selected=\"selected\"" : "" }}}>Slip</option>
                                <option value="Town House" {{{ (isset($ad->condo_style) && $ad->condo_style == 'Town House') ? "selected=\"selected\"" : "" }}}>Town House</option>
							</select> {!!
            							$errors->has('condo_style')? '
            							<p class="help-block">'.$errors->first('condo_style').'</p>
            							':'' !!}
					</div>

                                        <div class="form-group {{ $errors->has('square_unit_space')? 'has-error':'' }}">
							<label for="square_unit_space">@lang('app.square_unit_space') *</label>
									<input type="number" placeholder="@lang('app.square_unit_space')"
										class="form-control" name="square_unit_space" id="square_unit_space"
										value="{{ $ad->square_unit_space }}">
                                                                                {!!
            							$errors->has('square_unit_space')? '
            							<p class="help-block">'.$errors->first('square_unit_space').'</p>
            							':'' !!}
						</div>

						<legend>@lang('app.property_detail')</legend>

						<div class="form-group">
							<label for="year_built">Year Built</label>
								<input type="text" class="form-control" id="year_built"
									value="{{ $ad->year_built }}" name="year_built"
									placeholder="Year Built">
						</div>

						<div class="form-group">
							<label for="taxes">Taxes</label>
								<input type="text" class="form-control" id="taxes"
									value="{{ $ad->taxes }}" name="taxes"
									placeholder="Taxes">
						</div>

						<div class="form-group">
							<label for="tax_year">Tax Year</label>
								<input type="text" class="form-control" id="tax_year"
									value="{{ $ad->square_unit_space }}" name="tax_year"
									placeholder="Tax Year">
						</div>

						<div class="form-group">
							<label for="assessment">Assessment</label>
								<input type="number" class="form-control" id="assessment"
									value="{{ $ad->assessment }}" name="assessment"
									placeholder="Assessment">
						</div>

						<div class="form-group">
							<label for="county">County</label>
								<input type="text" class="form-control" id="county"
									value="{{ $ad->county }}" name="county"
									placeholder="County">
						</div>

                                                <div class="form-group {{ $errors->has('beds')? 'has-error':'' }}">
							<label for="beds">@lang('app.beds') *</label>
								<select class="form-control select2NoSearch" name="beds"
                                                                id="beds">
                                                                <option value=""></option>
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
							<label for="attached_bath">Full Bathrooms *</label>
								<select class="form-control select2NoSearch" name="attached_bath"
                                                                id="attached_bath">
                                                                <option value=""></option>
                                                                <option value="0" {{{ (isset($ad->attached_bath) && $ad->attached_bath == '0') ? "selected=\"selected\"" : "" }}}>0</option>
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

						<div class="form-group">
							<label for="half_bath">Half Bathrooms</label>
								<select class="form-control select2NoSearch" name="half_bath"
                                                                id="half_bath">
                                                                <option value=""></option>
                                                                <option value="0" {{{ (isset($ad->half_bath) && $ad->half_bath == '0') ? "selected=\"selected\"" : "" }}}>0</option>
                                                                <option value="1" {{{ (isset($ad->half_bath) && $ad->half_bath == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                                                <option value="2" {{{ (isset($ad->half_bath) && $ad->half_bath == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                                                <option value="3" {{{ (isset($ad->half_bath) && $ad->half_bath == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                                                <option value="4" {{{ (isset($ad->half_bath) && $ad->half_bath == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                                                <option value="5" {{{ (isset($ad->half_bath) && $ad->half_bath == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                                                <option value="6" {{{ (isset($ad->half_bath) && $ad->half_bath == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                                                <option value="7" {{{ (isset($ad->half_bath) && $ad->half_bath == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                                                <option value="8" {{{ (isset($ad->half_bath) && $ad->half_bath == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                                                <option value="9" {{{ (isset($ad->half_bath) && $ad->half_bath == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                                                <option value="10" {{{ (isset($ad->half_bath) && $ad->half_bath == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>

                                                        </select>
						</div>

					<div class="form-group">
						<label for="lot_size">Lot Size</label>
							<input type="text" class="form-control" id="lot_size"
								value="{{ $ad->lot_size }}" name="lot_size"
								placeholder="Lot Size">
					</div>

						<div class="form-group">
							<label for="water">Water</label>
								<select class="form-control select2NoSearch" name="water"
                                                                id="water">
                                        <option value=""></option>
                                        <option value="Assessment" {{{ (isset($ad->water) && $ad->water == 'Assessment') ? "selected=\"selected\"" : "" }}}>Assessment</option>
                                        <option value="Asssmt Seller" {{{ (isset($ad->water) && $ad->water == 'Asssmt Seller') ? "selected=\"selected\"" : "" }}}>Asssmt Seller</option>
                                        <option value="Assmto Buyer" {{{ (isset($ad->water) && $ad->water == 'Assmto Buyer') ? "selected=\"selected\"" : "" }}}>Assmto Buyer</option>
                                        <option value="Available" {{{ (isset($ad->water) && $ad->water == 'Available') ? "selected=\"selected\"" : "" }}}>Available</option>
                                        <option value="Cistern" {{{ (isset($ad->water) && $ad->water == 'Cistern') ? "selected=\"selected\"" : "" }}}>Cistern</option>
                                        <option value="Common Meter" {{{ (isset($ad->water) && $ad->water == 'Common Meter') ? "selected=\"selected\"" : "" }}}>Common Meter</option>
                                        <option value="In Fee" {{{ (isset($ad->water) && $ad->water == 'In Fee') ? "selected=\"selected\"" : "" }}}>In Fee</option>
                                        <option value="Individual Meter" {{{ (isset($ad->water) && $ad->water == 'Individual Meter') ? "selected=\"selected\"" : "" }}}>Individual Meter</option>
                                        <option value="Municipal/Connected" {{{ (isset($ad->water) && $ad->water == 'Municipal/Connected') ? "selected=\"selected\"" : "" }}}>Municipal/Connected</option>
                                        <option value="None" {{{ (isset($ad->water) && $ad->water == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                        <option value="Private" {{{ (isset($ad->water) && $ad->water == 'Private') ? "selected=\"selected\"" : "" }}}>Private</option>
                                        <option value="Public Available" {{{ (isset($ad->water) && $ad->water == 'Public Available') ? "selected=\"selected\"" : "" }}}>Public Available</option>
                                        <option value="Public Connected" {{{ (isset($ad->water) && $ad->water == 'Public Connected') ? "selected=\"selected\"" : "" }}}>Public Connected</option>
                                        <option value="Well" {{{ (isset($ad->water) && $ad->water == 'Well') ? "selected=\"selected\"" : "" }}}>Well</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="sewer">Sewer</label>
								<select class="form-control select2NoSearch" name="sewer"
                                                                id="sewer">
                                        <option value=""></option>
                                        <option value="Assessment" {{{ (isset($ad->sewer) && $ad->sewer == 'Assessment') ? "selected=\"selected\"" : "" }}}>Assessment</option>
                                        <option value="Asssmt Seller" {{{ (isset($ad->sewer) && $ad->sewer == 'Asssmt Seller') ? "selected=\"selected\"" : "" }}}>Asssmt Seller</option>
                                        <option value="Assmto Buyer" {{{ (isset($ad->sewer) && $ad->sewer == 'Assmto Buyer') ? "selected=\"selected\"" : "" }}}>Assmto Buyer</option>
                                        <option value="Available" {{{ (isset($ad->sewer) && $ad->sewer == 'Available') ? "selected=\"selected\"" : "" }}}>Available</option>
                                        <option value="Cesspool" {{{ (isset($ad->sewer) && $ad->sewer == 'Cesspool') ? "selected=\"selected\"" : "" }}}>Cesspool</option>
                                        <option value="Common Meter" {{{ (isset($ad->sewer) && $ad->sewer == 'Common Meter') ? "selected=\"selected\"" : "" }}}>Common Meter</option>
                                        <option value="In Fee" {{{ (isset($ad->sewer) && $ad->sewer == 'In Fee') ? "selected=\"selected\"" : "" }}}>In Fee</option>
                                        <option value="Municipal/Connected" {{{ (isset($ad->sewer) && $ad->sewer == 'Municipal/Connected') ? "selected=\"selected\"" : "" }}}>Municipal/Connected</option>
                                        <option value="None" {{{ (isset($ad->sewer) && $ad->sewer == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                        <option value="Other" {{{ (isset($ad->sewer) && $ad->sewer == 'Other') ? "selected=\"selected\"" : "" }}}>Other</option>
                                        <option value="Pre-Treatment" {{{ (isset($ad->sewer) && $ad->sewer == 'Pre-Treatment') ? "selected=\"selected\"" : "" }}}>Pre-Treatment</option>
                                        <option value="Public Available" {{{ (isset($ad->sewer) && $ad->sewer == 'Public Available') ? "selected=\"selected\"" : "" }}}>Public Available</option>
                                        <option value="Public Connected" {{{ (isset($ad->sewer) && $ad->sewer == 'Public Connected') ? "selected=\"selected\"" : "" }}}>Public Connected</option>
                                        <option value="Septic System" {{{ (isset($ad->sewer) && $ad->sewer == 'Septic System') ? "selected=\"selected\"" : "" }}}>Septic System</option>
                                        <option value="Storm" {{{ (isset($ad->sewer) && $ad->sewer == 'Storm') ? "selected=\"selected\"" : "" }}}>Storm</option>
                                        <option value="Unknown" {{{ (isset($ad->sewer) && $ad->sewer == 'Unknown') ? "selected=\"selected\"" : "" }}}>Unknown</option>
                                                        </select>
						</div>

					<legend>Additional Details</legend>

					<legend>Heating & Cooling</legend>

						<div class="form-group">
							<label for="heating_type">Heating Type</label>
								<select class="form-control select2NoSearch" name="heating_type"
                                                                id="heating_type">
                                        <option value=""></option>
                                                                <option value="Baseboard" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Baseboard') ? "selected=\"selected\"" : "" }}}>Baseboard</option>
                                                                <option value="Central Heat" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Central Heat') ? "selected=\"selected\"" : "" }}}>Central Heat</option>
                                                                <option value="Steam" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Steam') ? "selected=\"selected\"" : "" }}}>Steam</option>
                                                                <option value="Common" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Common') ? "selected=\"selected\"" : "" }}}>Common</option>
                                                                <option value="Forced Air" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Forced Air') ? "selected=\"selected\"" : "" }}}>Forced Air</option>
                                                                <option value="Forced Water" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Forced Water') ? "selected=\"selected\"" : "" }}}>Forced Water</option>
                                                                <option value="Gas on Gas" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Gas on Gas') ? "selected=\"selected\"" : "" }}}>Gas on Gas</option>
                                                                <option value="Geothermal" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Geothermal') ? "selected=\"selected\"" : "" }}}>Geothermal</option>
                                                                <option value="Heat Pump" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Heat Pump') ? "selected=\"selected\"" : "" }}}>Heat Pump</option>
                                                                <option value="Hot Air" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Hot Air') ? "selected=\"selected\"" : "" }}}>Hot Air</option>
                                                                <option value="Hydro-Air" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Hydro-Air') ? "selected=\"selected\"" : "" }}}>Hydro-Air</option>
                                                                <option value="Indi Control" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Indi Control') ? "selected=\"selected\"" : "" }}}>Indi Control</option>
                                                                <option value="No Heat" {{{ (isset($ad->heating_type) && $ad->heating_type == 'No Heat') ? "selected=\"selected\"" : "" }}}>No Heat</option>
                                                                <option value="Other Heat" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Other Heat') ? "selected=\"selected\"" : "" }}}>Other Heat</option>
                                                                <option value="Partially Heated" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Partially Heated') ? "selected=\"selected\"" : "" }}}>Partially Heated</option>
                                                                <option value="Radiant Heat" {{{ (isset($ad->heating_type) && $ad->heating_type == 'Radiant Heat') ? "selected=\"selected\"" : "" }}}>Radiant Heat</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="heating_fuel">Heating Fuel</label>
								<select class="form-control select2NoSearch" name="heating_fuel"
                                                                id="heating_fuel">
                                        <option value=""></option>
                                        <option value="Coal" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Coal') ? "selected=\"selected\"" : "" }}}>Coal</option>
                                        <option value="Electric" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Electric') ? "selected=\"selected\"" : "" }}}>Electric</option>
                                        <option value="Gas" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Gas') ? "selected=\"selected\"" : "" }}}>Gas</option>
                                        <option value="Bottle Gas" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Bottle Gas') ? "selected=\"selected\"" : "" }}}>Bottle Gas</option>
                                        <option value="Geo" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Geo') ? "selected=\"selected\"" : "" }}}>Geo</option>
                                        <option value="Kerosene" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Kerosene') ? "selected=\"selected\"" : "" }}}>Kerosene</option>
                                        <option value="Oil" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Oil') ? "selected=\"selected\"" : "" }}}>Oil</option>
                                        <option value="Solar" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Solar') ? "selected=\"selected\"" : "" }}}>Solar</option>
                                        <option value="Wood" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Wood') ? "selected=\"selected\"" : "" }}}>Wood</option>
                                        <option value="Other Fuel" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'Other Fuel') ? "selected=\"selected\"" : "" }}}>Other Fuel</option>
                                        <option value="None" {{{ (isset($ad->heating_fuel) && $ad->heating_fuel == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="cooling">Cooling</label>
								<select class="form-control select2NoSearch" name="cooling"
                                                                id="cooling">
                                    <option value=""></option>
                                    <option value="Attic Fan" {{{ (isset($ad->cooling) && $ad->cooling == 'Attic Fan') ? "selected=\"selected\"" : "" }}}>Attic Fan</option>
                                    <option value="Central Air" {{{ (isset($ad->cooling) && $ad->cooling == 'Central Air') ? "selected=\"selected\"" : "" }}}>Central Air</option>
                                    <option value="Ductless AC" {{{ (isset($ad->cooling) && $ad->heating_fuel == 'Ductless AC') ? "selected=\"selected\"" : "" }}}>Ductless AC</option>
                                    <option value="Individual Unit" {{{ (isset($ad->cooling) && $ad->cooling == 'Individual Unit') ? "selected=\"selected\"" : "" }}}>Individual Unit</option>
                                    <option value="None" {{{ (isset($ad->cooling) && $ad->cooling == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                    <option value="Wall Unit" {{{ (isset($ad->cooling) && $ad->cooling == 'Wall Unit') ? "selected=\"selected\"" : "" }}}>Wall Unit</option>
                                    <option value="Whole Hse Fan" {{{ (isset($ad->cooling) && $ad->cooling == 'Whole Hse Fan') ? "selected=\"selected\"" : "" }}}>Whole Hse Fan</option>
                                    <option value="Window Units" {{{ (isset($ad->cooling) && $ad->cooling == 'Window Units') ? "selected=\"selected\"" : "" }}}>Window Units</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="hw_fuel">Hot Water Fuel</label>
								<select class="form-control select2NoSearch" name="hw_fuel"
                                                                id="hw_fuel">
                                        <option value=""></option>
                                        <option value="Common" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Common') ? "selected=\"selected\"" : "" }}}>Common</option>
                                        <option value="Electric" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Electric') ? "selected=\"selected\"" : "" }}}>Electric</option>
                                        <option value="Gas" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Gas') ? "selected=\"selected\"" : "" }}}>Gas</option>
                                        <option value="In Fee" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'In Fee') ? "selected=\"selected\"" : "" }}}>In Fee</option>
                                        <option value="None" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                        <option value="Oil" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Oil') ? "selected=\"selected\"" : "" }}}>Oil</option>
                                        <option value="Rented" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Rented') ? "selected=\"selected\"" : "" }}}>Rented</option>
                                        <option value="Solar" {{{ (isset($ad->hw_fuel) && $ad->hw_fuel == 'Solar') ? "selected=\"selected\"" : "" }}}>Solar</option>
                                                        </select>
						</div>

					<legend>Garage & Parking</legend>

						<div class="form-group">
							<label for="num_park">Number Parking Spaces</label>
								<select class="form-control select2NoSearch" name="num_park"
                                                                id="num_park">
                                        <option value=""></option>
                                                                <option value="None" {{{ (isset($ad->num_park) && $ad->num_park == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                                                <option value="1" {{{ (isset($ad->num_park) && $ad->num_park == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                                                <option value="2" {{{ (isset($ad->num_park) && $ad->num_park == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                                                <option value="3" {{{ (isset($ad->num_park) && $ad->num_park == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                                                <option value="4" {{{ (isset($ad->num_park) && $ad->num_park == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                                                <option value="5" {{{ (isset($ad->num_park) && $ad->num_park == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                                                <option value="6" {{{ (isset($ad->num_park) && $ad->num_park == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                                                <option value="7" {{{ (isset($ad->num_park) && $ad->num_park == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                                                <option value="8" {{{ (isset($ad->num_park) && $ad->num_park == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                                                <option value="9" {{{ (isset($ad->num_park) && $ad->num_park == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                                                <option value="10" {{{ (isset($ad->num_park) && $ad->num_park == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="num_garage">Number Garage Spaces</label>
								<select class="form-control select2NoSearch" name="num_garage"
                                                                id="num_garage">
                                                                <option value=""></option>
                                                                <option value="None" {{{ (isset($ad->num_garage) && $ad->num_garage == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                                                <option value="1" {{{ (isset($ad->num_garage) && $ad->num_garage == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                                                <option value="2" {{{ (isset($ad->num_garage) && $ad->num_garage == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                                                <option value="3" {{{ (isset($ad->num_garage) && $ad->num_garage == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                                                <option value="4" {{{ (isset($ad->num_garage) && $ad->num_garage == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                                                <option value="5" {{{ (isset($ad->num_garage) && $ad->num_garage == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                                                <option value="6" {{{ (isset($ad->num_garage) && $ad->num_garage == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                                                <option value="7" {{{ (isset($ad->num_garage) && $ad->num_garage == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                                                <option value="8" {{{ (isset($ad->num_garage) && $ad->num_garage == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                                                <option value="9" {{{ (isset($ad->num_garage) && $ad->num_garage == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                                                <option value="10" {{{ (isset($ad->num_garage) && $ad->num_garage == '10') ? "selected=\"selected\"" : "" }}}>10</option>
</select>
						</div>

						<div class="form-group">
							<label for="garage_type">Garage Type</label>
								<select class="form-control select2NoSearch" name="garage_type"
                                                                id="garage_type">
                                        <option value=""></option>              <option value="Attached" {{{ (isset($ad->garage_type) && $ad->garage_type == 'Attached') ? "selected=\"selected\"" : "" }}}>Attached</option>
                                        <option value="Carport" {{{ (isset($ad->garage_type) && $ad->garage_type == 'Carport') ? "selected=\"selected\"" : "" }}}>Carport</option>
                                        <option value="Detached" {{{ (isset($ad->garage_type) && $ad->garage_type == 'Detached') ? "selected=\"selected\"" : "" }}}>Detached</option>
                                        <option value="Integral" {{{ (isset($ad->garage_type) && $ad->garage_type == 'Integral') ? "selected=\"selected\"" : "" }}}>Integral</option>
                                        <option value="None" {{{ (isset($ad->garage_type) && $ad->garage_type == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                </select>
						</div>

					<legend>Interior Details</legend>

					<div class="form-group">
						<label for="num_rooms">Number of Rooms</label>
							<input type="text" class="form-control" id="num_rooms"
								value="{{ $ad->num_rooms }}" name="num_rooms"
								placeholder="Number of Rooms">
					</div>
					<div class="form-group">
						<label for="above">Above Grade Living Space</label>
							<input type="text" class="form-control" id="above"
								value="{{ $ad->above }}" name="above"
								placeholder="Above Grade Living Space">
					</div>
					<div class="form-group">
						<label for="below">Below Grade Living Space</label>
							<input type="text" class="form-control" id="below"
								value="{{ $ad->below }}" name="below"
								placeholder="Below Grade Living Space">
					</div>
					<div class="form-group">
						<label for="num_levels">Number of Levels</label>
							<input type="text" class="form-control" id="num_levels"
								value="{{ $ad->num_levels }}" name="num_levels"
								placeholder="Number of Levels">
					</div>
					<legend>Finished Floor</legend>
					<div class="form-group">
							<input type="checkbox" value="1" {{{ (isset($ad->ceramic) && $ad->ceramic == '1') ? "checked" : "" }}} name="ceramic">Ceramic</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->hardwood) && $ad->hardwood == '1') ? "checked" : "" }}} name="hardwood">Hardwood</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->laminate) && $ad->laminate == '1') ? "checked" : "" }}} name="laminate">Laminate</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->marble) && $ad->marble == '1') ? "checked" : "" }}} name="marble">Marble</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->other) && $ad->other == '1') ? "checked" : "" }}} name="other">Other</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->parquet) && $ad->parquet == '1') ? "checked" : "" }}} name="parquet">Parquet</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->particle) && $ad->particle == '1') ? "checked" : "" }}} name="particle">Particle Board</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->pine) && $ad->pine == '1') ? "checked" : "" }}} name="pine">Pine</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->plywood) && $ad->plywood == '1') ? "checked" : "" }}} name="plywood">Plywood</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->vinyl) && $ad->vinyl == '1') ? "checked" : "" }}} name="vinyl">Vinyl</label>
                                <input type="checkbox" value="1" {{{ (isset($ad->wall) && $ad->wall == '1') ? "checked" : "" }}} name="wall">Wall to Wall Carpet</label>
					</div>
						<div class="form-group">
							<label for="basement_type">Basement Type</label>
								<select class="form-control select2NoSearch" name="basement_type"
                                                                id="basement_type">
                                        <option value=""></option>              <option value="Crawl Space" {{{ (isset($ad->basement_type) && $ad->basement_type == 'Crawl Space') ? "selected=\"selected\"" : "" }}}>Crawl Space</option>
                                        <option value="Full" {{{ (isset($ad->basement_type) && $ad->basement_type == 'Full') ? "selected=\"selected\"" : "" }}}>Full</option>
                                        <option value="None" {{{ (isset($ad->basement_type) && $ad->basement_type == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                        <option value="Partially Finished" {{{ (isset($ad->basement_type) && $ad->basement_type == 'Partially Finished') ? "selected=\"selected\"" : "" }}}>Partially Finished</option>
                                    </select>
						</div>
					
						<div id="base_block">
						<div class="form-group">
							<label for="base_access">Basement Access</label>
								<select class="form-control select2NoSearch" name="base_access"
                                                                id="base_access">
                                        <option value=""></option>              <option value="Bulkhead" {{{ (isset($ad->base_access) && $ad->base_access == 'Bulkhead') ? "selected=\"selected\"" : "" }}}>Bulkhead</option>
                                        <option value="Interior and Exterior" {{{ (isset($ad->base_access) && $ad->base_access == 'Interior and Exterior') ? "selected=\"selected\"" : "" }}}>Interior and Exterior</option>
                                        <option value="Interior Only" {{{ (isset($ad->base_access) && $ad->base_access == 'Interior Only') ? "selected=\"selected\"" : "" }}}>Interior Only</option>
                                        <option value="Walkout" {{{ (isset($ad->base_access) && $ad->base_access == 'Walkout') ? "selected=\"selected\"" : "" }}}>Walkout</option>
                                </select>
						</div>

						<div class="form-group">
							<label for="base_finish">Basement Finish</label>
								<select class="form-control select2NoSearch" name="base_finish"
                                                                id="base_finish">
                                        <option value=""></option>              <option value="Finished" {{{ (isset($ad->base_finish) && $ad->base_finish == 'Finished') ? "selected=\"selected\"" : "" }}}>Finished</option>
                                        <option value="Partially Finished" {{{ (isset($ad->base_finish) && $ad->base_finish == 'Partially Finished') ? "selected=\"selected\"" : "" }}}>Partially Finished</option>
                                        <option value="Unfinished" {{{ (isset($ad->base_finish) && $ad->base_finish == 'Unfinished') ? "selected=\"selected\"" : "" }}}>Unfinished</option>
                                </select>
						</div>
						</div>

					<legend>Included Appliances</legend>
					<label> <input type="checkbox" value="1" {{{ (isset($ad->owned) && $ad->owned == '1') ? "checked" : "" }}} name="owned">Alarm Owned</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->rental) && $ad->rental == '1') ? "checked" : "" }}} name="rented">Alarm Rented</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->grill) && $ad->grill == '1') ? "checked" : "" }}} name="grill">Barbecue Grill</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->cable) && $ad->cable == '1') ? "checked" : "" }}} name="cable">Cable TV</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->carpet) && $ad->carpet == '1') ? "checked" : "" }}} name="carpet">Carpeting</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->ceilingfan) && $ad->ceilingfan == '1') ? "checked" : "" }}} name="ceilingfan">Ceiling Fan</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->antenna) && $ad->antenna == '1') ? "checked" : "" }}} name="antenna">Central Antenna</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->vacuum) && $ad->vacuum == '1') ? "checked" : "" }}} name="vacuum">Central Vacuum</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->coal) && $ad->coal == '1') ? "checked" : "" }}} name="coal">Coal Stove</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->compressor) && $ad->compressor == '1') ? "checked" : "" }}} name="compressor">Compressor</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->dish) && $ad->dish == '1') ? "checked" : "" }}} name="dish">Dishwasher</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->dryer) && $ad->dryer == '1') ? "checked" : "" }}} name="dryer">Dryer</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->elevator) && $ad->elevator == '1') ? "checked" : "" }}} name="elevator">Elevator</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->exhaust) && $ad->exhaust == '1') ? "checked" : "" }}} name="exhaust">Exhaust Fan</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->freight) && $ad->freight == '1') ? "checked" : "" }}} name="freight">Freight Elevator</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->fuelpump) && $ad->fuelpump == '1') ? "checked" : "" }}} name="fuelpump">Fuel Pump</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->furniture) && $ad->furniture == '1') ? "checked" : "" }}} name="furniture">Furniture</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->disposal) && $ad->disposal == '1') ? "checked" : "" }}} name="disposal">Garbage Disposal</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->grease) && $ad->grease == '1') ? "checked" : "" }}} name="grease">Grease Pit</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->hood) && $ad->hood == '1') ? "checked" : "" }}} name="hood">Hood</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->hottub) && $ad->hottub == '1') ? "checked" : "" }}} name="hottub">Hot Tub</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->hydraulic) && $ad->hydraulic == '1') ? "checked" : "" }}} name="hydraulic">Hydraulic Lift</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->intercom) && $ad->intercom == '1') ? "checked" : "" }}} name="intercom">Intercom</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->microwave) && $ad->microwave == '1') ? "checked" : "" }}} name="microwave">Microwave</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->oven) && $ad->oven == '1') ? "checked" : "" }}} name="oven">Oven/Range</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->overhead) && $ad->overhead == '1') ? "checked" : "" }}} name="overhead">Overhead Crane</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->pellet) && $ad->pellet == '1') ? "checked" : "" }}} name="pellet">Pellet Stove</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->fridge) && $ad->fridge == '1') ? "checked" : "" }}} name="fridge">Refrigerator</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->sat) && $ad->sat == '1') ? "checked" : "" }}} name="sat">Satellite Dish</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->suana) && $ad->suana == '1') ? "checked" : "" }}} name="suana">Sauna</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->trash) && $ad->trash == '1') ? "checked" : "" }}} name="trash">Trash Compactor</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->tvantenna) && $ad->tvantenna == '1') ? "checked" : "" }}} name="tvantenna">TV Antenna</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->washer) && $ad->washer == '1') ? "checked" : "" }}} name="washer">Washer</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->whirlpoool) && $ad->whirlpoool == '1') ? "checked" : "" }}} name="whirlpoool">Whirlpool</label>
                        <label> <input type="checkbox" value="1" {{{ (isset($ad->wood) && $ad->wood == '1') ? "checked" : "" }}} name="wood">Wood Stove</label>>

					<legend>Additional Details</legend>

						<legend>Condo Details</legend>

						<div class="form-group">
							<label for="complex_name">Complex Name</label>
								<input type="text" class="form-control" id="complex_name"
									value="{{ $ad->complex_name }}" name="complex_name"
									placeholder="Complex Name">
						</div>
						
						<div class="form-group">
							<label for="condo_fee">HOA Fee</label>
								<input type="text" class="form-control" id="condo_fee"
									value="{{ $ad->condo_fee }}" name="condo_fee"
									placeholder="HOA Fee">
						</div>

						<div class="form-group">
							<label for="assoc_fee">HOA Fee Frequency</label>
								<select class="form-control select2NoSearch" name="assoc_fee"
                                                                id="assoc_fee">
                                        <option value=""></option>
                                        <option value="Per Month" {{{ (isset($ad->assoc_fee) && $ad->assoc_fee == 'Per Month') ? "selected=\"selected\"" : "" }}}>Per Month</option>
                                        <option value="Quarterly"" {{{ (isset($ad->assoc_fee) && $ad->assoc_fee == 'Quarterly') ? "selected=\"selected\"" : "" }}}>Quarterly</option>
                                        <option value="Annually"" {{{ (isset($ad->assoc_fee) && $ad->assoc_fee == 'Annually') ? "selected=\"selected\"" : "" }}}>Annually</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="total_units">Total Units in Complex</label>
								<input type="text" class="form-control" id="total_units"
									value="{{ $ad->total_units }}" name="total_units"
									placeholder="Total Units in Complex">
						</div>

						<div class="form-group">
							<label for="pool_type">Pool Type</label>
								<select class="form-control select2NoSearch" name="pool_type"
                                                                id="pool_type">
                                        <option value=""></option>
                                        <option value="Above Ground" {{{ (isset($ad->pool_type) && $ad->pool_type == 'Above Ground') ? "selected=\"selected\"" : "" }}}>Above Ground</option>
                                        <option value="Inground" {{{ (isset($ad->pool_type) && $ad->pool_type == 'Inground') ? "selected=\"selected\"" : "" }}}>Inground</option>
                                        <option value="Indoor" {{{ (isset($ad->pool_type) && $ad->pool_type == 'Indoor') ? "selected=\"selected\"" : "" }}}>Indoor</option>
                                        <option value="None" {{{ (isset($ad->pool_type) && $ad->pool_type == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="reg_adult">Registered Adult Community</label>
								<select class="form-control select2NoSearch" name="reg_adult"
                                                                id="reg_adult">
                                        <option value=""></option>
                                        <option value="Yes" {{{ (isset($ad->reg_adult) && $ad->reg_adult == 'Yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="No" {{{ (isset($ad->reg_adult) && $ad->reg_adult == 'No') ? "selected=\"selected\"" : "" }}}>No</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="timeshare">Timeshare</label>
								<select class="form-control select2NoSearch" name="timeshare"
                                                                id="timeshare">
                                        <option value=""></option>
                                        <option value="Yes" {{{ (isset($ad->timeshare) && $ad->timeshare == 'Yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="No" {{{ (isset($ad->timeshare) && $ad->timeshare == 'No') ? "selected=\"selected\"" : "" }}}>No</option>
                                                        </select>
						</div>

						<div class="form-group">
							<label for="prop_mgmt">Property Management</label>
								<select class="form-control select2NoSearch" name="prop_mgmt"
                                                                id="prop_mgmt">
                                        <option value=""></option>
                                        <option value="Yes" {{{ (isset($ad->prop_mgmt) && $ad->prop_mgmt == 'Yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="No" {{{ (isset($ad->prop_mgmt) && $ad->prop_mgmt == 'No') ? "selected=\"selected\"" : "" }}}>No</option>
                                                        </select>
						</div>
						
						<div
						class="form-group">
    						<label for="floors" class="col-sm-4 control-label">Pets Allowed?</label>
    						<div class="col-sm-12">
    						    <input type="checkbox" value="1" name="pets_nopets" {{{ (isset($ad->pets_nopets) && $ad->pets_nopets == '1') ? "checked" : "" }}}> No Pets</label>
    							<input type="checkbox" value="1" name="pets_cats" {{{ (isset($ad->pets_cats) && $ad->pets_cats == '1') ? "checked" : "" }}}> Cats</label>
    							<input type="checkbox" value="1" name="pets_large" {{{ (isset($ad->pets_large) && $ad->pets_dogs == '1') ? "checked" : "" }}}> Large (25 lbs+)</label>
    							<input type="checkbox" value="1" name="pets_norestrict" {{{ (isset($ad->pets_norestrict) && $ad->pets_norestrict == '1') ? "checked" : "" }}}> No Restrictions</label>
    							<input type="checkbox" value="1" name="pets_negotiable" {{{ (isset($ad->pets_negotiable) && $ad->pets_negotiable == '1') ? "checked" : "" }}}> Negotiable</label>
    							<input type="checkbox" value="1" name="pets_small" {{{ (isset($ad->pets_small) && $ad->pets_small == '1') ? "checked" : "" }}}> Small Dogs (under 25 lbs)</label>
    						</div>
					    </div>