@extends('layout.index')
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="container">
                <div class="rq-title-container bredcrumb-title small">
                    <h2 class="rq-title">Checkout</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="home">Home</a></li>
                        <li><a href="listdetail">Detail Product</a></li>
                        <li class="active">Checkout</li>
                    </ol>
                </div> <!-- end .rq-title-container -->

                <div class="rq-checkout-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="checkout-method-heading">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method" aria-expanded="true" aria-controls="checkout-method">
                                                01. Login to perform booking
                                            </a>
                                        </h4>
                                    </div> <!-- end .panel-heading -->
                                    @if(!isset($user_account))
                                        <div id="checkout-method" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="checkout-method-heading">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="panel-subtitle">
                                                            <p>Register with us for future convenience:</p>
                                                        </div>
                                                        <div class="rq-radiobox-content">
                                                            {{--                                <span class="rq-radiobox">--}}
                                                            {{--                                  <input type="radio" name="checkout-login-method" id="checkout-login-method" value="guest" checked>--}}
                                                            {{--                                  <label for="checkout-login-method">Check as guest</label>--}}
                                                            {{--                                </span>--}}


                                                            <a href="login"> <label for="checkout-login-method-two">Go to Register</label></a>
                                                        </div>
                                                        <div class="panel-subtitle">
                                                            <h5>Register and save time !</h5>
                                                        </div>

                                                        <div class="widget-categories">
                                                            <ul>
                                                                <li>Fast and easy check out</li>
                                                                <li>Easy access to your order history and status</li>
                                                            </ul>
                                                        </div>
                                                    </div> <!-- end .col-md-6 -->
                                                    <div class="col-md-6">
                                                        <div class="panel-subtitle">
                                                            <h5>Already Registered ?</h5>
                                                            <p>Please login below :</p>
                                                        </div>
                                                        <form action="login" class="rq-checkout-form" method="POST">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                            <div class="form-group">
                                                                <label for="login-email">Email Address <span class="required">*</span></label>
                                                                <input type="email" class="rq-form-control small" id="login-email" placeholder="Email" name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="login-password">Password <span class="required">*</span></label>
                                                                <input type="password" class="rq-form-control small" id="login-password" placeholder="Password" name="password">
                                                            </div>
                                                            <div class="login-button">
                                                                <a href="#">Forgot Your Password ?</a>
                                                                <button type="submit" class="rq-btn rq-btn-primary btn-large">Log In</button>
                                                            </div>
                                                        </form>
                                                    </div> <!-- end .col-md-6 -->
                                                </div>
                                            </div> <!-- end .panel-body -->
                                        </div><!-- end .panel-collapse -->
                                    @endif
                                </div> <!-- end .panel-default -->
                                @if(isset($product->id))
                                    <form action="checkout/{{$product->id}}" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="rq-checkout-wrapper">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                                                        <!-- end .panel-default -->
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="shipping-information-heading">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-information" aria-expanded="true" aria-controls="shipping-information">
                                                                        02. Detail product
                                                                    </a>
                                                                </h4>
                                                            </div> <!-- end .panel-heading -->
                                                            <div id="shipping-information" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div class="rq-cart-items">
                                                                        <h4>Your Cart items</h4>
                                                                        <div class="cart-items-table">
                                                                            <div class="table-responsive">
                                                                                <table>
                                                                                    <thead>
                                                                                    <tr class="table-head">
                                                                                        <th>CAR NAME</th>
                                                                                        <th>PRICE/Day</th>
                                                                                        <th>Date of hire</th>
                                                                                        <th>TOTAL Price</th>
                                                                                        <th></th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <img src="upload/image/image_product/{{$product->image}}">

                                                                                            <div class="details">
                                                                                                <h5>{{$product->title}}</h5>
                                                                                                <ul class="items">
                                                                                                    <li>Arrive Date: <span>{{$pickupDate}}</span></li>
                                                                                                    <input value="{{$pickupDate}}" name="pickupDate" type="hidden">
                                                                                                    <li>Return Date: <span>{{$returnDate}}</span> </li>
                                                                                                    <input value="{{$returnDate}}" name="returnDate" type="hidden">
                                                                                                    <li>Pickup Location: <span>
                                                                                    @foreach($location as $lc)
                                                                                                                @if($lc->id == $pickupLocation)
                                                                                                                    {{$lc->name}}
                                                                                                                @endif
                                                                                                            @endforeach
                                                                                </span></li>
                                                                                                    <input value="{{$pickupLocation}}" name="pickupLocation" type="hidden">
                                                                                                    <li>Return Location: <span>@foreach($location as $lc)
                                                                                                                @if($lc->id == $dropLocation)
                                                                                                                    {{$lc->name}}
                                                                                                                @endif
                                                                                                            @endforeach</span></li>
                                                                                                    <input value="{{$dropLocation}}" name="dropLocation" type="hidden">
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>{{$product->daily_price}} $</td>
                                                                                        <td>{{$dayrent}} </td>
                                                                                        <input value="{{$totalprice}}" name="totalprice" type="hidden"><td>{{$totalprice}} $</td>
                                                                                        <td>
                                                                                            <div class="close-edit-btn">
                                                                                                <a href="#"><i class="icon_close"></i></a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end .panel-body -->
                                                            </div>
                                                            <!-- end .panel-collapse -->
                                                        </div>
                                                        <!-- end .panel-default -->
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="billing-information-heading">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-information" aria-expanded="true" aria-controls="billing-information">
                                                                        03. Billing formation
                                                                    </a>
                                                                </h4>
                                                            </div><!-- end .panel-heading -->
                                                            @if(isset($user_account))
                                                                <div id="billing-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billing-information-heading">
                                                                    <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                                                                    <input type="text" id="fname" name="name" placeholder="Your name"  style="width: 100%" value="{{$user_account->name}}">

                                                                    <label for="email"><i class="fa fa-envelope"></i>Email</label><br>
                                                                    <label>If you input incorrect email, the booking will not success</label>
                                                                    <input required type="text" id="lname" name="email" placeholder="You must input the correct email" style="width: 100%" value="{{$user_account->email}}">

                                                                    <label for="adr"><i class="fa fa-bookmark"></i>Address</label>
                                                                    <input type="text" id="adr" name="address" placeholder="Your Address" style="width: 100%" value="{{$user_account->address}}" required>

                                                                    <label for="city"><i class="fa fa-phone"></i>Phone</label>
                                                                    <input type="text" id="phone" name="phone" placeholder="Your Phone" style="width: 100%" value="{{$user_account->phone}}" required>

                                                                </div>
                                                        @endif<!-- end .panel-collapse -->
                                                        </div>
                                                        <!-- end .panel-default -->
                                                        <!-- end .panel-default -->
                                                    </div> <!-- end #accordion -->
                                                </div> <!-- end .row -->
                                            </div> <!-- end .container -->
                                        </div>
                                        @if(isset($user_account))
                                        @if($user_account->active==1)
                                        <button type="submit" class="btn btn-primary"> Submit</button><!-- end .rq-element-wrapper -->
                                            @else <h4>You Must active email to booking</h4>
                                        <a href="http://localhost:8080/FinalPJ/public/email/active/{{$user->id}}">Click to active</a>
                                            @endif
                                            @endif
                                    </form>
                                @endif
                            </div> <!-- end #accordion -->
                        </div> <!-- end .row -->
                    </div> <!-- end .container -->
                </div> <!-- end .rq-element-wrapper -->

            </div> <!-- end .container -->
        </div> <!-- end .rq-content-block -->
    </div>
    @endsection
