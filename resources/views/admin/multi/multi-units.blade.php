@extends('layout.main')

@section('main')
    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    2. Enter Basic Info&nbsp;-&nbsp;
                    <font color="red">3. Enter Property Details&nbsp;-&nbsp;</font>
                    4. Review Info&nbsp;-&nbsp;
                    5. Add Images & Publish Listing</h5>
            </div>
            <hr />
            <div class="container">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-8" style="background-color: #ececec; padding: 25px; border: 1px solid black";>
    <form action="./multi-units" method="post">
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <legend>Multi-Family Unit Information</legend>

						<legend>Unit 1</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select2NoSearch" name="multi_type"
                                                                id="multi_type">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type) && $ad->multi_type == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type) && $ad->multi_type == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select2NoSearch" name="multi_beds"
                                                                id="multi_beds">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds) && $ad->multi_beds == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds) && $ad->multi_beds == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select2NoSearch" name="multi_baths"
                                                                id="multi_baths">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths) && $ad->multi_baths == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select2NoSearch" name="multi_half"
                                                                id="multi_half">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half) && $ad->multi_half == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half) && $ad->multi_half == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half) && $ad->multi_half == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half) && $ad->multi_half == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half) && $ad->multi_half == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half) && $ad->multi_half == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half) && $ad->multi_half == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half) && $ad->multi_half == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half) && $ad->multi_half == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half) && $ad->multi_half == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft"
								value="{{ $ad->multi_sqft }}" name="multi_sqft"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent"
								value="{{ $ad->multi_rent }}" name="multi_rent"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select2NoSearch" name="multi_lease"
                                                                id="multi_lease">
                                        <option value=""></option>
                                        <option value="vacant" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'vacant') ? "selected=\"selected\"" : "" }}}>Vacant</option>
                                        <option value="owner" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'owner') ? "selected=\"selected\"" : "" }}}>Owner</option>
                                        <option value="relative" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'relative') ? "selected=\"selected\"" : "" }}}>Relative</option>
                                        <option value="leased" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'leased') ? "selected=\"selected\"" : "" }}}>Leased</option>
                                        <option value="no lease" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'no lease') ? "selected=\"selected\"" : "" }}}>No Lease</option>
                                </select>
                    </div>
                    
						<legend>Unit 2</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select2NoSearch" name="multi_type2"
                                                                id="multi_type2">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type2) && $ad->multi_type2 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type2) && $ad->multi_type2 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select2NoSearch" name="multi_beds2"
                                                                id="multi_beds2">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds2) && $ad->multi_beds2 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select2NoSearch" name="multi_baths2"
                                                                id="multi_baths2">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths2) && $ad->multi_baths2 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select2NoSearch" name="multi_half2"
                                                                id="multi_half2">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half2) && $ad->multi_half2 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft2"
								value="{{ $ad->multi_sqft2 }}" name="multi_sqft2"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent2"
								value="{{ $ad->multi_rent2 }}" name="multi_rent2"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select2NoSearch" name="multi_lease2"
                                                                id="multi_lease2">
                                        <option value=""></option>
                                        <option value="vacant" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'vacant') ? "selected=\"selected\"" : "" }}}>Vacant</option>
                                        <option value="owner" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'owner') ? "selected=\"selected\"" : "" }}}>Owner</option>
                                        <option value="relative" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'relative') ? "selected=\"selected\"" : "" }}}>Relative</option>
                                        <option value="leased" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'leased') ? "selected=\"selected\"" : "" }}}>Leased</option>
                                        <option value="no lease" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'no lease') ? "selected=\"selected\"" : "" }}}>No Lease</option>
                                </select>
                    </div>
                    
						<legend>Unit 3</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select3NoSearch" name="multi_type3"
                                                                id="multi_type3">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type3) && $ad->multi_type3 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type3) && $ad->multi_type3 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select3NoSearch" name="multi_beds3"
                                                                id="multi_beds3">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds3) && $ad->multi_beds3 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select3NoSearch" name="multi_baths3"
                                                                id="multi_baths3">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths3) && $ad->multi_baths3 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select3NoSearch" name="multi_half3"
                                                                id="multi_half3">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half3) && $ad->multi_half3 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft3"
								value="{{ $ad->multi_sqft3 }}" name="multi_sqft3"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent3"
								value="{{ $ad->multi_rent3 }}" name="multi_rent3"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select3NoSearch" name="multi_lease3"
                                                                id="multi_lease3">
                                        <option value=""></option>
                                        <option value="vacant" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'vacant') ? "selected=\"selected\"" : "" }}}>Vacant</option>
                                        <option value="owner" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'owner') ? "selected=\"selected\"" : "" }}}>Owner</option>
                                        <option value="relative" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'relative') ? "selected=\"selected\"" : "" }}}>Relative</option>
                                        <option value="leased" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'leased') ? "selected=\"selected\"" : "" }}}>Leased</option>
                                        <option value="no lease" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'no lease') ? "selected=\"selected\"" : "" }}}>No Lease</option>
                                </select>
                    </div>
                    
						<legend>Unit 4</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select4NoSearch" name="multi_type4"
                                                                id="multi_type4">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type4) && $ad->multi_type4 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type4) && $ad->multi_type4 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select4NoSearch" name="multi_beds4"
                                                                id="multi_beds4">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds4) && $ad->multi_beds4 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select4NoSearch" name="multi_baths4"
                                                                id="multi_baths4">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths4) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths4) && $ad->multi_baths4 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select4NoSearch" name="multi_half4"
                                                                id="multi_half4">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half4) && $ad->multi_half4 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft4"
								value="{{ $ad->multi_sqft4 }}" name="multi_sqft4"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent4"
								value="{{ $ad->multi_rent4 }}" name="multi_rent4"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select4NoSearch" name="multi_lease4"
                                                                id="multi_lease4">
                                        <option value=""></option>
                                        <option value="vacant" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'vacant') ? "selected=\"selected\"" : "" }}}>Vacant</option>
                                        <option value="owner" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'owner') ? "selected=\"selected\"" : "" }}}>Owner</option>
                                        <option value="relative" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'relative') ? "selected=\"selected\"" : "" }}}>Relative</option>
                                        <option value="leased" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'leased') ? "selected=\"selected\"" : "" }}}>Leased</option>
                                        <option value="no lease" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'no lease') ? "selected=\"selected\"" : "" }}}>No Lease</option>
                                </select>
                    </div>
                    
                        <hr />
                    <a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
                    <a type="button" href="./create-detail" class="btn btn-warning">Back to Step 2</a>
                    <button type="submit" class="btn btn-primary">Next</button>
    </form>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <br />
<p>&nbsp;</p>
@endsection