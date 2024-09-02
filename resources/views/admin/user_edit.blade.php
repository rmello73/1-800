@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">

                        {!! Form::open(['class'=>'form-horizontal', 'files'=>'true']) !!}
@if(!$lUser->is_saveuser())
                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            <label for="name" class="col-sm-4 control-label">@lang('app.name')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" value="{{ old('name')? old('name') : $user->name }}" name="name" placeholder="@lang('app.name')">
                                {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('address')? 'has-error':'' }}">
                            <label for="address" class="col-sm-4 control-label">Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="{{ old('address')? old('address') : $user->address }}" name="address" placeholder="Business Address">
                                {!! $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('city')? 'has-error':'' }}">
                            <label for="city" class="col-sm-4 control-label">@lang('app.city')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="{{ old('city')? old('city') : $user->city }}" name="city" placeholder="@lang('app.city')">
                                {!! $errors->has('city')? '<p class="help-block">'.$errors->first('city').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('state')? 'has-error':'' }}">
                            <label for="state" class="col-sm-4 control-label">@lang('app.state')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="{{ old('state')? old('state') : $user->state }}" name="state" placeholder="@lang('app.state')">
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

                        <div class="form-group {{ $errors->has('fax')? 'has-error':'' }}">
                            <label for="fax" class="col-sm-4 control-label">Fax</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="fax" value="{{ old('fax')? old('fax') : $user->fax }}" name="fax" placeholder="Fax">
                                {!! $errors->has('fax')? '<p class="help-block">'.$errors->first('fax').'</p>':'' !!}
                            </div>
                        </div>

                    <div class="form-group {{ $errors->has('category')? 'has-error':'' }}">
                        <label for="fax" class="col-sm-4 control-label">Category</label>
                        <div class="col-sm-8">
                        <select class="form-control select2NoSearch" name="category">
                            <option value="">Please choose a type of service offered</option>
                            <option value="contractors" {{ $user->category == 'contractors' ? 'selected':''
									}}>Contractors</option>
                            <option value="events" {{ $user->category == 'events' ? 'selected':''
									}}>Events Calendar</option>
                            <option value="inspectors" {{ $user->category == 'inspectors' ? 'selected':''
									}}>Home Inspectors</option>
                            <option value="agents" {{ $user->category == 'agents' ? 'selected':''
									}}>Insurance Agents</option>
                            <option value="photographers" {{ $user->category == 'photographers' ? 'selected':''
									}}>Photography</option>
                            <option value="brokers" {{ $user->category == 'brokers' ? 'selected':''
									}}>Mortgage Brokers</option>
                            <option value="attorneys" {{ $user->category == 'attorneys' ? 'selected':''
									}}>Real Estate Attorney</option>
							<option value="real-estate-agents" {{ $user->category == 'real-estate-agents' ? 'selected':''
									}}>Real Estate Agents</option>
                            <option value="restaurants" {{ $user->category == 'restaurants' ? 'selected':''
									}}>Restaurants</option>
                            <option value="videographers" {{ $user->category == 'videographers' ? 'selected':''
									}}>Videography</option>
							<option value="openhouses" {{ $user->category == 'openhouses' ? 'selected':''
									}}>Open Houses</option>
                        </select>
                        </div>
                        {!! $errors->has('category')? '<p class="help-block">'.$errors->first('category').'</p>':'' !!}
                    </div>

                        <div class="form-group {{ $errors->has('company')? 'has-error':'' }}">
                            <label for="company" class="col-sm-4 control-label">Company</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="company" value="{{ old('company')? old('company') : $user->company }}" name="company" placeholder="Company">
                                {!! $errors->has('company')? '<p class="help-block">'.$errors->first('company').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
                            <label for="title" class="col-sm-4 control-label">@lang('app.title')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="title" value="{{ old('title')? old('title') : $user->title }}" name="title" placeholder="@lang('app.title')">
                                {!! $errors->has('title')? '<p class="help-block">'.$errors->first('title').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('video')? 'has-error':'' }}">
                            <label for="video" class="col-sm-4 control-label">@lang('app.video')</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="video" value="{{ old('video')? old('video') : $user->video }}" name="video" placeholder="@lang('app.video')">
                                {!! $errors->has('video')? '<p class="help-block">'.$errors->first('video').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('videotitle2')? 'has-error':'' }}">
                            <label for="videotitle2" class="col-sm-4 control-label">Video 2 Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="videotitle2" value="{{ old('videotitle2')? old('videotitle2') : $user->videotitle2 }}" name="videotitle2" placeholder="@lang('app.video')">
                                {!! $errors->has('videotitle2')? '<p class="help-block">'.$errors->first('videotitle2').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('video2')? 'has-error':'' }}">
                            <label for="video2" class="col-sm-4 control-label">Video 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="video2" value="{{ old('video2')? old('video2') : $user->video2 }}" name="video2" placeholder="@lang('app.video')">
                                {!! $errors->has('video2')? '<p class="help-block">'.$errors->first('video2').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('videotitle3')? 'has-error':'' }}">
                            <label for="videotitle3" class="col-sm-4 control-label">Video 3 Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="videotitle3" value="{{ old('videotitle3')? old('videotitle3') : $user->videotitle3 }}" name="videotitle3" placeholder="@lang('app.video')">
                                {!! $errors->has('videotitle3')? '<p class="help-block">'.$errors->first('videotitle3').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('video3')? 'has-error':'' }}">
                            <label for="video3" class="col-sm-4 control-label">Video 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="video3" value="{{ old('video3')? old('video3') : $user->video3 }}" name="video3" placeholder="@lang('app.video')">
                                {!! $errors->has('video3')? '<p class="help-block">'.$errors->first('video3').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('videotitle4')? 'has-error':'' }}">
                            <label for="videotitle4" class="col-sm-4 control-label">Video 4 Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="videotitle4" value="{{ old('videotitle4')? old('videotitle4') : $user->videotitle4 }}" name="videotitle4" placeholder="@lang('app.video')">
                                {!! $errors->has('videotitle4')? '<p class="help-block">'.$errors->first('videotitle4').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('video4')? 'has-error':'' }}">
                            <label for="video4" class="col-sm-4 control-label">Video 4</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="video4" value="{{ old('video4')? old('video4') : $user->video4 }}" name="video4" placeholder="@lang('app.video')">
                                {!! $errors->has('video4')? '<p class="help-block">'.$errors->first('video4').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('office')? 'has-error':'' }}">
                            <label for="office" class="col-sm-4 control-label">@lang('app.office') Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="office" value="{{ old('office')? old('office') : $user->office }}" name="office" placeholder="@lang('app.office') Phone">
                                {!! $errors->has('office')? '<p class="help-block">'.$errors->first('office').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('mobile')? 'has-error':'' }}">
                            <label for="mobile" class="col-sm-4 control-label">@lang('app.mobile') Phone</label>
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
@endif
                        <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                            <label for="email" class="col-sm-4 control-label">@lang('app.email')</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" value="{{ old('email')? old('email') : $user->email }}" name="email" placeholder="@lang('app.email')">
                                {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                            </div>
                        </div>
@if(!$lUser->is_saveuser())
                        <div class="form-group  {{ $errors->has('photo')? 'has-error':'' }}">
                            <label class="col-sm-4 control-label">@lang('app.change_photo')</label>
                            <div class="col-sm-8">
                                <input type="file" id="photo" name="photo" class="filestyle" placeholder="{{ $user->photo }}" >
                                {!! $errors->has('photo')? '<p class="help-block">'.$errors->first('photo').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <label class="col-sm-4 control-label">Current Photo</label>
                            <div class="col-sm-8">
                                <div class="profile-avatar">
                                    <img src="{{ $user->get_photo(150) }}" class="img-thumbnail" />
                                </div>
                            </div>
                        
                        <div class="form-group  {{ $errors->has('agent_logo')? 'has-error':'' }}">
                            <label class="col-sm-4 control-label">@lang('app.change_agent_logo')</label>
                            <div class="col-sm-8">
                                <input type="file" id="agent_logo" name="agent_logo" class="filestyle" >
                                {!! $errors->has('agent_logo')? '<p class="help-block">'.$errors->first('agent_logo').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <label class="col-sm-4 control-label">Current Logo</label>
                            <div class="col-sm-8">
                                <div class="profile-avatar">
                                    <img src="{{ $user->get_agent_logo() }}" class="img-thumbnail" />
                                </div>
                            </div>
                        
			<div class="form-group  {{ $errors->has('description')? 'has-error':'' }}">
                            <label class="col-sm-4 control-label">@lang('app.user_desc')</label>
                            <div class="col-sm-8">
                                <textarea name="description" class="form-control" value="{{ old('description')? old('description') : $user->description }}">
				{{ old('desc')? old('description') : $user->description }}</textarea>
                                {!! $errors->has('description')? '<p class="help-block">'.$errors->first('description').'</p>':'' !!}
                            </div>
                        </div>
                        
                        <legend>Specialties</legend>

                        <div class="form-group {{ $errors->has('asp')? 'has-error':'' }}">
                            <label for="asp" class="col-sm-4 control-label">Specialty</label>
                            <div class="col-sm-8">
                                <input type="asp" class="form-control" id="asp" value="{{ old('asp')? old('asp') : $user->asp }}" name="asp" placeholder="Specialty">
                                {!! $errors->has('asp')? '<p class="help-block">'.$errors->first('asp').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('asp2')? 'has-error':'' }}">
                            <label for="asp2" class="col-sm-4 control-label">Specialty</label>
                            <div class="col-sm-8">
                                <input type="asp2" class="form-control" id="asp2" value="{{ old('asp2')? old('asp2') : $user->asp2 }}" name="asp2" placeholder="Specialty 2">
                                {!! $errors->has('asp2')? '<p class="help-block">'.$errors->first('asp2').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('asp3')? 'has-error':'' }}">
                            <label for="asp3" class="col-sm-4 control-label">Specialty</label>
                            <div class="col-sm-8">
                                <input type="asp3" class="form-control" id="asp3" value="{{ old('asp3')? old('asp3') : $user->asp3 }}" name="asp3" placeholder="Specialty 3">
                                {!! $errors->has('asp3')? '<p class="help-block">'.$errors->first('asp3').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('asp4')? 'has-error':'' }}">
                            <label for="asp4" class="col-sm-4 control-label">Specialty</label>
                            <div class="col-sm-8">
                                <input type="asp4" class="form-control" id="asp4" value="{{ old('asp4')? old('asp4') : $user->asp4 }}" name="asp4" placeholder="Specialty 4">
                                {!! $errors->has('asp4')? '<p class="help-block">'.$errors->first('asp4').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('asp5')? 'has-error':'' }}">
                            <label for="asp5" class="col-sm-4 control-label">Specialty</label>
                            <div class="col-sm-8">
                                <input type="asp5" class="form-control" id="asp5" value="{{ old('asp5')? old('asp5') : $user->asp5 }}" name="asp5" placeholder="Specialty 5">
                                {!! $errors->has('asp5')? '<p class="help-block">'.$errors->first('asp5').'</p>':'' !!}
                            </div>
                        </div>

                        <legend>Team Service Areas</legend>

                        <div class="form-group {{ $errors->has('tsa')? 'has-error':'' }}">
                            <label for="tsa" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa" class="form-control" id="tsa" value="{{ old('tsa')? old('tsa') : $user->tsa }}" name="tsa" placeholder="Team Service Area">
                                {!! $errors->has('tsa')? '<p class="help-block">'.$errors->first('tsa').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa2')? 'has-error':'' }}">
                            <label for="tsa2" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa2" class="form-control" id="tsa2" value="{{ old('tsa2')? old('tsa2') : $user->tsa2 }}" name="tsa2" placeholder="Team Service Area 2">
                                {!! $errors->has('tsa2')? '<p class="help-block">'.$errors->first('tsa2').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa3')? 'has-error':'' }}">
                            <label for="tsa3" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa3" class="form-control" id="tsa3" value="{{ old('tsa3')? old('tsa3') : $user->tsa3 }}" name="tsa3" placeholder="Team Service Area 3">
                                {!! $errors->has('tsa3')? '<p class="help-block">'.$errors->first('tsa3').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa4')? 'has-error':'' }}">
                            <label for="tsa4" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa4" class="form-control" id="tsa4" value="{{ old('tsa4')? old('tsa4') : $user->tsa4 }}" name="tsa4" placeholder="Team Service Area 4">
                                {!! $errors->has('tsa4')? '<p class="help-block">'.$errors->first('tsa4').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa5')? 'has-error':'' }}">
                            <label for="tsa5" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa5" class="form-control" id="tsa5" value="{{ old('tsa5')? old('tsa5') : $user->tsa5 }}" name="tsa5" placeholder="Team Service Area 5">
                                {!! $errors->has('tsa5')? '<p class="help-block">'.$errors->first('tsa5').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa6')? 'has-error':'' }}">
                            <label for="tsa6" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa6" class="form-control" id="tsa6" value="{{ old('tsa6')? old('tsa6') : $user->tsa6 }}" name="tsa6" placeholder="Team Service Area 6">
                                {!! $errors->has('tsa6')? '<p class="help-block">'.$errors->first('tsa6').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa7')? 'has-error':'' }}">
                            <label for="tsa7" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa7" class="form-control" id="tsa7" value="{{ old('tsa7')? old('tsa7') : $user->tsa7 }}" name="tsa7" placeholder="Team Service Area 7">
                                {!! $errors->has('tsa7')? '<p class="help-block">'.$errors->first('tsa7').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa8')? 'has-error':'' }}">
                            <label for="tsa8" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa8" class="form-control" id="tsa8" value="{{ old('tsa8')? old('tsa8') : $user->tsa8 }}" name="tsa8" placeholder="Team Service Area 8">
                                {!! $errors->has('tsa8')? '<p class="help-block">'.$errors->first('tsa8').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa9')? 'has-error':'' }}">
                            <label for="tsa9" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa9" class="form-control" id="tsa9" value="{{ old('tsa9')? old('tsa9') : $user->tsa9 }}" name="tsa9" placeholder="Team Service Area 9">
                                {!! $errors->has('tsa9')? '<p class="help-block">'.$errors->first('tsa9').'</p>':'' !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('tsa10')? 'has-error':'' }}">
                            <label for="tsa10" class="col-sm-4 control-label">Team Service Area</label>
                            <div class="col-sm-8">
                                <input type="tsa10" class="form-control" id="tsa10" value="{{ old('tsa10')? old('tsa10') : $user->tsa10 }}" name="tsa10" placeholder="Team Service Area 10">
                                {!! $errors->has('tsa10')? '<p class="help-block">'.$errors->first('tsa10').'</p>':'' !!}
                            </div>
                        </div>

                       <legend>Hours</legend>

                        <div class="form-group {{ $errors->has('mh')? 'has-error':'' }}">
                            <label for="mh" class="col-sm-4 control-label">Monday Hours</label>
                            <div class="col-sm-8">
                                <input type="mh" class="form-control" id="mh" value="{{ old('mh')? old('mh') : $user->mh }}" name="mh" placeholder="Monday Hours">
                                {!! $errors->has('mh')? '<p class="help-block">'.$errors->first('mh').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('th')? 'has-error':'' }}">
                            <label for="th" class="col-sm-4 control-label">Tuesday Hours</label>
                            <div class="col-sm-8">
                                <input type="th" class="form-control" id="th" value="{{ old('th')? old('th') : $user->th }}" name="th" placeholder="Tuesday Hours">
                                {!! $errors->has('th')? '<p class="help-block">'.$errors->first('th').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('wh')? 'has-error':'' }}">
                            <label for="wh" class="col-sm-4 control-label">Wednesday Hours</label>
                            <div class="col-sm-8">
                                <input type="wh" class="form-control" id="wh" value="{{ old('wh')? old('wh') : $user->wh }}" name="wh" placeholder="Wednesday Hours">
                                {!! $errors->has('wh')? '<p class="help-block">'.$errors->first('wh').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('rh')? 'has-error':'' }}">
                            <label for="rh" class="col-sm-4 control-label">Thursday Hours</label>
                            <div class="col-sm-8">
                                <input type="rh" class="form-control" id="rh" value="{{ old('rh')? old('rh') : $user->rh }}" name="rh" placeholder="Thursday Hours">
                                {!! $errors->has('rh')? '<p class="help-block">'.$errors->first('rh').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('fh')? 'has-error':'' }}">
                            <label for="fh" class="col-sm-4 control-label">Friday Hours</label>
                            <div class="col-sm-8">
                                <input type="fh" class="form-control" id="fh" value="{{ old('fh')? old('fh') : $user->fh }}" name="fh" placeholder="Friday Hours">
                                {!! $errors->has('fh')? '<p class="help-block">'.$errors->first('fh').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('sh')? 'has-error':'' }}">
                            <label for="sh" class="col-sm-4 control-label">Saturday Hours</label>
                            <div class="col-sm-8">
                                <input type="sh" class="form-control" id="sh" value="{{ old('sh')? old('sh') : $user->sh }}" name="sh" placeholder="Saturday Hours">
                                {!! $errors->has('sh')? '<p class="help-block">'.$errors->first('sh').'</p>':'' !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('uh')? 'has-error':'' }}">
                            <label for="uh" class="col-sm-4 control-label">Sunday Hours</label>
                            <div class="col-sm-8">
                                <input type="uh" class="form-control" id="uh" value="{{ old('uh')? old('uh') : $user->uh }}" name="uh" placeholder="Sunday Hours">
                                {!! $errors->has('uh')? '<p class="help-block">'.$errors->first('uh').'</p>':'' !!}
                            </div>
                        </div>
@endif
                        <hr />
                        <b>Social Media Links</b>
                        
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

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">@lang('app.edit')</button>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
@endsection
