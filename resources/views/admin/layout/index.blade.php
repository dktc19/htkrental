<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTK Rental Bike Admin</title>

    <base href="{{asset('')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @if(View::hasSection('header'))
        @yield('header')
    @else
        <link rel="stylesheet" href="cssAdmin/font/iconsmind-s/css/iconsminds.css"/>
        <link rel="stylesheet" href="cssAdmin/font/simple-line-icons/css/simple-line-icons.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap.rtl.only.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/fullcalendar.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/dataTables.bootstrap4.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/datatables.responsive.bootstrap4.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/select2.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/perfect-scrollbar.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/glide.core.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap-stars.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/nouislider.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/bootstrap-datepicker3.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/vendor/component-custom-switch.min.css"/>
        <link rel="stylesheet" href="cssAdmin/css/main.css"/>
        <link rel="icon" href="cssAdmin/img/icon.png"/>
    @endif
</head>

<body id="app-container" class="menu-default show-spinner">
@include('admin.layout.header')
@include('admin.layout.menu')

@yield('content')

<footer class="page-footer">
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <ul class="breadcrumb pt-0 pr-0 float-right">
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Review</a>
                        </li>
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Purchase</a>
                        </li>
                        <li class="breadcrumb-item mb-0">
                            <a href="#" class="btn-link">Docs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@if(View::hasSection('script'))
    @yield('script')
@else
    <script src="cssAdmin/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="cssAdmin/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="cssAdmin/js/vendor/Chart.bundle.min.js"></script>
    <script src="cssAdmin/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="cssAdmin/js/vendor/moment.min.js"></script>
    <script src="cssAdmin/js/vendor/fullcalendar.min.js"></script>
    {{--<script src="cssAdmin/js/vendor/datatables.min.js"></script>--}}
    <script src="cssAdmin/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="cssAdmin/js/vendor/progressbar.min.js"></script>
    <script src="cssAdmin/js/vendor/jquery.barrating.min.js"></script>
    <script src="cssAdmin/js/vendor/select2.full.js"></script>
    <script src="cssAdmin/js/vendor/nouislider.min.js"></script>
    <script src="cssAdmin/js/vendor/bootstrap-datepicker.js"></script>
    <script src="cssAdmin/js/vendor/Sortable.js"></script>
    <script src="cssAdmin/js/vendor/mousetrap.min.js"></script>
    <script src="cssAdmin/js/vendor/glide.min.js"></script>
    <script src="cssAdmin/js/dore.script.js"></script>
    <script src="cssAdmin/js/scripts.js"></script>
@endif

</body>
</html>
