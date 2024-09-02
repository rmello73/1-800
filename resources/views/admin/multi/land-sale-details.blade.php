						<h2>Land Sale Details</h2>

						<div class="form-group">
							<label for="taxes"></label>Taxes</label>
								<input type="text" class="form-control" id="taxes"
									value="{{ $ad->taxes }}" name="taxes"
									placeholder="Taxes">
						</div>

						<div class="form-group">
							<label for="tax_year">Tax Year</label>
								<input type="text" class="form-control" id="tax_year"
									value="{{ $ad->tax_year }}" name="tax_year"
									placeholder="Tax Year">
						</div>

						<div class="form-group">
							<label for="assessment">Assessment</label>
								<input type="text" class="form-control" id="assessment"
									value="{{ $ad->assessment }}" name="assessment"
									placeholder="Assessment">
						</div>

						<div class="form-group {{ $errors->has('lot_sqft')? 'has-error':'' }}">
							<label for="lot_sqft">Lot Square Footage</label>
								<input type="text" class="form-control" id="lot_sqft"
									value="{{ $ad->lot_sqft }}" name="lot_sqft"
									placeholder="Lot Square Footage"> {!!
            							$errors->has('lot_sqft')? '
            							<p class="help-block">'.$errors->first('lot_sqft').'</p>
            							':'' !!}
						</div>

						<div class="form-group">
							<label for="lot_acres">Lot Acres </label>
								<input type="text" class="form-control" id="lot_acres"
									value="{{ $ad->lot_acres }}" name="lot_acres"
									placeholder="Lot Acres">
						</div>

						<div class="form-group">
							<label for="lot_frontage">Lot Frontage </label>
								<input type="text" class="form-control" id="lot_frontage"
									value="{{ $ad->lot_frontage }}" name="lot_frontage"
									placeholder="Lot Frontage">
						</div>

						<div class="form-group">
							<label for="approved_lots">Number of Approved Lots</label>
								<input type="text" class="form-control" id="lot_frontage"
									value="{{ $ad->approved_lots }}" name="approved_lots"
									placeholder="Number of Approved Lots">
						</div>

                        <div class="form-group">
							<label for="land_status">Land Status</label>
								<select class="form-control select2NoSearch" name="land_status"
                                                                id="land_status">
                                                                <option value=""></option>
                                                                <option value="approval">Approval(s) Needed</option>
<option value="Finished Lot"  {{{ (isset($ad->land_status) && $ad->land_status == 'Finished Lot') ? "selected=\"selected\"" : "" }}}>Finished Lot</option>
<option value="Other" {{{ (isset($ad->land_status) && $ad->land_status == 'Other') ? "selected=\"selected\"" : "" }}}>Other</option>
<option value="Raw Land" {{{ (isset($ad->land_status) && $ad->land_status == 'Raw Land') ? "selected=\"selected\"" : "" }}}>Raw Land</option>
<option value="Rough Grade" {{{ (isset($ad->land_status) && $ad->land_status == 'Rough Grade') ? "selected=\"selected\"" : "" }}}>Rough Grade</option>
                                                        </select>
						</div>

                        <div class="form-group">
							<label for="prop_zoning">Property Zoning</label>
								<select class="form-control select2NoSearch" name="prop_zoning"
                                                                id="prop_zoning">
                                                                <option value=""></option>
                                                                <option value="Condominium" {{{ (isset($ad->prop_zoning) && $ad->prop_zoning == 'Condominium') ? "selected=\"selected\"" : "" }}}>Condominium</option>
<option value="Multi-Family" {{{ (isset($ad->prop_zoning) && $ad->prop_zoning == 'Multi-Family') ? "selected=\"selected\"" : "" }}}>Multi-Family</option>
<option value="Residential" {{{ (isset($ad->prop_zoning) && $ad->prop_zoning == 'Residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                                        </select>
						</div>
						
						<div class="form-group">
							<label for="proposed_use">Proposed Use</label>
								<input type="text" class="form-control" id="proposed_use"
									value="{{{ $ad->proposed_use or '' }}}" name="proposed_use"
									placeholder="Proposed Use">
						</div>
						
						<div class="form-group">
							<legend>Utilities Availabe</legend>
								<label> <input type="checkbox" value="1" {{{ (isset($ad->electric_lu) && $ad->hfloors == '1') ? "checked" : "" }}} name="electric_lu"> Electric
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->gas_lu) && $ad->gas_lu == '1') ? "checked" : "" }}} name="gas_lu">
						Gas
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->muniwater_lu) && $ad->muniwater_lu == '1') ? "checked" : "" }}} name="muniwater_lu"> Muni Water
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->none_lu) && $ad->none_lu == '1') ? "checked" : "" }}} name="none_lu">
						None
					</label> <label> <input type="checkbox" value="1" {{{ (isset($ad->sewer_lu) && $ad->sewer_lu == '1') ? "checked" : "" }}} name="sewer_lu">
						Sewer
					</label>
						</div>

                        <!--<div class="form-group">
							<label for="area_utilities">Utilities Availabe</label>
								<select class="form-control select2NoSearch" name="area_utilities"
                                                                id="area_utilities">
                                                                <option value=""></option>
                                                                <option value="Electric" {{{ (isset($ad->area_utilities) && $ad->area_utilities == 'Electric') ? "selected=\"selected\"" : "" }}}>Electric</option>
