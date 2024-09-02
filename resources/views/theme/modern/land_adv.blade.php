<style>
    .form-control {
        margin-bottom: 0;
        padding: 0 30px 0 10px;
        width: 100%;
        height: 42px;
        line-height: 42px;
    }
    label {
        font-family: Hind,sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 23px;
        color: #5b5a5a;
        overflow-x: hidden!important;
        -webkit-font-smoothing: antialiased;
    }
    .bottom-text {
        font-family: Hind,sans-serif;
        font-weight: 400;
        font-size: 12px;
        line-height: 23px;
        color: #5b5a5a;
        overflow-x: hidden!important;
        -webkit-font-smoothing: antialiased;
    }
    .btn-solid {
        border-radius: 60px;
        width: 251px;
        height: 68px;
    }
    .mkdf-btn.mkdf-btn-outline {
        color: #ffffff;
        background-color: transparent;
        border: 1px solid #25357F;
    }
    .mkdf-btn {
        font-family: "Josefin Sans",sans-serif;
        position: relative;
        width: auto;
        outline: 0;
        font-size: 11px;
        line-height: 2em;
        letter-spacing: .15em;
        font-weight: 600;
        text-transform: uppercase;
        box-sizing: border-box;
        margin: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        -moz-transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        transition: color .2s ease-in-out,background-color .2s ease-in-out,border-color .2s ease-in-out;
        padding: 11px 53px 7px;
        cursor: pointer;
    }
    .mkdf-btn, .mkdf-btn.mkdf-btn-simple .mkdf-btn-text {
        display: inline-block;
        vertical-align: middle;
    }
    user agent stylesheet
    button {
        -webkit-appearance: button;
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: buttontext;
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: center;
        align-items: flex-start;
        cursor: default;
        background-color: buttonface;
        box-sizing: border-box;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 6px;
        border-width: 2px;
        border-style: outset;
        border-color: buttonface;
        border-image: initial;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
    display: block;
    padding: 0 15px;
    color: inherit;
    line-height: inherit;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    box-sizing: border-box;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px;
}
.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
a, abbr, acronym, address, applet, b, big, blockquote, body, caption, center, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, font, form, h1, h2, h3, h4, h5, h6, html, i, iframe, ins, kbd, label, legend, li, object, ol, p, pre, q, s, samp, small, span, strike, strong, sub, sup, table, tbody, td, tfoot, th, thead, tr, tt, u, ul, var {
    background: 0 0;
    border: 0;
    margin: 0;
    padding: 0;
    vertical-align: baseline;
    outline: 0;
}
.select2-container--default .select2-selection--single {
    display: block;
    height: 42px;
    line-height: 42px;
    padding: 0;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background-color: transparent;
    border: 1px solid #e1e1e1;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    box-sizing: border-box;
    cursor: pointer;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: auto;
    margin: 0 0 14px;
    border: 0;
    border-radius: 0;
    text-align: initial;
    box-sizing: border-box;
}
</style>

<div class="search-container mobile-nav">
        {{ Form::open( ['method'=>'get', 'id' => 'landsalelisting']) }}
    <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label><i class="fa fa-map-marker"></i>&nbsp;Choose Location(s)</label>
                        <div class="checkbox-container">
                            <div class="col-md-12">
                                 <label for="type_city">
                                    <input type="checkbox" value="Providence" id="type_Providence" name="city[]">
                                    Providence
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
                                    <input type="checkbox" value="Newport" id="type_Newport" name="city[]">
                                     Newport
                                </label>   
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
                                    <input type="checkbox" value="Narragansett" id="type_Narragansett" name="city[]">
                                     Narragansett
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="North Kingstown" id="type_Kingstown" name="city[]">
                                     North Kingstown
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Pawtucket" id="type_Pawtucket" name="city[]">
                                     Pawtucket
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
                                    <input type="checkbox" value="Portsmouth" id="type_Portsmouth" name="city[]">
                                     Portsmouth
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
 <label for="type_city">
                                    <input type="checkbox" value="Middletown" id="type_Middletown" name="city[]">
                                     Middletown
                                </label>   
 <label for="type_city">
                                    <input type="checkbox" value="Glocester" id="type_Glocester" name="city[]">
                                     Glocester
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                            
            <div class="row">
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
        <div class="row" align="center">
            <div class="form-group">
                    <button type="submit" class="btn info btn-block">SEARCH</button>
            </div>
        </div>
        				</div>
        			</div>
    {{ Form::close() }}
    </div>