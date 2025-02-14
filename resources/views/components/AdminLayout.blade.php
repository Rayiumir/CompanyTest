<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>میزکار</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/style.css')}}">
</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
            <figure class="imgLogo">
                تست
            </figure>
        </div>
        <div class="text-center p-3">
            <figure class="avatar">
                <img src="img/1.jpg" class="img-fluid" alt="">
            </figure>
            <div class="mt-3">
                <a href="" class="btn btn-secondary btn-sm rounded-3" title="ویرایش پروفایل"><i class="fa-duotone fa-gear"></i></a>
                <a href="" class="btn btn-danger btn-sm rounded-3" title="خروج"><i class="fa-duotone fa-sign-out"></i></a>
            </div>
        </div>
        <div class="mt-3 p-3">
            <div class="d-grid gep-3">
                <a href="index.html" class="btn btn-light text-start border-0 rounded-3 mb-2"><i class="fa-duotone fa-home me-2"></i> پیشخوان </a>
            </div>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" id="menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </a>
        </nav>

        <div class="container-fluid">
            <div class="card-body mt-5">
                تست
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
