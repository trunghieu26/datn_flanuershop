<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Flaneur</title>
</head>
<body>
      <nav class="navbar navbar-expand-xl navbar-togglable fixed-top navbar-dark" id ="0">
            <div class="container-xl">
                  <a class="navbar-brand" href="/">
                  <img src="./assets/img/logo.png" width="70px">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                              <li class="nav-item-divider">
                                    <span class="nav-link">
                                          <span>
                                          </span>
                                    </span>
                              </li>
                              <li class="nav-item">
                                    <a href="" class="nav-link" id="navbarWelcome">
                                          <i class="fab fa-github"></i>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="" class="nav-link" id="navbarWelcome">
                                          <i class="fab fa-twitter"></i>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="" class="nav-link" id="navbarWelcome">
                                          <i class="fab fa-instagram"></i>
                                    </a>
                              </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                              <div class="subnav">
                                    <button class="subnavbtn"> NAM <i class="fa fa-caret-down"></i></button>
                                    <div class="subnav-content">
                                          <a href="#link1" class="dropdown-navbar">ÁO NAM</a>
                                          <a href="#link1" class="dropdown-navbar">QUẦN NAM</a>
                                          <a href="#link1" class="dropdown-navbar">STREET STYLE</a>
                                          <a href="#link1" class="dropdown-navbar">CÔNG SỞ</a>
                                    </div>
                              </div>
                              <div class="subnav">
                                    <button class="subnavbtn"> NỮ <i class="fa fa-caret-down"></i></button>
                                    <div class="subnav-content" >
                                          <a href="#link1" class="dropdown-navbar">CÔNG SỞ</a>
                                          <a href="#link1" class="dropdown-navbar">VÁY ĐẦM</a>
                                          <a href="#link1" class="dropdown-navbar">QUẦN NỮ</a>
                                          <a href="#link1" class="dropdown-navbar">ÁO NỮ</a>
                                    </div>
                              </div>
                              <div class="subnav">
                                    <button class="subnavbtn">PHỤ KIỆN <i class="fa fa-caret-down"></i></button>
                                    <div class="subnav-content">
                                          <a href="#link1" class="dropdown-navbar">PHỤ KIỆN DÀNH CHO NỮ</a>
                                          <a href="#link1" class="dropdown-navbar">PHỤ KIỆN DÀNH CHO NAM</a>
                                    </div>
                              </div>
                              <div class="subnav">
                                    <button class="subnavbtn">NEW <i class="fa fa-caret-down"></i></button>
                                    <div class="subnav-content">
                                          <a href="#link1" class="dropdown-navbar">NEW PRODUCTS </a>
                                          <a href="#link1" class="dropdown-navbar">NEW VOUCHER</a>
                                    </div>
                              </div>
                              <li class="nav-item">
                                    <a href="/contact" class="nav-link" id="navbarWelcome">
                                          LIÊN HỆ
                                    </a>
                              </li>
                              <li class="nav-item-divider">
                                    <span href="" class="nav-link">
                                          <span></span>
                                    </span>
                              </li>
                              <li class="nav-item">
                                    @if(Session::has('name'))
                                          <div class="dropdown">
                                                <a class="dropdown-toggle " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Xin chào {{ Session::get('name') }}
                                                </a>
                                                <ul class="dropdown-menu logout">
                                                      <li><a style="color: black" href="/profile">Profile</a></li>
                                                      <li><a style="color: black" href="/logout">Đăng xuất</a></li>
                                                </ul>
                                                
                                          </div>
                                          @else
                                          <a href="/login" class="nav-link" id="navbarWelcome">
                                                Login
                                          </a>
                                    @endif
                              </li>
                              <li class="nav-item">
                                    <a href="" class="nav-link" data-bs-toggle="offcanvas">
                                          <i class="fas fa-shopping-cart"></i> GIỎ HÀNG
                                    </a>
                              </li>
                        </ul>
                  </div>
            </div>
      </nav>
            
