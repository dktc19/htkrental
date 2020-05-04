@extends('layout.index')
@section('content')
<div class="rq-page-content">
    <div class="rq-content-block">
        <div class="rq-title-container bredcrumb-title small">
            <div class="container">
                <h2 class="rq-title">Register</h2>
                <ol class="breadcrumb rq-subtitle">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
        <div class="rq-registration-content-single"> <!-- start of login form portion -->
            <div class="container">

                <h4>Login your account</h4>

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err){{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if(session('notice'))
                    <div class="alert alert-danger">
                        {{session('notice')}}
                    </div>
                @endif
                <p class="subtitle">Login to your accounts to discover the great features in this template</p>
                <div class="rq-login-form">
                    <form action="login" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="email" required class="rq-form-control" placeholder="Your email" name="email">
                            </div>
                            <div class="col-md-5">
                                <input type="password" class="rq-form-control"  placeholder="Your password" name="password">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="rq-btn rq-btn-primary fluid border-radius">Login<i class="arrow_right"></i></button>
                            </div>
                            <div class="col-md-12">
                                <div class="rq-checkbox">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="remember-me">
                        <span class="rq-checkbox">
                          <input type="checkbox" id="remember-me">
                          <label for="remember-me">Keep me loged in</label>
                        </span>
                                    <span class="forgotpass">
                          <a href="#">Forgot your password ?</a>
                        </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social-login"> <!-- start social icon div -->
                        <h5>or login with</h5>
                        <ul class="social-page-nav">
                            <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                            <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
                            <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
                            <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
                        </ul>
                    </div> <!-- end social icon div -->
                </div> <!-- end login div -->
            </div>
        </div> <!-- end of login form portion -->
        <div class="rq-registration-content-single small-bottom-margin">
            <!-- start of registration portion -->
            <div class="container">
                <div class="rq-login-form no-border">
                    <h4>Don't have an account! Register now </h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <h5>Sign Up TODAY AND YOU ` LL BE ABLE TO FOLLOWING</h5>
                    <ul class="rq-feature-list">
                        <li>Register and access all</li>
                        <li>Change your profile anytime</li>
                        <li>Keep a records of all your payment</li>
                        <li>Create your own Add at protfolio</li>
                        <li>Track your payment easily at your profile page</li>
                        <li>Quick registration for facebook, twitter and with Google+</li>
                    </ul>


                    @if(session('noticeRe'))
                        <div class="alert alert-danger">
                            {{session('noticeRe')}}
                        </div>
                    @endif
                    <form class="form-horizontal"  action="register" method="post" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="rq-form-control reverse" placeholder="Input Your Name" required name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="rq-form-control reverse" placeholder="Email Address" required name="email">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="rq-form-control reverse" placeholder="Password" required name="password">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="rq-form-control reverse" placeholder="Re - Password" required name="repassword">
                            </div>
                            <div class="col-md-12">
                                <div class="register-button">
                                    <button type="submit" class="rq-btn rq-btn-primary border-radius">Register <i class="arrow_right"></i></button>
                                </div>
                            </div>
                        </div> <!-- end of registration section -->
                    </form>
                    <div class="social-login"> <!-- start social icon div -->
                        <h5>or register with</h5>
                        <ul class="social-page-nav">
                            <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                            <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                            <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
                            <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
                            <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
                        </ul>
                    </div> <!-- end social icon div -->

                </div>
            </div>
        </div><!--  end of registration form portin -->
    </div>
</div>
    @endsection
