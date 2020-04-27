@extends('admin.layout.index')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1>Form Add Role</h1>
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

                <h5 class="mb-4">Add Role</h5>

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
                        <form  action="admin/role/add" method="POST" class="mb-5">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="tooltip-label-right">
                                <div class="error-l-100 position-relative form-group">
                                    <label>Name of Role</label>
                                    <input name="name" required="" id="input1" type="text" class="form-control">
                                    <div class="invalid-tooltip">Label Right!</div>
                                </div>
                            </div>
{{--                            <div class="tooltip-center-top position-relative form-group">--}}
{{--                                <label>Top Center</label>--}}
{{--                                <input name="input2" required="" id="input2" type="text" class="form-control">--}}
{{--                                <div class="invalid-tooltip">Top Center!</div>--}}
{{--                            </div>--}}

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
