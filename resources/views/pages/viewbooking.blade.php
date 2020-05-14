@extends('layout.index')
@section('content')
    @if(isset($user_account))
    <h1>Your bookings</h1>
    <form id="empform" action="processing" method="GET">
        <table id="mytable" class="table table-bordered">
            <thead>
            <th style="width:10%;">UserName</th>
            <th style="width:10%;">Pickup Location</th>
            <th style="width:10%;">Drop Location</th>
            <th style="width:10%;">Pickup Date</th>
            <th style="width:10%;">Return Date</th>
            <th style="width:10%;">Product</th>
            <th style="width:10%;">Image of Product</th>
            <th style="width:10%;">Total Price</th>
            <th style="width:15%;">Status</th>
            </thead>
            <tbody>
            @foreach($booking as $bk)
                <tr ng-repeat="emp in empoyees">
                @if($bk->idUser == $user_account->id)
                    @foreach($user as $us)
                        @if($us->id == $bk->idUser)
                    <td style="font-size: 25px">{{$us->name}}</td>
                            @endif
                        @endforeach
                    @foreach($location as $lc)
                        @if($bk->idLocation == $lc->id)
                    <td style="font-size: 20px">{{$lc->name}}</td>
                            @endif
                        @endforeach
                        @foreach($location as $lc)
                            @if($bk->iddropLocation == $lc->id)
                                <td style="font-size: 20px">{{$lc->name}}</td>
                            @endif
                        @endforeach
                        <td style="font-size: 25px">{{$bk->pickupDay}}</td>
                    <td style="font-size: 25px">{{$bk->dropDay}}</td>
                        @foreach($product as $pr)
                            @if($bk->idProduct == $pr->id)
                        <td style="font-size: 20px">{{$pr->title}}</td>
                            @endif
                        @endforeach
                        @foreach($product as $pr)
                            @if($bk->idProduct == $pr->id)
                                <td><img src="upload/image/image_product/{{$pr->image}}" style="width:100px;height:100px"></td>
                            @endif
                        @endforeach
                        <td style="font-size: 25px">{{$bk->totalprice}} $</td>

                        @if($bk->status == 0)
                            <td style="color: #efa80f; font-size: 30px">Waiting</td>
                            @elseif($bk->status == 1)
                            <td>Waiting Payment</td>
                            @else
                            <td>Completing</td>
                            @endif
                    @endif
                        @endforeach
                </tr>
                </tbody>
        </table>
    </form>
    <div class="rq-checkout-wrapper">
        <div class="container">
            <div class="row">
                <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="order-review-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#order-review" aria-expanded="true" aria-controls="order-review">
                                     Expand the Return Date
                                </a>
                            </h4>
                        </div> <!-- end .panel-heading -->
                        <div id="order-review" class="panel-collapse collapse" role="tabpanel" aria-labelledby="order-review-heading">
                            <div class="panel-body">
                                @foreach($booking as $bk)
                                    @if($bk->idUser == $user_account->id)
                                <form action="viewbooking/{{$bk->id}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label> Image Product</label><br>
                                            @foreach($product as $pr)
                                                @if($bk->idProduct == $pr->id)
                                                    <td><img src="upload/image/image_product/{{$pr->image}}" style="width:200px;height:200px"></td>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-md-10"><br>
                                            <label>Name</label>
                                            <input type="name" required class="rq-form-control" name="name" value="{{$user_account->name}}" disabled>
                                        </div>
                                        <div class="col-md-10">
                                            <label>Pickup Location</label><br>
                                            @foreach($location as $lc)
                                                @if($bk->idLocation == $lc->id)
                                                    <label style="font-size: 20px">{{$lc->name}}</label>
                                                @endif
                                                @endforeach
                                        </div>
                                        <div class="col-md-10">
                                            <label>Name product</label><br>
                                            @foreach($product as $pr)
                                                @if($bk->idProduct == $pr->id)
                                                    <label style="font-size: 20px">{{$pr->title}}</label>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-md-10">
                                            <label>Pick up Date</label>
                                            <input type="date" class="rq-form-control" name="pickupDay" value="{{$bk->pickupDay}}" disabled>
                                        </div>
                                        <div class="col-md-10">
                                            <label>Return Date</label>
                                            <input type="date" class="rq-form-control" name="dropDay" value="{{$bk->dropDay}}">
                                        </div>
                                        <div class="col-md-10">
                                            <button type="submit" class="rq-btn rq-btn-primary border-radius">Confirm Edit</button>
                                        </div>

                                    </div>
                                </form>
                                    @endif
                                    @endforeach
                            </div> <!-- end .panel-body -->
                        </div> <!-- end .panel-collapse -->
                    </div> <!-- end .panel-default -->
                </div> <!-- end #accordion -->
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </div>
    @else
        <center><h1>You must login to view your booking</h1><br></center>
        <center><a href="login"><h3>Go to Login</h3></a></center>
    @endif
@endsection
