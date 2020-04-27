@extends('admin.layout.index')
@section('content')

    <body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="admin.layout.index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">

                        <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                        <div class="card-body">
                            @if(session('notice'))
                                <div class="alert alert-success">
                                    {{session('notice')}}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Type of Product</th>
                                        <th>Manufacture</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($typeproduct as $ty)
                                        <tr>
                                            <th>{{$ty -> name}}</th>
                                            @foreach($manufacture as $mn)
                                                @if($ty->idManufacture == $mn->id)
                                                    <td>{{$mn->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$ty-> created_at}}</td>
                                            <td>
                                                <a href="admin/typeproduct/edit/{{$ty -> id}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                                <a href="admin/typeproduct/delete/{{$ty -> id}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <button style="width: 200px;height: 30px"><a href="admin/typeproduct/add">Add New Type Product</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2019</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="cssAdmin/assets/demo/datatables-demo.js"></script>
    </body>


@endsection
