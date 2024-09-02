<div class="search-container mobile-nav">
        {{ Form::open([ 'method'=>'get', 'id' => 'commrentallisting']) }}
    <div class="row nopadding">
                <div class="col-md-3 nopadding">
                    <div class="form-group">
                        <label><i class="fa fa-map-marker"></i>&nbsp;Choose Location(s)</label>
                        <div class="checkbox-container">
                            <div class="col-md-12">
                                 <label for="type_city">
                                    <input type="checkbox" value="Barrington" id="type_Barrington" name="city[]">
                                     Barrington
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Bristol" id="type_Bristol" name="city[]">
                                     Bristol
                                </label>  
 <label for="type_city">
                                    <input type="checkbox" value="Burrillville" id="type_Burrillville" name="city[]">
                                     Burrillville
                                </label>    
 <label for="type_city">
                                    <input type="checkbox" value="Cranston" id="type_Cranston" name="city[]">
                                    Cranston
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Central Falls" id="type_Central" name="city[]">
                                    Central Falls
                                </label> 
<label for="type_city">
                                    <input type="checkbox" value="Charlestown" id="type_Charlestown" name="city[]">
                                     Charlestown
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Coventry" id="type_Coventry" name="city[]">
                                     Coventry
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Cumberland" id="type_Cumberland" name="city[]">
                                     Cumberland
                                </label>   																
 <label for="type_city">
                                    <input type="checkbox" value="East Greenwich" id="type_Greenwich" name="city[]">
                                     East Greenwich
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="East Providence" id="type_East" name="city[]">
                                     East Providence
                                </label>  
<label for="type_city">
                                    <input type="checkbox" value="Glocester" id="type_Glocester" name="city[]">
                                     Glocester
                                </label>								
 <label for="type_city">
                                    <input type="checkbox" value="Hopkinton" id="type_Hopkinton" name="city[]">
                                     Hopkinton
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Johnston" id="type_Johnston" name="city[]">
                                     Johnston
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Lincoln" id="type_Lincoln" name="city[]">
                                     Lincoln
                                </label>
<label for="type_city">
                                    <input type="checkbox" value="Middletown" id="type_Middletown" name="city[]">
                                     Middletown
                                </label>								
 <label for="type_city">
                                    <input type="checkbox" value="Narragansett" id="type_Narragansett" name="city[]">
                                     Narragansett
                                </label> 
<label for="type_city">
                                    <input type="checkbox" value="Newport" id="type_Newport" name="city[]">
                                     Newport
                                </label>
<label for="type_city">
                                    <input type="checkbox" value="North Kingstown" id="type_Kingstown" name="city[]">
                                     North Kingstown
                                </label>   								
<label for="type_city">
                                    <input type="checkbox" value="North Providence" id="type_NP" name="city[]">
                                     North Providence
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="North Smithfield" id="type_NS" name="city[]">
                                     North Smithfield
                                </label>  
 <label for="type_city">
                                    <input type="checkbox" value="Pawtucket" id="type_Pawtucket" name="city[]">
                                     Pawtucket
                                </label>    
 <label for="type_city">
                                    <input type="checkbox" value="Portsmouth" id="type_Portsmouth" name="city[]">
                                     Portsmouth
                                </label>
<label for="type_city">
                                    <input type="checkbox" value="Providence" id="type_Providence" name="city[]">
                                    Providence
                                </label>								
 <label for="type_city">
                                    <input type="checkbox" value="Richmond" id="type_Richmond" name="city[]">
                                     Richmond
                                </label>  
 <label for="type_city">
                                    <input type="checkbox" value="Scituate" id="type_Scituate" name="city[]">
                                     Scituate
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Smithfield" id="type_Smithfield" name="city[]">
                                     Smithfield
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="South Kingstown" id="type_SK" name="city[]">
                                     South Kingstown
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Tiverton" id="type_Tiverton" name="city[]">
                                     Tiverton
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Warren" id="type_Warren" name="city[]">
                                     Warren
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Warwick" id="type_Warwick" name="city[]">
                                     Warwick
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="West Warwick" id="type_WW" name="city[]">
                                     West Warwick
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Westerly" id="type_Westerly" name="city[]">
                                     Westerly
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Woonsocket" id="type_Woonsocket" name="city[]">
                                     Woonsocket
                                </label>      
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 nopadding">
                            <div class="col-md-1 col-sm-6 col-xs-12 mobile-hide" >
                                &nbsp;
            				</div>
            				<div class="col-md-2 col-sm-4 col-xs-12 mobile-hide nopadding" >
            				    <div id="single" align="center">
            				        <img src="{{ asset('assets/img/properties.png') }}" height="40px" width="40px" />
            				    </div>
            				    <p class="bottom-text">All For Rent</p>
                                <p class="type_checkbox"><input type="checkbox" value="all" id="type_all-family" name="type[]"></p>
            				</div>
            				<div class="col-md-2 col-sm-6 col-xs-12 mobile-hide nopadding" >
            				    <div id="multi" align="center">
            				        <img src="{{ asset('assets/img/office-black.png') }}" height="40px" width="40px" />
            				    </div>
            				    <p class="bottom-text">Office</p>
            				    <p class="type_checkbox"><input type="checkbox" value="office" id="type_office" name="type[]"></p>
            				</div>
            				<div class="col-md-2 col-sm-6 col-xs-12 mobile-hide nopadding" >
            				    <div id="condo" align="center">
            				        <img src="{{ asset('assets/img/industrial-black.png') }}" height="40px" width="40px" />
            				    </div>
            				    <p class="bottom-text">Industrial</p>
            				    <p class="type_checkbox"><input type="checkbox" value="industrial" id="type_industrial" name="type[]"></p>
            				</div>
            				<div class="col-md-2 col-sm-6 col-xs-12 mobile-hide nopadding" >
            				    <div id="land" align="center">
            				        <img src="{{ asset('assets/img/retail-black.png') }}" height="40px" width="40px" />
            				    </div>
            				    <p class="bottom-text">Retail</p>
            				    <p class="type_checkbox"><input type="checkbox" value="retail" id="type_retail" name="type[]"></p>
            				</div>
            				<div class="col-md-2 col-sm-6 col-xs-12 mobile-hide nopadding" >
            				    <div id="commercial" align="center">
            				        <img src="{{ asset('assets/img/restaurant-black.png') }}" height="40px" width="40px" />
            				    </div>
            				    <p class="bottom-text">Restaurant</p>
            				    <p class="type_checkbox"><input type="checkbox" value="restaurant" id="type_restaurant" name="type[]"></p>
            				</div>
            				<div class="col-md-1 col-sm-6 col-xs-12 mobile-hide nopadding" >
                                &nbsp;
            				</div>
            <div class="row nopadding">
                <div class="col-md-3">
                    <input type="number" class="form-control" name="min_price" value="{{ request('min_price') }}" placeholder="@lang('app.min_price')" height="40px" width="40px" />
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="max_price" value="{{ request('max_price') }}" placeholder="@lang('app.max_price')" />
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="q_new" value="{{ request('q_new') }}" placeholder="@lang('app.keyword___')" />
                </div>
            </div>
        <div class="row nopadding" align="center">
            <div class="form-group">
                    <button type="submit" class="btn info btn-block">SEARCH</button>
            </div>
        </div>
        				</div>
        			</div>
    {{ Form::close() }}
    </div>