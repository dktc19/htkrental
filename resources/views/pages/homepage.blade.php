@extends('layout.index')
@section('banner')
    <div class="header-body" style="background: url('upload/image/banner/banner-index1.jpg') top center no-repeat; background-size: cover;">
        <div class="header-overlay"></div>
        <div class="container">
            <h1>HTK Rental Bike helps you</h1>
            <p>Rent bike to move from local hosts in 190+ countries.</p>
            <form method="get" action="search">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="rq-search-container">
                <div class="rq-search-single" style="width: 400px">
                    <div class="rq-search-content">
                        <span class="rq-search-heading">Location</span>
                        <select name="id_receivelc" class="category-option">
                            <option selected disabled> Select the Location</option>
                            @foreach($location as $lc)
                                <option value="{{$lc->id}}">{{$lc-> name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="rq-search" style="width: 400px">
                    <div>
                        <span class="rq-search-heading">Name</span><br>
                        <input type="text" name="id_name" id="s" placeholder="Input key word..." style="width: 100%"/>
                    </div>
                </div>
{{--                <div class="rq-search-single">--}}
{{--                    <div class="rq-search-content">--}}
{{--                        <span class="rq-search-heading">Pick up</span>--}}
{{--                        <input type="text" name="id_startdate" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>--}}
{{--                        <i class="ion-chevron-down datepicker-arrow"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="rq-search-single">--}}
{{--                    <div class="rq-search-content">--}}
{{--                        <span class="rq-search-heading">Return</span>--}}
{{--                        <input type="text" name="id_enddate" class="rq-form-element" id="enddate" placeholder="Return date"/>--}}
{{--                        <i class="ion-chevron-down datepicker-arrow"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="rq-search-single search-btn" style="width: 400px">
                    <div class="rq-search-content">
                        <button class="rq-btn rq-btn-primary fluid-btn" >Search <i class="arrow_right"></i></button>
                    </div>
                </div>
            </div></form>
            <!-- / .search-container -->
        </div>
    </div> <!-- /.header-body -->
    @endsection
@section('content')
<div class="rq-page-content">
    <div class="rq-content-block gray-bg">
        <span class="bg-large-text">HTK Rental Bike</span>
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="rq-mission-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mission-content">
                                    <h1 class="rq-title">Our Mission<span class="rq-dot">.</span><i class="rq-line"></i></h1>
                                    <p class="mission-text">Suspendisse hendrerit facilisis ante. Sed feugiat lectus
                                        non tim porttitor aliquam. Ut a ipsum tempus, venenatis nibh et, eleifefend nisi.
                                        Etiam hendrerit, purus ac varius vestibulum, enim lon arcu euismod purus,
                                        id hendrerit tellus turpis biben dum exilon Morbi cursus justo ut malesuada tempus.
                                    </p>
                                    <address>
                                        <a href="#">Brasion Mike</a>
                                        <cite>- CEO Founder</cite>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mission-image">
                                    <img src="cssClient/img/block-transparent-img.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="rq-browse-section">
                <h1 class="rq-title">Top Our Bikes<span class="rq-dot">.</span></h1>
                <a href="listproduct">Browse All Bike <i class="ion-ios-arrow-right"></i></a>
            </div>
        </div>
    </div> <!-- /.content block -->
    <div class="rq-content-block with-border-bottom vertical-line">
        <div class="rq-car-listing-tab">
            <ul class="nav nav-tabs parent-tab" role="tablist">
                <li role="presentation" class="active">
                    <a href="#top-popular"  role="tab" data-toggle="tab">Top Popular</a></li>
                <li role="presentation">
                    <a href="#new-cars"  role="tab" data-toggle="tab">New Cars</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="top-popular">
                    <div class="child-tab-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($product as $pd)
                            <li role="presentation" class="active">
                                <a href="listdetail/{{$pd->id}}">
                                    <img src="upload/image/image_product/{{$pd->image}}" alt="" style="width: 80px;height: 80px">
                                    <span class="tittle">{{$pd->title}}</span>
                                    <span class="car-des">
                                        @foreach($typeproduct as $tpd)
                                            @if($pd->idModel == $tpd->id)
                                                <td>{{$tpd->name}}</td>
                                            @endif
                                        @endforeach</span>
                                    <span class="rent-price">{{$pd->daily_price}} $<b>/Day</b></span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="car-one">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Lamborghini Aventado</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg"></div>
                                        <img src="cssClient/img/tab-image/full-img1.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-two">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Ford Red Sport Car</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg ford"></div>
                                        <img src="cssClient/img/tab-image/full-img2.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-three">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-four">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-five">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                        </div>
                    </div> <!-- /.child-tab-wrapper -->
                </div>

                <div role="tabpanel" class="tab-pane fade" id="new-cars">
                    <div class="child-tab-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation">
                                <a href="#car-two-new"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail2.jpg" alt="">
                                    <span class="tittle">Ford Red Sport Car</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$29.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#car-one-new"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail1.jpg" alt="">
                                    <span class="tittle">Lamborghini Aventado 2012</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$39.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-three-new"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail3.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-four-new"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail1.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-five-new"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail2.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="car-one-new">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Lamborghini Aventado</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg"></div>
                                        <img src="cssClient/img/tab-image/full-img1.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-two-new">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Ford Red Sport Car</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg ford"></div>
                                        <img src="cssClient/img/tab-image/full-img2.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-three-new">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-four-new">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-five-new">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                        </div>
                    </div> <!-- /.child-tab-wrapper -->

                </div>

                <div role="tabpanel" class="tab-pane fade in" id="sale-off">
                    <div class="child-tab-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#car-one-sale"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail1.jpg" alt="">
                                    <span class="tittle">Lamborghini Aventado 2012</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$39.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-two-sale"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail2.jpg" alt="">
                                    <span class="tittle">Ford Red Sport Car</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$29.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-three-sale"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail3.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-four-sale"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail1.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#car-five-sale"  role="tab" data-toggle="tab">
                                    <img src="cssClient/img/tab-image/thumbnail2.jpg" alt="">
                                    <span class="tittle">Kia Rio White Car 2016</span>
                                    <span class="car-des">Four Seater Car</span>
                                    <span class="rent-price">$27.00<b>/Day</b></span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="car-one-sale">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Lamborghini Aventado</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg"></div>
                                        <img src="cssClient/img/tab-image/full-img1.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-two-sale">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Ford Red Sport Car</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg ford"></div>
                                        <img src="cssClient/img/tab-image/full-img2.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="car-three-sale">
                                <div class="rq-tab-car-details">
                                    <div class="car-logo">
                                        <img src="cssClient/img/partner-logo/partner3.png" alt="">
                                    </div>
                                    <h3>Kia Rio White Car 2016</h3>
                                    <div class="large-image-wrapper">
                                        <div class="image-bg kia"></div>
                                        <img src="cssClient/img/tab-image/full-img3.png" alt="">
                                    </div>
                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>2 large bags</span>
                                        <span><i class="ion-no-smoking"></i>No smoking</span>
                                        <span><i class="ion-speedometer"></i>08/12 mpg</span>
                                        <span>Starting at <span class="red-section">$39.0</span>/day</span>
                                    </div>
                                </div> <!-- /.rq-tab-car-details -->
                            </div>
                        </div>
                    </div> <!-- /.child-tab-wrapper -->
                </div>
            </div> <!-- /.tab-content -->
        </div> <!-- /.rq-car-listing-tab -->
    </div> <!-- /.content block -->
    <div class="rq-content-block gray-bg">
        <div class="container">
            <div class="rq-partners-section">
                <div class="partners-wrapper">
                    <div class="partner-single"><a href="#"><img src="cssClient/img/partner-logo/partner1.png" alt=""></a></div>
                    <div class="partner-single"><a href="#"><img src="cssClient/img/partner-logo/partner3.png" alt=""></a></div>
                    <div class="partner-single"><a href="#"><img src="cssClient/img/partner-logo/partner2.png" alt=""></a></div>
                    <div class="partner-single"><a href="#"><img src="cssClient/img/partner-logo/partner4.png" alt=""></a></div>
                    <div class="partner-single"><a href="#"><img src="cssClient/img/partner-logo/partner5.png" alt=""></a></div>
                </div>
            </div> <!-- /.rq-partners-section -->
{{--            <div class="rq-testimonial-section">--}}
{{--                <div class="rq-testimonial-content">--}}
{{--                    <h1 class="rq-title">What Client Say<span class="rq-dot">.</span></h1>--}}
{{--                    <div class=" owl-carousel testimonial-wrapper">--}}
{{--                        <div class="item">--}}
{{--                            <p class="testimoinal-text">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>--}}
{{--                                Pellentesque  eueget ante venenatis euismod. Etiam in odio mattis, suscipit ex sit amet, toronil inoui bibenidum risus.--}}

{{--                            </p>--}}
{{--                            <span class="author-name-title">--}}
{{--                      <img src="cssClient/img/testimoianl1.png" alt="">--}}
{{--                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>--}}
{{--                        <span>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                        </span>--}}
{{--                      </a>--}}
{{--                    </span>--}}

{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <p class="testimoinal-text">--}}
{{--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>--}}
{{--                            </p>--}}
{{--                            <span class="author-name-title">--}}
{{--                      <img src="cssClient/img/testimoianl1.png" alt="">--}}
{{--                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>--}}
{{--                        <span>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                          <i class="ion-android-star"></i>--}}
{{--                        </span>--}}
{{--                      </a>--}}
{{--                    </span>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- /.testimonial section -->--}}

        </div>
    </div> <!-- /.content block -->
    <div class="rq-call-to-action">
        <div class="container">
            <h2>Need help renting online? <span>(+84) 372-579-483</span></h2>
        </div>
    </div>
</div> <!-- /.page-content -->
</div> <!-- end #main-wrapper -->
    @endsection
