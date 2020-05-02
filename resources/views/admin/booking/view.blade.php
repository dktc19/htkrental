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
                                        <th>Name of User</th>
                                        <th>Pick up Location</th>
{{--                                        <th>Payment</th>--}}
                                        <th>pickupDay</th>
                                        <th>dropDay</th>
                                        <th>Drop Location</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach($booking as $bk)
                                        <tr>
                                            @foreach($user as $us)
                                                @if($bk->idUser == $us->id)
                                                    <td>{{$us->name}}</td>
                                                @endif
                                            @endforeach
                                            @foreach($location as $lc)
                                                @if($bk->idLocation == $lc->id)
                                                    <td>{{$lc->name}}</td>
                                                @endif
                                            @endforeach
{{--                                            @foreach($paymenttype as $tmp)--}}
{{--                                                @if($bk->idUPayment == $tmp->id)--}}
{{--                                                    <td>{{$tmp->name}}</td>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
                                            <td>{{$bk->pickupDay}}</td>
                                            <td>{{$bk->dropDay}}</td>
                                            @foreach($location as $lc)
                                                @if($bk->idLocation == $lc->id)
                                                    <td>{{$lc->name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$bk-> created_at}}</td>
                                            <td>
                                                <a href="admin/booking/edit/{{$bk -> id}}"
                                                   class="btn btn-sm btn-outline-primary">Edit</a>
                                                <a href="admin/booking/delete/{{$bk -> id}}"
                                                   class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="cssAdmin/assets/demo/datatables-demo.js"></script>
    </body>


@endsection
