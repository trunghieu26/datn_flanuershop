@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="form col-md-6 col-lg-5">
                <div class="btnAuth">
                    <h1 class="loginBtn">Reset Password</h1>
                </div>
                 <!------ Login Form -------- -->
                 <form action="{{route('reset.password')}}" method="POST"enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if(Session::has('fail'))
                        <div class="alert alert-primary">
                            {{Session::get('fail')}}
                        </div>
                     @endif
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="formGroup">
                        <input type="email" placeholder="Email" name="email" >
                    </div>
                    <div class="formGroup">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="formGroup">
                        <input type="password" name="password_confirm" id="password_confirm" placeholder="Password">
                    </div>
                    <div class="formGroup submit">
                        <button type="submit" class="btn btn-purchase text-white">SUBMIT</button>
                    </div>
                </form>
                </div>
            </div>
        </div> 
    </div>
</section>
@include('layouts.footer')