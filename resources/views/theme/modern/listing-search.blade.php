@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

        <div class="row">
            <div class="col-md-1">
                &nbsp;
            </div>
            <div class="col-md-10">
                <div class="bg-white">
                    <div class="sidebar-filter-wrapper">

                        {{ Form::open([ 'method'=>'get', 'id' => 'listing']) }}
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>@lang('app.keyword___')</label>
                <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="q_new" value="{{ request('q_new') }}" placeholder="@lang('app.keyword___')" />
                                </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                            <label>@lang('app.cities')</label>

                            <div class="row">
                                <div class="col-md-12">
                                    @foreach($cities as $city)
                                    <label for="type_city" class="radio-inline">
                                        <input type="checkbox" value="{{ $city->id }}" id="type_{{ $city->city_name }}" name="city">
                                        {{ $city->city_name }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                            <label>@lang('app.price_min_max')</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="min_price" value="{{ request('min_price') }}" placeholder="@lang('app.min_price')" />
                                </div>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="max_price" value="{{ request('max_price') }}" placeholder="@lang('app.max_price')" />
                                </div>
                            </div>
                        </div>
            </div>
        <div class="col-md-3">
            <div class="col-md-6">
                                    <label>Bedrooms</label>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="1" id="type_beds1" name="beds">
                                            1+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="2" id="type_beds2" name="beds">
                                            2+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="3" id="type_beds3" name="beds">
                                            3+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="4" id="type_beds4" name="beds">
                                            4+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="5" id="type_beds5" name="beds">
                                            5+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="6" id="type_beds6" name="beds">
                                            6+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="7" id="type_beds7" name="beds">
                                            7+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="8" id="type_beds8" name="beds">
                                            8+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_beds" class="radio-inline">
                                            <input type="checkbox" value="9" id="type_beds9" name="beds">
                                            9+
                                        </label>
                                    </div>
                                </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-3">
            <div class="col-md-6">
                                    <label>Bathrooms</label>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="1" id="type_baths1" name="attached_bath">
                                            1+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="2" id="type_baths2" name="attached_bath">
                                            2+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="3" id="type_baths3" name="attached_bath">
                                            3+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="4" id="type_baths4" name="attached_bath">
                                            4+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="5" id="type_baths5" name="attached_bath">
                                            5+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="6" id="type_baths6" name="attached_bath">
                                            6+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="7" id="type_baths7" name="attached_bath">
                                            7+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="8" id="type_baths8" name="attached_bath">
                                            8+
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="type_baths" class="radio-inline">
                                            <input type="checkbox" value="9" id="type_baths9" name="attached_bath">
                                            9+
                                        </label>
                                    </div>
                                </div> 
        </div>
        <div class="col-md-3">
            <div class="form-group">
                            <label>@lang('app.sqft_min_max')</label>

                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="min_sqft" value="{{ request('min_sqft') }}" placeholder="@lang('app.min_sqft')" />
                                </div>
                                <div class="col-xs-6">
                                    <input type="number" class="form-control" name="max_sqft" value="{{ request('max_sqft') }}" placeholder="@lang('app.max_sqft')" />
                                </div>
                            </div>
                        </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-6">
                                    <label>Rentals & Leases</label>
                                    <div class="checkbox">
                                        <label for="type_apartment" class="radio-inline">
                                            <input type="checkbox" value="apartment" id="type_apartment" name="type">
                                            Apartment
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_condo" class="radio-inline">
                                            <input type="checkbox" value="condo" id="type_condo" name="type">
                                            Condo
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_loft" class="radio-inline">
                                            <input type="checkbox" value="loft" id="type_loft" name="type">
                                            Loft
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_single-family" class="radio-inline">
                                            <input type="checkbox" value="single-family" id="type_single-family" name="type">
                                            Single-Family
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label for="type_multi-family" class="radio-inline">
                                            <input type="checkbox" value="multi-family" id="type_multi-family" name="type">
                                            Multi-Family
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label for="type_pmc" class="radio-inline">
                                            <input type="checkbox" value="pmc" id="type_pmc" name="type">
                                            Professionally Managed Apartment Complex
                                        </label>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label for="type_commercial" class="radio-inline">
                                            <input type="checkbox" value="commercial" id="type_commercial" name="type">
                                            Commercial
                                        </label>
                                    </div>
                                </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-6">
                                    <label>Sales</label>
                                    <div class="checkbox">
                                        <label for="type_single-family" class="radio-inline">
                                            <input type="checkbox" value="single-family" id="type_single-family" name="sale_type">
                                            Single-Family
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_multi-family" class="radio-inline">
                                            <input type="checkbox" value="multi-family" id="type_multi-family" name="sale_type">
                                            Multi-Family
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_condo" class="radio-inline">
                                            <input type="checkbox" value="condo" id="type_condo" name="sale_type">
                                            Condo
                                        </label>
                                    </div>
        
                                    <div class="checkbox">
                                        <label for="type_land" class="radio-inline">
                                            <input type="checkbox" value="land" id="type_land" name="sale_type">
                                            Land
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label for="type_commercial" class="radio-inline">
                                            <input type="checkbox" value="commercial" id="type_commercial" name="sale_type">
                                            Commercial
                                        </label>
                                    </div>
                                </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
                            <div class="row">
                                <div class=" col-sm-6 col-xs-12">
                                    <button class="btn btn-primary btn-block"><i class="fa fa-search"></i>  @lang('app.filter')</button>
                                </div>
                                <div class=" col-sm-6 col-xs-12">
                                    <a href="{{ route('listing') }}" class="btn btn-default btn-block"><i class="fa fa-refresh"></i>  @lang('app.reset')</a>
                                </div>
                            </div>
                        </div>
    </div>
    {{ Form::close() }}
                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>
            <div class="col-md-1">
                &nbsp;
            </div>

        </div>
        
@endsection


@section('page-js')
    <script>
        $(document).ready(function() {
            $('#shortBySelect').change(function () {
                var form_input = $('#listingFilterForm').serialize();
                location.href = '{{ route('listing') }}?' + form_input + '&shortBy=' + $(this).val();
            });
        });
    </script>

    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection