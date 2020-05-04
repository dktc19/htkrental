@extends('layout.index')
@section('content')
    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="rq-title-container bredcrumb-title small">
                <div class="container">
                    <h2 class="rq-title">Information of The User</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">Home</a></li>
                        <li class="active">Information Detail</li>
                    </ol>
                </div>
            </div>
            <div> <!-- start of login form portion -->
                <div class="container">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err){{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('notice'))
                        <div class="alert alert-danger">
                            {{session('notice')}}
                        </div>
                    @endif
                    <div class="rq-login-form">
                        <form action="user" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="row">
                                <div class="col-md-10">
                                    <label>Your Image</label>
                                    <img src="upload/image/image_user/{{$user_account->image}}" style="width:200px;height:200px">
                                </div>
                                <div class="col-md-10">
                                    <label>Change Image</label>
                                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" value="{{$user_account->image}}">
                                </div><br>
                                <div class="col-md-10"><br>
                                    <label>Name</label>
                                    <input type="name" required class="rq-form-control" name="name" value="{{$user_account->name}}">
                                </div>
                                <div class="col-md-10">
                                    <label>Email</label>
                                    <input type="email" required class="rq-form-control" name="email"  readonly value="{{$user_account->email}}">
                                </div>

                                <div class="col-md-10">
                                    <label>Change Your Password</label>
                                    <input type="password" class="rq-form-control password"  name="password" disabled>
                                </div>
                                <div class="col-md-10">
                                    <label>Password Again</label>
                                    <input type="password" class="rq-form-control password" name="passwordAgain" disabled>
                                </div>
                                <div class="col-md-10">
                                    <label>Address</label>
                                    <input type="text" class="rq-form-control" name="address" value="{{$user_account->address}}">
                                </div>
                                <div class="col-md-10">
                                    <label>Gender</label>
                                    <input type="text" class="rq-form-control" name="gender" value="{{$user_account->gender}}">
                                </div>
                                <div class="col-md-10">
                                    <label>Phone</label>
                                    <input type="text" class="rq-form-control" name="phone" value="{{$user_account->phone}}">
                                </div>
                                <div class="col-md-10">
                                    <label>Date of Birth</label>
                                    <input type="date" class="rq-form-control" name="DateofBirth" value="{{$user_account->DateofBirth}}">
                                </div>
                                <div class="col-md-10">
                                    <a href="viewbooking" style="margin-left: auto; font-size: 20px">View Your Booking</a>
                                </div>
                                <div class="col-md-10"><br><br>
                                    <div class="">
                                        <button type="submit" class="rq-btn rq-btn-primary border-radius">Confirm Edit<i class="arrow_right"></i></button>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div> <!-- end login div -->
                </div>
            </div> <!-- end of login form portion -->


            </div><!--  end of registration form portin -->

    </div>

@endsection
@section('script')

@endsection
