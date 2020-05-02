@extends('layout.index')
@section('content')
    <div class="rq-page-content">
        <div class="inner-page-banner" style="background: url('upload/image/banner/banner1.png') top center no-repeat; background-size: cover;">
            <div class="rq-overlay"></div>
            <div class="container">
                <div class="rq-title-container bredcrumb-title">
                    <h2 class="rq-title">About Us</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="home">Home</a></li>
                        <li class="active">About Us</li>
                    </ol>
                </div>
            </div>
        </div> <!-- /. inner pagebanner -->
        <div class="rq-content-block">
            <div class="rq-about-us-content-wrapper">
                <div class="container">
                    <div class="about-us-content-single">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">The Brand<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="about-us-text">
                                    <p style="font-size:130%;"><strong>HTK rental is a bicycle rental site, for travelers who want to experience cycling enjoyment in another country.</strong></p>
                                    <p style="font-size:130%;">
                                        HTK rental website will provide the best service
                                        and guarantee to customers about the product.
                                        We will support our customers with the best possible experience.
                                        If you have any questions, you can contact us for assistance.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end of brand -->
                    <div class="about-us-content-single"> <!-- start of contact info -->
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">Contact Us<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="contact-single" >
                                    <i class="icon_pin"></i>
                                    <p style="font-size:130%;">HCM: 70/9/1 Le Van Tho, P.11, Q.Go Vap, TP.HCM, VietNam</p>
                                    <p style="font-size:130%;">HaNoi: 24A, lane 81, Lac Long Quan, Hanoi, Vietnam</p>
                                    <p style="font-size:130%;">DaNang: 42 Dang Thai Mai, Thac Gian, Thanh Khe, Da Nang, VietNam</p>
                                </div>
                                <div class="contact-single">
                                    <i class="icon_mail_alt"></i>
                                    <p style="font-size:130%;">htkrental@gamil.com</p>
                                </div>
                                <div class="contact-single">
                                    <i class="icon_phone"></i>
                                    <p style="font-size:130%;">(+84) 372579483</p>
                                </div>
                                <div class="opening-hour">
                                    <p style="font-size:130%;"> HOUR WORK:  <span> MONDAY - FRIDAY  /  08AM - 05PM</span></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of contact info -->
                    <div class="about-us-content-single"> <!-- start of our team -->
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="brand-title">Our Team<span class="dot">.</span></h2>
                            </div>
                            <div class="col-md-8">
                                <div class="rq-team-members">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member-single"
                                                 style="background: url('upload/image/image_user/Adminimg.jpeg') top center no-repeat; background-size: cover;">
                                                <div class="member-info">
                                                    <a href="#">Ha Tuan Kiet</a>
                                                    <p>Founder</p>
                                                    <ul class="list-unstyled social-list">
                                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                                        <li><a href="#"><i class="social_dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member-single"
                                                 style="background: url('cssClient/img/about-us/about-us-our-team-2.jpg') top center no-repeat; background-size: cover;">
                                                <div class="member-info">
                                                    <a href="#">Alex Luthar</a>
                                                    <p>Co-founder</p>
                                                    <ul class="list-unstyled social-list">
                                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                                        <li><a href="#"><i class="social_dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member-single"
                                                 style="background: url('cssClient/img/about-us/about-us-our-team-3.jpg') top center no-repeat; background-size: cover;">
                                                <div class="member-info">
                                                    <a href="#">Alex Luthar</a>
                                                    <p>Co-founder</p>
                                                    <ul class="list-unstyled social-list">
                                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                                        <li><a href="#"><i class="social_dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="member-single" >
                                                <img src="img/about-us/about-us-join-team.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of our team -->
                </div>
            </div>
        </div>
    </div>
    @endsection
