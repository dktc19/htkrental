@extends('layout.index')
@section('content')
{{--    @foreach($product as $pr)--}}

{{--@if(($pr->status==0)&&($id_receivelc == $pr->idLocation))--}}
{{--            {{$pr->title}}--}}
{{--    @endif--}}
{{--    @endforeach--}}
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
<div class="rq-page-content">
    <div class="rq-content-block gray-bg small-padding-top">
        <div class="container">
            <div class="rq-listing-top-bar-filter-option">
                <div class="filter-list">
                    <h5>Filter by</h5>
                    <div class="filter-single">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brand <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-one">
                          <label for="brand-one">Ford Shelby</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-two">
                          <label for="brand-two">BMW M6 Gran</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-three">
                          <label for="brand-three">AUDI R8 2011</label>
                        </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-single">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Class <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">

                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-a">
                          <label for="class-a">A class</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-b">
                          <label for="class-b">B class</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-c">
                          <label for="class-c">C class</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-d">
                          <label for="class-d">D class</label>
                        </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-single">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fuel <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fule-one">
                          <label for="fule-one">50 liter</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-two">
                          <label for="fuel-two">100 liter</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-three">
                          <label for="fuel-three">120 liter</label>
                        </span>
                                </li>
                                <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-four">
                          <label for="fuel-four">130 liter</label>
                        </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-single">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Price <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="rq-pricing-slider">
                                        <div id="slider-range"></div>
                                        <p>
                                            <label for="amount">range:</label>
                                            <input type="text" id="amount">
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rq-grid-list-view-option">
                    <a  href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
                    <a class="active" href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
                </div>
            </div>

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
                            @elseif(($id_receivelc == 0))
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
                </div>

            </div>

        </div>
    </div>  <!-- /.rq-content-block -->
</div>
{{--<div class="row">--}}
{{--    @foreach($product as $pr)--}}
{{--        @if(($id_receivelc == $pr->idLocation)&&($pr->status ==0))--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="listing-single">--}}
{{--                <div class="listing-img">--}}
{{--                    <img src="upload/image/image_product/{{$pr->image}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="listing-details">--}}
{{--                            <td>{{$pr->title}}</td>--}}
{{--                    <ul class="rating-list">--}}
{{--                        <li><i class="ion-star"></i></li>--}}
{{--                        <li><i class="ion-star"></i></li>--}}
{{--                        <li><i class="ion-star"></i></li>--}}
{{--                        <li><i class="ion-star"></i></li>--}}
{{--                        <li><i class="ion-star"></i></li>--}}
{{--                    </ul>--}}
{{--                    <ul>--}}
{{--                        <li>Class: <span>Premium</span></li>--}}
{{--                        <li>Air Condition: <span>Yes</span></li>--}}
{{--                        <li>Body Style: <span>Sedan</span></li>--}}
{{--                        <li>Transmission: <span>Automatic</span></li>--}}
{{--                    </ul>--}}
{{--                    <div class="listing-footer">--}}
{{--                        <span><a href="listdetail/{{$pr->id}}">Details</a></span>--}}
{{--                        <span>--}}
{{--                            Starting at <span class="price">{{$pr->daily_price}}</span> / day--}}
{{--                          </span>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--            @elseif(($id_receivelc == 0))--}}
{{--            <div class="col-md-4 col-sm-6">--}}
{{--                <div class="listing-single">--}}
{{--                    <div class="listing-img">--}}
{{--                        <img src="upload/image/image_product/{{$pr->image}}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="listing-details">--}}
{{--                        <td>{{$pr->title}}</td>--}}
{{--                        <ul class="rating-list">--}}
{{--                            <li><i class="ion-star"></i></li>--}}
{{--                            <li><i class="ion-star"></i></li>--}}
{{--                            <li><i class="ion-star"></i></li>--}}
{{--                            <li><i class="ion-star"></i></li>--}}
{{--                            <li><i class="ion-star"></i></li>--}}
{{--                        </ul>--}}
{{--                        <ul>--}}
{{--                            <li>Class: <span>Premium</span></li>--}}
{{--                            <li>Air Condition: <span>Yes</span></li>--}}
{{--                            <li>Body Style: <span>Sedan</span></li>--}}
{{--                            <li>Transmission: <span>Automatic</span></li>--}}
{{--                        </ul>--}}
{{--                        <div class="listing-footer">--}}
{{--                            <span><a href="listdetail/{{$pr->id}}">Details</a></span>--}}
{{--                            <span>--}}
{{--                            Starting at <span class="price">{{$pr->daily_price}}</span> / day--}}
{{--                          </span>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @endforeach--}}
{{--</div>--}}
@endsection
