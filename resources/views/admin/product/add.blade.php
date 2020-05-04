@extends('admin.layout.index')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Form Add Product</h1>
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

                    <h5 class="mb-4">Add New Product</h5>

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
                            <form  action="admin/product/add" method="POST" class="mb-5" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Name of product</label>
                                        <input name="title" required="" id="input1" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="idLocation" class="form-control">
                                        <option selected disabled> Select the Location</option>
                                        @foreach($Location as $lc)
                                            <option value="{{$lc->id}}">{{$lc-> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="idModel" class="form-control">
                                        <option selected disabled> Select Type of Product</option>
                                        @foreach($Typeproduct as $tpd)
                                            <option value="{{$tpd->id}}">{{$tpd-> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Daily Price</label>
                                        <input name="daily_price" required="" id="input1" type="text" class="form-control">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose Image Product</label>
                                    </div>
                                </div>

                                <button type="submite" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
