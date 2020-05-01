@extends('layout.index')
@section('banner')
    <div class="inner-page-banner"
         style="background: url('upload/image/banner/banner-index1.jpg') top center no-repeat; background-size: cover;">
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
                <div class="listing-search-container">
                    <h2>Search For<span class="dot">.</span></h2>
                    {{--                    <div class="rq-search-container with-border">--}}
                    {{--                        <div class="rq-search-single">--}}
                    {{--                            <div class="rq-search-content">--}}
                    {{--                                <span class="rq-search-heading">Location</span>--}}
                    {{--                                <select name="categories" class="category-option">--}}
                    {{--                                    <option value="0">Pick a location</option>--}}
                    {{--                                    <option value="AL">Alabama</option>--}}
                    {{--                                    <option value="AK">Alaska</option>--}}
                    {{--                                    <option value="AZ">Arizona</option>--}}
                    {{--                                    <option value="AR">Arkansas</option>--}}
                    {{--                                    <option value="CA">California</option>--}}
                    {{--                                    <option value="CO">Colorado</option>--}}
                    {{--                                    <option value="CT">Connecticut</option>--}}
                    {{--                                    <option value="DE">Delaware</option>--}}
                    {{--                                    <option value="DC">District of Columbia</option>--}}
                    {{--                                    <option value="FL">Florida</option>--}}
                    {{--                                    <option value="GA">Georgia</option>--}}
                    {{--                                    <option value="HI">Hawaii</option>--}}
                    {{--                                    <option value="ID">Idaho</option>--}}
                    {{--                                    <option value="IL">Illinois</option>--}}
                    {{--                                    <option value="IN">Indiana</option>--}}
                    {{--                                </select>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="rq-search-single">--}}
                    {{--                            <div class="rq-search-content">--}}
                    {{--                                <span class="rq-search-heading">Pick up</span>--}}
                    {{--                                <input type="text" name="datefilter" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>--}}
                    {{--                                <i class="ion-chevron-down datepicker-arrow"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="rq-search-single">--}}
                    {{--                            <div class="rq-search-content">--}}
                    {{--                                <span class="rq-search-heading">Return</span>--}}
                    {{--                                <input type="text" name="datefilter" class="rq-form-element" id="enddate" placeholder="Return date"/>--}}
                    {{--                                <i class="ion-chevron-down datepicker-arrow"></i>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="rq-search-single">--}}
                    {{--                            <div class="rq-search-content last-child">--}}
                    {{--                                <span class="rq-search-heading">Driver age</span>--}}
                    {{--                                <select name="categories" class="category-option">--}}
                    {{--                                    <option value="0">25 Years old</option>--}}
                    {{--                                    <option value="1">25 Years old</option>--}}
                    {{--                                    <option value="2">25 Years old</option>--}}
                    {{--                                    <option value="3">25 Years old</option>--}}
                    {{--                                    <option value="4">25 Years old</option>--}}
                    {{--                                    <option value="5">25 Years old</option>--}}
                    {{--                                </select>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="rq-search-single search-btn">--}}
                    {{--                            <div class="rq-search-content">--}}
                    {{--                                <button class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i></button>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div> <!-- /.search-container -->

                <form method="GET" action="listproduct">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="rq-listing-top-bar-filter-option">
                        <div class="filter-list">
                            <h5>Filter by</h5>
                            <div class="filter-single">
                                {{--                            <div class="btn-group">--}}
                                {{--                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--                                    Brand <span class="caret"></span>--}}
                                {{--                                </button>--}}
                                {{--                                <ul class="dropdown-menu">--}}
                                {{--                                    @foreach($typeproduct as $tpr)--}}
                                {{--                                    <li>--}}
                                {{--                        <span class="rq-checkbox">--}}
                                {{--                          <input type="checkbox" id="brand-one" name="brands"><label>{{$tpr->name}}</label>--}}

                                {{--                        </span>--}}
                                {{--                                    </li>--}}
                                {{--                                    @endforeach--}}
                                {{--                                </ul>--}}
                                {{--                            </div>--}}
                                <div class="rq-search-single">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading" style="width: 200px">Type of Bike</span>
                                        <select name="id_typeproduct" class="category-option" style="width: 150px">
                                            <option></option>
                                            @foreach($typeproduct as $tpr)
                                                <option value="{{$tpr->id}}">{{$tpr-> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-single">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
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

                            {{--                        <div class="filter-single">--}}
                            {{--                            <div class="btn-group">--}}
                            {{--                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--                                    Fuel <span class="caret"></span>--}}
                            {{--                                </button>--}}
                            {{--                                <ul class="dropdown-menu">--}}
                            {{--                                    <li>--}}
                            {{--                        <span class="rq-checkbox">--}}
                            {{--                          <input type="checkbox" id="fule-one">--}}
                            {{--                          <label for="fule-one">50 liter</label>--}}
                            {{--                        </span>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                        <span class="rq-checkbox">--}}
                            {{--                          <input type="checkbox" id="fuel-two">--}}
                            {{--                          <label for="fuel-two">100 liter</label>--}}
                            {{--                        </span>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                        <span class="rq-checkbox">--}}
                            {{--                          <input type="checkbox" id="fuel-three">--}}
                            {{--                          <label for="fuel-three">120 liter</label>--}}
                            {{--                        </span>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                        <span class="rq-checkbox">--}}
                            {{--                          <input type="checkbox" id="fuel-four">--}}
                            {{--                          <label for="fuel-four">130 liter</label>--}}
                            {{--                        </span>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            <div class="filter-single">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Price <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="rq-pricing-slider">
                                                <div id="slider-range"></div>
                                                <p>
                                                    <label for="price_min">min: </label>$
                                                    <input type="text" name="price_min" id="price_min">
                                                    <label for="price_max">max: </label>$
                                                    <input type="text" name="price_max" id="price_max">
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <button class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="rq-grid-list-view-option">
                            <a href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
                            <a class="active" href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </form>
                <div class="rq-car-listing-wrapper">
                    <div class="rq-listing-choose rq-listing-list">
                        <div class="row">
                            @foreach($product as $pr)
                                @if(isset($price_min))
                                    @if($id_typeproduct == 0 && ($pr->daily_price > $price_min)&&($pr->daily_price < $price_max))
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
                                                        <li>GroupSet: <span>{{$pr->groupset}}</span></li>
                                                        <li>Cassette: <span>{{$pr->cassette}}</span></li>
                                                        <li>Weight: <span>{{$pr->weight}}</span></li>
                                                        <li>Size: <span>{{$pr->size}}</span></li>
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
                                    @elseif(isset($id_typeproduct))
                                        @if($pr->idModel == $id_typeproduct && $pr->daily_price > $price_min && $pr->daily_price < $price_max)
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
                                                            <li>GroupSet: <span>{{$pr->groupset}}</span></li>
                                                            <li>Cassette: <span>{{$pr->cassette}}</span></li>
                                                            <li>Weight: <span>{{$pr->weight}}</span></li>
                                                            <li>Size: <span>{{$pr->size}}</span></li>
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
                                    @endif
                                @elseif(!isset($id_typeproduct))
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
                                                    <li>GroupSet: <span>{{$pr->groupset}}</span></li>
                                                    <li>Cassette: <span>{{$pr->cassette}}</span></li>
                                                    <li>Weight: <span>{{$pr->weight}}</span></li>
                                                    <li>Size: <span>{{$pr->size}}</span></li>
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
                    {{--                    <div class="rq-pagination">--}}
                    {{--                        {{$product->links()}}--}}
                    {{--                    </div>--}}
                </div>

            </div>
        </div>  <!-- /.rq-content-block -->
    </div>
@endsection
@section('script')
    <script>

        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 100,
                values: [0, 100],
                slide: function (event, ui) {
                    $("#price_min").val(ui.values[0]);
                    $("#price_max").val(ui.values[1]);
                }
            });
            $("#price_min").val($("#slider-range").slider("values", 0));
            $("#price_max").val($("#slider-range").slider("values", 1));
        });
    </script>
@endsection
