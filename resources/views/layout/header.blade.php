
<div id="fakeloader">
    <div class="spinner5">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div id="main-wrapper">
    <header class="header">
        <div class="header-body" style="background: url('cssClient/img/turbo-banner.jpg') top center no-repeat; background-size: cover;">
            <div class="header-overlay"></div>
            <div class="container">
                <h1>HTK Rental Bike helps you</h1>
                <p>Rent bike to move from local hosts in 190+ countries.</p>
                <div class="rq-search-container">
                    <div class="rq-search-single">
                        <div class="rq-search-content">
                            <span class="rq-search-heading">Location</span>
                            <select name="categories" class="category-option">
                                <option value="0">Pick a location</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                            </select>
                        </div>
                    </div>
                    <div class="rq-search-single">
                        <div class="rq-search-content">
                            <span class="rq-search-heading">Pick up</span>
                            <input type="text" name="datefilter" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                            <i class="ion-chevron-down datepicker-arrow"></i>
                        </div>
                    </div>
                    <div class="rq-search-single">
                        <div class="rq-search-content">
                            <span class="rq-search-heading">Return</span>
                            <input type="text" name="datefilter" class="rq-form-element" id="enddate" placeholder="Return date"/>
                            <i class="ion-chevron-down datepicker-arrow"></i>
                        </div>
                    </div>
                    <div class="rq-search-single">
                        <div class="rq-search-content last-child">
                            <span class="rq-search-heading">Driver age</span>
                            <select name="categories" class="category-option">
                                <option value="0">25 Years old</option>
                                <option value="1">25 Years old</option>
                                <option value="2">25 Years old</option>
                                <option value="3">25 Years old</option>
                                <option value="4">25 Years old</option>
                                <option value="5">25 Years old</option>
                            </select>
                        </div>
                    </div>
                    <div class="rq-search-single search-btn">
                        <div class="rq-search-content">
                            <button class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i></button>
                        </div>
                    </div>
                </div>
                <!-- / .search-container -->
                <div class="rq-counting-list">
                    <ul class="list-unstyled">
                        <li>
                            <span class="count-result" data-from="25" data-to="500" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="count-category">User access</span>
                        </li>
                        <li>
                            <span class="count-result" data-from="25" data-to="500" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="count-category">Cars</span>
                        </li>
                        <li>
                            <span class="count-result" data-from="25" data-to="550" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="count-category">Reviews</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div> <!-- /.header-body -->
        <nav class="navbar navbar-default" id="sticker" style="height: 140px">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a class="navbar-brand" href="home"><img src="cssAdmin/img/logo.png" alt="" style="width: 100px;height: 100px"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown active">
                            <a href="home" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Home <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="home">Home</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="car-listing-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Listing <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="listproduct">List All Bike</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="blog-listing.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Blog <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-listing.html">Blog Listing</a></li>
                                <li><a href="post-single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Page <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="shopping-cart.html">shopping cart</a></li>
                                <li><a href="registration.html">Registration</a></li>
                            </ul>
                        </li>
                    </ul>



<ul class="nav navbar-nav navbar-right">
                        @if(!isset($user_account))
                        <li class="login-register-link right-side-link"><a href="login">
                                <i class="icon_lock-open_alt"></i>Login</a>
                        </li>
                        @else
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{$user_account->name}} <span class="ion-chevron-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user"><i class="fa fa-edit" style="font-size:16px"></i>&nbsp;&nbsp;Edit Profile</a></li>
                                    @if($user_account->idRole ==1)
                                        <li>
                                            <a href="admin/home/view" ><i class="fa fa-user" style="font-size:14px"></i>&nbsp;&nbsp;Admin Site </a>
                                        </li>
                                    @endif
                                    <li><a href="logout"><i class="fa fa-sign-out" style="font-size:16px"></i>&nbsp;&nbsp;Logout</a></li>
                                </ul>
                            </li>
{{--                            <li>--}}
{{--                                    <a href="user"><span class="fa fa-user" style="width: 15px"></span>{{$user_account->name}}</a>--}}
{{--                            </li>--}}
{{--                            @if($user_account->idRole ==1)--}}
{{--                            <li>--}}
{{--                                <a href="admin/home/view" ><span></span>Admin Site</a>--}}
{{--                            </li>--}}
{{--                            @endif--}}
{{--                            <li>--}}
{{--                                <a href="logout">Logout</a>--}}
{{--                            </li>--}}

                        @endif

                        <li class="dropdown right-side-link">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu with-language">
                                <li><a href="#">Fr</a></li>
                                <li><a href="#">De</a></li>
                            </ul>
                        </li>
                        <li class="dropdown right-side-link last">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu with-language">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">Eur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- end header -->