<option value="Gas" {{{ (isset($ad->area_utilities) && $ad->area_utilities == 'Gas') ? "selected=\"selected\"" : "" }}}>Gas</option>
<option value="Muni Water" {{{ (isset($ad->area_utilities) && $ad->area_utilities == 'Muni Water') ? "selected=\"selected\"" : "" }}}>Muni Water</option>
<option value="None" {{{ (isset($ad->area_utilities) && $ad->area_utilities == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
<option value="Sewer" {{{ (isset($ad->area_utilities) && $ad->area_utilities == 'Sewer') ? "selected=\"selected\"" : "" }}}>Sewer</option>
                                                        </select>
						</div>-->

						<div class="form-group">
							<label for="road">Road</label>
								<select class="form-control select2NoSearch" name="road" id="road">
                                    <option value=""></option>
                                    <option value="Black Tar" {{{ (isset($ad->road) && $ad->road == 'Black Tar') ? "selected=\"selected\"" : "" }}}>Black Tar</option>
                                    <option value="Blacktop" {{{ (isset($ad->road) && $ad->road == 'Blacktop') ? "selected=\"selected\"" : "" }}}>Blacktop</option>
                                    <option value="Concrete" {{{ (isset($ad->road) && $ad->road == 'Concrete') ? "selected=\"selected\"" : "" }}}>Concrete</option>
                                    <option value="Dirt" {{{ (isset($ad->road) && $ad->road == 'Dirt') ? "selected=\"selected\"" : "" }}}>Dirt</option>
                                    <option value="Gravel" {{{ (isset($ad->road) && $ad->road == 'Gravel') ? "selected=\"selected\"" : "" }}}>Gravel</option>
                                    <option value="High Traffic" {{{ (isset($ad->road) && $ad->road == 'High Traffic') ? "selected=\"selected\"" : "" }}}>High Traffic</option>
                                    <option value="Municipal" {{{ (isset($ad->road) && $ad->road == 'Municipal') ? "selected=\"selected\"" : "" }}}>Municipal</option>
                                    <option value="None" {{{ (isset($ad->road) && $ad->road == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                    <option value="Oil" {{{ (isset($ad->road) && $ad->road == 'Oil') ? "selected=\"selected\"" : "" }}}>Oil</option>
                                    <option value="Paper" {{{ (isset($ad->road) && $ad->road == 'Paper') ? "selected=\"selected\"" : "" }}}>Paper</option>
                                    <option value="Private" {{{ (isset($ad->road) && $ad->road == 'Private') ? "selected=\"selected\"" : "" }}}>Private</option>
                                    <option value="Sidewalks" {{{ (isset($ad->road) && $ad->road == 'Sidewalks') ? "selected=\"selected\"" : "" }}}>Sidewalks</option>
                                    <option value="State" {{{ (isset($ad->road) && $ad->road == 'State') ? "selected=\"selected\"" : "" }}}>State</option>
                                    <option value="St Lites" {{{ (isset($ad->road) && $ad->road == 'St Lites') ? "selected=\"selected\"" : "" }}}>St Lites</option>
                                    <option value="Tar & Chip" {{{ (isset($ad->road) && $ad->road == 'Tar & Chip') ? "selected=\"selected\"" : "" }}}>Tar & Chip</option>
                                    <option value="Unimproved" {{{ (isset($ad->road) && $ad->road == 'Unimproved') ? "selected=\"selected\"" : "" }}}>Unimproved</option>
                                                        </select>
						</div>

                        <legend>Water Supply</legend>

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
                                    <option value="Connected" {{{ (isset($ad->water) && $ad->water == 'Connected') ? "selected=\"selected\"" : "" }}}>Connected</option>
                                    <option value="In Fee" {{{ (isset($ad->water) && $ad->water == 'In Fee') ? "selected=\"selected\"" : "" }}}>In Fee</option>
                                    <option value="Individual Meter" {{{ (isset($ad->water) && $ad->water == 'Individual Meter') ? "selected=\"selected\"" : "" }}}>Individual Meter</option>
                                    <option value="Municipal" {{{ (isset($ad->water) && $ad->water == 'Municipal') ? "selected=\"selected\"" : "" }}}>Municipal</option>
                                    <option value="None" {{{ (isset($ad->water) && $ad->water == 'None') ? "selected=\"selected\"" : "" }}}>None</option>
                                    <option value="Private" {{{ (isset($ad->water) && $ad->water == 'Private') ? "selected=\"selected\"" : "" }}}>Private</option>
                                    <option value="Public Available" {{{ (isset($ad->water) && $ad->water == 'Public Available') ? "selected=\"selected\"" : "" }}}>Public Available</option>
                                    <option value="Public Connected" {{{ (isset($ad->water) && $ad->water == 'Public Connected') ? "selected=\"selected\"" : "" }}}>Public Connected</option>
                                    <option value="Well" {{{ (isset($ad->water) && $ad->water == 'Well') ? "selected=\"selected\"" : "" }}}>Well</option>
                                                        </select>
						</div>

<legend>Topography</legend>

						<div class="form-group">
							<label for="topography">Topography</label>
								<select class="form-control select2NoSearch" name="topography"
                                                                id="topography">
                                                                <option value=""></option>
                                                                <option value="Level" {{{ (isset($ad->topography) && $ad->topography == 'Level') ? "selected=\"selected\"" : "" }}}>Level</option>
<option value="Lowland" {{{ (isset($ad->topography) && $ad->topography == 'Lowland') ? "selected=\"selected\"" : "" }}}>Lowland</option>
<option value="Open" {{{ (isset($ad->topography) && $ad->topography == 'Open') ? "selected=\"selected\"" : "" }}}>Open</option>
<option value="Rocky" {{{ (isset($ad->topography) && $ad->topography == 'Rocky') ? "selected=\"selected\"" : "" }}}>Rocky</option>
<option value="Rolling" {{{ (isset($ad->topography) && $ad->topography == 'Rolling') ? "selected=\"selected\"" : "" }}}>Rolling</option>
<option value="Wetlands" {{{ (isset($ad->topography) && $ad->topography == 'Wetlands') ? "selected=\"selected\"" : "" }}}>Wetlands</option>
<option value="Wooded" {{{ (isset($ad->topography) && $ad->topography == 'Wooded') ? "selected=\"selected\"" : "" }}}>Wooded</option>
                                                        </select>
						</div>