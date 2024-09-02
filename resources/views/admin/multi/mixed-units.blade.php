@extends('layout.main')

@section('main')
<div class="container">

    <div id="wrapper">

        @include('admin.sidebar_menu')

        <div id="page-wrapper">

            <div class="row" align="center" style="padding-top: 15px";>
                <h5>1. Select Property Type&nbsp;-&nbsp;
                    2. Enter Basic Info&nbsp;-&nbsp;
                    3. Enter Property Details&nbsp;-&nbsp;
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
								value="{{{ $ad->multi_sqft or '' }}}" name="multi_sqft"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent"
								value="{{{ $ad->multi_rent or '' }}}" name="multi_rent"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select2NoSearch" name="multi_lease"
                                                                id="multi_lease">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease) && $ad->multi_lease == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
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
								value="{{{ $ad->multi_sqft2 or '' }}}" name="multi_sqft2"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent2"
								value="{{{ $ad->multi_rent2 or '' }}}" name="multi_rent2"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select2NoSearch" name="multi_lease2"
                                                                id="multi_lease2">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease2) && $ad->multi_lease2 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
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
								value="{{{ $ad->multi_sqft3 or '' }}}" name="multi_sqft3"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent3"
								value="{{{ $ad->multi_rent3 or '' }}}" name="multi_rent3"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select3NoSearch" name="multi_lease3"
                                                                id="multi_lease3">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease3) && $ad->multi_lease3 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
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
								value="{{{ $ad->multi_sqft4 or '' }}}" name="multi_sqft4"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent4"
								value="{{{ $ad->multi_rent4 or '' }}}" name="multi_rent4"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select4NoSearch" name="multi_lease4"
                                                                id="multi_lease4">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease4) && $ad->multi_lease4 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 5</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select5NoSearch" name="multi_type5"
                                                                id="multi_type5">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type5) && $ad->multi_type5 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type5) && $ad->multi_type5 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select5NoSearch" name="multi_beds5"
                                                                id="multi_beds5">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds5) && $ad->multi_beds5 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select5NoSearch" name="multi_baths5"
                                                                id="multi_baths5">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths5) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths5) && $ad->multi_baths5 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select5NoSearch" name="multi_half5"
                                                                id="multi_half5">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half5) && $ad->multi_half5 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft5"
								value="{{{ $ad->multi_sqft5 or '' }}}" name="multi_sqft5"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent5"
								value="{{{ $ad->multi_rent5 or '' }}}" name="multi_rent5"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select5NoSearch" name="multi_lease5"
                                                                id="multi_lease5">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease5) && $ad->multi_lease5 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease5) && $ad->multi_lease5 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 6</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select6NoSearch" name="multi_type6"
                                                                id="multi_type6">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type6) && $ad->multi_type6 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type6) && $ad->multi_type6 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select6NoSearch" name="multi_beds6"
                                                                id="multi_beds6">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds6) && $ad->multi_beds6 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select6NoSearch" name="multi_baths6"
                                                                id="multi_baths6">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths6) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths6) && $ad->multi_baths6 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select6NoSearch" name="multi_half6"
                                                                id="multi_half6">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half6) && $ad->multi_half6 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft6"
								value="{{{ $ad->multi_sqft6 or '' }}}" name="multi_sqft6"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent6"
								value="{{{ $ad->multi_rent6 or '' }}}" name="multi_rent6"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select6NoSearch" name="multi_lease6"
                                                                id="multi_lease6">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease6) && $ad->multi_lease6 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease6) && $ad->multi_lease6 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 7</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select7NoSearch" name="multi_type7"
                                                                id="multi_type7">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type7) && $ad->multi_type7 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type7) && $ad->multi_type7 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select7NoSearch" name="multi_beds7"
                                                                id="multi_beds7">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds7) && $ad->multi_beds7 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select7NoSearch" name="multi_baths7"
                                                                id="multi_baths7">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths7) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths7) && $ad->multi_baths7 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select7NoSearch" name="multi_half7"
                                                                id="multi_half7">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half7) && $ad->multi_half7 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft7"
								value="{{{ $ad->multi_sqft7 or '' }}}" name="multi_sqft7"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent7"
								value="{{{ $ad->multi_rent7 or '' }}}" name="multi_rent7"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select7NoSearch" name="multi_lease7"
                                                                id="multi_lease7">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease7) && $ad->multi_lease7 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease7) && $ad->multi_lease7 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 8</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select8NoSearch" name="multi_type8"
                                                                id="multi_type8">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type8) && $ad->multi_type8 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type8) && $ad->multi_type8 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select8NoSearch" name="multi_beds8"
                                                                id="multi_beds8">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds8) && $ad->multi_beds8 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select8NoSearch" name="multi_baths8"
                                                                id="multi_baths8">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths8) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths8) && $ad->multi_baths8 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select8NoSearch" name="multi_half8"
                                                                id="multi_half8">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half8) && $ad->multi_half8 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft8"
								value="{{{ $ad->multi_sqft8 or '' }}}" name="multi_sqft8"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent8"
								value="{{{ $ad->multi_rent8 or '' }}}" name="multi_rent8"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select8NoSearch" name="multi_lease8"
                                                                id="multi_lease8">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease8) && $ad->multi_lease8 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease8) && $ad->multi_lease8 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 9</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select9NoSearch" name="multi_type9"
                                                                id="multi_type9">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type9) && $ad->multi_type9 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type9) && $ad->multi_type9 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select9NoSearch" name="multi_beds9"
                                                                id="multi_beds9">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds9) && $ad->multi_beds9 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select9NoSearch" name="multi_baths9"
                                                                id="multi_baths9">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths9) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths9) && $ad->multi_baths9 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select9NoSearch" name="multi_half9"
                                                                id="multi_half9">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half9) && $ad->multi_half9 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft9"
								value="{{{ $ad->multi_sqft9 or '' }}}" name="multi_sqft9"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent9"
								value="{{{ $ad->multi_rent9 or '' }}}" name="multi_rent9"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select9NoSearch" name="multi_lease9"
                                                                id="multi_lease9">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease9) && $ad->multi_lease9 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease9) && $ad->multi_lease9 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                    
						<legend>Unit 10</legend>
						
					    <div class="form-group">
							<label for="multi_lease">Unit Type</label>
								<select class="form-control select10NoSearch" name="multi_type10"
                                                                id="multi_type10">
                                        <option value=""></option>
                                        <option value="residential" {{{ (isset($ad->multi_type10) && $ad->multi_type10 == 'residential') ? "selected=\"selected\"" : "" }}}>Residential</option>
                                        <option value="commercial" {{{ (isset($ad->multi_type10) && $ad->multi_type10 == 'commercial') ? "selected=\"selected\"" : "" }}}>Commercial</option>
                                </select>
                        </div>
                    
						<div class="form-group">
							<label for="beds">@lang('app.beds')</label>
								<select class="form-control select10NoSearch" name="multi_beds10"
                                                                id="multi_beds10">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_beds10) && $ad->multi_beds10 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>

                        <div class="form-group">
							<label for="multi_baths">Full Bathrooms</label>
								<select class="form-control select10NoSearch" name="multi_baths10"
                                                                id="multi_baths10">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_baths10) && $ad->multi_baths3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_baths10) && $ad->multi_baths10 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                        </div>
                        
                        <div class="form-group">
							<label for="multi_half">Half Bathrooms</label>
								<select class="form-control select10NoSearch" name="multi_half10"
                                                                id="multi_half10">
                                        <option value=""></option>
                                        <option value="1" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->multi_half10) && $ad->multi_half10 == '10') ? "selected=\"selected\"" : "" }}}>10</option>
                                                        </select>
                    </div>
                    
                    <div class="form-group">
						<label for="multi_sqft">Square Footage</label>
							<input type="text" class="form-control" id="multi_sqft10"
								value="{{{ $ad->multi_sqft10 or '' }}}" name="multi_sqft10"
								placeholder="Square Footage">
					</div>
					
					<div class="form-group">
						<label for="multi_rent">Rent</label>
							<input type="text" class="form-control" id="multi_rent10"
								value="{{{ $ad->multi_rent10 or '' }}}" name="multi_rent10"
								placeholder="Rent">
					</div>

                    <div class="form-group">
							<label for="multi_lease">Lease</label>
								<select class="form-control select10NoSearch" name="multi_lease10"
                                                                id="multi_lease10">
                                        <option value=""></option>
                                        <option value="yes" {{{ (isset($ad->multi_lease10) && $ad->multi_lease10 == 'yes') ? "selected=\"selected\"" : "" }}}>Yes</option>
                                        <option value="no" {{{ (isset($ad->multi_lease10) && $ad->multi_lease10 == 'no') ? "selected=\"selected\"" : "" }}}>No</option>
                                </select>
                    </div>
                        <hr />
                    <a type="button" href="./create-info?category={{ $ad->category}}" class="btn btn-warning">Back to Step 1</a>
                    <a type="button" href="./create-detail" class="btn btn-warning">Back to Step 2</a>
                    <button type="submit" class="btn btn-primary">Review Property Info</button>
    </form>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <br />
</div>
<p>&nbsp;</p>
@endsection