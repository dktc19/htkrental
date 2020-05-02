@extends('layout.index')
@section('content')
    <form id="empform" action="processing" method="GET">
        <table id="mytable" class="table table-bordered">
            <thead>
            <th style="width:5%;">UserName</th>
            <th style="width:10%;">Pickup Location</th>
            <th style="width:15%;">Pickup Date</th>
            <th style="width:10%;">Return Date</th>
            <th style="width:10%;">Product</th>
            <th style="width:15%;">Status</th>
            <th style="width:25%;">Actions</th>
            </thead>
            @foreach($booking as $bk)
            <tbody>
            <tr ng-repeat="emp in empoyees">
                @foreach($user as $us)
                    @if($bk->idUser == $us->id)
                <td>{{$us->name}}</td>
                    @endif
                @endforeach
                @foreach($location as $lc)
                    @if($bk->idLocation == $lc->id)
                <td>{{$lc->name}}</td>
                        @endif
                    @endforeach
                <td>{{$bk->pickupDay}}</td>
                <td>{{$bk->dropDay}}</td>
                    @foreach($product as $pr)
                        @if($bk->idProduct == $pr->id)
                <td> {{$pr->title}}</td>
                        @endif
                    @endforeach
                    @if($bk->status == 0)
                    <td>Waiting</td>
                    @else<td>Processing</td>
                    @endif
                <td>
                    <div class="buttons">
                        <a href="processingBooking/{{$bk->id}}" class="btn btn-primary">Perform</a>
                        <a href="processingDelete/{{$bk->id}}" class="btn btn-danger">Cancel</a>
                    </div>
                </td>
            </tr>
            </tbody>
                @endforeach
        </table>
    </form>
    @endsection
