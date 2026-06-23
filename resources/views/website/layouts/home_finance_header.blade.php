<header class="header-nav menu_style_home_one style2 home3 navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid p0">
        <nav>
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo_alt()]) }}" alt="{{ $ws->name }}">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ url('/') }}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo_alt()]) }}" alt="{{ $ws->name }}">
                <img class="logo2 img-fluid" src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo_alt()]) }}" alt="{{ $ws->name }}">
            </a>
            <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                <li>
                    <a href="{{ url('/') }}"><span class="title">Home</span></a>
                </li>
                <li>
                    <a href="{{ url('/properties') }}"><span class="title">Property</span></a>
                </li>
                <li>
                    <a href="{{ route('news') }}"><span class="title">Article</span></a>

                </li>
                <li class="last">
                    <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
                </li>
                <li class="list-inline-item list_s">
                    <a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <span class="dn-lg text-thm3">Login/Register</span>
                    </a>
                </li>
                {{--<li class="list-inline-item add_listing home2">
                    <a href="{{ url('/add-listing') }}">
                        <span class="flaticon-plus"></span>
                        <span class="dn-lg"> Create Listing</span>
                    </a>
                </li>--}}
            </ul>
        </nav>
    </div>
</header>

<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container pb20">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container" id="myTabContent">
                    <div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-lg-6 col-xl-6">
                            <div class="login_thumb">
                                <img class="img-fluid w100" src="{{ asset('frontend/images/resource/login.jpg') }}" alt="login.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="login_form">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="heading">
                                        <h4>Login</h4>
                                    </div>
                                    <div class="row mt25">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-fb btn-block">
                                                <i class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                            </button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-googl btn-block">
                                                <i class="fa fa-google float-left mt5"></i> Login with Google
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1" name="remember">
                                        <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        <a class="btn-fpswd float-right" href="{{ url('/password/reset') }}">Lost your password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-lg-6 col-xl-6">
                            <div class="regstr_thumb">
                                <img class="img-fluid w100" src="{{ asset('frontend/images/resource/regstr.jpg') }}" alt="regstr.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="sign_up_form">
                                <div class="heading">
                                    <h4>Register</h4>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-block btn-fb">
                                                <i class="fa fa-facebook float-left mt5"></i> Login with Facebook
                                            </button>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-block btn-googl">
                                                <i class="fa fa-google float-left mt5"></i> Login with Google
                                            </button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group input-group">
                                        <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="User Name">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="flaticon-password"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group ui_kit_select_search mb0">
                                        <select name="role" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="SelectRole">Single User</option>
                                            <option data-tokens="Agent/Agency">Agent</option>
                                            <option data-tokens="SingleUser">Multi User</option>
                                        </select>
                                    </div>
                                    <div class="form-group custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck2" name="terms">
                                        <label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                    <p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="d-flex justify-content-between">
                <a class="mobile-menu-trigger" href="#menu">
                    <img src="{{ asset('frontend/images/dark-nav-icon.svg') }}" alt="">
                </a>
                <a class="nav_logo_img" href="{{ route('home') }}">
                    <img class="img-fluid mt20" src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->logo_alt()]) }}" alt="{{ $ws->name }}">
                </a>
                <a class="mobile-menu-reg-link" href="{{ route('register') }}">
                    <span class="flaticon-user"></span>
                </a>
            </div>
        </div>
    </div>
    <nav id="menu" class="stylehome1">
        <ul>
            <li><span>Home</span>
                <ul>
                    <li><a href="{{ url('/') }}">Home 1</a></li>
                </ul>
            </li>
            <li><span>Listing</span>
                <ul>
                    <li><a href="#">Grid v1</a></li>
                </ul>
            </li>
            <li><span>Property</span>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">My Properties</a></li>
                    <li><a href="#">Add New Property</a></li>
                </ul>
            </li>
            <li><span>Blog</span>
                <ul>
                    <li><a href="#">Blog List 1</a></li>
                    <li><a href="#">Blog List 2</a></li>
                    <li><a href="#">Single Post</a></li>
                </ul>
            </li>
            <li><span>Pages</span>
                <ul>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="{{ route('login') }}">LogIn</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="{{ route('register') }}"><span class="flaticon-edit"></span> Register</a></li>
            <li class="cl_btn">
                <a class="btn btn-block btn-lg btn-thm circle" href="#">
                    <span class="flaticon-plus"></span> Create Listing
                </a>
            </li>
        </ul>
    </nav>
</div>
