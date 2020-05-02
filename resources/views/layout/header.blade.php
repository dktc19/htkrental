
<div id="fakeloader">
    <div class="spinner5">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div id="main-wrapper">
    <header class="header">
        @yield('banner')
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
                        <li class="dropdown active" >
                            <a href="home" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false" style="font-size:120%;">Home <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="home" style="font-size:90%;">Home</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="car-listing-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false" style="font-size:120%;">Listing <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="listproduct" style="font-size:90%;">List All Bike</a></li>
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
                               aria-haspopup="true" aria-expanded="false" style="font-size:120%;">Page <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu" >
                                <li><a href="about" style="font-size:90%;">About Us</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>

                                <li><a href="shopping-cart.html">shopping cart</a></li>
                                <li><a href="login" style="font-size:90%;">Registration</a></li>
                            </ul>
                        </li>

                    </ul>



<ul class="nav navbar-nav navbar-right">
                        @if(!isset($user_account))
                        <li class="login-register-link right-side-link"><a href="login">
                                <i class="icon_lock-open_alt" style="font-size:120%;"></i>Login</a>
                        </li>
                        @else
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false" style="font-size:120%;">{{$user_account->name}} <span class="ion-chevron-down"></span></a>
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

                        @endif
                            <li><a href="checkout/{id}" style="font-size:14px">Checkout</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- end header -->
