@extends('website.layouts.home_finance')

@section('title', "Properties - Home & Finance Int'l Ltd.")

@section('keywords', 'property, real estate, listing, grid, buy, rent, home, finance, apartment, villa, house')

@section('description', 'Browse our wide range of properties for sale and rent. Find your perfect home, apartment, villa, or commercial property with Home & Finance Intl Ltd.')

@section('content')
    <!-- Listing Grid View -->
    <section class="our-listing bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="listing_sidebar dn db-991">
                        <div class="sidebar_content_details style3">
                            <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                                <div class="sidebar_advanced_search_widget">
                                    <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                                    <form action="{{ route('properties') }}" method="GET">
                                        <ul class="sasw_list style2 mb0">
                                            <li class="search_area">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="search_keyword" name="keyword" placeholder="keyword" value="{{ request('keyword') }}">
                                                    <label for="search_keyword"><span class="flaticon-magnifying-glass"></span></label>
                                                </div>
                                            </li>
                                            <li class="search_area">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="search_location" name="location" placeholder="Location" value="{{ request('location') }}">
                                                    <label for="search_location"><span class="flaticon-maps-and-flags"></span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="status" class="selectpicker w100 show-tick">
                                                            <option value="">Status</option>
                                                            <option value="sale" {{ request('status') == 'sale' ? 'selected' : '' }}>For Sale</option>
                                                            <option value="rent" {{ request('status') == 'rent' ? 'selected' : '' }}>For Rent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="property_type" class="selectpicker w100 show-tick">
                                                            <option value="">Property Type</option>
                                                            <option value="apartment" {{ request('property_type') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                                                            <option value="bungalow" {{ request('property_type') == 'bungalow' ? 'selected' : '' }}>Bungalow</option>
                                                            <option value="condo" {{ request('property_type') == 'condo' ? 'selected' : '' }}>Condo</option>
                                                            <option value="house" {{ request('property_type') == 'house' ? 'selected' : '' }}>House</option>
                                                            <option value="land" {{ request('property_type') == 'land' ? 'selected' : '' }}>Land</option>
                                                            <option value="single_family" {{ request('property_type') == 'single_family' ? 'selected' : '' }}>Single Family</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="small_dropdown2">
                                                    <div id="prncgs" class="btn dd_btn">
                                                        <span>Price</span>
                                                        <label for="price_range"><span class="fa fa-angle-down"></span></label>
                                                    </div>
                                                    <div class="dd_content2">
                                                        <div class="pricing_acontent">
                                                            <span id="slider-range-value1"></span>
                                                            <span class="mt0" id="slider-range-value2"></span>
                                                            <div id="slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="bathrooms" class="selectpicker w100 show-tick">
                                                            <option value="">Bathrooms</option>
                                                            <option value="1" {{ request('bathrooms') == '1' ? 'selected' : '' }}>1</option>
                                                            <option value="2" {{ request('bathrooms') == '2' ? 'selected' : '' }}>2</option>
                                                            <option value="3" {{ request('bathrooms') == '3' ? 'selected' : '' }}>3</option>
                                                            <option value="4" {{ request('bathrooms') == '4' ? 'selected' : '' }}>4</option>
                                                            <option value="5" {{ request('bathrooms') == '5' ? 'selected' : '' }}>5</option>
                                                            <option value="6" {{ request('bathrooms') == '6' ? 'selected' : '' }}>6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="bedrooms" class="selectpicker w100 show-tick">
                                                            <option value="">Bedrooms</option>
                                                            <option value="1" {{ request('bedrooms') == '1' ? 'selected' : '' }}>1</option>
                                                            <option value="2" {{ request('bedrooms') == '2' ? 'selected' : '' }}>2</option>
                                                            <option value="3" {{ request('bedrooms') == '3' ? 'selected' : '' }}>3</option>
                                                            <option value="4" {{ request('bedrooms') == '4' ? 'selected' : '' }}>4</option>
                                                            <option value="5" {{ request('bedrooms') == '5' ? 'selected' : '' }}>5</option>
                                                            <option value="6" {{ request('bedrooms') == '6' ? 'selected' : '' }}>6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="garages" class="selectpicker w100 show-tick">
                                                            <option value="">Garages</option>
                                                            <option value="yes" {{ request('garages') == 'yes' ? 'selected' : '' }}>Yes</option>
                                                            <option value="no" {{ request('garages') == 'no' ? 'selected' : '' }}>No</option>
                                                            <option value="others" {{ request('garages') == 'others' ? 'selected' : '' }}>Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="year_built" class="selectpicker w100 show-tick">
                                                            <option value="">Year built</option>
                                                            <option value="2013" {{ request('year_built') == '2013' ? 'selected' : '' }}>2013</option>
                                                            <option value="2014" {{ request('year_built') == '2014' ? 'selected' : '' }}>2014</option>
                                                            <option value="2015" {{ request('year_built') == '2015' ? 'selected' : '' }}>2015</option>
                                                            <option value="2016" {{ request('year_built') == '2016' ? 'selected' : '' }}>2016</option>
                                                            <option value="2017" {{ request('year_built') == '2017' ? 'selected' : '' }}>2017</option>
                                                            <option value="2018" {{ request('year_built') == '2018' ? 'selected' : '' }}>2018</option>
                                                            <option value="2019" {{ request('year_built') == '2019' ? 'selected' : '' }}>2019</option>
                                                            <option value="2020" {{ request('year_built') == '2020' ? 'selected' : '' }}>2020</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="min_area style2 list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="min_area" name="min_area" placeholder="Min Area" value="{{ request('min_area') }}">
                                                </div>
                                            </li>
                                            <li class="max_area list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="max_area" name="max_area" placeholder="Max Area" value="{{ request('max_area') }}">
                                                </div>
                                            </li>
                                            <li>
                                                <div id="accordion" class="panel-group">
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                                                            </h4>
                                                        </div>
                                                        <div id="panelBodyRating" class="panel-collapse collapse">
                                                            <div class="panel-body row">
                                                                <div class="col-lg-12">
                                                                    <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="amenities[]" value="air_conditioning" {{ in_array('air_conditioning', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck4" name="amenities[]" value="barbeque" {{ in_array('barbeque', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck4">Barbeque</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck10" name="amenities[]" value="gym" {{ in_array('gym', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck10">Gym</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck5" name="amenities[]" value="microwave" {{ in_array('microwave', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck5">Microwave</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck6" name="amenities[]" value="tv_cable" {{ in_array('tv_cable', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck6">TV Cable</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck2" name="amenities[]" value="lawn" {{ in_array('lawn', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck2">Lawn</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck11" name="amenities[]" value="refrigerator" {{ in_array('refrigerator', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck3" name="amenities[]" value="swimming_pool" {{ in_array('swimming_pool', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck12" name="amenities[]" value="wifi" {{ in_array('wifi', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck12">WiFi</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck14" name="amenities[]" value="sauna" {{ in_array('sauna', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck14">Sauna</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck7" name="amenities[]" value="dryer" {{ in_array('dryer', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck7">Dryer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck9" name="amenities[]" value="washer" {{ in_array('washer', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck9">Washer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck13" name="amenities[]" value="laundry" {{ in_array('laundry', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck13">Laundry</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck8" name="amenities[]" value="outdoor_shower" {{ in_array('outdoor_shower', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck15" name="amenities[]" value="window_coverings" {{ in_array('window_coverings', request('amenities', [])) ? 'checked' : '' }}>
                                                                                <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="search_option_button">
                                                    <button type="submit" class="btn btn-block btn-thm">Search</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_content style2 mb0-991">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active text-thm" aria-current="page">Property Listings</li>
                        </ol>
                        <h2 class="breadcrumb_title">Property Listings</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="listing_list_style mb20-xsd tal-991">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
                        </ul>
                    </div>
                    <div class="dn db-991 mt30 mb0">
                        <div id="main2">
                            <span id="open2" class="flaticon-filter-results-button filter_open_btn style2"> Show Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="sidebar_listing_grid1 dn-991">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <form action="{{ route('properties') }}" method="GET">
                                    <ul class="sasw_list mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sidebar_keyword" name="keyword" placeholder="keyword" value="{{ request('keyword') }}">
                                                <label for="sidebar_keyword"><span class="flaticon-magnifying-glass"></span></label>
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sidebar_location" name="location" placeholder="Location" value="{{ request('location') }}">
                                                <label for="sidebar_location"><span class="flaticon-maps-and-flags"></span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="status" class="selectpicker w100 show-tick">
                                                        <option value="">Status</option>
                                                        <option value="sale" {{ request('status') == 'sale' ? 'selected' : '' }}>For Sale</option>
                                                        <option value="rent" {{ request('status') == 'rent' ? 'selected' : '' }}>For Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="property_type" class="selectpicker w100 show-tick">
                                                        <option value="">Property Type</option>
                                                        <option value="apartment" {{ request('property_type') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                                                        <option value="bungalow" {{ request('property_type') == 'bungalow' ? 'selected' : '' }}>Bungalow</option>
                                                        <option value="condo" {{ request('property_type') == 'condo' ? 'selected' : '' }}>Condo</option>
                                                        <option value="house" {{ request('property_type') == 'house' ? 'selected' : '' }}>House</option>
                                                        <option value="land" {{ request('property_type') == 'land' ? 'selected' : '' }}>Land</option>
                                                        <option value="single_family" {{ request('property_type') == 'single_family' ? 'selected' : '' }}>Single Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small_dropdown2">
                                                <div id="prncgs2" class="btn dd_btn">
                                                    <span>Price</span>
                                                    <label for="sidebar_price"><span class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2 style2">
                                                    <div class="pricing_acontent">
                                                        <input type="text" class="amount" placeholder="$52,239">
                                                        <input type="text" class="amount2" placeholder="$985,14">
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="bathrooms" class="selectpicker w100 show-tick">
                                                        <option value="">Bathrooms</option>
                                                        <option value="1" {{ request('bathrooms') == '1' ? 'selected' : '' }}>1</option>
                                                        <option value="2" {{ request('bathrooms') == '2' ? 'selected' : '' }}>2</option>
                                                        <option value="3" {{ request('bathrooms') == '3' ? 'selected' : '' }}>3</option>
                                                        <option value="4" {{ request('bathrooms') == '4' ? 'selected' : '' }}>4</option>
                                                        <option value="5" {{ request('bathrooms') == '5' ? 'selected' : '' }}>5</option>
                                                        <option value="6" {{ request('bathrooms') == '6' ? 'selected' : '' }}>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="bedrooms" class="selectpicker w100 show-tick">
                                                        <option value="">Bedrooms</option>
                                                        <option value="1" {{ request('bedrooms') == '1' ? 'selected' : '' }}>1</option>
                                                        <option value="2" {{ request('bedrooms') == '2' ? 'selected' : '' }}>2</option>
                                                        <option value="3" {{ request('bedrooms') == '3' ? 'selected' : '' }}>3</option>
                                                        <option value="4" {{ request('bedrooms') == '4' ? 'selected' : '' }}>4</option>
                                                        <option value="5" {{ request('bedrooms') == '5' ? 'selected' : '' }}>5</option>
                                                        <option value="6" {{ request('bedrooms') == '6' ? 'selected' : '' }}>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="garages" class="selectpicker w100 show-tick">
                                                        <option value="">Garages</option>
                                                        <option value="yes" {{ request('garages') == 'yes' ? 'selected' : '' }}>Yes</option>
                                                        <option value="no" {{ request('garages') == 'no' ? 'selected' : '' }}>No</option>
                                                        <option value="others" {{ request('garages') == 'others' ? 'selected' : '' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select name="year_built" class="selectpicker w100 show-tick">
                                                        <option value="">Year built</option>
                                                        <option value="2013" {{ request('year_built') == '2013' ? 'selected' : '' }}>2013</option>
                                                        <option value="2014" {{ request('year_built') == '2014' ? 'selected' : '' }}>2014</option>
                                                        <option value="2015" {{ request('year_built') == '2015' ? 'selected' : '' }}>2015</option>
                                                        <option value="2016" {{ request('year_built') == '2016' ? 'selected' : '' }}>2016</option>
                                                        <option value="2017" {{ request('year_built') == '2017' ? 'selected' : '' }}>2017</option>
                                                        <option value="2018" {{ request('year_built') == '2018' ? 'selected' : '' }}>2018</option>
                                                        <option value="2019" {{ request('year_built') == '2019' ? 'selected' : '' }}>2019</option>
                                                        <option value="2020" {{ request('year_built') == '2020' ? 'selected' : '' }}>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="min_area list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sidebar_min_area" name="min_area" placeholder="Min Area" value="{{ request('min_area') }}">
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sidebar_max_area" name="max_area" placeholder="Max Area" value="{{ request('max_area') }}">
                                            </div>
                                        </li>
                                        <li>
                                            <div id="accordion2" class="panel-group">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#panelBodyRating2" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion2"><i class="flaticon-more"></i> Advanced features</a>
                                                        </h4>
                                                    </div>
                                                    <div id="panelBodyRating2" class="panel-collapse collapse">
                                                        <div class="panel-body row">
                                                            <div class="col-lg-12">
                                                                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck16" name="amenities[]" value="air_conditioning" {{ in_array('air_conditioning', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck16">Air Conditioning</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck17" name="amenities[]" value="barbeque" {{ in_array('barbeque', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck17">Barbeque</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck18" name="amenities[]" value="gym" {{ in_array('gym', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck18">Gym</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck19" name="amenities[]" value="microwave" {{ in_array('microwave', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck19">Microwave</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck20" name="amenities[]" value="tv_cable" {{ in_array('tv_cable', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck20">TV Cable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck21" name="amenities[]" value="lawn" {{ in_array('lawn', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck21">Lawn</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck22" name="amenities[]" value="refrigerator" {{ in_array('refrigerator', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck22">Refrigerator</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck23" name="amenities[]" value="swimming_pool" {{ in_array('swimming_pool', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck23">Swimming Pool</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck24" name="amenities[]" value="wifi" {{ in_array('wifi', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck24">WiFi</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck25" name="amenities[]" value="sauna" {{ in_array('sauna', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck25">Sauna</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck26" name="amenities[]" value="dryer" {{ in_array('dryer', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck26">Dryer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck27" name="amenities[]" value="washer" {{ in_array('washer', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck27">Washer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck28" name="amenities[]" value="laundry" {{ in_array('laundry', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck28">Laundry</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck29" name="amenities[]" value="outdoor_shower" {{ in_array('outdoor_shower', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck30" name="amenities[]" value="window_coverings" {{ in_array('window_coverings', request('amenities', [])) ? 'checked' : '' }}>
                                                                            <label class="custom-control-label" for="customCheck30">Window Coverings</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm">Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="terms_condition_widget">
                            <h4 class="title">Featured Properties</h4>
                            <div class="sidebar_feature_property_slider">
                                @if(isset($featuredProperties) && $featuredProperties->count() > 0)
                                    @foreach($featuredProperties as $property)
                                    <div class="item">
                                        <div class="feat_property home7">
                                            <div class="thumb">
                                                <img class="img-whp" src="{{ asset('frontend/images/property/fp' . (($loop->index % 5) + 1) . '.jpg') }}" alt="{{ $property->name ?? 'Property' }}">
                                                <div class="thmb_cntnt">
                                                    <ul class="tag mb0">
                                                        <li class="list-inline-item"><a href="#">For {{ ucfirst($property->status ?? 'Rent') }}</a></li>
                                                        <li class="list-inline-item"><a href="#">Featured</a></li>
                                                    </ul>
                                                    <a class="fp_price" href="#">${{ number_format($property->price ?? 13000) }}<small>/mo</small></a>
                                                    <h4 class="posr color-white">{{ $property->name ?? 'Property' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    @for($i = 1; $i <= 5; $i++)
                                    <div class="item">
                                        <div class="feat_property home7">
                                            <div class="thumb">
                                                <img class="img-whp" src="{{ asset('frontend/images/property/fp' . $i . '.jpg') }}" alt="fp{{ $i }}.jpg">
                                                <div class="thmb_cntnt">
                                                    <ul class="tag mb0">
                                                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                        <li class="list-inline-item"><a href="#">Featured</a></li>
                                                    </ul>
                                                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                                    <h4 class="posr color-white">Renovated Apartment</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                @endif
                            </div>
                        </div>
                        <div class="terms_condition_widget">
                            <h4 class="title">Categories Property</h4>
                            <div class="widget_list">
                                <ul class="list_details">
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                                    <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar_feature_listing">
                            <h4 class="title">Recently Viewed</h4>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls1.jpg') }}" alt="fls1.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Nice Room With View</h5>
                                    <a href="#">$13,000/<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls2.jpg') }}" alt="fls2.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Villa called Archangel</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-start mr-3" src="{{ asset('frontend/images/blog/fls3.jpg') }}" alt="fls3.jpg">
                                <div class="media-body">
                                    <h5 class="mt-0 post_title">Sunset Studio</h5>
                                    <a href="#">$13,000<small>/mo</small></a>
                                    <ul class="mb0">
                                        <li class="list-inline-item">Beds: 4</li>
                                        <li class="list-inline-item">Baths: 2</li>
                                        <li class="list-inline-item">Sq Ft: 5280</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="grid_list_search_result">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                                <div class="left_area tac-xsd">
                                    <p>{{ $properties->total() ?? 0 }} Search results</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                                <div class="right_area text-right tac-xsd">
                                    <ul>
                                        <li class="list-inline-item">
                                            <span class="stts">Status:</span>
                                            <select class="selectpicker show-tick" onchange="window.location.href='{{ route('properties') }}?status='+this.value">
                                                <option value="">All Status</option>
                                                <option value="sale" {{ request('status') == 'sale' ? 'selected' : '' }}>For Sale</option>
                                                <option value="rent" {{ request('status') == 'rent' ? 'selected' : '' }}>For Rent</option>
                                            </select>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="shrtby">Sort by:</span>
                                            <select class="selectpicker show-tick" onchange="window.location.href='{{ route('properties') }}?sort='+this.value">
                                                <option value="">Featured First</option>
                                                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                                                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                                                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if(isset($properties) && $properties->count() > 0)
                            @foreach($properties as $property)
                            <div class="col-md-6 col-lg-6">
                                <div class="feat_property home7 style4">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('frontend/images/property/fp' . (($loop->index % 20) + 1) . '.jpg') }}" alt="{{ $property->name ?? 'Property' }}">
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For {{ ucfirst($property->status ?? 'Rent') }}</a></li>
                                                @if($property->featured ?? false)
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                                @else
                                                <li class="list-inline-item dn"></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt style3">
                                            <ul class="icon mb0">
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                            </ul>
                                            <a class="fp_price" href="#">${{ number_format($property->price ?? 13000) }}<small>/mo</small></a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">{{ $property->type ?? 'Apartment' }}</p>
                                            <h4>{{ $property->name ?? 'Renovated Apartment' }}</h4>
                                            <p><span class="flaticon-placeholder"></span> {{ $property->address ?? '1421 San Pedro St, Los Angeles, CA 90015' }}</p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a href="#">Beds: {{ $property->bedrooms ?? 4 }}</a></li>
                                                <li class="list-inline-item"><a href="#">Baths: {{ $property->bathrooms ?? 2 }}</a></li>
                                                <li class="list-inline-item"><a href="#">Sq Ft: {{ $property->sqft ?? 5280 }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                                                <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                            </ul>
                                            <div class="fp_pdate float-right">{{ $property->created_at ? $property->created_at->diffForHumans() : '4 years ago' }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            @for($i = 1; $i <= 10; $i++)
                            <div class="col-md-6 col-lg-6">
                                <div class="feat_property home7 style4">
                                    <div class="thumb">
                                        <div class="fp_single_item_slider">
                                            <div class="item">
                                                <img class="img-whp" src="{{ asset('frontend/images/property/fp' . $i . '.jpg') }}" alt="fp{{ $i }}.jpg">
                                            </div>
                                            <div class="item">
                                                <img class="img-whp" src="{{ asset('frontend/images/property/fp' . ($i + 1) . '.jpg') }}" alt="fp{{ $i + 1 }}.jpg">
                                            </div>
                                        </div>
                                        <div class="thmb_cntnt style2">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                @if($i % 3 == 0)
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                                @else
                                                <li class="list-inline-item dn"></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt style3">
                                            <ul class="icon mb0">
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p class="text-thm">Apartment</p>
                                            <h4>Renovated Apartment</h4>
                                            <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                            <ul class="prop_details mb0">
                                                <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                                <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                                <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                            </ul>
                                        </div>
                                        <div class="fp_footer">
                                            <ul class="fp_meta float-left mb0">
                                                <li class="list-inline-item"><a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
                                                <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                            </ul>
                                            <div class="fp_pdate float-right">4 years ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        @endif
                        <div class="col-lg-12 mt20">
                            <div class="mbp_pagination">
                                @if(isset($properties))
                                    {{ $properties->appends(request()->query())->links() }}
                                @else
                                <ul class="page_navigation">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">29</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
