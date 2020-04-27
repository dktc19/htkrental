@extends('layout.index')
@section('content')
    <div class="rq-page-content"> <!-- start of page content -->
        <div class="rq-listing-details">
            <div class="rq-listing-single"> <!-- start of banner slider -->
                <div class="rq-listing-gallery-post">
                    <div class="rq-gallery-content">
                            <center>
                                <img style="height: 600px;width: 600px" src="upload/image/image_product/{{$product->image}}">
                            </center>
                    </div>
                </div>
            </div> <!-- end of banner slider -->
            <div class="rq-content-block">
                <div class="container">
                    <div class="rq-title-container bredcrumb-title text-center"> <!-- start of breadcrumb -->
                        <h1 class="rq-title light">Car listing detail</h1>
                        <ol class="breadcrumb secondary rq-subtitle">
                            <li><a href="#">Home</a></li>
                            <li><a href="listproduct">Bike listing</a></li>
                            <li class="active">Bike Listing Details</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->
                    <div class="rq-listing-promo-wrapper">
                        <div class="row"> <!-- start of listing promo -->
                            <div class="col-md-12">
                                <div class="rq-listing-promo-content">
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon1.png" alt="">
                                        <h6 class="rq-listing-item-title">Mileage</h6>
                                        <h4 class="rq-listing-item-number">123,456</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon2.png" alt="">
                                        <h6 class="rq-listing-item-title">Transmission</h6>
                                        <h4 class="rq-listing-item-number">Automatic</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon3.png" alt="">
                                        <h6 class="rq-listing-item-title">Seats</h6>
                                        <h4 class="rq-listing-item-number">4 Adults</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon4.png" alt="">
                                        <h6 class="rq-listing-item-title">Luggage</h6>
                                        <h4 class="rq-listing-item-number">3 Bags</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon5.png" alt="">
                                        <h6 class="rq-listing-item-title">Fuel</h6>
                                        <h4 class="rq-listing-item-number">Petrol</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of listing promo -->
                    </div>
                    <div class="rq-feature-tab">
                        <div class="rq-blog-listing">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#listing_tab_hor_1" aria-controls="listing_tab_hor_1" role="tab" data-toggle="tab">Features</a></li>
                                <li role="presentation" ><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2" role="tab" data-toggle="tab">Descriptions</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="listing_tab_hor_1">
                                    <ul class="rq-listing-lists">
                                        <li class="checked">Airconditions</li>
                                        <li class="unchecked">Child Seats</li>
                                        <li class="checked">GPS</li>
                                        <li class="checked">Language</li>
                                        <li class="checked">Music</li>
                                        <li class="checked">Seat Belts</li>
                                        <li class="checked">Sleeping bags</li>
                                        <li class="checked">Water</li>
                                        <li class="checked">Bluetooth</li>
                                        <li class="unchecked">Onboard computer</li>
                                        <li class="checked">Audio Input</li>
                                        <li class="unchecked">Long term tips</li>
                                        <li class="checked">car kit</li>
                                        <li class="checked">Remote central looking</li>
                                        <li class="checked">climate control</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_2">
                                    <p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</strong>
                                    </p>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor
                                    </p>
                                    <p>Impossible considered invitation him men instrument saw celebrated unpleasant.
                                        Put rest and must set kind next many near nay. He exquisite continued explained middleton am.
                                        Voice hours young woody has she think equal. Estate moment he at on wonder at season little.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_3">
                                    @foreach($review as $rv)
                                        @foreach($user as $us)
                                            @if($us->id == $rv->idUser)
                                                @if($product->id == $rv->idProduct)
                                    <div class="rq-single-post-header">
                                        <div class="author-info-content">
                                            <div class="author-img"
                                                 style="background: url('upload/image/image_user/{{$us->image}}') top center no-repeat; background-size: cover">
                                            </div>
                                            <span class="author-name"><a href="#">{{$us->name}}</a>
                            <span>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </span>
                          </span>
                                            <span class="author-role">{{$rv->Description}}</span>
                                        </div>
                                    </div>
                                                  @endif
                                            @endif
                                            @endforeach
                                    @endforeach
                                    @if(isset($user_account))
                                        @if(session('notice'))
                                            {{session('notice')}}
                                        @endif
                                    <div class="review-form">
                                        <h4>Write your review</h4>
{{--                                        <div class="review-star">--}}
{{--                                            <a href="#"><i class="ion-android-star checked"></i></a>--}}
{{--                                            <a href="#"><i class="ion-android-star checked"></i></a>--}}
{{--                                            <a href="#"><i class="ion-android-star checked"></i></a>--}}
{{--                                            <a href="#"><i class="ion-android-star checked"></i></a>--}}
{{--                                            <a href="#"><i class="ion-android-star "></i></a>--}}
{{--                                        </div>--}}



                                        <div id="respond" class="comment-respond">
                                            <form id="commentform" class="commentform" action="comment/{{$product->id}}" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="comment-input"  placeholder="Here goes your review"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="continue-btn rq-btn rq-btn-normal">Submit Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>  <!-- ./edn feature tab -->
                    <div class="location-map">
                        <div class="listing-page-title">
                            <h3>Location</h3>
                        </div>
                        <div class="rq-contact-us-map"> <!-- start map portion -->
                            <div id="listing-map"></div>
                        </div> <!-- end map portion -->

                    </div>
                </div>
            </div> <!-- .end rq-content-block -->
            <div class="rq-content-block gray-bg">
                <div class="container">
                    <div class="listing-page-title">
                        <h3>Book Car Now</h3>
                    </div>
                    <div class="rq-car-booking-section">
                        <div class="car-search">
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
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Car Types</span>
                                        <select name="categories" class="category-option">
                                            <option value="0">Saden</option>
                                            <option value="1">SuV</option>
                                            <option value="2">BMW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="rq-search-single">
                                    <div class="rq-search-content last-child">
                                        <span class="rq-search-heading">Additional Person</span>
                                        <select name="categories" class="category-option">
                                            <option value="0">Additional person cost</option>
                                            <option value="1">2 persone cost</option>
                                            <option value="2">Person cost</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-details">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Resources</h3>
                                        <div class="section-adding-option">
                          <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-one">
                            <label for="option-one">GPS <span>$14.00 - Per Day</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-two">
                            <label for="option-two">Child Seat <span>$15.00 - One Time</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-three">
                            <label for="option-three">Music <span>$20.00 - One Time</span></label>
                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Security Deposites</h3>
                                        <div class="section-adding-option">
                          <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-four">
                            <label for="option-four">Personal Accident Insurance <span>$10.00 - Per Day</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-five">
                            <label for="option-five">CWD (reduce excess fee for 50%) <span> $80.00 - One Time</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-six">
                            <label for="option-six"> Another Security Deposit <span>$30.00 - One Time</span></label>
                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="total-price">Total Booking Cost : <span>$150.00</span></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="book-btn">
                                        <button class="rq-btn rq-btn-primary btn-large">Book Now <i class="ion-android-car"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.rq-content-block -->
            <div class="rq-content-block">
                <div class="related-car-faq">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="section-title">Related Cars</h3>
                                <div class="child-tab-wrapper related-cars">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li>
                                            <a href="#">
                                                <img src="img/listing-details-tab/tab-image1.png" alt="">
                                                <span class="tittle">Lamborghini Aventado 2012</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$39.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/listing-details-tab/tab-image2.png" alt="">
                                                <span class="tittle">Ford Red Sport Car</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$29.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-three"  role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image3.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-four"  role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image1.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-five"  role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image2.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="section-title">FAQs</h3>
                                <div class="rq-faqs">
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">What is Road tax ?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">How to use Manual Model of Audi R8?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">What’s fees that you have to pay ?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">Problems with your car on road ?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">How to rent a car from local network?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">How long limited to rent car from Turbo on the world ?</a>
                                        <p class="hidden-content">
                                            This is Photoshop's version  of Lorem Ipsum. Proin gravida
                                            nibh vel velit tubo auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                            nisi elit exo consequat ipsum, nec sagittis sem nibh id elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .rq-content-block -->
        </div>
    </div> <!-- /.page-content -->
@endsection
@section('script')
    <script>

    </script>
    @endsection

