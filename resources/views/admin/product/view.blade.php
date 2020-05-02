@extends('admin.layout.index')
@section('header')
    <link rel="stylesheet" href="cssAdmin/font/iconsmind-s/css/iconsminds.css"/>
    <link rel="stylesheet" href="cssAdmin/font/simple-line-icons/css/simple-line-icons.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/datatables.responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.rtl.only.min.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/perfect-scrollbar.css"/>
    <link rel="stylesheet" href="cssAdmin/css/vendor/component-custom-switch.min.css"/>
    <link rel="stylesheet" href="cssAdmin/css/main.css"/>
@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Datatables Default</h1>
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

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table data-table-feature">
                                <thead>
                                <tr>
                                    <th>Location</th>
                                    <th>Model</th>
                                    <th>Daily Price</th>
                                    <th>Created At</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                @foreach($product as $prd)
                                    <tr>
                                        @foreach($location as $lc)
                                            @if($prd->idLocation == $lc->id)
                                                <td>{{$lc->name}}</td>
                                            @endif
                                        @endforeach
                                        @foreach($typeproduct as $tpd)
                                            @if($prd->idModel == $tpd->id)
                                                <td>{{$tpd->name}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{$prd->daily_price}}</td>
                                        <td>{{$prd-> created_at}}</td>
                                        <td> <img src="upload/image/image_product/{{$prd->image}}" style="width:100px;height:100px"></td>
                                        <td>
                                            <a href="admin/product/edit/{{$prd -> id}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <a href="admin/product/delete/{{$prd -> id}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <button style="width: 200px;height: 30px"><a href="admin/product/add">Add New Product</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')
    <script src="cssAdmin/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="cssAdmin/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="cssAdmin/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="cssAdmin/js/vendor/datatables.min.js"></script>
    <script src="cssAdmin/js/dore.script.js"></script>
    <script src="cssAdmin/js/scripts.js"></script>
    <script>
        $.fn.dataTable.ext.errMode = 'none';
        $(".data-table-feature").DataTable({
            sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
            "columns": [
                {"data": "location"},
                {"data": "model"},
                {"data": "dailyprice"},
                {"data": "createat"},
                {"data": "image"},
                {"data": "Action"},

            ],
            drawCallback: function () {
                $($(".dataTables_wrapper .pagination li:first-of-type"))
                    .find("a")
                    .addClass("prev");
                $($(".dataTables_wrapper .pagination li:last-of-type"))
                    .find("a")
                    .addClass("next");

                $(".dataTables_wrapper .pagination").addClass("pagination-sm");
            },
            language: {
                paginate: {
                    previous: "<i class='simple-icon-arrow-left'></i>",
                    next: "<i class='simple-icon-arrow-right'></i>"
                },
                search: "_INPUT_",
                searchPlaceholder: "Search...",
                lengthMenu: "Items Per Page _MENU_"
            },
        });
    </script>
@endsection
