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
                        <center><span class="rq-search-heading">Location</span></center>
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
                        <span class="rq-search-heading" style="color: #efa80f">Name</span><br>
                        <input type="text" name="id_name" id="s" placeholder="Input key word..." style="width: 100%; border: white"/>
                    </div>
                </div>
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
                                        <a href="#">Ha Tuan Kiet</a>
                                        <cite>- CEO Founder</cite>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <img src="upload/image/banner/banner-small.jpg" alt="" style="height:450px;width:450px">
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
                                    <h3>Road Bike 2019</h3>
                                        <img src="upload/image/image_product/roadbike.jpg" alt="" style="width: 300px;height: 300px">

                                    <div class="car-details-option">
                                        <span><i class="ion-briefcase"></i>Group Set: Shimano Alivio 24-speed</span>
                                        <span><i class="ion-no-smoking"></i>Cassete:  HG Cassette 11-32 T, 8-speed</span>
                                        <span><i class="ion-speedometer"></i>Weight: Nominal weight 12 kg</span>
                                        <span class="red-section">Size: M</span>
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
            </div> <!-- /.tab-content -->
        </div> <!-- /.rq-car-listing-tab -->
    </div> <!-- /.content block -->
    <div class="rq-content-block gray-bg">
        <div class="container">
            <div class="rq-partners-section">
                <div class="partners-wrapper">
                    <div class="partner-single"><a href="#"><img src="upload/image/partner/partner_001.jpg" alt="" style="height: 120px; width: 160px"></a></div>
                    <div class="partner-single"><a href="#"><img src="upload/image/partner/partner_002.jpg" alt="" style="height: 120px; width: 160px"></a></div>
                    <div class="partner-single"><a href="#"><img src="upload/image/partner/partner_001.jpg" alt="" style="height: 120px; width: 160px"></a></div>
                    <div class="partner-single"><a href="#"><img src="upload/image/partner/partner_002.jpg" alt="" style="height: 120px; width: 160px"></a></div>
                    <div class="partner-single"><a href="#"><img src="upload/image/partner/partner_001.jpg" alt="" style="height: 120px; width: 160px"></a></div>
                </div>
            </div> <!-- /.rq-partners-section -->
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
