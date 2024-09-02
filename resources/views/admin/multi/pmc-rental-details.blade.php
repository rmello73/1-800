                    <h2>PMC Rental Details</h2>
                                            
                    <legend>@lang('app.pmc-amenities')</legend>
						<div class="col-sm-12">
							<label> <input type="checkbox" value="1" {{{ (isset($ad->pmcdogs) && $ad->pmcdogs == '1') ? "checked" : "" }}} name="pmcdogs"> Dog Friendly
							</label>
							<label> <input type="checkbox" value="1" {{{ (isset($ad->pmccats) && $ad->pmccats == '1') ? "checked" : "" }}} name="pmccats"> Cat Friendly
							</label>
							<label> <input type="checkbox" value="1" {{{ (isset($ad->pmcair) && $ad->pmcair == '1') ? "checked" : "" }}} name="pmcair"> Air
								Conditioning
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcbasketball) && $ad->pmcbasketball == '1') ? "checked" : "" }}} value="1" 
								name="pmcbasketball"> Basketball Court
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcbusiness) && $ad->pmcbusiness == '1') ? "checked" : "" }}} value="1" name="pmcbusiness">
								Business Center
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmccable) && $ad->pmccable == '1') ? "checked" : "" }}} value="1" name="pmccable">
								Cable Ready
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmccarpeting) && $ad->pmccarpeting == '1') ? "checked" : "" }}} value="1"
								name="pmccarpeting"> Carpeting
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcclubhouse) && $ad->pmcclubhouse == '1') ? "checked" : "" }}} value="1"
								name="pmcclubhouse"> Clubhouse
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmccontrolled) && $ad->pmccontrolled == '1') ? "checked" : "" }}} value="1"
								name="pmccontrolled"> Controlled Access
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcdeck) && $ad->pmcdeck == '1') ? "checked" : "" }}} value="1" name="pmcdeck">
								Deck / Balcony
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcelevator) && $ad->pmcelevator == '1') ? "checked" : "" }}} value="1" name="pmcelevator">
								Elevator
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcceiling) && $ad->pmcceiling == '1') ? "checked" : "" }}} value="1" name="pmcceiling">
								Ceiling Fan
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcfireplace) && $ad->pmcfireplace == '1') ? "checked" : "" }}} value="1"
								name="pmcfireplace"> Fireplace
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcfitness) && $ad->pmcfitness == '1') ? "checked" : "" }}} value="1" name="pmcfitness">
								Fitness Center
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcfurnished) && $ad->pmcfurnished == '1') ? "checked" : "" }}} value="1"
								name="pmcfurnished"> Furnished Units Available
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmchandicap) && $ad->pmchandicap == '1') ? "checked" : "" }}} value="1" name="pmchandicap">
								Handicap Access
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmchardwood) && $ad->pmchardwood == '1') ? "checked" : "" }}} value="1" name="pmchardwood">
								Hardwood Floors
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcinternet) && $ad->pmcinternet == '1') ? "checked" : "" }}} value="1" name="pmcinternet">
								High Speed Internet Available
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcroom) && $ad->pmcroom == '1') ? "checked" : "" }}} value="1" name="pmcroom">
								Laundry Room
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmclaundrypmc) && $ad->pmclaundrypmc == '1') ? "checked" : "" }}} value="1" name="pmclaundrypmc">
								Laundry in Unit
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcmedia) && $ad->pmcmedia == '1') ? "checked" : "" }}} value="1" name="pmcmedia">
								Media Center
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcpool) && $ad->pmcpool == '1') ? "checked" : "" }}} value="1" name="pmcpool">
								Pool
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcspa) && $ad->pmcspa == '1') ? "checked" : "" }}} value="1" name="pmcspa"> Spa
								/ Hot Tub
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcstorage) && $ad->pmcstorage == '1') ? "checked" : "" }}} value="1" name="pmcstorage">
								Extra Storage units
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmctennis) && $ad->pmctennis == '1') ? "checked" : "" }}} value="1" name="pmctennis">
								Tennis Court
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcvaulted) && $ad->pmcvaulted == '1') ? "checked" : "" }}} value="1" name="pmcvaulted">
								Vaulted Ceilings
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcwalk) && $ad->pmcwalk == '1') ? "checked" : "" }}} value="1" name="pmcwalk">
								Walk-in Closet
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcwasher) && $ad->pmcwasher == '1') ? "checked" : "" }}} value="1" name="pmcwasher">
								Washer / Dryer hookups
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcyard) && $ad->pmcyard == '1') ? "checked" : "" }}} value="1" name="pmcyard">
								Yard
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcdish) && $ad->pmcdish == '1') ? "checked" : "" }}} value="1" name="pmcdish">
								Dishwasher
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcplay) && $ad->pmcplay == '1') ? "checked" : "" }}} value="1" name="pmcplay">
								Playground
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcheat) && $ad->pmcheat == '1') ? "checked" : "" }}} value="1" name="pmcheat">
								Heat Included
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcwater) && $ad->pmcwater == '1') ? "checked" : "" }}} value="1" name="pmcwater">
								Hot Water Included
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcelectric) && $ad->pmcelectric == '1') ? "checked" : "" }}} value="1" name="pmcelectric">
								Electricity Included
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcgarage) && $ad->pmcgarage == '1') ? "checked" : "" }}} value="1" name="pmcgarage">
								Garage Parking 
							</label> <label> <input type="checkbox" {{{ (isset($ad->pmcassigned) && $ad->pmcassigned == '1') ? "checked" : "" }}} value="1" name="pmcassigned">
								Assigned Parking
							</label>
						</div>
						
						                    <hr />
					<legend>Office Hours</legend>
					<div class="form-group">
						<label for="">Monday</label>
							<input type="text" name="mh" value="{{ $ad->mh }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Tuesday</label>
							<input type="text" name="th" value="{{ $ad->th }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Wednesday</label>
							<input type="text" name="wh" value="{{ $ad->wh }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Thursday</label>
							<input type="text" name="rh" value="{{ $ad->rh }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Friday</label>
							<input type="text" name="fh" value="{{ $ad->fh }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Saturday</label>
							<input type="text" name="sh" value="{{ $ad->sh }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Sunday</label>
							<input type="text" name="uh" value="{{ $ad->uh }}"
								class="form-control">
					</div>

					<div class="form-group {{ $errors->has('officephone')? 'has-error':'' }}">
							<label for="">Office Phone</label>
								<input type="text" name="officephone"
									value="{{ $ad->officephone }}" class="form-control">
									{!!
            							$errors->has('officephone')? '
            							<p class="help-block">'.$errors->first('officephone').'</p>
            							':'' !!}
						</div>
