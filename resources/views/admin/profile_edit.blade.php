@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('page-css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
.accordion ul {
    border-bottom:#ecebe9 solid 1px;
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
}
.accordion ul li {
    border-left:#ecebe9 solid 1px;
    border-right:#ecebe9 solid 1px;
    list-style:none;
}
.accordion ul li h5 {
    font-size:12px;
    color:#333333;
    font-weight:bold;
    background:#f7f6f5;
    border-top:#ecebe9 solid 1px;
    border-left:#ecebe9 solid 1px;
    border-right:#ecebe9 solid 1px;
    padding:12px 15px 12px 40px;
    line-height:19px;
    cursor:pointer;
    position:relative;
}
.accordion ul li h5.active {
    border-bottom:#ecebe9 solid 1px;
}
.accordion ul li > div {
    font-size:12px;
    color:#333333;
    line-height:20px;
    padding:15px 15px 15px 40px;
}
.accordion ul li > div a {
    color:#7f0a19;
}
.accordion ul li h5:before {
    content:"";
    background:#f00;
    width:11px;
    height:11px;
    opacity:0.7;
    position:absolute;
    left:14px;
    top:14px;
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
}
.accordion ul li h5.active:before {
    opacity:1;
}
</style>
@endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> Account </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                
                @include('admin.flash_msg')
                
                        {!! Form::open(['class'=>'form-horizontal', 'files'=>'true']) !!}
                        
                        <div class="accordion">
                            <ul>
                                <li>
                          <h5 class="header">My Basic Info</h5>
                          <div class="content">
                            <div class="form-group {{ $errors->has('first_name')? 'has-error':'' }}">
                                    <label for="first_name" class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="first_name" class="form-control" id="first_name" value="{{ old('first_name')? old('first_name') : $user->first_name }}" name="first_name" placeholder="First Name">
                                        {!! $errors->has('first_name')? '<p class="help-block">'.$errors->first('first_name').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('last_name')? 'has-error':'' }}">
                                    <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="last_name" value="{{ old('last_name')? old('last_name') : $user->last_name }}" name="last_name" placeholder="Last Name">
                                        {!! $errors->has('last_name')? '<p class="help-block">'.$errors->first('last_name').'</p>':'' !!}
                                    </div>
                                </div>

                                    @if($lUser->is_prof())
                                    <div class="form-group {{ $errors->has('last_name')? 'has-error':'' }}">
                                        <label for="last_name" class="col-sm-4 control-label">&nbsp;</label>
                                        <div class="col-sm-8">
                                            <h4>What Type of Professional are You?</h4>  
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('category')? 'has-error':'' }}">
                                        <label for="fax" class="col-sm-4 control-label">Category *</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="category" id="category">
                                            <option value="">Please choose a type of service offered</option>
                                            <option value="contractors" {{ $user->category == 'contractors' ? 'selected':''
                									}}>Contractors</option>
                                            <option value="inspectors" {{ $user->category == 'inspectors' ? 'selected':''
                									}}>Home Inspectors</option>
                                            <option value="agents" {{ $user->category == 'agents' ? 'selected':''
                									}}>Insurance Agents</option>
                                            <option value="photographers" {{ $user->category == 'photographers' ? 'selected':''
                									}}>Photography</option>
                                            <option value="brokers" {{ $user->category == 'brokers' ? 'selected':''
                									}}>Mortgage Lender</option>
                                            <option value="moving" {{ $user->category == 'moving' ? 'selected':''
                									}}>Moving</option>
                                            <option value="attorneys" {{ $user->category == 'attorneys' ? 'selected':''
                									}}>Real Estate Attorney</option>
                							<option value="real-estate-agents" {{ $user->category == 'real-estate-agents' ? 'selected':''
                									}}>Real Estate Agents</option>
                                            <option value="videographers" {{ $user->category == 'videographers' ? 'selected':''
                									}}>Videography</option>
                                        </select>
                                        </div>
                                        {!! $errors->has('category')? '<p class="help-block">'.$errors->first('category').'</p>':'' !!}
                                    </div>

                                    <div id="subcat_wrap" style="display:none">
                                        <div class="form-group {{ $errors->has('subcat')? 'has-error':'' }}">
                                            <label for="fax" class="col-sm-4 control-label">Subcategory</label>
                                            <div class="col-sm-8">
                                            <select class="form-control select2NoSearch" name="subcat">
                                                <option value="">Subcategory Type</option>
                                                    <option value="alarms" {{ $user->subcat == 'alarms' ? 'selected':''
                                                        }}>Alarm Companies</option>
                                                    <option value="appliances" {{ $user->subcat == 'appliances' ? 'selected':''
                                                        }}>Appliances & Repair</option>
                                                    <option value="carpets" {{ $user->subcat == 'carpets' ? 'selected':''
                                                        }}>Carpet Install/Cleaning</option>
                                                    <option value="driveways" {{ $user->subcat == 'driveways' ? 'selected':''
                                                        }}>Driveway Paving/Sealing</option>
                                                    <option value="eletricians" {{ $user->subcat == 'eletricians' ? 'selected':''
                                                        }}>Electrical Contractors</option>
                                                    <option value="fences" {{ $user->subcat == 'fences' ? 'selected':''
                                                        }}>Fencing Contractors</option>
                                                    <option value="garages" {{ $user->subcat == 'garages' ? 'selected':''
                                                        }}>Garage Doors</option>
                                                    <option value="gutters" {{ $user->subcat == 'gutters' ? 'selected':''
                                                        }}>Gutter Install/Cleaning</option>
                                                    <option value="handymen" {{ $user->subcat == 'handymen' ? 'selected':''
                                                        }}>Handymen</option>
                                                    <option value="theaters" {{ $user->subcat == 'theaters' ? 'selected':''
                                                        }}>Home Theater</option>
                                                    <option value="hvac" {{ $user->subcat == 'hvac' ? 'selected':''
                                                        }}>HVAC Specialists</option>
                                                    <option value="landscapers" {{ $user->subcat == 'landscapers' ? 'selected':''
                                                        }}>Landscaping/Tree Service</option>
                                                    <option value="painters" {{ $user->subcat == 'painters' ? 'selected':''
                                                        }}>Painting Companies</option>
                                                    <option value="pests" {{ $user->subcat == 'pests' ? 'selected':''
                                                        }}>Pest Control</option>
                                                    <option value="pools" {{ $user->subcat == 'pools' ? 'selected':''
                                                        }}>Pool Companies</option>
                                                    <option value="plumbers" {{ $user->subcat == 'plumbers' ? 'selected':''
                                                        }}>Plumbing Companies</option>
                                                    <option value="roofers" {{ $user->subcat == 'roofers' ? 'selected':''
                                                        }}>Roofing Companies</option>
                                                    <option value="septic" {{ $user->subcat == 'septic' ? 'selected':''
                                                        }}>Septic Services</option>
                                                    <option value="siding" {{ $user->subcat == 'siding' ? 'selected':''
                                                        }}>Siding Companies</option>
                                                    <option value="tiles" {{ $user->subcat == 'tiles' ? 'selected':''
                                                        }}>Tile Contractors</option>
                                                    <option value="windows" {{ $user->subcat == 'windows' ? 'selected':''
                                                        }}>Window Contractors</option>
                                            </select>
                                            </div>
                                            {!! $errors->has('subcat')? '<p class="help-block">'.$errors->first('subcat').'</p>':'' !!}
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group {{ $errors->has('company')? 'has-error':'' }}">
                                        <label for="company" class="col-sm-4 control-label">Company Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="company" value="{{ old('company')? old('company') : $user->company }}" name="company" placeholder="Company Name">
                                            {!! $errors->has('company')? '<p class="help-block">'.$errors->first('company').'</p>':'' !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
                                        <label for="company" class="col-sm-4 control-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="title" value="{{ old('title')? old('title') : $user->title }}" name="title" placeholder="Title">
                                            {!! $errors->has('title')? '<p class="help-block">'.$errors->first('title').'</p>':'' !!}
                                        </div>
                                    </div>
                                    <div
						class="form-group {{ $errors->has('street_num')? 'has-error':'' }}">
						<label for="street_num" class="col-sm-4 control-label">Street Info</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="street_num"
								value="{{ old('street_num')? old('street_num') : $user->street_num }}" name="street_num"
								placeholder="Street Number"> {!! $errors->has('street_num')?
							'
							<p class="help-block">'.$errors->first('street_num').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-2">
							<input type="text" class="form-control" id="street_name"
								value="{{ old('street_name')? old('street_name') : $user->street_name }}" name="street_name"
								placeholder="Street Name"> {!! $errors->has('street_name')?
							'
							<p class="help-block">'.$errors->first('street_name').'</p>
							':'' !!}
						</div>
						
						<div class="col-sm-2">
							<select class="form-control select2" id="street_type"
								name="street_type">
								<option value="">Street Type</option>
								<option value="Avenue" {{ $user->street_type == 'Avenue' ? 'selected':'' }}>Avenue</option>
                                <option value="Beach" {{ $user->street_type == 'Beach' ? 'selected':'' }}>Beach</option>
                                <option value="Bend" {{ $user->street_type == 'Bend' ? 'selected':'' }}>Bend</option>
                                <option value="Boulevard" {{ $user->street_type == 'blvd' ? 'selected':'' }}>Boulevard</option>
                                <option value="Circle" {{ $user->street_type == 'Circle' ? 'selected':'' }}>Circle</option>
                                <option value="Court" {{ $user->street_type == 'Court' ? 'selected':'' }}>Court</option>
                                <option value="Cove" {{ $user->street_type == 'Cove' ? 'selected':'' }}>Cove</option>
                                <option value="Crossing" {{ $user->street_type == 'Crossing' ? 'selected':'' }}>Crossing</option>
                                <option value="Drive" {{ $user->street_type == 'Drive' ? 'selected':'' }}>Drive</option>
                                <option value="Green" {{ $user->street_type == 'Green' ? 'selected':'' }}>Green</option>
                                <option value="Highway" {{ $user->street_type == 'Highway' ? 'selected':'' }}>Highway</option>
                                <option value="Hill" {{ $user->street_type == 'Hill' ? 'selected':'' }}>Hill</option>
                                <option value="Lane" {{ $user->street_type == 'Lane' ? 'selected':'' }}>Lane</option>
                                <option value="Meadow" {{ $user->street_type == 'Meadow' ? 'selected':'' }}>Meadow</option>
                                <option value="Parkway" {{ $user->street_type == 'Parkway' ? 'selected':'' }}>Parkway</option>
                                <option value="Passage" {{ $user->street_type == 'Passage' ? 'selected':'' }}>Passage</option>
                                <option value="Path" {{ $user->street_type == 'Path' ? 'selected':'' }}>Path</option>
                                <option value="Pike" {{ $user->street_type == 'Pike' ? 'selected':'' }}>Pike</option>
                                <option value="Place" {{ $user->street_type == 'Place' ? 'selected':'' }}>Place</option>
                                <option value="Point" {{ $user->street_type == 'Point' ? 'selected':'' }}>Point</option>
                                <option value="Ridge" {{ $user->street_type == 'Ridge' ? 'selected':'' }}>Ridge</option>
                                <option value="River" {{ $user->street_type == 'River' ? 'selected':'' }}>River</option>
                                <option value="Road" {{ $user->street_type == 'Road' ? 'selected':'' }}>Road</option>
                                <option value="Row" {{ $user->street_type == 'Row' ? 'selected':'' }}>Row</option>
                                <option value="Run" {{ $user->street_type == 'Run' ? 'selected':'' }}>Run</option>
                                <option value="Shore" {{ $user->street_type == 'Shore' ? 'selected':'' }}>Shore</option>
                                <option value="Shores" {{ $user->street_type == 'Shores' ? 'selected':'' }}>Shores</option>
                                <option value="Square" {{ $user->street_type == 'Square' ? 'selected':'' }}>Square</option>
                                <option value="Street" {{ $user->street_type == 'Street' ? 'selected':'' }}>Street</option>
                                <option value="Terrace" {{ $user->street_type == 'Terrace' ? 'selected':'' }}>Terrace</option>
                                <option value="Trail" {{ $user->street_type == 'Trail' ? 'selected':'' }}>Trail</option>
                                <option value="Turnpike" {{ $user->street_type == 'Turnpike' ? 'selected':'' }}>Turnpike</option>
                                <option value="View" {{ $user->street_type == 'View' ? 'selected':'' }}>View</option>
                                <option value="Way" {{ $user->street_type == 'Way' ? 'selected':'' }}>Way</option>
                                <option value="Wharf" {{ $user->street_type == 'Wharf' ? 'selected':'' }}>Wharf</option>
							</select>
                                                        {!! $errors->has('street_type')? '
								<p class="help-block">'.$errors->first('street_type').'</p>
								':'' !!}
						</div>
						<div
						class="form-group {{ $errors->has('unit_no')? 'has-error':'' }}">
						<div class="col-sm-2">
							<input type="text" class="form-control" id="unit_no"
								value="{{ old('unit_no')? old('unit_no') : $user->unit_no }}" name="unit_no"
								placeholder="Unit Number"> {!! $errors->has('unit_no')?
							'
							<p class="help-block">'.$errors->first('unit_no').'</p>
							':'' !!}
						</div>
					</div>

                                    <div class="form-group {{ $errors->has('city')? 'has-error':'' }}">
                                        <label for="city" class="col-sm-4 control-label">@lang('app.city')</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2" id="city_select" name="city">
                								<option value="">@lang('app.select_a_city')</option>
                								<option value="Barrington" {{ $user->city == 'Barrington' ? 'selected':'' }}>Barrington</option>
                								<option value="Bristol" {{ $user->city == 'test' ? 'selected':'' }}>Bristol</option>
                								<option value="Burrillville" {{ $user->city == 'Burrillville' ? 'selected':'' }}>Burrillville</option>
                								<option value="Central Falls" {{ $user->city == 'Central Falls' ? 'selected':'' }}>Central Falls</option>
                								<option value="Charlestown" {{ $user->city == 'Charlestown' ? 'selected':'' }}>Charlestown</option>
                								<option value="Coventry" {{ $user->city == 'Coventry' ? 'selected':'' }}>Coventry</option>
                								<option value="Cranston" {{ $user->city == 'Cranston' ? 'selected':'' }}>Cranston</option>
                								<option value="Cumberland" {{ $user->city == 'Cumberland' ? 'selected':'' }}>Cumberland</option>
                								<option value="East Greenwich" {{ $user->city == 'East Greenwich' ? 'selected':'' }}>East Greenwich</option>
                								<option value="East Providence" {{ $user->city == 'East Providence' ? 'selected':'' }}>East Providence</option>
                								<option value="Glocester" {{ $user->city == 'Glocester' ? 'selected':'' }}>Glocester</option>
                								<option value="Hopkinton" {{ $user->city == 'Hopkinton' ? 'selected':'' }}>Hopkinton</option>
                								<option value="Johnston" {{ $user->city == 'Johnston' ? 'selected':'' }}>Johnston</option>
                								<option value="Lincoln" {{ $user->city == 'Lincoln' ? 'selected':'' }}>Lincoln</option>
                								<option value="Middletown" {{ $user->city == 'Middletown' ? 'selected':'' }}>Middletown</option>
                								<option value="Narragansett" {{ $user->city == 'Narragansett' ? 'selected':'' }}>Narragansett</option>
                								<option value="Newport" {{ $user->city == 'Newport' ? 'selected':'' }}>Newport</option>
                								<option value="North Kingstown" {{ $user->city == 'North Kingstown' ? 'selected':'' }}>North Kingstown</option>
                								<option value="North Providence" {{ $user->city == 'North Providence' ? 'selected':'' }}>North Providence</option>
                								<option value="North Smithfield" {{ $user->city == 'North Smithfield' ? 'selected':'' }}>North Smithfield</option>
                								<option value="Pawtucket" {{ $user->city == 'Pawtucket' ? 'selected':'' }}>Pawtucket</option>
                								<option value="Providence" {{ $user->city == 'Providence' ? 'selected':'' }}>Providence</option>
                								<option value="Portsmouth" {{ $user->city == 'Portsmouth' ? 'selected':'' }}>Portsmouth</option>
                								<option value="Richmond" {{ $user->city == 'Richmond' ? 'selected':'' }}>Richmond</option>
                								<option value="Scituate" {{ $user->city == 'Scituate' ? 'selected':'' }}>Scituate</option>
                								<option value="Smithfield" {{ $user->city == 'Smithfield' ? 'selected':'' }}>Smithfield</option>
                								<option value="South Kingstown" {{ $user->city == 'South Kingstown' ? 'selected':'' }}>South Kingstown</option>
                								<option value="Tiverton" {{ $user->city == 'Tiverton' ? 'selected':'' }}>Tiverton</option>
                								<option value="Warren" {{ $user->city == 'Warren' ? 'selected':'' }}>Warren</option>
                								<option value="Warwick" {{ $user->city == 'Warwick' ? 'selected':'' }}>Warwick</option>
                								<option value="West Warwick" {{ $user->city == 'West Warwick' ? 'selected':'' }}>West Warwick</option>
                								<option value="Westerly" {{ $user->city == 'Westerly' ? 'selected':'' }}>Westerly</option>
                								<option value="Woonsocket" {{ $user->city == 'Woonsocket' ? 'selected':'' }}>Woonsocket</option>
                							</select>
                                            {!! $errors->has('city')? '<p class="help-block">'.$errors->first('city').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('state')? 'has-error':'' }}">
                                        <label for="state" class="col-sm-4 control-label">@lang('app.state')</label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2" id="state_select"
                								name="state">
                								<option value="">@lang('app.select_a_state')</option>
                								<option {{ $user->state == 'Rhode Island' ? 'selected':'' }}>Rhode Island</option>
                							</select>
                                            {!! $errors->has('state')? '<p class="help-block">'.$errors->first('state').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('zip')? 'has-error':'' }}">
                                        <label for="zip" class="col-sm-4 control-label">Zip</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="address" value="{{ old('zip')? old('zip') : $user->zip }}" name="zip" placeholder="Zip">
                                            {!! $errors->has('zip')? '<p class="help-block">'.$errors->first('zip').'</p>':'' !!}
                                        </div>
                                    </div>
                            
                                    <div class="form-group {{ $errors->has('mobile')? 'has-error':'' }}">
                                        <label for="mobile" class="col-sm-4 control-label">@lang('app.mobile')</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="mobile" value="{{ old('mobile')? old('mobile') : $user->mobile }}" name="mobile" placeholder="@lang('app.mobile') Phone">
                                            {!! $errors->has('mobile')? '<p class="help-block">'.$errors->first('mobile').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('website')? 'has-error':'' }}">
                                        <label for="website" class="col-sm-4 control-label">@lang('app.website')</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="website" value="{{ old('website')? old('website') : $user->website }}" name="website" placeholder="@lang('app.website')">
                                            {!! $errors->has('website')? '<p class="help-block">'.$errors->first('website').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">@lang('app.email')</label>
                                        <div class="col-sm-8">
                                            {{ $user->email }}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('office')? 'has-error':'' }}">
                                        <label for="office" class="col-sm-4 control-label">@lang('app.office')</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="office" value="{{ old('office')? old('office') : $user->office }}" name="office" placeholder="@lang('app.office') Phone">
                                            {!! $errors->has('office')? '<p class="help-block">'.$errors->first('office').'</p>':'' !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group {{ $errors->has('description')? 'has-error':'' }}">
                                        <div class="col-sm-4">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-8">
                                            <p>For more space, please click and drag the arrow on the bottom right.</p>
                                        </div>
                                        <label for="description" class="col-sm-4 control-label">Description</label>
                                        <div class="col-sm-8">
                                            <textarea rows="20" name="description" id="description" class="form-control" value="{{ old('description')? old('description') : $user->description }}">{{ old('desc')? old('description') : $user->description }}</textarea>
                                            {!! $errors->has('description')? '<p class="help-block">'.$errors->first('description').'</p>':'' !!}
                                        </div>
                                    </div>
                            </li>

                            @if($user->user_type != "saveuser")
                            <li>
                          <h5 class="header">My Social Media</h5>
                          <div class="content">
                            <legend>Social Media Links</legend>
                                    <div class="form-group {{ $errors->has('twitter')? 'has-error':'' }}">
                                        <label for="twitter" class="col-sm-4 control-label">Twitter</label>
                                        <div class="col-sm-8">
                                            <input type="twitter" class="form-control" id="twitter" value="{{ old('twitter')? old('twitter') : $user->twitter }}" name="twitter" placeholder="Twitter">
                                            {!! $errors->has('twitter')? '<p class="help-block">'.$errors->first('twitter').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('facebook')? 'has-error':'' }}">
                                        <label for="facebook" class="col-sm-4 control-label">Facebook</label>
                                        <div class="col-sm-8">
                                            <input type="facebook" class="form-control" id="facebook" value="{{ old('facebook')? old('facebook') : $user->facebook }}" name="facebook" placeholder="Facebook">
                                            {!! $errors->has('facebook')? '<p class="help-block">'.$errors->first('facebook').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('instagram')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Instagram</label>
                                        <div class="col-sm-8">
                                            <input type="instagram" class="form-control" id="instagram" value="{{ old('instagram')? old('instagram') : $user->instagram }}" name="instagram" placeholder="Instagram">
                                            {!! $errors->has('instagram')? '<p class="help-block">'.$errors->first('instagram').'</p>':'' !!}
                                        </div>
                                    </div>
                            </li>

                            <li>
                          <h5 class="header">My Videos</h5>
                          <div class="content">
                            <div class="row">
                                <legend>Videos</legend>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('video')? 'has-error':'' }}">
                                        <div class="col-md-10">
                                            <p class="help-block">Main Video</p>
                                            <input type="text" class="form-control" id="video" value="{{ old('video')? old('video') : $user->video }}" name="video" placeholder="@lang('app.video')">
                                            {!! $errors->has('video')? '<p class="help-block">'.$errors->first('video').'</p>':'' !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('video2')? 'has-error':'' }}">
                                        <div class="col-md-10">
                                        	<p class="help-block">3 Additional Videos where you can give helpful tips</p>
                                            <p class="help-block">Video 2</p>
                                            <input type="text" class="form-control" id="video2" value="{{ old('video2')? old('video2') : $user->video2 }}" name="video2" placeholder="@lang('app.video')">
                                            {!! $errors->has('video2')? '<p class="help-block">'.$errors->first('video2').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('video3')? 'has-error':'' }}">
                                        <div class="col-md-10">
                                            <p class="help-block">Video 3</p>
                                            <input type="text" class="form-control" id="video3" value="{{ old('video3')? old('video3') : $user->video3 }}" name="video3" placeholder="@lang('app.video')">
                                            {!! $errors->has('video3')? '<p class="help-block">'.$errors->first('video3').'</p>':'' !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('video4')? 'has-error':'' }}">
                                        <div class="col-md-10">
                                            <p class="help-block">Video 4</p>
                                            <input type="text" class="form-control" id="video4" value="{{ old('video4')? old('video4') : $user->video4 }}" name="video4" placeholder="@lang('app.video')">
                                            {!! $errors->has('video4')? '<p class="help-block">'.$errors->first('video4').'</p>':'' !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Example of main video.</p>
                                    <img src="https://1-800.lenoxproperty.com/assets/img/video-layout.jpg" width="400px" height="300px" />
                                    <div class="col-md-4">Video 2</div>
                                    <div class="col-md-4">Video 3</div>
                                    <div class="col-md-4">Video 4</div>
                                </div>
                            </div>
                            </li>

                            <li>
                            <h5 class="header">My Photos</h5>
                          <div class="content">
                              <div class="row">
                              <legend>Photos</legend>
                              <div class="col-md-6">
                                  <p>Profile Photo</p>
                            <div class="form-group  {{ $errors->has('photo')? 'has-error':'' }}">
                                <label class="col-sm-6 control-label">@if($user->photo)<img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->photo }}" class="profile-avatar" />@else No Photo @endif</label>
                                <div class="col-sm-6">
                                    <input type="file" id="photo" name="photo" class="filestyle" placeholder="{{ $user->photo }}" >
                                    {!! $errors->has('photo')? '<p class="help-block">'.$errors->first('photo').'</p>':'' !!}
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <p>Logo - <a href="https://1-800.lenoxproperty.com/dashboard/u/posts/image-crop">Click here to crop your logo for a cleaner look and / or to remove any extra whitespace.</a></p>
                            <div class="form-group  {{ $errors->has('agent_logo')? 'has-error':'' }}">
                                <label class="col-sm-6 control-label">@if($user->agent_logo)<img src="http://1-800.lenoxproperty.com/uploads/avatar/{{ $user->agent_logo  }}" class="profile-avatar" />@else No Photo @endif</label>
                                <div class="col-sm-6">
                                    <input type="file" id="agent_logo" name="agent_logo" class="filestyle" placeholder="{{ $user->agent_logo }}" >
                                        {!! $errors->has('agent_logo')? '<p class="help-block">'.$errors->first('agent_logo').'</p>':'' !!}
                                </div>
                            </div>
                            </div>
                            </div>
                        
                        @if($user->user_type == "prof" or $user->user_type == "admin")
                        <legend>My Work Photos</legend>
                            <div class="form-group  {{ $errors->has('photo6')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Portfolio Photos</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo6" name="photo6[]" class="filestyle" placeholder="{{ $user->photo6 }}" multiple >
                                    {!! $errors->has('photo6')? '<p class="help-block">'.$errors->first('photo6').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Photos</legend>
                        <a href="javascript:void(0);" class="btn btn-warning reorder" id="updateReorder">Click here to organize your images.</a>
    <div id="reorder-msg" class="alert alert-warning mt-3" style="display:none;">
        <i class="fa fa-3x fa-exclamation-triangle float-right"></i><br>1. Drag photos to organize them.<br>2. Click 'Save Reordering' above when finished.
    </div>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images->sortBy('image_order') as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>
                            @endif

                          </div>
                          @if(!$lUser->is_landlord())
                                    <li>
                                        <h5 class="header">My Business Settings</h5>
                                        <div class="content">
                                            <div class="row">
                                                <legend>Specialties</legend>

                                                <div class="form-group {{ $errors->has('asp')? 'has-error':'' }}">
                                                    <label for="video3" class="col-sm-4 control-label">Specialty </label>
                                                    <div class="col-sm-8">
                                                        <input type="asp" class="form-control" id="asp" value="{{ old('asp')? old('asp') : $user->asp }}" name="asp" placeholder="Specialty">
                                                        {!! $errors->has('asp')? '<p class="help-block">'.$errors->first('asp').'</p>':'' !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has('asp2')? 'has-error':'' }}">
                                                    <label for="video3" class="col-sm-4 control-label">Specialty 2</label>
                                                    <div class="col-sm-8">
                                                        <input type="asp2" class="form-control" id="asp2" value="{{ old('asp2')? old('asp2') : $user->asp2 }}" name="asp2" placeholder="Specialty 2">
                                                        {!! $errors->has('asp2')? '<p class="help-block">'.$errors->first('asp2').'</p>':'' !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has('asp3')? 'has-error':'' }}">
                                                    <label for="video3" class="col-sm-4 control-label">Specialty 3</label>
                                                    <div class="col-sm-8">
                                                        <input type="asp3" class="form-control" id="asp3" value="{{ old('asp3')? old('asp3') : $user->asp3 }}" name="asp3" placeholder="Specialty 3">
                                                        {!! $errors->has('asp3')? '<p class="help-block">'.$errors->first('asp3').'</p>':'' !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has('asp4')? 'has-error':'' }}">
                                                    <label for="video3" class="col-sm-4 control-label">Specialty 4</label>
                                                    <div class="col-sm-8">
                                                        <input type="asp4" class="form-control" id="asp4" value="{{ old('asp4')? old('asp4') : $user->asp4 }}" name="asp4" placeholder="Specialty 4">
                                                        {!! $errors->has('asp4')? '<p class="help-block">'.$errors->first('asp4').'</p>':'' !!}
                                                    </div>
                                                </div>

                                                <div class="form-group {{ $errors->has('asp5')? 'has-error':'' }}">
                                                    <label for="video3" class="col-sm-4 control-label">Specialty 5</label>
                                                    <div class="col-sm-8">
                                                        <input type="asp5" class="form-control" id="asp5" value="{{ old('asp5')? old('asp5') : $user->asp5 }}" name="asp5" placeholder="Specialty 5">
                                                        {!! $errors->has('asp5')? '<p class="help-block">'.$errors->first('asp5').'</p>':'' !!}
                                                    </div>
                                                </div>

                                    <legend>Accepted Payments</legend>
                                    
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->visa) && $user->visa == '1') ? "checked" : "" }}} name="visa"> Visa</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->mastercard) && $user->mastercard == '1') ? "checked" : "" }}} name="mastercard"> Mastercard</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->zelle) && $user->zelle == '1') ? "checked" : "" }}} name="zelle"> Zelle</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->paypal) && $user->paypal == '1') ? "checked" : "" }}} name="paypal"> PayPal</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->venmo) && $user->venmo == '1') ? "checked" : "" }}} name="venmo"> Venmo</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->cashapp) && $user->cashapp == '1') ? "checked" : "" }}} name="cashapp"> CashApp</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->cash) && $user->cash == '1') ? "checked" : "" }}} name="cash"> Cash</label>
                                    <label> <input type="checkbox" value="1" {{{ (isset($user->checks) && $user->checks == '1') ? "checked" : "" }}} name="checks"> Checks</label>

                                    <legend>Hours</legend>

                                    <div class="form-group {{ $errors->has('mh')? 'has-error':'' }}">
                                        <label for="mh" class="col-sm-4 control-label">Monday</label>
                                        <div class="col-sm-8">
                                            <input type="mh" class="form-control" id="mh" value="{{ old('mh')? old('mh') : $user->mh }}" name="mh" placeholder="Monday Hours">
                                            {!! $errors->has('mh')? '<p class="help-block">'.$errors->first('mh').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('th')? 'has-error':'' }}">
                                        <label for="th" class="col-sm-4 control-label">Tuesday</label>
                                        <div class="col-sm-8">
                                            <input type="th" class="form-control" id="th" value="{{ old('th')? old('th') : $user->th }}" name="th" placeholder="Tuesday Hours">
                                            {!! $errors->has('th')? '<p class="help-block">'.$errors->first('th').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('wh')? 'has-error':'' }}">
                                        <label for="wh" class="col-sm-4 control-label">Wednesday</label>
                                        <div class="col-sm-8">
                                            <input type="wh" class="form-control" id="wh" value="{{ old('wh')? old('wh') : $user->wh }}" name="wh" placeholder="Wednesday Hours">
                                            {!! $errors->has('wh')? '<p class="help-block">'.$errors->first('wh').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('rh')? 'has-error':'' }}">
                                        <label for="rh" class="col-sm-4 control-label">Thursday</label>
                                        <div class="col-sm-8">
                                            <input type="rh" class="form-control" id="rh" value="{{ old('rh')? old('rh') : $user->rh }}" name="rh" placeholder="Thursday Hours">
                                            {!! $errors->has('rh')? '<p class="help-block">'.$errors->first('rh').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('fh')? 'has-error':'' }}">
                                        <label for="fh" class="col-sm-4 control-label">Friday</label>
                                        <div class="col-sm-8">
                                            <input type="fh" class="form-control" id="fh" value="{{ old('fh')? old('fh') : $user->fh }}" name="fh" placeholder="Friday Hours">
                                            {!! $errors->has('fh')? '<p class="help-block">'.$errors->first('fh').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('sh')? 'has-error':'' }}">
                                        <label for="sh" class="col-sm-4 control-label">Saturday</label>
                                        <div class="col-sm-8">
                                            <input type="sh" class="form-control" id="sh" value="{{ old('sh')? old('sh') : $user->sh }}" name="sh" placeholder="Saturday Hours">
                                            {!! $errors->has('sh')? '<p class="help-block">'.$errors->first('sh').'</p>':'' !!}
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('uh')? 'has-error':'' }}">
                                        <label for="uh" class="col-sm-4 control-label">Sunday</label>
                                        <div class="col-sm-8">
                                            <input type="uh" class="form-control" id="uh" value="{{ old('uh')? old('uh') : $user->uh }}" name="uh" placeholder="Sunday Hours">
                                            {!! $errors->has('uh')? '<p class="help-block">'.$errors->first('uh').'</p>':'' !!}
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                </li>
                                @endif

                        @if($user->user_type == "agent" or $user->user_type == "admin")
                        <li>
                        <h5 class="header">Sold Properties - Up to 6</h5>
                          <div class="content">
                            <legend>List Sold Property 1 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy')? 'has-error':'' }}">
                                        <label for="agent_addy" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy" class="form-control" id="agent_addy" value="{{ old('agent_addy')? old('agent_addy') : $user->agent_addy }}" name="agent_addy" placeholder="Address">
                                            {!! $errors->has('agent_addy')? '<p class="help-block">'.$errors->first('agent_addy').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold')? 'has-error':'' }}">
                                        <label for="agent_sold" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold" class="form-control" id="agent_sold" value="{{ old('agent_sold')? old('agent_sold') : $user->agent_sold }}" name="agent_sold" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold')? '<p class="help-block">'.$errors->first('agent_sold').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep')? '<p class="help-block">'.$errors->first('agent_rep').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 1 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo7')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo7" name="photo7" class="filestyle" placeholder="{{ $user->photo7 }}" >
                                    {!! $errors->has('photo7')? '<p class="help-block">'.$errors->first('photo7').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 1 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images1 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>

                          <legend>List Sold Property 2 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy2')? 'has-error':'' }}">
                                        <label for="agent_addy2" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy2" class="form-control" id="agent_addy2" value="{{ old('agent_addy2')? old('agent_addy2') : $user->agent_addy2 }}" name="agent_addy2" placeholder="Address">
                                            {!! $errors->has('agent_addy2')? '<p class="help-block">'.$errors->first('agent_addy2').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold2')? 'has-error':'' }}">
                                        <label for="agent_sold2" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold2" class="form-control" id="agent_sold2" value="{{ old('agent_sold2')? old('agent_sold2') : $user->agent_sold2 }}" name="agent_sold2" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold2')? '<p class="help-block">'.$errors->first('agent_sold2').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep2')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep2">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep2 == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep2 == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep2 == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep2')? '<p class="help-block">'.$errors->first('agent_rep2').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 2 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo8')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo8" name="photo8" class="filestyle" placeholder="{{ $user->photo8 }}" >
                                    {!! $errors->has('photo8')? '<p class="help-block">'.$errors->first('photo8').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 2 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images2 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>

                          <legend>List Sold Property 3 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy3')? 'has-error':'' }}">
                                        <label for="agent_addy3" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy3" class="form-control" id="agent_addy3" value="{{ old('agent_addy3')? old('agent_addy3') : $user->agent_addy3 }}" name="agent_addy3" placeholder="Address">
                                            {!! $errors->has('agent_addy3')? '<p class="help-block">'.$errors->first('agent_addy3').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold3')? 'has-error':'' }}">
                                        <label for="agent_sold3" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold3" class="form-control" id="agent_sold3" value="{{ old('agent_sold3')? old('agent_sold3') : $user->agent_sold3 }}" name="agent_sold3" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold3')? '<p class="help-block">'.$errors->first('agent_sold3').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep3')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep3">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep3 == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep3 == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep3 == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep3')? '<p class="help-block">'.$errors->first('agent_rep3').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 3 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo9')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo9" name="photo9" class="filestyle" placeholder="{{ $user->photo9 }}" >
                                    {!! $errors->has('photo9')? '<p class="help-block">'.$errors->first('photo9').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 3 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images3 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>

                            <legend>List Sold Property 4 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy4')? 'has-error':'' }}">
                                        <label for="agent_addy4" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy4" class="form-control" id="agent_addy4" value="{{ old('agent_addy4')? old('agent_addy4') : $user->agent_addy4 }}" name="agent_addy4" placeholder="Address">
                                            {!! $errors->has('agent_addy4')? '<p class="help-block">'.$errors->first('agent_addy4').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold4')? 'has-error':'' }}">
                                        <label for="agent_sold4" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold4" class="form-control" id="agent_sold4" value="{{ old('agent_sold4')? old('agent_sold4') : $user->agent_sold4 }}" name="agent_sold4" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold4')? '<p class="help-block">'.$errors->first('agent_sold4').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep4')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep4">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep4 == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep4 == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep4 == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep4')? '<p class="help-block">'.$errors->first('agent_rep4').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 4 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo10')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo10" name="photo10" class="filestyle" placeholder="{{ $user->photo10 }}" >
                                    {!! $errors->has('photo10')? '<p class="help-block">'.$errors->first('photo10').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 4 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images4 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>

                            <legend>List Sold Property 5 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy5')? 'has-error':'' }}">
                                        <label for="agent_addy5" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy5" class="form-control" id="agent_addy5" value="{{ old('agent_addy5')? old('agent_addy5') : $user->agent_addy5 }}" name="agent_addy5" placeholder="Address">
                                            {!! $errors->has('agent_addy5')? '<p class="help-block">'.$errors->first('agent_addy5').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold5')? 'has-error':'' }}">
                                        <label for="agent_sold5" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold5" class="form-control" id="agent_sold5" value="{{ old('agent_sold5')? old('agent_sold5') : $user->agent_sold5 }}" name="agent_sold5" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold5')? '<p class="help-block">'.$errors->first('agent_sold5').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep5')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep5">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep5 == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep5 == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep5 == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep5')? '<p class="help-block">'.$errors->first('agent_rep5').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 5 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo11')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo11" name="photo11" class="filestyle" placeholder="{{ $user->photo11 }}" >
                                    {!! $errors->has('photo11')? '<p class="help-block">'.$errors->first('photo11').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 5 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images5 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>

                            <legend>List Sold Property 6 Info</legend>
                                    <div class="form-group {{ $errors->has('agent_addy6')? 'has-error':'' }}">
                                        <label for="agent_addy6" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="agent_addy6" class="form-control" id="agent_addy6" value="{{ old('agent_addy6')? old('agent_addy6') : $user->agent_addy6 }}" name="agent_addy6" placeholder="Address">
                                            {!! $errors->has('agent_addy6')? '<p class="help-block">'.$errors->first('agent_addy6').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_sold6')? 'has-error':'' }}">
                                        <label for="agent_sold6" class="col-sm-4 control-label">Sold Price</label>
                                        <div class="col-sm-8">
                                            <input type="agent_sold6" class="form-control" id="agent_sold6" value="{{ old('agent_sold6')? old('agent_sold6') : $user->agent_sold6 }}" name="agent_sold6" placeholder="Sold Price">
                                            {!! $errors->has('agent_sold6')? '<p class="help-block">'.$errors->first('agent_sold6').'</p>':'' !!}
                                        </div>
                                    </div>
    
                                    <div class="form-group {{ $errors->has('agent_rep6')? 'has-error':'' }}">
                                        <label for="instagram" class="col-sm-4 control-label">Did you represent the buyer or the seller?</label>
                                        <div class="col-sm-8">
                                        <select class="form-control select2NoSearch" name="agent_rep6">
                                            <option value="">Please choose</option>
                                            <option value="buyer" {{ $user->agent_rep6 == 'buyer' ? 'selected':''
                									}}>Buyer</option>
                                            <option value="seller" {{ $user->agent_rep6 == 'seller' ? 'selected':''
                									}}>Seller</option>
                                            <option value="Buyer & Seller" {{ $user->agent_rep6 == 'Buyer & Seller' ? 'selected':''
                									}}>Buyer & Seller</option>
                                        </select>
                                            {!! $errors->has('agent_rep6')? '<p class="help-block">'.$errors->first('agent_rep6').'</p>':'' !!}
                                        </div>
                                    </div>

                            <legend>Property 6 Photo</legend>
                            <div class="form-group  {{ $errors->has('photo12')? 'has-error':'' }}">
                                <label class="col-sm-4 control-label">Upload Sold Property Photo</label>
                                <div class="col-sm-8">
                                    <input type="file" id="photo12" name="photo12" class="filestyle" placeholder="{{ $user->photo12 }}" >
                                    {!! $errors->has('photo12')? '<p class="help-block">'.$errors->first('photo12').'</p>':'' !!}
                                </div>
                            </div>

                        <legend>Existing Property 6 Photo</legend>
                            <div class="gallery">
                                <div id="uploaded-ads-image-wrap">
                                <ul class="nav nav-pills">
                                        @foreach($agent_images6 as $image)
                                        <div class="creating-ads-img-wrap">
                                    <li id="image_li_{{ $image->id }}" class="ui-sortable-handle mr-2 mt-2">
                                        <div><a href="javascript:void(0);" class="img-link"><img src="https://1-800.lenoxproperty.com/files/{{ $image->media_name }}"  alt="" class="img-thumbnail" width="200"></a>
                                            <div class="img-action-wrap" id="{{ $image->id }}">
                                                <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                            </div>
                                        </div>
                                    </li>
                                    </div>
                                        @endforeach
                                </ul>
                                </div>
                            </div>
                            </div>
                                                </li>
                            @endif
                            @endif

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-5">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
    <script>
        $('body').on('click', '.imgDeleteBtn', function(){
                //Get confirm from user
                if ( ! confirm('{{ trans('app.are_you_sure') }}')){
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url : '{{ route('delete_media') }}',
                    type: "POST",
                    data: { media_id : img_id, _token : '{{ csrf_token() }}' },
                    success : function (data) {
                        if (data.success == 1){
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
    </script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(document).ready(function(){
        $("#category").change(function () {
            if ($(this).val() == "contractors") {
                $("#subcat_wrap").show();
            } else {
                $("#subcat_wrap").hide();
            }
        });
    });
    </script>
    
    <script>
$(document).ready(function(){
    $('.reorder').on('click',function(){
        $("ul.nav").sortable({ tolerance: 'pointer' });
        $('.reorder').html('Save Reordering');
        $('.reorder').attr("id","updateReorder");
        $('#reorder-msg').slideDown('');
        $('.img-link').attr("href","javascript:;");
        $('.img-link').css("cursor","move");
        $("#updateReorder").click(function( e ){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            if(!$("#updateReorder i").length){
                $(this).html('').prepend('<i class="fa fa-spin fa-spinner"></i>');
                $("ul.nav").sortable('destroy');
                $("#reorder-msg").html( "Reordering Photos - This could take a moment. Please don't navigate away from this page." ).removeClass('light_box').addClass('notice notice_error');

                var h = [];
                $("ul.nav-pills li").each(function() {  h.push($(this).attr('id').substr(9));  });
                console.log(h);
                 
                $.ajax({
                    type: "GET",
                    url: '/reorderimages',
                    data: {_token:"{{csrf_token()}}", ids: "" + h + ""},
                    success: function(data){
                         setTimeout(function(){// wait for 5 secs(2)
                               location.reload(); // then reload the page.(3)
                          }, 2000); 
                    }
                }); 
                return false;
            }       
            e.preventDefault();     
        });
    });
});
</script>

<script>
function MyAccordion() {
  $('.accordion .content').hide();
  $('.accordion .header').click(function() {
    if ($(this).hasClass("active")) {
      $(this).nextUntil('.header').slideUp(250);
      $(this).removeClass('active');
    } else {
      $('.accordion .header').removeClass('active');
      $('.accordion .content').slideUp(250);
      $(this).nextUntil('.header').slideDown(250);
      $(this).siblings('.header').nextUntil('.header').slideUp(250);
      $(this).addClass('active');
      $('.accordion .header').not(this).removeClass('active');
    }
  });
}
MyAccordion();
</script>

<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'description' );
    </script>

@endsection
