<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/assets/css/admin.css" rel="stylesheet" />
        <link href="/assets/css/admin/style.css" rel="stylesheet" />
        <link href="/assets/css/products.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">Flâneur shop</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/admin')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">MENU</div>
                            <a class="nav-link collapsed" type="button" href="{{ url('/admin/products')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sản phẩm
                            </a>
                            <a class="nav-link collapsed" href="{{ url('/admin/categories')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Thể loại
                            </a>
                            <a class="nav-link" href="{{ url('/admin/customers')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                                Khách hàng
                            </a>
                            <a class="nav-link" href="{{ url('/admin/orders')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                                Orders
                            </a>
                            <a class="nav-link" href="{{ url('/admin/coupons')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Phiếu giảm giá
                            </a>
                            <a class="nav-link" href="{{ url('/admin/ourstaff')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Nhân viên
                            </a>
                            <a class="nav-link" href="{{ url('/admin/setting')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Cài đặt
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
       
