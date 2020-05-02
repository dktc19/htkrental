@extends('admin.layout.index')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Form Add User</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">

                <div class="col-12">

                    <h5 class="mb-4">Add New Location</h5>

                    <div class="card mb-4">
                        <div class="card-body">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err){{$err}}<br>
                                    @endforeach
                                </div>
                            @endif


                            @if(session('notice'))
                                <div class="alert alert-success">
                                    {{session('notice')}}
                                </div>
                            @endif
                            <form  action="admin/location/add" method="POST" class="mb-5">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Name of Location</label>
                                        <input name="name" required="" id="input1" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>

                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Address</label>
                                        <input name="address" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Contact Phone</label>
                                        <input name="contactPhone" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
