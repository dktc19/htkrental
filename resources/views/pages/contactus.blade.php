
@extends('layout.index')
@section('content')
    <div class="inner-page-banner" style="background: url('upload/image/banner/banner-contact.jpg') top center no-repeat; background-size: cover;">
        <div class="rq-overlay"></div>
        <div class="container">
            <div class="rq-title-container bredcrumb-title text-center">
                <h2 class="rq-title">Contact Us</h2>
                <ol class="breadcrumb rq-subtitle">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div> <!-- /. inner pagebanner -->
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="container">
                <div class="rq-contact-us-grid-block"> <!-- start info portion -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="grid-block-single">
                                <i class="icon_mobile"></i>
                                <h3>Phone</h3>
                                <p>Phone 01: (+84) 372579483</p>
                                <p>Phone 02: (8801) 722 0008 99</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="grid-block-single">
                                <i class="icon_pin_alt"></i>
                                <h3>Address</h3>
                                <p>5th Floor, AH Building 1234 New Design </p>
                                <p>St. Melbourne, Australia</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="grid-block-single">
                                <i class="icon_mail_alt"></i>
                                <h3>Email</h3>
                                <p>hatuankiet6@gmail.com</p>
                                <p>htkrental@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end info portion -->

                <div class="rq-contact-us-form-content"> <!-- start message form -->
                    @if(session('notice'))
                        <div class="alert alert-danger">
                            {{session('notice')}}
                        </div>
                    @endif
                    <h3>If you got any questions <br>please do not hesitate to send us a message</h3>
                    <form action="contactus" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="name" class="contact-form-input" placeholder="Your name" @if(isset($user_account)) value="{{$user_account->name}}" @endif>
                        <input type="email" class="contact-form-input" placeholder="Your email"  name="email" @if(isset($user_account)) value="{{$user_account->email}}" @endif>
                        <input type="text" class="contact-form-input" placeholder="Subject" name="subject">
                        <textarea class="contact-form-input" placeholder="Message" data-value="content" name="contentEmail"></textarea>
                        <div class="submit-btn">
                            <button type="submit" class="rq-btn rq-btn-primary">Send Message</button>
                        </div>
                    </form>
                </div> <!-- end message form -->
                <div class="rq-contact-us-map"> <!-- start map portion -->
                    <div id="map"></div>
                </div> <!-- end map portion -->
            </div>
        </div>
    </div>
    @endsection
