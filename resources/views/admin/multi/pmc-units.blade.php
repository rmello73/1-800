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
    <form action="./pmc-units" method="post">
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
        <legend>PMC Unit Information</legend>

						<legend>Unit 1</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select2NoSearch" name="pmcbeds"
                                                                id="pmcbeds">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds) && $ad->pmcbeds == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths"
								value="{{ $ad->pmcbaths }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent"
								value="{{ $ad->pmcrent }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft"
								value="{{ $ad->pmcsqft }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan"
								value="{{ $ad->pmcfloorplan }}"
								class="form-control">
					</div>
					
						<legend>Unit 2</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select2NoSearch" name="pmcbeds2"
                                                                id="pmcbeds2">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds2) && $ad->pmcbeds2 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths2"
								value="{{ $ad->pmcbaths2 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent2"
								value="{{ $ad->pmcrent2 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft2"
								value="{{ $ad->pmcsqft2 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan2"
								value="{{ $ad->pmcfloorplan2 }}"
								class="form-control">
					</div>
					
						<legend>Unit 3</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select3NoSearch" name="pmcbeds3"
                                                                id="pmcbeds3">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds3) && $ad->pmcbeds3 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths3"
								value="{{ $ad->pmcbaths3 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent3"
								value="{{ $ad->pmcrent3 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft3"
								value="{{ $ad->pmcsqft3 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan3"
								value="{{ $ad->pmcfloorplan3 }}"
								class="form-control">
					</div>
					
						<legend>Unit 4</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select4NoSearch" name="pmcbeds4"
                                                                id="pmcbeds4">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds4) && $ad->pmcbeds4 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths4"
								value="{{ $ad->pmcbaths4 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent4"
								value="{{ $ad->pmcrent4 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft4"
								value="{{ $ad->pmcsqft4 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan4"
								value="{{ $ad->pmcfloorplan4 }}"
								class="form-control">
					</div>
					
						<legend>Unit 5</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select5NoSearch" name="pmcbeds5"
                                                                id="pmcbeds5">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds5) && $ad->pmcbeds5 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths5"
								value="{{ $ad->pmcbaths5 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent5"
								value="{{ $ad->pmcrent5 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft5"
								value="{{ $ad->pmcsqft5 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan5"
								value="{{ $ad->pmcfloorplan5 }}"
								class="form-control">
					</div>
					
						<legend>Unit 6</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select6NoSearch" name="pmcbeds6"
                                                                id="pmcbeds6">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds6) && $ad->pmcbeds6 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths6"
								value="{{ $ad->pmcbaths6 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent6"
								value="{{ $ad->pmcrent6 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft6"
								value="{{ $ad->pmcsqft6 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan6"
								value="{{ $ad->pmcfloorplan6 }}"
								class="form-control">
					</div>
					
						<legend>Unit 7</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select7NoSearch" name="pmcbeds7"
                                                                id="pmcbeds7">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds7) && $ad->pmcbeds7 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths7"
								value="{{ $ad->pmcbaths7 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent7"
								value="{{ $ad->pmcrent7 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft7"
								value="{{ $ad->pmcsqft7 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan7"
								value="{{ $ad->pmcfloorplan7 }}"
								class="form-control">
					</div>
					
						<legend>Unit 8</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select8NoSearch" name="pmcbeds8"
                                                                id="pmcbeds8">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds8) && $ad->pmcbeds8 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths8"
								value="{{ $ad->pmcbaths8 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent8"
								value="{{ $ad->pmcrent8 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft8"
								value="{{ $ad->pmcsqft8 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan8"
								value="{{ $ad->pmcfloorplan8 }}"
								class="form-control">
					</div>
					
						<legend>Unit 9</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select9NoSearch" name="pmcbeds9"
                                                                id="pmcbeds9">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds9) && $ad->pmcbeds9 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths9"
								value="{{ $ad->pmcbaths9 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent9"
								value="{{ $ad->pmcrent9 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft9"
								value="{{ $ad->pmcsqft9 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan9"
								value="{{ $ad->pmcfloorplan9 }}"
								class="form-control">
					</div>
					
						<legend>Unit 10</legend>
					<div class="form-group">
						<label for="">Beds</label>
							<select class="form-control select10NoSearch" name="pmcbeds10"
                                                                id="pmcbeds10">
                                        <option value=""></option>
                                        <option value="Studio" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == 'Studio') ? "selected=\"selected\"" : "" }}}>Studio</option>
                                        <option value="1" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '1') ? "selected=\"selected\"" : "" }}}>1</option>
                                        <option value="2" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '2') ? "selected=\"selected\"" : "" }}}>2</option>
                                        <option value="3" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '3') ? "selected=\"selected\"" : "" }}}>3</option>
                                        <option value="4" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '4') ? "selected=\"selected\"" : "" }}}>4</option>
                                        <option value="5" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '5') ? "selected=\"selected\"" : "" }}}>5</option>
                                        <option value="6" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '6') ? "selected=\"selected\"" : "" }}}>6</option>
                                        <option value="7" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '7') ? "selected=\"selected\"" : "" }}}>7</option>
                                        <option value="8" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '8') ? "selected=\"selected\"" : "" }}}>8</option>
                                        <option value="9" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '9') ? "selected=\"selected\"" : "" }}}>9</option>
                                        <option value="10" {{{ (isset($ad->pmcbeds10) && $ad->pmcbeds10 == '10') ? "selected=\"selected\"" : "" }}}>10</option>

                            </select>
					</div>
					<div class="form-group">
						<label for="">Baths</label>
							<input type="text" name="pmcbaths10"
								value="{{ $ad->pmcbaths10 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Rent</label>
							<input type="text" name="pmcrent10"
								value="{{ $ad->pmcrent10 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Square Feet</label>
							<input type="text" name="pmcsqft10"
								value="{{ $ad->pmcsqft10 }}"
								class="form-control">
					</div>
					<div class="form-group">
						<label for="">Floorplan</label>
							<input type="text" name="pmcfloorplan10"
								value="{{ $ad->pmcfloorplan10 }}"
								class="form-control">
					</div>
						<hr />
                    <button type="submit" class="btn btn-primary">Review Property Info</button>
    </form>
				</div>
				<div class="col-md-2">&nbsp;</div>
			</div>
			<br />
<p>&nbsp;</p>
@endsection