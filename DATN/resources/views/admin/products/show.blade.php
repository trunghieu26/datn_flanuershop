@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Chi tiết sản phẩm</h1>
        </div>
        <div class="container-fluid px-4">
            <h1 class="mt-4">{{$product->name}}</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row my-2">
                      <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                        <div class="d-flex align-items-center justify-content-center">
                          <img src="/image/{{$product->image}}" class="img-fluid product-img" alt="product image">
                        </div>
                      </div>
                      <div class="col-12 col-md-7">
                        <h4>{{$product->name}}</h4>
                        <span class="card-text item-company">By <a href="#" class="company-name">Flâneur</a></span>
                        <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                          <h4 class="item-price me-1">{{$product->price}}$</h4>
                        </div>
                        <p class="card-text">Available - <span class="text-success">{{$product->status}}</span></p>
                        <p class="card-text">
                            {{$product->content}}
                        </p>
                        <hr>
                        <div class="product-color-options">
                          <h6>Colors</h6>
                          <ul class="list-unstyled mb-0">
                            <li class="d-inline-block selected">
                              <div class="color-option b-primary">
                                <div class="filloption bg-primary"></div>
                              </div>
                            </li>
                            <li class="d-inline-block">
                              <div class="color-option b-success">
                                <div class="filloption bg-success"></div>
                              </div>
                            </li>
                            <li class="d-inline-block">
                              <div class="color-option b-danger">
                                <div class="filloption bg-danger"></div>
                              </div>
                            </li>
                            <li class="d-inline-block">
                              <div class="color-option b-warning">
                                <div class="filloption bg-warning"></div>
                              </div>
                            </li>
                            <li class="d-inline-block">
                              <div class="color-option b-info">
                                <div class="filloption bg-info"></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <hr>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </main>
@include('admin.footer')