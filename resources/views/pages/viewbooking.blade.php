@extends('layout.index')
@section('content')
    <h1>Your bookings</h1>
    <form id="empform" action="processing" method="GET">
        <table id="mytable" class="table table-bordered">
            <thead>
            <th style="width:5%;">UserName</th>
            <th style="width:10%;">Pickup Location</th>
            <th style="width:15%;">Pickup Date</th>
            <th style="width:10%;">Return Date</th>
            <th style="width:10%;">Product</th>
            <th style="width:10%;">Total Price</th>
            <th style="width:15%;">Status</th>
            </thead>
                <tbody>
                <tr ng-repeat="emp in empoyees">
{{--                    @foreach($user as $us)--}}
{{--                        @if($bk->idUser == $us->id)--}}
{{--                            <td>{{$us->name}}</td>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                    @foreach($location as $lc)--}}
{{--                        @if($bk->idLocation == $lc->id)--}}
{{--                            <td>{{$lc->name}}</td>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                    <td>{{$bk->pickupDay}}</td>--}}
{{--                    <td>{{$bk->dropDay}}</td>--}}
{{--                    @foreach($product as $pr)--}}
{{--                        @if($bk->idProduct == $pr->id)--}}
{{--                            <td> {{$pr->title}}</td>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                    <td>{{$bk->totalprice}}</td>--}}
{{--                    @if($bk->status == 0)--}}
{{--                        <td>Waiting</td>--}}
{{--                    @elseif($bk->status == 1)<td>Processing</td>--}}
{{--                    @else<td>Performing</td>--}}
{{--                    @endif--}}
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                </tr>
                </tbody>
        </table>
    </form>
@endsection
