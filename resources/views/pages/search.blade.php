@extends('layout.index')

@section('banner')
    <div class="inner-page-banner" style="background: url('upload/image/banner/banner-index1.jpg') top center no-repeat; background-size: cover;">
        <div class="rq-overlay"></div>
        <div class="container">
            <div class="rq-title-container bredcrumb-title text-center">
                <h2 class="rq-title">Bike Listing</h2>
                <ol class="breadcrumb rq-subtitle secondary">
                    <li><a href="#">Home</a></li>
                    <li class="active">Bike Listing</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="rq-page-content">
    <div class="rq-content-block gray-bg small-padding-top">
        <div class="container">
            <div class="rq-car-listing-wrapper">
                <div class="rq-listing-choose rq-listing-list">
                    <div class="row">
                        @foreach($product as $pr)
                            @if(($id_receivelc == $pr->idLocation)&&($pr->status ==0))
                            <div class="col-md-4 col-sm-6">
                                <div class="listing-single">
                                    <div class="listing-img">
                                        <img src="upload/image/image_product/{{$pr->image}}" alt="">
                                    </div>
                                    <div class="listing-details">
                                                <td>{{$pr->title}}</td>
                                        <ul class="rating-list">
                                            <li><i class="ion-star"></i></li>
                                            <li><i class="ion-star"></i></li>
                                            <li><i class="ion-star"></i></li>
                                            <li><i class="ion-star"></i></li>
                                            <li><i class="ion-star"></i></li>
                                        </ul>
                                        <ul>
                                            <li>Class: <span>Premium</span></li>
                                            <li>Body Style: <span>Sedan</span></li>
                                            <li>Transmission: <span>Automatic</span></li>
                                        </ul>
                                        <div class="listing-footer">
                                            <span><a href="listdetail/{{$pr->id}}">Details</a></span>
                                            <span>
                            Starting at <span class="price">{{$pr->daily_price}}</span> / day
                          </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @elseif(($id_receivelc == 0)&&($pr->status ==0))
                                <div class="col-md-4 col-sm-6">
                                    <div class="listing-single">
                                        <div class="listing-img">
                                            <img src="upload/image/image_product/{{$pr->image}}" alt="">
                                        </div>
                                        <div class="listing-details">
                                            <td>{{$pr->title}}</td>
                                            <ul class="rating-list">
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                                <li><i class="ion-star"></i></li>
                                            </ul>
                                            <ul>
                                                <li>Class: <span>Premium</span></li>
                                                <li>Body Style: <span>Sedan</span></li>
                                                <li>Transmission: <span>Automatic</span></li>
                                            </ul>
                                            <div class="listing-footer">
                                                <span><a href="listdetail/{{$pr->id}}">Details</a></span>
                                                <span>
                            Starting at <span class="price">{{$pr->daily_price}}</span> / day
                          </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="rq-browse-section">
                        <a href="listproduct" style="margin-left: auto; font-size: 20px">Browse All Bike <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>  <!-- /.rq-content-block -->

</div>

@endsection

