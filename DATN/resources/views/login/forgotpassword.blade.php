@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="width: 100%">
            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center
                    min-vh-100">
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class=" shadow-sm card_forgot_password">
                            <div class="card-body">
                                    <h5>Forgot Password?</h5>
                                    <p class="mb-2">Enter your registered email ID to reset the password
                                    </p>
                                </div>
                                <form action="{{route('forgot.password.link')}}" method="POST"enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="iwj-field">
                                        <label>Email</label>
                                        <div class="iwj-input"> <i class="fas fa-user"></i>
                                            <input class="gmail_forgot" type="email" name="email" placeholder="Nhập vào email." required="">
                                        </div>
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                                    <div class="mb-3 d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            Reset Password
                                        </button>
                                    </div>
                                    @if(Session::has('done'))
                                        <div class="alert alert-success">
                                            {{Session::get('done')}}
                                        </div>
                                    @endif
                                    <span>Don't have an account? <a href="sign-in.html">sign in</a></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
@include('layouts.footer')