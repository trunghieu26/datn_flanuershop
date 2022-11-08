@include('layouts.header')
<section class="section section-top section-full">
    <div class="bg-cover bg-top" style=""></div>
    <div class="bg-overlay"></div>
    <div class="container contact-index">
        <div class="row justify-content-center align-items-center">
            <div class=" c-box_contact">
                <h1 class="c-title_module">LIÊN HỆ</h1>
                <div class="main">
                    <div class="form-area row">
                        <div class="left col-md-4 c-list_contact">
                            <div class="item">
                                <h3 class="c-title"> CHĂM SÓC KHÁCH HÀNG</h3>
                                <p><strong>TEL:</strong>1800 6650</p>
                                <p><strong>EMAIL:</strong> cskh@sixdo.vn</p>
                            </div>
                            <div class="item">
                                <h3 class="c-title">TUYỂN DỤNG </h3>
                                <p><strong>TEL:</strong></p>
                                <p><strong>EMAIL:</strong></p>
                            </div>                                    
                            <div class="item c-item_recruiment">
                                <p>Để biết thêm thông tin tuyển dụng vui lòng nhấn vào:
                                    <a href="https://sixdo.vn/tuyen-dung" title="Tuyển dụng">
                                        TUYỂN DỤNG                        
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="right col-md-8 c-box_form">
                            <form action="#" method="post" name="contactForm" id="contactForm">
                                <div class="row c-group_form">
                                    <div class="input-box col-md-6">
                                        <input type="text" maxlength="255" name="contact_name" id="contact_name" value="" class="form-control " placeholder="Họ và tên">
                                    </div>
                                    <div class="input-box col-md-6">
                                        <input type="text" maxlength="255" name="contact_email" id="contact_email" value="" class="form-control " placeholder="Email">
                                    </div>
                                    <div class="input-box col-md-6">
                                        <input type="tel" maxlength="255" name="contact_phone" id="contact_phone" value="" class="form-control " placeholder="Số điện thoại *">
                                    </div>
                                    <div class="input-box col-md-6">
                                        <select class="select_box form-control" name="contact_to" id="contact_to">
                                            <option value="">Gửi tới</option>
                                            <option value="2">Chăm sóc KH</option>
                                            <option value="1">Tuyển dụng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box box100">
                                    <input type="text" maxlength="255" class="form-control" placeholder="Tiêu đề" name="contact_title" id="contact_title">
                                </div>
                                <div class="input-box box100">
                                    <textarea rows="4" cols="30" name="message" id="message" placeholder="Nội dung"></textarea>
                                </div>
                                <div class="input-box box100 boxsubmit">
                                    <a href="javascript:void(0)" class="c-btn_submit" id="submitForm" title="gửi ngay">
                                        gửi ngay <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                                            <path d="M11.828,17.5V13.731H3V7.269h8.828V3.5L19,10.5Z" transform="translate(-3 -3.5)" fill="#f6f3e4"></path>
                                        </svg>
                                    </a>
                                </div>
                                <input type="hidden" name="return" value="L2xpZW4taGU=">
                                <input type="hidden" name="module" value="contact">
                                <input type="hidden" name="view" value="contact">
                                <input type="hidden" name="task" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<section>
    <div class="container-location">
        <div class="row">
            <div class="col-7">
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.733396988452!2d108.24787032929306!3d15.975293053560401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2sVietnam%20-%20Korea%20University%20of%20Information%20and%20Communication%20Technology.!5e0!3m2!1sfr!2s!4v1664180090289!5m2!1sfr!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-5">
                <div class="left  c-list_contact">
                    <div class="item">
                        <h3 class="c-title"> ĐỊA CHỈ </h3>
                        <p><i class="fas fa-map-marker"></i> : 470 Đường Trần Đại Nghĩa, Khu đô thị, Ngũ Hành Sơn, Đà Nẵng 550000, Viêt Nam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')