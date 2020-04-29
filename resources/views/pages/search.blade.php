@extends('layout.index')
@section('content')

<div class="row">
    @foreach($product as $pr)
        @if($id_receivelc == $pr->idLocation)
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
                        <li>Air Condition: <span>Yes</span></li>
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
                            <li>Air Condition: <span>Yes</span></li>
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
@endsection
