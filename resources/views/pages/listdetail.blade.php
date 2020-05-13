@extends('layout.index')
@section('content')
    <div class="rq-page-content"> <!-- start of page content -->
        <div class="rq-listing-details">
            <div class="rq-listing-single"> <!-- start of banner slider -->
                <div class="rq-listing-gallery-post">
                    <div class="rq-gallery-content">
                        <center>
                            <img style="height: 600px;width: 600px"
                                 src="upload/image/image_product/{{$product->image}}">
                        </center>
                    </div>
                </div>
            </div> <!-- end of banner slider -->
            <div class="rq-content-block">
                <div class="container">
                    <div class="rq-title-container bredcrumb-title text-center"> <!-- start of breadcrumb -->
                        <h1 class="rq-title light">Bike Name: {{$product->title}}</h1>
                        <ol class="breadcrumb secondary rq-subtitle">
                            <li><a href="home" >Home</a></li>
                            <li><a href="listproduct">View All Bike</a></li>
                            <li class="active">Bike Listing Details</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->
                    <div class="rq-listing-promo-wrapper">
                        <div class="row"> <!-- start of listing promo -->
                            <div class="col-md-12">
                                <center><h1 class="rq-title light" >Specification of Bike</h1></center><br><br>
                                <div class="rq-listing-promo-content">
                                    <div class="rq-listing-item">
                                        <img src="cssClient/img/listing-icon1.png" alt="">
                                        <h6 class="rq-listing-item-title">GroupSet</h6>
                                        <h4 class="rq-listing-item-number">{{$product->groupset}}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="cssClient/img/listing-icon2.png" alt="">
                                        <h6 class="rq-listing-item-title">Cassette</h6>
                                        <h4 class="rq-listing-item-number">{{$product->cassette}}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="cssClient/img/listing-icon3.png" alt="">
                                        <h6 class="rq-listing-item-title">Weight</h6>
                                        <h4 class="rq-listing-item-number">{{$product->weight}}</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="cssClient/img/listing-icon4.png" alt="">
                                        <h6 class="rq-listing-item-title">Size</h6>
                                        <h4 class="rq-listing-item-number">{{$product->size}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of listing promo -->
                    </div>
                    <div class="rq-feature-tab">
                        <div class="rq-blog-listing">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2"
                                                           role="tab" data-toggle="tab">Descriptions</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3"
                                                           role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_2">
                                    <p><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation.</strong>
                                    </p>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                        consequat,
                                        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                                        odio dignissim qui
                                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla
                                        facilisi. Nam liber tempor
                                    </p>
                                    <p>Impossible considered invitation him men instrument saw celebrated unpleasant.
                                        Put rest and must set kind next many near nay. He exquisite continued explained
                                        middleton am.
                                        Voice hours young woody has she think equal. Estate moment he at on wonder at
                                        season little.
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
                                            <div id="respond" class="comment-respond">
                                                <form id="commentform" class="commentform"
                                                      action="comment/{{$product->id}}" method="POST">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea class="comment-input" name="description"
                                                                      placeholder="Here goes your review"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="continue-btn rq-btn rq-btn-normal"
                                                                    name="submitereview">Submit Review
                                                            </button>
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
                </div>
            </div> <!-- .end rq-content-block -->

        <form method="GET" action="checkout/{{$product->id}}">
            <div class="rq-content-block gray-bg">
                <div class="container">
                    <div class="listing-page-title">
                        <h3>Book Bike Now</h3>
                    </div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err){{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    <div class="rq-car-booking-section">
                        <div class="car-search">
                            <div class="rq-search-container">
                                <div class="rq-search-single" style="width: 300px">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Pick up Location</span>
                                        <select name="pickupLocation" class="category-option">
                                            <option selected disabled> Select the Location</option>
                                            @foreach($location as $lc)
                                                <option value="{{$lc->id}}">{{$lc-> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="rq-search-single" style="width: 300px">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Drop off Location</span>
                                        <select name="dropLocation" class="category-option">
                                            <option selected disabled> Select the Location</option>
                                            @foreach($location as $lc)
                                                <option value="{{$lc->id}}">{{$lc-> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="rq-search-single" style="width: 300px">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Pick up Date</span>
                                        <input type="text" name="pickupDate" class="rq-form-element datepicker"
                                               id="startdate" placeholder="Pick up date"/>
                                        <i class="ion-chevron-down datepicker-arrow"></i>
                                    </div>
                                </div>
                                <div class="rq-search-single" style="width: 300px">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Return Date</span>
                                        <input type="text" name="returnDate" class="rq-form-element" id="enddate"
                                               placeholder="Return date"/>
                                        <i class="ion-chevron-down datepicker-arrow"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="booking-details">
                            <div class="row">
                                <br><br>
                                <div class="col-md-12">
                                    <h3 class="total-price">Price/Day : <span>{{$product->daily_price}} $</span></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="book-btn">
                                        <button class="rq-btn rq-btn-primary btn-large" type="submit"> Book Now <i
                                                class="fa fa-bicycle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.rq-content-block -->

        </form>
        </div>
    </div> <!-- /.page-content -->
@endsection
@section('script')
    <script>

    </script>
@endsection

