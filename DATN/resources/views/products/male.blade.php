@include('layouts.header')
<section class="section section-top section-full">
    
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-7">
                <h3 class="text-white text-center mb-4 animate" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                        WELLCOME
                </h3>
                <h1 class="text-white text-center mb-4 animate" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                    Flâneur Clothes Shop
                </h1>
                <p class="lead text-white text-muted text-center mb-5 animate" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                        Cảm ơn bạn đã ghé thăm !
                </p>
                <p class="text-center mb-0 animate" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
                    <button target="_blank" class="btn btn-purchase text-white view_products">
                        XEM SẢN PHẨM
                    </button>
                </p>
            </div>
        </div> 
    </div>
</section>

<section class="section" id="pages">
    <div class="container-xl">
      <section class="section bg-light">
            <div class="line line-top"></div>
            <div class="container-xl">
                <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                        <h2 class="text-center mb-4">
                            SẢN PHẨM NỔI BẬT
                        </h2>
                        <p class="text-muted text-center mb-5">
                            “Đừng chạy theo xu hướng. Đừng khiến bản thân lệ thuộc vào thời trang. Hãy để chính mình là người quyết định bản thân sẽ mặc gì cũng như sẽ sống ra sao”.
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                            <a href="/add-to-cart/{{$product->id}}" class="card border-0 mb-3 mb-md-0">
                                    <div class="card-img-top">
                                    <img src="/image/{{$product->image}}" alt="Carousel header" class="img-fluid">
                                    </div>
                                <div class="card-body card-mid">
                                    <h4 class="card-title">
                                        {{$product->name}}
                                    </h4>
                                    <p class="card-text text-muted">
                                        {{$product->content}}
                                    </p>
                                </div>
                            </a> 
                        </div>
                    @endforeach
                </div> 
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">
                        <div class="img-effect img-effect-solid mb-5 mb-md-0">
                                <img src="https://hidanz.com/wp-content/uploads/2020/10/phong-cach-thoi-trang-nam-duong-pho.jpg" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-lg-1 order-md-1" style="text-align: center;">
                        <h2 class="mb-4">
                            Intuitive workflow
                        </h2>
                        <ul class="list-iconed text-muted">
                            <li class="list-iconed-item">
                                Speed up your development process with Gulp and BrowserSync live browser reload
                            </li>
                            <li class="list-iconed-item">
                                Easily adjust the look of any component with tons of additional SASS variables included
                                </li>
                                <li class="list-iconed-item">
                                    Easily make global changes with HTML file @@includes
                                </li>
                        </ul>
                        <a href="documentation.html" class="btn btn-outline-primary">
                            ORDER
                        </a>
                    </div>
                </div>
            </div>
        </section>
      <section class="section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                    <h2 class="text-center mb-4">
                        ÁO NAM
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($male_shirt as $male_shirts)
                <div class="col-md-4">
                        <a href="/add-to-cart/{{$male_shirts->id}}" class="card border-0 mb-3 mb-md-0">
                                <div class="card-img-top">
                                <img src="/image/{{$male_shirts->image}}" alt="Carousel header" class="img-fluid">
                                </div>
                            <div class="card-body card-mid">
                                <h4 class="card-title">
                                    {{$male_shirts->name}}
                                </h4>
                                <p class="card-text text-muted">
                                    {{$male_shirts->content}}
                                </p>
                            </div>
                        </a> 
                    </div>
                @endforeach
            </div> 
        </div>
      </section>
      <section class="section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6">
                      <h2 class="text-center mb-4">
                        Pricing options
                      </h2>
                      <p class="text-muted text-center mb-5">
                        Secure payment via Stripe or Paypal. 100% money back guarantee.
                      </p>
                  </div>
              </div> 
              <div class="row justify-content-center">
                  <div class="col-md-6 col-lg-4">
                      <div class="card card-lg bg-white card-active mb-3 mb-lg-0">
                            <div class="card-body text-center">
                              <h4 class="card-title">
                                Standard license
                              </h4>
                              <h3 class="card-title font-weight-normal text-pri">
                                $49.00
                              </h3>
                              <ul class="card-text list-iconed">
                                    <li class="list-iconed-item">
                                          Use for a single product
                                    </li>
                                    <li class="list-iconed-item">
                                      Non-paying users only
                                   </li>
                                    <li class="list-iconed-item">
                                      Read&nbsp;<a href="https://themes.getbootstrap.com/licenses/#fullStandardLicense" target="_blank">full description</a>
                                    </li>
                              </ul>
                              <a href="https://themes.getbootstrap.com/product/incline-landing-page-set/" target="_blank" class="btn btn-outline-primary">
                                Purchase now
                              </a>
                            </div>
                      </div> 
                  </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="card card-lg bg-white">
                            <div class="card-body text-center">
                              <h4 class="card-title">
                                Extended license
                              </h4>
                              <h3 class="card-title font-weight-normal text-pri">
                                $490.00
                              </h3>
                              <ul class="card-text list-iconed">
                                    <li class="list-iconed-item">
                                      Use for a single product
                                    </li>
                                  <li class="list-iconed-item">
                                      Paying users allowed
                                  </li>
                                    <li class="list-iconed-item">
                                  Read&nbsp;<a href="https://themes.getbootstrap.com/licenses/#fullExtendedLicense" target="_blank">full description</a>
                                    </li>
                              </ul>
                              <a href="https://themes.getbootstrap.com/product/incline-landing-page-set/" target="_blank" class="btn btn-outline-primary">
                                Purchase now
                              </a>
                           </div>
                      </div>
                    </div>
              </div>
           </div> 
      </section>
      <section class="section bg-light">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="col-md-8">
                      <h3 class="mb-4">
                        Download it from the Bootstrap marketplace
                      </h3>
                      <p class="text-muted mb-4 mb-md-0">
                        Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators. Six month technical support by the theme author is provided.
                      </p>
                  </div>
                  <div class="col-md-auto">
                      <a href="https://themes.getbootstrap.com/product/incline-landing-page-set/" target="_blank" class="btn btn-outline-primary">
                          Purchase now
                      </a>
                  </div>
              </div> 
          </div> 
      </section>
    </div>
</section>

@include('layouts.footer')