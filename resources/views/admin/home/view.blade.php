@extends('admin.layout.index')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="icon-cards-row">
                    <div class="glide dashboard-numbers">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <a href="admin/product/view" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-clock"></i>
                                            <p class="card-text mb-0">All products</p>
                                            <p class="lead text-center">{{$allBike}}</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="glide__slide">
                                    <a href="admin/booking/view" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-basket-coins"></i>
                                            <p class="card-text mb-0">All Orders</p>
                                            <p class="lead text-center">{{$allBooking}}</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="glide__slide">
                                    <a href="admin/location/view" class="card">
                                        <div class="card-body text-center">
                                            <i class="iconsminds-air-balloon-1"></i>
                                            <p class="card-text mb-0">All Location</p>
                                            <p class="lead text-center">{{$allLocation}}</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div>
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <a href="admin/user/view" class="card">
                                        <div class="card-body text-center">
                                            <i class="simple-icon-user"></i>
                                            <p class="card-text mb-0">All User</p>
                                            <p class="lead text-center">{{$allUser}}</p>
                                        </div>
                                    </a>
                                </li>
                        </div>
                    </div>
                </div>

            </div>


    </div>

    </div>
</main>
@endsection
