@extends('admin.layout.index')
@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Form Edit Product</h1>
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

                    <h5 class="mb-4">Edit Product</h5>

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
                            <form  action="admin/product/edit/{{$product->id}}" method="POST" class="mb-5" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="idLocation" class="form-control">
                                        @foreach($Location as $lc)
                                            <option selected value="{{$lc->id}}">{{$lc-> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type Product</label>
                                    <select name="idModel" class="form-control">
                                        @foreach($Typeproduct as $typ)
                                            <option selected value="{{$typ->id}}">{{$typ-> name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Daily Price</label>
                                        <input name="daily_price" class="form-control" placeholder="Input Price" value="{{$product->daily_price}}">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Weight</label>
                                        <input name="weight" required="" id="input1" type="text" class="form-control" value="{{$product->weight}}">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Size</label>
                                        <input name="size" required="" id="input1" type="text" class="form-control" value="{{$product->size}}">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Group Set</label>
                                        <input name="groupset" required="" id="input1" type="text" class="form-control" value="{{$product->groupset}}">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="tooltip-label-right">
                                    <div class="error-l-100 position-relative form-group">
                                        <label>Cassette</label>
                                        <input name="cassette" required="" id="input1" type="text" class="form-control" value="{{$product->cassette}}">
                                        <div class="invalid-tooltip">Label Right!</div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <label>Change Image</label>
                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
