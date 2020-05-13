@extends('layout.index')
@section('content')
    @if(isset($user_account))
    <h1>Your bookings</h1>
    <form id="empform" action="processing" method="GET">
        <table id="mytable" class="table table-bordered">
            <thead>
            <th style="width:5%;">UserName</th>
            <th style="width:10%;">Pickup Location</th>
            <th style="width:10%;">Drop Location</th>
            <th style="width:15%;">Pickup Date</th>
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
                    <td>{{$us->name}}</td>
                            @endif
                        @endforeach
                    @foreach($location as $lc)
                        @if($bk->idLocation == $lc->id)
                    <td>{{$lc->name}}</td>
                            @endif
                        @endforeach
                        @foreach($location as $lc)
                            @if($bk->iddropLocation == $lc->id)
                                <td>{{$lc->name}}</td>
                            @endif
                        @endforeach
                        <td>{{$bk->pickupDay}}</td>
                    <td>{{$bk->dropDay}}</td>
                        @foreach($product as $pr)
                            @if($bk->idProduct == $pr->id)
                        <td>{{$pr->title}}</td>
                            @endif
                        @endforeach
                        @foreach($product as $pr)
                            @if($bk->idProduct == $pr->id)
                                <td><img src="upload/image/image_product/{{$pr->image}}" style="width:100px;height:100px"></td>
                            @endif
                        @endforeach
                        <td>{{$bk->totalprice}} $</td>

                        @if($bk->status == 0)
                            <td>Waiting</td>
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
    @else
        <center><h1>You must login to view your booking</h1><br></center>
        <center><a href="login"><h3>Go to Login</h3></a></center>
    @endif
@endsection
