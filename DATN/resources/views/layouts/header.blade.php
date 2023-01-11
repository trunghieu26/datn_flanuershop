<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
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
                  <img src="/assets/img/logo.png" width="70px">
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
                              <li class="nav-item dropdown">
                                    <a  class="nav-link" href="/male" id="navbarWelcome">
                                         NAM
                                    </a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a  class="nav-link" href="/female" id="navbarWelcome" >
                                         NỮ
                                  </a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a  class="nav-link " href="#" id="navbarWelcome" >
                                          CÔNG SỞ
                                  </a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a  class="nav-link" href="sale-off" id="navbarWelcome" >
                                          KHUYẾN MÃI
                                  </a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a href="/contact" class="nav-link" id="navbarWelcome">
                                          LIÊN HỆ
                                    </a>
                              </li>
                              <li class="nav-item dropdown">
                                    <span href="" class="nav-link">
                                          <span></span>
                                    </span>
                              </li>
                              <li class="nav-item">
                                    @if(Session::has('user_id'))
                                          @else
                                          <li class="nav-item dropdown">
                                                <a href="/login" class="nav-link" id="navbarWelcome">
                                                      ĐĂNG NHẬP
                                                </a>
                                          </li>
                                    @endif
                              </li>
                              @if(Session::has('user_id'))
                                    <div class="nav-item dropdown">
                                          <a class="nav-link" class="dropdown-toggle " type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                Xin chào {{ Session::get('name')}}
                                          </a>
                                          <ul class="dropdown-menu logout">
                                                <li><a style="color: black" href="/profile">Hồ sơ</a></li>
                                                <li><a style="color: black" href="/logout">Đăng xuất</a></li>
                                          </ul>
                                    </div>
                                    <div class="dropdown">
                                          <a class="btn btn-secondary " href="/list-order" type="button">
                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-danger">{{$quantity}}</span>
                                          </a>
                                    </div>
                                    <div class="dropdown chat-header" style="margin-left: 20px">
                                          <a class="btn btn-secondary " href="/send-message-form" type="button">
                                                <i class="fas fa-sms" aria-hidden="true"></i><span class="badge badge-pill badge-danger"></span>
                                          </a>
                                    </div>
                              @endif
                        </ul>
                  </div>
            </div>
      </nav>
            
