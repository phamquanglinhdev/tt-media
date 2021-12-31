<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cnv.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 03:13:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset("images/favicon-cnv.png")}}">

    <meta name="keywords" content="CNV">
    <meta name="robots" content="index,follow,noodp">
    <meta property="og:type" content="website"/>
    <meta property="og:description"
          content="Ứng dụng tiếp thị ưu đãi tới hàng triệu khách hàng. Cho phép đặt bàn, mua hàng làm hài lòng khách hàng qua smartphone của bạn."/>
    <meta property="og:image" content="images/share_face_cnv.jpg"/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:site_name" content="CNV.VN"/>

    <title>Hệ sinh thái bán hàng và chăm sóc khách hàng giúp bạn đột phá trong kinh doanh</title>
    <link href="{{asset("css/bootstrap.min.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/slick.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/animate.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/toastr.min.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("css/css_contact.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("fonts/font-awesome/css/font-awesome.min.css")}}" type="text/css" rel="stylesheet">
    <link href="{{asset("fonts/elegantIcon/elegantIcon.css")}}" type="text/css" rel="stylesheet">

    <link href="{{asset("css/main.css")}}" type="text/css" rel="stylesheet">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61cda7c2c82c976b71c41e3a/1fo5leku4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body>


<!-- Thanh load moi vao trang -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                        <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                <span data-text-preloader="&" class="letters-loading">
                                &
                            </span>
                <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                {{--                <span data-text-preloader="V" class="letters-loading">--}}
                {{--                            V--}}
                {{--                        </span>--}}
                {{--                <span data-text-preloader="I" class="letters-loading">--}}
                {{--                            I--}}
                {{--                        </span>--}}
                {{--                <span data-text-preloader="Ệ" class="letters-loading">--}}
                {{--                            Ệ--}}
                {{--                        </span>--}}
                {{--                <span data-text-preloader="T" class="letters-loading">--}}
                {{--                            T--}}
                {{--                        </span>--}}
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header -->
<header>
    <div class="container">
        <div class="row align-items-center col-mar-0 xs-pad-5">
            <div class="col-lg-2 col-5">
                <a class="logo" href="{{route("index")}}" title="">
                    <img src="{{asset("images/logo.png")}}" alt="" title=""/>
                </a>
            </div>
            @php
                $features = \App\Models\Config::where("type","=","feature")->get();
            @endphp
            <div class="col-lg-10 col-7 text-right static">
                <nav class="main-nav psy-pane">
                    <ul>
                        <li><a class="smooth " href="{{route("index")}}">Trang chủ</a></li>
                        <li><a class="smooth " href="{{route("index")}}#gioi-thieu">Giới thiệu</a></li>
                        <li><a class="smooth " href="{{route("index")}}#dich-vu" title="">Giải pháp</a>
                            <ul>
                                @foreach($features as $item)
                                    <li><a class="smooth" href="{{$item->value}}" title="" target="_blank">
                                            <div class="img"><img src="{{$item->media}}"
                                                                  alt=""
                                                                  title="{{$item->name}}"/></div>
                                            <span><strong>{{$item->name}}</strong>{{$item->optional}}</span>
                                        </a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="smooth " href="{{route("index")}}#khach-hang" title="">Khách hàng</a></li>
                        <li>
                            <a class="smooth " href="#" target="_blank" title="">Trung tâm hỗ
                                trợ</a>

                            <ul class="v2">
                                <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                                <li><a class="smooth" href="#" title="">Hình thức thanh toán</a></li>
                                <li><a class="smooth" href="#" title="">Kết nối đối tác</a></li>
                                <li><a class="smooth" href="#" title="">Tài liệu API</a></li>
                                <li><a class="smooth" href="#" target="_blank" title="">Tuyển
                                        dụng</a></li>
                            </ul>
                            <!--<li><a class="smooth " href="#" title="">Giới thiệu</a></li>
                            <li><a class="smooth " href="#" title="">Bảng giá</a></li>
                            <li><a class="smooth " href="#" title="">Khách hàng</a></li>-->
                            <!-- <li><a class="smooth " href="https://hotro.cnv.vn/" target="_blank" title="">Trung tâm hỗ trợ</a>
                            </li>
                            <li><a class="smooth " href="#" title="">Thông tin</a>
                                <ul class="v2">
                                    <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                                    <li><a class="smooth" href="#" title="">Hình thức thanh toán</a></li>
                                    <li><a class="smooth" href="#" title="">Kết nối đối tác</a></li>
                                    <li><a class="smooth" href="#" title="">Tài liệu API</a></li>
                                    <li><a class="smooth" href="http://tuyendung.cnv.vn/" target="_blank" title="">Tuyển dụng</a></li>
                                </ul>
                            </li> -->
                    </ul>
                </nav>
                <a class="smooth trial-btn" href="{{route("contact")}}" title="">Liên hệ</a>
                <button class="menu-btn v2 m-nav-open" type="button"><i></i></button>
            </div>
        </div>
    </div>
</header>

<!-- Slider -->
<div id="trang-chu" class="slider-cas bg psy-section" style="background-image: url({{asset("images/slider.png")}})">
    <div class="caption">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-12">
                    <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Hệ sinh thái bán hàng và chăm sóc khách hàng
                        giúp bạn đột phá trong kinh doanh</h2>
                    <p class=" wow fadeInUp" data-wow-delay="0.4s">Hơn <span>+10,000</span> cá nhân kinh doanh và doanh
                        nghiệp đã đồng hành cùng chúng tôi!</p>
                    <div class="text-center">
                        <a class="smooth ctrl wow fadeInUp psy-btn" data-wow-delay="0.5s" href="#gioi-thieu" title=""
                           rel="nofollow,noindex">Bắt đầu ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End slider -->

@yield("content")

<!-- Form lien he -->
<div class="md-form bg" id="lien-he">
    <div class="container">
        <div class="phone-ct wow fadeInUp">
            <h2 class="title">Nhập số điện thoại của bạn</h2>
            <p>và chúng tôi sẽ gọi lại</p>
            <form action="https://cnv.vn/contact.php" id="contactForm" method="POST">
                <input type="text" class="numberic" required="" placeholder="1900 63 64 00" name="phone">
                <button type="submit"><i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- End form lien he -->

<!-- Footer -->
<footer>
    <div class="container container-footer">
        <div class="row col-mar-0">
            <div class="col-lg-12 wow fadeInUp">
                <a class="logo" href="#" title="">
                    <img src="{{asset("images/logo2.png")}}" alt="" title=""/>
                </a>

                <h1 class="company_footer">CÔNG TY TNHH GIẢI PHÁP TRUYỀN THÔNG <br> T&T VIỆT NAM </h1>
            </div>

            <div class="col-lg-5 wow fadeInUp col-12">
                <h3 class="f-title">Văn phòng Hà Nội</h3>
                <div class="f-line">Số 15/88, phố Thái Thịnh 2, Phường Thịnh Quang, Quận Đống Đa, <br> Thành phố Hà Nội, Việt Nam
                </div>
                <div class="f-line">Mã số thuế: 0106569935 </div>
                <div class="f-line">Kỹ thuật: 0902.289.115, Hotline: 0902244586</div>
                <div class="f-line">Số điện thoại tiếp nhận phàn nàn, thiếu nại: 0902.289.115</div>
            </div>

            <div class="col-lg-7 col-12">
                <div class="row justify-content-between">
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="f-title">T & T Media HOLDINGS</h4>
                        <ul>
                            <li><a class="smooth" href="#" title="">Về chúng tôi</a></li>
                            <li><a class="smooth" href="#" title="">Bảng giá</a></li>

                            <li><a class="smooth" href="#" title="">Khách hàng</a></li>
                            <li><a class="smooth" href="lien-he.html#" title="">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="f-title">Giải pháp </h4>
                        <ul>
                            <li><a target="_blank" class="smooth" href="https://cnvweb.vn/" title="">T & T Media Web</a></li>
                            <li><a target="_blank" class="smooth" href="https://cnvdata.vn/" title="">T & T Media Data</a></li>
                            <li><a target="_blank" class="smooth" href="https://cnvdata.vn/" title="">T & T Media Education</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-auto col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="f-title">Hỗ trợ</h4>
                        <ul>
                            <li><a class="smooth" href="#" title="">Hướng dẫn sử dụng</a></li>
                            <li><a class="smooth" href="https://cnvloyalty.com/pages/hinh-thuc-thanh-toan" title="">Hình
                                    thức thanh toán</a></li>
                            <li><a class="smooth" href="#" title="">Khuyến mãi</a></li>
                            <li><a class="smooth" href="https://hotro.cnv.vn/" target="_blank" title="">Trung tâm hỗ
                                    trợ</a></li>
{{--                            <li><a class="smooth" href="#" title="">Tài liệu nhà phát triển</a></li>--}}
{{--                            <li><a class="smooth" href="https://tuyendung.cnv.vn/" target="_blank" title="">Tuyển--}}
{{--                                    dụng</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-6 text-lg-left text-center copyright_footer">
                            Copyright © 2020 T & T Media Software. All rights reserved.
                        </div>
                        <div class="col-lg-6 text-lg-right text-center">
                            <a class="smooth" href="#" title="">Quy định sử dụng</a>
                            <a class="smooth" href="#" title="">Chính sách bảo mật</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

{{--    <div class="footer-bottom">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-12">--}}
{{--                    <p class="title_bold">Kinh doanh Hồ Chí Minh</p>--}}
{{--                    <p>Hotline: 028-73000 118 (ext: 1)</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-12">--}}
{{--                    <p class="title_bold">Kinh doanh Hà Nội</p>--}}
{{--                    <p>Hotline: 024-73001 118 (ext: 2)</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-12">--}}
{{--                    <p class="title_bold">Kỹ Thuật</p>--}}
{{--                    <p>Hotline: 1900 63 64 00 (ext: 3)</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-12">--}}
{{--                    <p class="title_bold">Hành Chính Nhân Sự</p>--}}
{{--                    <p>Hotline: 028-73000 118 (ext: 4)</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</footer>

<div class="back-to-top"><i class="ic ic-backtop"></i></div>
<a href="tel:0902244586" title="" class="btn-call">
    <strong>0902244586</strong>
    <span><i class="fa fa-phone"></i></span>
</a>

<!-- Form dang ky dung thu -->
<div id="trial-md" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content trial-md-ct">
            <button type="button" class="md-close" data-dismiss="modal"><i class="ic ic-close"></i></button>
            <h3 class="title">Dùng thử <span>T & T Media platform</span> miễn phí <strong>15</strong> ngày</h3>
            <form>
                <p>Tên cửa hàng của bạn</p>
                <div class="input">
                    <i class="ic ic-house"></i>
                    <input type="text" name="">
                </div>
                <div class="row col-mar-13">
                    <div class="col-sm-6">
                        <p>Họ và tên của bạn</p>
                        <div class="input">
                            <i class="ic ic-user"></i>
                            <input type="text" name="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Số điện thoại</p>
                        <div class="input">
                            <i class="ic ic-phone"></i>
                            <input type="text" class="numberic" name="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Mật khẩu đăng nhập</p>
                        <div class="input">
                            <i class="ic ic-lock"></i>
                            <input type="password" name="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Email đăng ký</p>
                        <div class="input">
                            <i class="ic ic-email"></i>
                            <input type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="smooth">Đăng ký dùng thử</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Link javascript -->
<script src="{{asset("js/jquery-2.2.1.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/wow.min.js")}}"></script>
<script src="{{asset("js/slick.min.js")}}"></script>
<script src="{{asset("js/script.js")}}"></script>
<script src="{{asset("js/toastr.min.js")}}"></script>
<script>
    $('#contactForm').submit(function (e) {
        e.preventDefault();

        var target = $(e.target);
        var url = 'contact.html';
        var data = $(this).serialize();
        var button = target.find('button');

        button.prop('disabled', true);
        button.html("<i class='fa fa-circle-o-notch fa-spin'></i>");

        $.post({
            url: url,
            data: data,
            success: function (status) {
                if (status) {
                    toastr.success('Chúng tôi đã nhận được thông tin và gọi lại bạn trong thời gian sớm nhất!', 'Thông báo');
                    target.find('button').html("<i class='fa fa-arrow-right'></i>");
                    button.prop('disabled', false);
                    target[0].reset();
                } else {
                    toastr.warning('Gửi thông tin thất bại!', 'Thông báo');
                    target.find('button').html("<i class='fa fa-arrow-right'></i>");
                    button.prop('disabled', false);
                }
            }
        })
    });
</script>
</body>
</html>
