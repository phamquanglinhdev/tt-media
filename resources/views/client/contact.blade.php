@extends("layouts.client")
@section("content")

    <div class="container group-contact">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="title_contact_text">Liên hệ</h2>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 tab_info_locale">
                <!-- tab -->
                <ul class="nav nav-pills nav-info-locale">
{{--                    <li class="nav-item">--}}
{{--                        <a href="#hcm" data-toggle="tab" class="nav-link ">HỒ CHÍ MINH</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="#hn" data-toggle="tab" class="nav-link active">HÀ NỘI</a>--}}
{{--                    </li>--}}

                </ul>

                <div class="tab-content tab-content-locale">

                    <div class="tab-pane container active" id="hn">
                        <div class="row">
                            <div class="info-left col-lg-6 col-12">
                                <h2 class="title_kd">TRUNG TÂM KINH DOANH HÀ NỘI</h2>
                                <span class="address">Số 15/88, phố Thái Thịnh 2, Phường Thịnh Quang, Quận Đống Đa, Thành phố Hà Nội, Việt Nam</span>
                                <div class="row row-support">
                                    <div class="col-lg-6 col-12 content-support">
                                        <span class="support">Kinh Doanh Tư Vấn</span>
                                        <p>Hotline: <strong>0902.289.115</strong></p>
                                        <p>Mail: <strong>info@ttmediavietnam.com</strong></p>

                                    </div>
                                    <div class="col-lg-6 col-12 content-support">
                                        <span class="support">Hỗ Trợ Kỹ Thuật</span>
                                        <p>Hotline: <strong>1900 63 64 00 (ext: 3)</strong></p>
                                        <p>Mail: <strong>kythuat@ttmediavietnam.com</strong></p>
                                    </div>

                                    <div class="col-lg-12 col-12 content-img-banner-contact">
{{--                                        <img src="{{asset("images/banner_contact.png")}}" alt="">--}}
                                    </div>
                                </div>
                            </div>

                            <div class="info-right col-lg-6 col-12">
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5544801371293!2d105.81613901540213!3d21.010488693776693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac82a75bdb31%3A0x63e6ed9d030a8d6b!2zMTUsIDg4IFAuIFRow6FpIFRo4buLbmgsIFRo4buLbmggUXVhbmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1640904500594!5m2!1svi!2s"
                                        width="100%" height="485.67" frameborder="0" style="border:0;"
                                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Liên hệ qua email -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 container-group-form">
                <div class="top">
                    <h3 class="text_contact_title_email">Liên hệ qua Email</h3>
                    <span>Chọn phòng ban bạn muốn liên hệ, chúng tôi sẽ phản hồi lại trong thời gian sớm nhất!</span>
                </div>
                <div class="bottom">
                    <form id="form_contact_new" action="{{route("contact.store")}}" method="Post" class="form-contact-new">
                        @csrf
                        <div class="row row_input">
                            <div class="col-lg-4 col-12">
                                <input required type="text" placeholder="Họ và tên" name="name">
                            </div>
                            <div class="col-lg-4 col-12">
                                <input required type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-lg-4 col-12">
                                <input required type="number" placeholder="Số điện thoại" name="phone">
                            </div>
                        </div>

                        <div class="row row_input">
                            <div class="col-lg-8 col-12">
                                <input required type="text" placeholder="Tiêu đề" name="title">
                            </div>
                            <div class="col-lg-4 col-12">
                                <select name="room">
                                    <option value="Phòng kinh doanh">Phòng kinh doanh</option>
                                    <option value="Phòng kỹ thuật">Phòng kỹ thuật</option>
                                    <option value="Phòng hành chính">Phòng hành chính</option>
                                </select>
                            </div>
                        </div>

                        <div class="row row_input">
                            <div class="col-lg-12 col-12">
                                <textarea  name="message" placeholder="Nội dung"></textarea>
                            </div>
                        </div>

                        <div class="row row_input">
                            <div class="col-lg-12 col-12 text-center">
                                <input type="submit" class="submit_form_contact" name="submit" value="Gửi">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Liên hệ qua email -->
        </div>
    </div>

@endsection
