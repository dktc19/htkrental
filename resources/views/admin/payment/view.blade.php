@extends('admin.layout.index')
@section('header')
    <link rel="stylesheet" href="cssAdmin/font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="cssAdmin/font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="cssAdmin/css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="cssAdmin/css/main.css"/>
@endsection

@section('content')

    <main>
        <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table data-table-feature">
                                <thead>
                                <tr>
                                    <th>Name of Payment</th>
                                    <th>Payment Day</th>
                                    <th>Total Price</th>
                                    <th>Created At</th>

                                </tr>
                                </thead>
                                @foreach($payment as $pm)
                                    <tr>
                                        @foreach($paymenttype as $pmt)
                                            @if($pm->idPaymentType == $pmt->id)
                                                <td>{{$pmt->name}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{$pm -> PaymentDate}}</td>
                                        <td>{{$pm->TotalPrice}}</td>
                                        <td>{{$pm -> created_at}}</td>

                                    </tr>
                                @endforeach
                            </table>
                            <button style="width: 200px;height: 30px"><a href="admin/payment/add">Add New Product</a></button>
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
                { "data": "name" },
                { "data": "PaymentDate" },
                { "data": "TotalPrice" },
                { "data": "create_at" },

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
