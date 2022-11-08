@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="form col-md-6 col-lg-5">
                <div class="btnAuth">
                    <button class="signUpBtn">SIGN UP</button>
                </div>
                <!------ SignIn Form -------- -->
                <form class="signUp" action="/register" method="post">
                    {{ csrf_field() }}
                    <div class="formGroup">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="formGroup">
                        <input type="text" id="name" name="name" placeholder="User Name">
                    </div>
                    <div class="formGroup">
                        <input type="password" name="password" id="password" placeholder="Password" >
                    </div>
                    <div class="formGroup">
                        <input type="tel" id="tel" name="phone" placeholder="Phone number" >
                    </div>
                    <div class="formGroup">
                        <input type="text" id="address" name="address" placeholder="Address" >
                    </div>
                    <div class="formGroup social-login row">
                        <div class="col-md-6 login_with login_with_facebook">
                            <a rel="noopener" href="" class="social_text">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="col-md-6 login_with login_with_gmail">
                            <a rel="noopener" href="" class="social_text">
                                <i class="fab fa-google"></i> Google
                            </a>
                        </div>
                    </div>
                    <div class="checkBox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                    <span class="text">Tôi đồng ý với điều khoản & điều kiện</span>
                    </div>
                    <div class="formGroup">
                        <button type="submit" class="btn btn-purchase text-white">ĐĂNG KÝ</button>
                    </div>
                </form>
               
                </div>
            </div>
        </div> 
    </div>
</section>
@include('layouts.footer')