@extends('website.layouts.home_finance')

@section('title', "Home & Finance Int'l Ltd.")

@section('keywords', 'advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor')

@section('description', 'Home & Finance Intl Ltd. is a real estate company that provides a wide range of services to clients looking to buy, sell, or rent properties. With a team of experienced agents and a commitment to customer satisfaction, Home & Finance Intl Ltd. offers personalized solutions to meet the unique needs of each client.')

@section('content')
    <section class="home-three bg-img3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="home3_home_content">
                        <h1>Your Property, Our Priority.</h1>
                        <h4>From as low as $10 per day with limited time offer discounts</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home3_home_content">
                        <a class="popup_video_btn popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="home_adv_srch_opt home3">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                            </li>
                        </ul>
                        <div class="tab-content home1_adsrchfrm" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="home1-advnc-search home3">
                                    <form action="#" method="GET">
                                        <input type="hidden" name="type" value="sale">
                                        <ul class="h1ads_1st_list mb0">
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" name="keyword" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="property_type" class="selectpicker w100 show-tick">
                                                            <option value="">Property Type</option>
                                                            <option value="apartment">Apartment</option>
                                                            <option value="bungalow">Bungalow</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="house">House</option>
                                                            <option value="land">Land</option>
                                                            <option value="single_family">Single Family</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" name="location" class="form-control" id="exampleInputEmail" placeholder="Location">
                                                    <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="small_dropdown2 home3">
                                                    <div id="prncgs" class="btn dd_btn">
                                                        <span>Price</span>
                                                        <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                    </div>
                                                    <div class="dd_content2">
                                                        <div class="pricing_acontent">
                                                            <span id="slider-range-value1"></span>
                                                            <span id="slider-range-value2"></span>
                                                            <div id="slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="custome_fields_520 list-inline-item">
                                                <div class="navbered">
                                                    <div class="mega-dropdown home3">
                                                        <span id="show_advbtn" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                        <div class="dropdown-content">
                                                            <div class="row p15">
                                                                <div class="col-lg-12">
                                                                    <h4 class="text-thm3">Amenities</h4>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="amenities[]" value="air_conditioning">
                                                                                <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck2" name="amenities[]" value="lawn">
                                                                                <label class="custom-control-label" for="customCheck2">Lawn</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck3" name="amenities[]" value="swimming_pool">
                                                                                <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck4" name="amenities[]" value="barbeque">
                                                                                <label class="custom-control-label" for="customCheck4">Barbeque</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck5" name="amenities[]" value="microwave">
                                                                                <label class="custom-control-label" for="customCheck5">Microwave</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck6" name="amenities[]" value="tv_cable">
                                                                                <label class="custom-control-label" for="customCheck6">TV Cable</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck7" name="amenities[]" value="dryer">
                                                                                <label class="custom-control-label" for="customCheck7">Dryer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck8" name="amenities[]" value="outdoor_shower">
                                                                                <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck9" name="amenities[]" value="washer">
                                                                                <label class="custom-control-label" for="customCheck9">Washer</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck10" name="amenities[]" value="gym">
                                                                                <label class="custom-control-label" for="customCheck10">Gym</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck11" name="amenities[]" value="refrigerator">
                                                                                <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck12" name="amenities[]" value="wifi">
                                                                                <label class="custom-control-label" for="customCheck12">WiFi</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck13" name="amenities[]" value="laundry">
                                                                                <label class="custom-control-label" for="customCheck13">Laundry</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck14" name="amenities[]" value="sauna">
                                                                                <label class="custom-control-label" for="customCheck14">Sauna</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck15" name="amenities[]" value="window_coverings">
                                                                                <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row p15 pt0-xsd">
                                                                <div class="col-lg-11 col-xl-10">
                                                                    <ul class="apeartment_area_list mb0">
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="bathrooms" class="selectpicker w100 show-tick">
                                                                                    <option value="">Bathrooms</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="bedrooms" class="selectpicker w100 show-tick">
                                                                                    <option value="">Bedrooms</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="year_built" class="selectpicker w100 show-tick">
                                                                                    <option value="">Year built</option>
                                                                                    <option value="2013">2013</option>
                                                                                    <option value="2014">2014</option>
                                                                                    <option value="2015">2015</option>
                                                                                    <option value="2016">2016</option>
                                                                                    <option value="2017">2017</option>
                                                                                    <option value="2018">2018</option>
                                                                                    <option value="2019">2019</option>
                                                                                    <option value="2020">2020</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="built_up_area" class="selectpicker w100 show-tick">
                                                                                    <option value="">Built-up Area</option>
                                                                                    <option value="adana">Adana</option>
                                                                                    <option value="ankara">Ankara</option>
                                                                                    <option value="antalya">Antalya</option>
                                                                                    <option value="bursa">Bursa</option>
                                                                                    <option value="bodrum">Bodrum</option>
                                                                                    <option value="gaziantep">Gaziantep</option>
                                                                                    <option value="istanbul">İstanbul</option>
                                                                                    <option value="izmir">İzmir</option>
                                                                                    <option value="konya">Konya</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-1 col-xl-2">
                                                                    <div class="mega_dropdown_content_closer">
                                                                        <h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Hide</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_button">
                                                    <button type="submit" class="btn btn-thm3">Search</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="home1-advnc-search home3">
                                    <form action="#" method="GET">
                                        <input type="hidden" name="type" value="rent">
                                        <ul class="h1ads_1st_list mb0">
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" name="keyword" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_two">
                                                    <div class="candidate_revew_select">
                                                        <select name="property_type" class="selectpicker w100 show-tick">
                                                            <option value="">Property Type</option>
                                                            <option value="apartment">Apartment</option>
                                                            <option value="bungalow">Bungalow</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="house">House</option>
                                                            <option value="land">Land</option>
                                                            <option value="single_family">Single Family</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group">
                                                    <input type="text" name="location" class="form-control" id="exampleInputEmail3" placeholder="Location">
                                                    <label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="small_dropdown2 home3">
                                                    <div id="prncgs2" class="btn dd_btn">
                                                        <span>Price</span>
                                                        <label><span class="fa fa-angle-down"></span></label>
                                                    </div>
                                                    <div class="dd_content2">
                                                        <div class="pricing_acontent">
                                                            <input type="text" class="amount" placeholder="$52,239">
                                                            <input type="text" class="amount2" placeholder="$985,14">
                                                            <div class="slider-range"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="custome_fields_520 list-inline-item">
                                                <div class="navbered">
                                                    <div class="mega-dropdown home3">
                                                        <span id="show_advbtn2" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
                                                        <div class="dropdown-content">
                                                            <div class="row p15">
                                                                <div class="col-lg-12">
                                                                    <h4 class="text-thm3">Amenities</h4>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck16" name="amenities[]" value="air_conditioning">
                                                                                <label class="custom-control-label" for="customCheck16">Air Conditioning</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck17" name="amenities[]" value="lawn">
                                                                                <label class="custom-control-label" for="customCheck17">Lawn</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck18" name="amenities[]" value="swimming_pool">
                                                                                <label class="custom-control-label" for="customCheck18">Swimming Pool</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck19" name="amenities[]" value="barbeque">
                                                                                <label class="custom-control-label" for="customCheck19">Barbeque</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck20" name="amenities[]" value="microwave">
                                                                                <label class="custom-control-label" for="customCheck20">Microwave</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck21" name="amenities[]" value="tv_cable">
                                                                                <label class="custom-control-label" for="customCheck21">TV Cable</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck22" name="amenities[]" value="dryer">
                                                                                <label class="custom-control-label" for="customCheck22">Dryer</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck23" name="amenities[]" value="outdoor_shower">
                                                                                <label class="custom-control-label" for="customCheck23">Outdoor Shower</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck24" name="amenities[]" value="washer">
                                                                                <label class="custom-control-label" for="customCheck24">Washer</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck25" name="amenities[]" value="gym">
                                                                                <label class="custom-control-label" for="customCheck25">Gym</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck26" name="amenities[]" value="refrigerator">
                                                                                <label class="custom-control-label" for="customCheck26">Refrigerator</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck27" name="amenities[]" value="wifi">
                                                                                <label class="custom-control-label" for="customCheck27">WiFi</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                    <ul class="ui_kit_checkbox selectable-list">
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck28" name="amenities[]" value="laundry">
                                                                                <label class="custom-control-label" for="customCheck28">Laundry</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck29" name="amenities[]" value="sauna">
                                                                                <label class="custom-control-label" for="customCheck29">Sauna</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck30" name="amenities[]" value="window_coverings">
                                                                                <label class="custom-control-label" for="customCheck30">Window Coverings</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row p15 pt0-xsd">
                                                                <div class="col-lg-11 col-xl-10">
                                                                    <ul class="apeartment_area_list mb0">
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="bathrooms" class="selectpicker w100 show-tick">
                                                                                    <option value="">Bathrooms</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="bedrooms" class="selectpicker w100 show-tick">
                                                                                    <option value="">Bedrooms</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="year_built" class="selectpicker w100 show-tick">
                                                                                    <option value="">Year built</option>
                                                                                    <option value="2013">2013</option>
                                                                                    <option value="2014">2014</option>
                                                                                    <option value="2015">2015</option>
                                                                                    <option value="2016">2016</option>
                                                                                    <option value="2017">2017</option>
                                                                                    <option value="2018">2018</option>
                                                                                    <option value="2019">2019</option>
                                                                                    <option value="2020">2020</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <div class="candidate_revew_select">
                                                                                <select name="built_up_area" class="selectpicker w100 show-tick">
                                                                                    <option value="">Built-up Area</option>
                                                                                    <option value="adana">Adana</option>
                                                                                    <option value="ankara">Ankara</option>
                                                                                    <option value="antalya">Antalya</option>
                                                                                    <option value="bursa">Bursa</option>
                                                                                    <option value="bodrum">Bodrum</option>
                                                                                    <option value="gaziantep">Gaziantep</option>
                                                                                    <option value="istanbul">İstanbul</option>
                                                                                    <option value="izmir">İzmir</option>
                                                                                    <option value="konya">Konya</option>
                                                                                </select>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-1 col-xl-2">
                                                                    <div class="mega_dropdown_content_closer">
                                                                        <h5 class="text-thm text-right mt15"><span id="hide_advbtn2" class="curp">Hide</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="search_option_button">
                                                    <button type="submit" class="btn btn-thm3">Search</button>
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
        </div>
    </section>

    <section id="feature-property" class="feature-property mt80 pb50">
        <div class="container-fluid ovh">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title mb40">
                        <h2>Featured Properties</h2>
                        <p>Handpicked properties by our team. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_property_home3_slider">
                        @forelse($featuredProperties ?? [] as $property)
                        <div class="item">
                            <div class="feat_property home3">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('frontend/images/property/fp1.jpg') }}" alt="{{ $property->title ?? 'Property' }}">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">{{ $property->type == 'rent' ? 'For Rent' : 'For Sale' }}</a></li>
                                            @if($property->featured ?? false)
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                            @endif
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">{{ number_format($property->price ?? 13000) }}<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">{{ $property->category ?? 'Apartment' }}</p>
                                        <h4>{{ $property->title ?? 'Renovated Apartment' }}</h4>
                                        <p><span class="flaticon-placeholder"></span> {{ $property->address ?? '1421 San Pedro St, Los Angeles, CA 90015' }}</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: {{ $property->bedrooms ?? 4 }}</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: {{ $property->bathrooms ?? 2 }}</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: {{ $property->area ?? 5280 }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="item">
                            <div class="feat_property home3">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('frontend/images/property/fp1.jpg') }}" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
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
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="property-city" class="property-city pt0 pb30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h2>Find Properties in These Cities</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($cities ?? [] as $city)
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc7.jpg') }}" alt="{{ $city->name ?? 'City' }}">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>{{ $city->name ?? 'Miami' }}</h4>
                                <p>{{ $city->property_count ?? 24 }} Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc7.jpg') }}" alt="pc7.jpg">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Miami</h4>
                                <p>24 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc8.jpg') }}" alt="pc8.jpg">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Los Angeles</h4>
                                <p>18 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc9.jpg') }}" alt="pc9.jpg">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>New York</h4>
                                <p>89 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc10.jpg') }}" alt="pc10.jpg">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Florida</h4>
                                <p>47 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <div class="properti_city">
                        <div class="thumb">
                            <img class="img-fluid w100" src="{{ asset('frontend/images/property/pc11.jpg') }}" alt="pc11.jpg">
                        </div>
                        <div class="overlay">
                            <div class="details">
                                <h4>Orlando</h4>
                                <p>89 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="property-search" class="property-search bg-img4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="search_smart_property text-center">
                        <h2>Search Smarter, From Anywhere</h2>
                        <p>Power your search with our Resideo real estate platform, for timely listings and a seamless experience.</p>
                        <a href="#" class="btn ssp_btn">Search Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="best-property" class="best-property pt100 pb0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h2>Best Property Value</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a class="float-right" href="">View All <span class="flaticon-next"></span></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($bestProperties ?? [] as $property)
                <div class="col-sm-6 col-lg-4">
                    <div class="feat_property home3">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/property/fp4.jpg') }}" alt="{{ $property->title ?? 'Property' }}">
                            <div class="thmb_cntnt">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">{{ $property->type == 'rent' ? 'For Rent' : 'For Sale' }}</a></li>
                                    @if($property->featured ?? false)
                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                    @endif
                                </ul>
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">${{ number_format($property->price ?? 13000) }}<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">{{ $property->category ?? 'Villa' }}</p>
                                <h4>{{ $property->title ?? 'Gorgeous Villa Bay View' }}</h4>
                                <p><span class="flaticon-placeholder"></span> {{ $property->address ?? '1421 San Pedro St, Los Angeles, CA 90015' }}</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: {{ $property->bedrooms ?? 4 }}</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: {{ $property->bathrooms ?? 2 }}</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: {{ $property->area ?? 5280 }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-sm-6 col-lg-4">
                    <div class="feat_property home3">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/property/fp4.jpg') }}" alt="fp4.jpg">
                            <div class="thmb_cntnt">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item dn"></li>
                                </ul>
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Villa</p>
                                <h4>Gorgeous Villa Bay View</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feat_property home3">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/property/fp5.jpg') }}" alt="fp5.jpg">
                            <div class="thmb_cntnt">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item"><a href="#">Featured</a></li>
                                </ul>
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Villa</p>
                                <h4>Gorgeous Villa Bay View</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feat_property home3">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/property/fp6.jpg') }}" alt="fp6.jpg">
                            <div class="thmb_cntnt">
                                <ul class="tag mb0">
                                    <li class="list-inline-item"><a href="#">For Rent</a></li>
                                    <li class="list-inline-item dn"></li>
                                </ul>
                                <ul class="icon mb0">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                </ul>
                                <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                            </div>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Villa</p>
                                <h4>Luxury Family Home</h4>
                                <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                <ul class="prop_details mb0">
                                    <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                    <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                    <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="why-chose" class="whychose_us bgc-f7 pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Why Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($whyChooseUs ?? [] as $item)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="{{ $item->icon ?? 'flaticon-high-five' }}"></span>
                        </div>
                        <div class="details">
                            <h4>{{ $item->title ?? 'Trusted By Thousands' }}</h4>
                            <p>{{ $item->description ?? 'Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.' }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-high-five"></span>
                        </div>
                        <div class="details">
                            <h4>Trusted By Thousands</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-home-1"></span>
                        </div>
                        <div class="details">
                            <h4>Wide Renge Of Properties</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="why_chose_us">
                        <div class="icon">
                            <span class="flaticon-profit"></span>
                        </div>
                        <div class="details">
                            <h4>Financing Made Easy</h4>
                            <p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="our-testimonials" class="our-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2 class="color-white">Testimonials</h2>
                        <p class="color-white">Here could be a nice sub title</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonial_grid_slider">
                        @forelse($testimonials ?? [] as $testimonial)
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img src="{{ asset('frontend/images/testimonial/1.jpg') }}" alt="{{ $testimonial->name ?? 'Testimonial' }}">
                                </div>
                                <div class="details">
                                    <h4>{{ $testimonial->name ?? 'Augusta Silva' }}</h4>
                                    <p>{{ $testimonial->designation ?? 'Sales Manager' }}</p>
                                    <p class="mt25">{{ $testimonial->content ?? 'Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.' }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="item">
                            <div class="testimonial_grid">
                                <div class="thumb">
                                    <img src="{{ asset('frontend/images/testimonial/1.jpg') }}" alt="1.jpg">
                                </div>
                                <div class="details">
                                    <h4>Augusta Silva</h4>
                                    <p>Sales Manager</p>
                                    <p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-blog bgc-f7 pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Articles & Tips</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($blogs ?? [] as $blog)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/blog/bh1.jpg') }}" alt="{{ $blog->title ?? 'Blog' }}">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">{{ $blog->category ?? 'Business' }}</p>
                                <h4>{{ $blog->title ?? 'Skills That You Can Learn In The Real Estate Market' }}</h4>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item">
                                        <a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">{{ $blog->author ?? 'Ali Tufan' }}</a></li>
                                </ul>
                                <a class="fp_pdate float-right" href="#">{{ $blog->created_at->format('d F Y') ?? '7 August 2019' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/blog/bh1.jpg') }}" alt="bh1.jpg">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Business</p>
                                <h4>Skills That You Can Learn In The Real Estate Market</h4>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item">
                                        <a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <a class="fp_pdate float-right" href="#">7 August 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/blog/bh2.jpg') }}" alt="bh2.jpg">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Business</p>
                                <h4>Bedroom Colors You'll Never <br class="dn-1199"> Regret</h4>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item">
                                        <a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <a class="fp_pdate float-right" href="#">7 August 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <img class="img-whp" src="{{ asset('frontend/images/blog/bh3.jpg') }}" alt="bh3.jpg">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p class="text-thm">Business</p>
                                <h4>5 Essential Steps for Buying an Investment</h4>
                            </div>
                            <div class="fp_footer">
                                <ul class="fp_meta float-left mb0">
                                    <li class="list-inline-item">
                                        <a href="#"><img src="{{ asset('frontend/images/property/pposter1.png') }}" alt="pposter1.png"></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                </ul>
                                <a class="fp_pdate float-right" href="#">7 August 2019</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="our-partners" class="our-partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Our Partners</h2>
                        <p>We only work with the best companies around the globe</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($partners ?? [] as $partner)
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/1.png') }}" alt="{{ $partner->name ?? 'Partner' }}">
                    </div>
                </div>
                @empty
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/1.png') }}" alt="1.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/2.png') }}" alt="2.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/3.png') }}" alt="3.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/4.png') }}" alt="4.png">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg">
                    <div class="our_partner">
                        <img class="img-fluid" src="{{ asset('frontend/images/partners/5.png') }}" alt="5.png">
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="start-partners bgc-thm pt50 pb50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="start_partner tac-smd">
                        <h2>Become a Real Estate Agent</h2>
                        <p>We only work with the best companies around the globe</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="parner_reg_btn text-right tac-smd">
                        <a class="btn btn-thm2" href="{{ route('register') }}">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
