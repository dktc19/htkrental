@extends('layout.index')

@section('content')
    <div class="rq-checkout-wrapper">
        <div class="container">
            <div class="row">
                <div class="panel-group" id="checkout-accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="checkout-method-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method" aria-expanded="true" aria-controls="checkout-method">
                                    01. Checkout Method
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
                            </div>
                            <!-- end .panel-collapse -->
                        @endif
                    </div> <!-- end .panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="billing-information-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-information" aria-expanded="true" aria-controls="billing-information">
                                    02. Billing Information
                                </a>
                            </h4>
                        </div> <!-- end .panel-heading -->
                        <div id="billing-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billing-information-heading">
                            <div class="panel-body">
                                Please select a product to perform Checkout functionality.<br><br><br>
                                <a href="listproduct" class="btn btn-primary">Go to select a product</a>
                            </div> <!-- end .panel-body -->
                        </div> <!-- end .panel-collapse -->
                    </div> <!-- end .panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="shipping-information-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#checkout-accordion" href="#shipping-information" aria-expanded="true" aria-controls="shipping-information">
                                    03. Personal Information
                                </a>
                            </h4>
                        </div> <!-- end .panel-heading -->
                        <div id="shipping-information" class="panel-collapse collapse" role="tabpanel" aria-labelledby="shipping-information-heading">
                            <div class="panel-body">
                                Please select a product to perform Checkout functionality.<br><br><br>
                                <a href="listproduct" class="btn btn-primary">Go to select a product</a>
                            </div> <!-- end .panel-body -->
                        </div> <!-- end .panel-collapse -->
                    </div> <!-- end .panel-default -->
                </div> <!-- end #accordion -->
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </div>
    @endsection
