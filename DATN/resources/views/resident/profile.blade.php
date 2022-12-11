@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container contact-index">
        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3"></h5>
                      <p class="text-muted mb-1"></p>
                      <p class="text-muted mb-4"></p>
                      <div class="d-flex justify-content-center mb-2">
                        <a type="button" href="" class="btn btn-outline-primary ms-1">Chỉnh sửa hồ sơ</a>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-12 mb-lg-0">
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fas fa-heart"></i>
                          <a class="mb-0" href="">Đã thích</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fas fa-clock"></i>
                          <a class="mb-0" href="">Đã xem gần đây</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                          <i class="fas fa-cart-plus"></i>
                          <a class="mb-0" href="">Đã mua gần đây</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{$value['0']['name']}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{$value['0']['email']}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{$value['0']['phone']}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">{{$value['0']['address']}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
    </div>
</section>
@include('layouts.footer')