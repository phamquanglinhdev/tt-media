@extends("layouts.client")
@section("content")
    @php
        $big_features = \App\Models\Config::where("type","=","big_feature")->get();
    @endphp
    <!-- Gioi thieu -->
    <div class="md-wrap psy-section" id="gioi-thieu">
        <div class="md-box1">
            <div class="container">
                <h1 class="md-title wow fadeInUp" style="margin-bottom: 5px;">Là đối tác ủy quyền chính thức<br>của
                    Google
                    tại Việt Nam</h1>
                <div class="md-desc wow fadeInUp" style="color: #000">
                    Với hơn 10 năm kinh nghiệm, Công Nghệ Việt mang đến giải pháp tiếp thị trực tuyến hiệu quả với hệ
                    thống
                    dịch vụ
                    <br>
                    quảng cáo đa dạng cho hàng nghìn doanh nghiệp lớn nhỏ trên khắp Châu Á - Thái Bình Dương
                </div>

                <div class="cnv-logos">
                    <div class="cnv-item">
                        <img src="{{asset("images/logos/cnv.png")}}" alt="">
                    </div>

                    <div class="cnv-item">
                        <img src="{{asset("images/logos/google-partner.png")}}" alt="">
                    </div>
                </div>

                <div class="row align-items-lg-end">
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-5 wow fadeInUp">
                        <div class="cnv-intro-block">
                            <div class="cnv-intro-image">
                                <img src="{{asset("images/gioi-thieu/gt1.png")}}" alt="">
                            </div>

                            <div class="cnv-intro-title">
                                <h3>Tầm nhìn</h3>
                            </div>

                            <div class="cnv-intro-desc">
                                <p>
                                    Chúng tôi đem đến những giá trị đích thực cho khách hàng thông qua việc cung cấp sản
                                    phẩm, dịch vụ chất lương cao.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-5 wow fadeInUp">
                        <div class="cnv-intro-block">
                            <div class="cnv-intro-image">
                                <img src="{{asset("images/gioi-thieu/gt2.png")}}" alt="">
                            </div>

                            <div class="cnv-intro-title">
                                <h3>Sứ mệnh</h3>
                            </div>

                            <div class="cnv-intro-desc">
                                <p>
                                    Chúng tôi góp phần tối ưu hóa ưu thế cạnh tranh của các tổ chức và cá nhân nhờ vào
                                    những
                                    giá trị mà công nghệ thông tin mang lại. Nhờ đó, Quý khách hàng dễ dàng nắm bắt được
                                    những cơ hội mới và đạt tới thành công.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 mb-5 wow fadeInUp">
                        <div class="cnv-intro-block">
                            <div class="cnv-intro-image">
                                <img src="{{asset("images/gioi-thieu/gt3.png")}}" alt="">
                            </div>

                            <div class="cnv-intro-title">
                                <h3>Giá trị cốt lõi</h3>
                            </div>

                            <div class="cnv-intro-desc">
                                <p>
                                    Nhân sự: Tài nguyên giá trị nhất mà chúng tôi có được, chính là đội ngũ nhân sự năng
                                    động, nhiệt tình, trình độ chuyên môn cao. Công Nghệ Việt là một tập thể gắn kết,
                                    hợp
                                    tác chặt chẽ và đam mê trong công việc.
                                </p>
                                <p>
                                    Chất lượng: Chúng tôi tin rằng cần phải cung cấp sản phẩm chất lượng, sáng tạo và
                                    cạnh
                                    tranh cho khách hàng, đó là cách tốt nhất để các sản phẩm đã xuất xưởng được vận
                                    hành ổn
                                    định và hiệu quả.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End gioi thieu -->

    <!-- Giai phap -->
    <div class="md-wrap">
        <div class="shape_top">
            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"
                 class="shape shape_one">
                <defs>
                    <linearGradient>
                        <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95"></stop>
                        <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95"></stop>
                    </linearGradient>
                </defs>
                <path
                    d="M121.891,264.576 L818.042,11.198 C914.160,-23.786 1020.439,25.773 1055.424,121.890 L1308.802,818.041 C1343.786,914.159 1294.227,1020.439 1198.109,1055.422 L501.958,1308.801 C405.840,1343.785 299.560,1294.226 264.576,1198.108 L11.198,501.957 C-23.786,405.839 25.773,299.560 121.891,264.576 Z"></path>
            </svg>
            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"
                 class="shape shape_two">
                <defs>
                    <linearGradient id="PSgrad_0">
                        <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95"></stop>
                        <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95"></stop>
                    </linearGradient>

                </defs>
                <path fill="url(#PSgrad_0)"
                      d="M121.891,264.575 L818.042,11.198 C914.160,-23.786 1020.439,25.772 1055.424,121.890 L1308.802,818.040 C1343.786,914.159 1294.227,1020.439 1198.109,1055.423 L501.958,1308.801 C405.840,1343.785 299.560,1294.226 264.576,1198.107 L11.198,501.957 C-23.786,405.839 25.773,299.560 121.891,264.575 Z"></path>
            </svg>
            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"
                 class="shape shape_three">
                <defs>
                    <linearGradient id="PSgrad_1">
                        <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95"></stop>
                        <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95"></stop>
                    </linearGradient>

                </defs>
                <path fill="url(#PSgrad_1)"
                      d="M1198.109,264.576 L501.958,11.198 C405.840,-23.787 299.560,25.772 264.576,121.891 L11.198,818.041 C-23.786,914.159 25.773,1020.439 121.891,1055.422 L818.042,1308.801 C914.160,1343.785 1020.439,1294.226 1055.424,1198.108 L1308.802,501.957 C1343.786,405.839 1294.227,299.560 1198.109,264.576 Z"></path>
            </svg>
            <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"
                 class="shape shape_four">
                <defs>
                    <linearGradient id="PSgrad_2">
                        <stop offset="0%" stop-color="rgb(76,1,124)" stop-opacity="0.95"></stop>
                        <stop offset="100%" stop-color="rgb(103,84,226)" stop-opacity="0.95"></stop>
                    </linearGradient>

                </defs>
                <path fill="url(#PSgrad_2)"
                      d="M1198.109,264.575 L501.958,11.198 C405.840,-23.787 299.560,25.772 264.576,121.890 L11.198,818.040 C-23.786,914.158 25.773,1020.439 121.891,1055.423 L818.042,1308.801 C914.160,1343.785 1020.440,1294.225 1055.424,1198.107 L1308.802,501.957 C1343.786,405.839 1294.227,299.560 1198.109,264.575 Z"></path>
            </svg>
        </div>

        <div class="md-box1 psy-section" id="dich-vu">
            <div class="container">
                <h1 class="md-title wow fadeInUp">Lựa chọn giải pháp công nghệ mang lại doanh thu cao nhất <br> cho
                    doanh
                    nghiệp của bạn</h1>
                <div class="row">
                    @if(isset($big_features))
                        @foreach($big_features as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-5 wow fadeInUp" data-wow-delay="0.2s">
                                <a href="{{$item->value}}" target="_blank">
                                    <div class="solution">
                                        <div class="head">
                                            <div class="text">
                                                <h2 class="title">{{$item->name}}</h2>
                                                <span>{{explode("||",$item->optional)[0]}}</span>
                                            </div>
                                            <img class="icon" src="{{explode("||",$item->media)[1]}}"
                                                 alt=""
                                                 title=""/>
                                        </div>
                                        <p>{{explode("||",$item->optional)[1]}}</p>
                                        <div class="more">Xem thêm <i class="fa fa-arrow-right"></i></div>
                                        <img class="img" src="{{explode("||",$item->media)[0]}}" alt=""
                                             title=""/>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End giai phap -->

    <!-- Doi tac -->
    <div class="md-partner psy-section" id="khach-hang">
        <div class="container">
            <h1 class="md-title wow fadeInUp">+ 10,000 khách hàng áp dụng giải pháp công nghệ vào doanh nghiệp</h1>
            <div class="md-desc wow fadeInUp">Danh sách khách hàng tiêu biểu</div>
            <div class="partner-cas">
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/20.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/31.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/35.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/41.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/36.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/37.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/7.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/8.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/24.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/247.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/26.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/27.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/28.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/9.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/10.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/11.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/12.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/15.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/16.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/17.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/18.png")}}" alt="" title=""/>
                    </a>
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/19.png")}}" alt="" title=""/>
                    </a>
                </div>
                <div class="slick-slide">
                    <a class="smooth partner" href="#" title="">
                        <img src="{{asset("images/khachhang/33.png")}}" alt="" title=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End doi tac -->
@endsection
