@extends('site.layout.master')
@section('title',$post->meta_title?$post->meta_title:$post->title.' | '.$info->meta_title)
@section('keywords',$post->meta_keywords)
@section('description',$post->meta_description)
@section('meta')
    <!-- them-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/range-slider.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/dl-menu.min.css" rel="stylesheet">

@stop
@section('menu')
    @include('site.layout.menu_page')

@stop
@section('content')
    <!--Header Wrap End--><!--Dat Xanh Content Start -->
    <div class="dx_property_content_wrap">
        <!--DX Banner Start--><!--DX Slide Img Detail Start-->
        <section class="dx_sell_detail_slider">
            <div class="container" style="padding:0">
                <div class="col-md-9" style="padding: 0">
                    <div id="jssor_1" class="dx_sell_detail_slider_img">
                        <div data-u="slides" class="dx_sell_detail_img">

                            @foreach($post->relate as $item)
                                <div data-p="144.50" style="display: none;"><img data-u="image" src="{{$item->img}}"
                                                                                 alt="Dự án Sunshine Palace "/><img
                                            data-u="thumb" src="{{$item->img}}" alt="Dự án Sunshine Palace "/></div>
                            @endforeach

                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort01" data-autocenter="1">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div class="w">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                    <div class="c"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator --><span data-u="arrowleft" class="jssora05l"
                                                      style="top:215px;left:8px;"><i
                                    class="fa fa-chevron-left"></i></span><span data-u="arrowright" class="jssora05r"
                                                                                style="top:215px;right:8px;"><i
                                    class="fa fa-chevron-right"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dx_sell_detail_title">
                        <h1>{{$post->title}}</h1>
                        <p>{{$post->address}}</p>
                        <p>Giá: <strong>{{$post->price}}</strong></p>
                    </div>
                    <div class="dx_sell_detail_information">
                        {!!$post->description!!}
                    </div>
                </div>
            </div>
        </section>
        <!--DX Slide Img Detail End-->
        <div class="clearfix"></div>
        <!--Dx Menu Detail Start-->
        <div class="dx_menu_detail_bg">
            <div class="container">
                <div class="dx_menu_detail">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-arrow-circle-o-up"></i></a></li>
                        <li><a href="#section1">Tổng quan </a></li>
                        <li><a href="#section2">Vị trí </a></li>
                        <li><a href="#section3">Tiện ích</a></li>
                        <li><a href="#section4">Mặt bằng</a></li>
                        <li><a href="#section5">Giải pháp tài chính</a></li>
                        <li><a href="#section6">Chính sách bán hàng</a></li>
                        <li class="dx_menu_detail_phone"><a href="tel:{{$post->phone}}"><i class="fa fa-phone"></i>
                                <strong>{{$post->phone}}</strong></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Dx Menu Detail End--><!--Dx Sell Detail Posts Start-->
        <section class="dx_sell_detail_Posts_bg check-detail-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @if($post->uu_dai)
                            <div class="dx_sell_detail_favorable">
                                <div class="dx_sell_detail_favorable_Posts"><h4>Những ưu đãi đặc biệt cho khách
                                        hàng </h4>
                                    <p>{!!$post->uu_dai!!}
                                    </p>
                                </div>
                                <div class="dx_sell_detail_favorable_icon hidden-xs"><i class="fa fa-gift"></i></div>
                            </div>
                        @endif
                        <div class="dx_sell_detail_container" id="section1">
                            <h2>Tổng quan {{$post->title}}</h2>
                            {!!$post->tong_quan!!}
                        </div>
                        <div class="dx_sell_detail_container" id="section2">
                            <h2>Vị trí {{$post->title}}</h2>
                            {!!$post->vi_tri!!}
                        </div>
                        <div class="dx_sell_detail_container" id="section3">
                            <h2>Tiện ích {{$post->title}}</h2>
                            {!!$post->tien_ich!!}
                        </div>
                        <div class="dx_sell_detail_container" id="section4">
                            <h2>Mặt bằng {{$post->title}}</h2>
                            <div>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-pills" role="tablist">
                                    <?php $i = 0; ?>
                                    @foreach($post->tab as $item)
                                        <?php $i++; ?>
                                        <li role="presentation" class="
    @if ($loop->first)
                                                active
@endif
                                                "><a href="#home{{$i}}" aria-controls="home" role="tab"
                                                     data-toggle="tab">{{$item->title}}</a></li>

                                    @endforeach
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php $i = 0; ?>
                                    @foreach($post->tab as $item)
                                        <?php $i++; ?>
                                        <div role="tabpanel" class="tab-pane fade
@if ($loop->first)
                                                in active
@endif
                                                " id="home{{$i}}">{!!$item->content!!}</div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                        <div class="dx_sell_detail_container" id="section5">
                            <h2>Giải pháp tài chính</h2>
                            {!!$post->giai_phap!!}
                        </div>
                        <div class="dx_sell_detail_container" id="section6">
                            <h2>Chính sách bán hàng</h2>
                            {!!$post->chinh_sach!!}
                        </div>
                        <!-- popup mặt bằng -->
                        <div id="popupApartmentType" class="modal fade" role="dialog">
                            <div class="modal-dialog ground-popup-bg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header ground-popup-title">
                                        <div class="col-md-3 col-sm-3 col-xs-3 ground-popup-apartments">
                                            <h5 class="modal-title" id="nameApartmentType">Căn hộ 01</h5>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 ground-popup-hotline">
                                            <h5>Nhận tư vấn miễn phí từ Đất Xanh Miền Bắc</h5>
                                            <p>Hotline</p>
                                            <p>0946809191</p>
                                        </div>
                                    </div>
                                    <div class="modal-body ground-popup-img"><img id="imgApartmentType" src=""></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End popup mặt bằng-->
                    </div>

                    <div class="col-md-3 box_slidebar">

                        <div class="dx_widget_bg">
                            <div class="box_R">
                                <div class="tit_C">
                                    <div class="panel_tit" style="width: 100%"><span class="VNF">Tài liệu dự án</span></div>
                                </div>
                                <div class="detail_R boxtron tintucxehoi_R">
                                    <div class="tailieu_duan">
                                        <ul>
                                            <li>
                                                <i class="icon-pdf"></i>
                                                <a class='title-tailieu'>Bộ tài liệu đầy đủ về {{$post->title}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text_LH">
                                        <div id="bds_right_download1_udpright">
                                            <form action="" method="post">
                                                <ul>
                                                    <li>
                                                        <input name="txtEmail" type="email"
                                                               id="bds_right_download1_txtEmail" class="opop_hotenban"
                                                               placeholder="Nhập email (*)" required/>
                                                    </li>
                                                    <li>
                                                        <input name="txtPhone" type="text"
                                                               id="bds_right_download1_txtPhone" class="opop_sdt"
                                                               placeholder="Nhập số điện thoại (*)" required/>
                                                    </li>
                                                    @if ($success == 1)
                                                        <li>
                                                    <span id="bds_right_download1_lblmsg" style="color:Red;">
                                                        Cảm ơn Quý khách đã sử dụng dịch vụ của chúng tôi.
                                                        Quý khách vui lòng kiểm tra email để tải bảng giá/tài liệu
                                                    </span>
                                                        </li>
                                                    @endif
                                                    <li>
                                                        <input type="hidden" value="{{$info->email_lienhe}}" name="email_lienhe"/>
                                                        <button id="bds_right_download1_lbtSend" class="btn-download"
                                                                type="submit">
                                                            <img src="img/download.gif"/>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                           
                            <div class="clearfix"></div>
                            <!--Timeline Start-->
                            <div class="dx_widget_timeline_sell">
                                <div class="kode_shortcode_hdg">

                                </div>
                                <div class="kf_property_accord">
                                    <?php
                                    $timeline = DB::table('calendars')->where('post_id', $post->id)->orderBy('id', 'desc')->get();
                                    ?>
                                    <div class="kode_goal_wrap">
                                        <div class="accordion" id="section1-1">
                                            <h6>Tiến độ xây dựng </h6>
                                        </div>
                                        <div class="accordion-content goal_des">
                                            <ul>
                                                @foreach($timeline as $item)

                                                    <li><a href='tien-do/{{$post->alias}}.html'>{{$item->title}}
                                                            Ngày {{date('d-m-Y',$item->time)}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--Timeline End--><!--Tin liên quan dự án Start--><!--Tin liên quan dự án End-->
                            <!--Tin thị trường Start-->
                        <!--<div class="dx_widget_news">
                           <?php
                        $tin = DB::table('pages')->select('id', 'alias', 'title')->where("id", $info->chi_tiet_sidebar)->first();
                        $post_tin = DB::table('posts')->select('id', 'page_id', 'alias', 'title')->where("page_id", $tin->id)->take(6)->get();
                        ?>
                                <h6>{{$tin->title}}</h6>
                              <div class="dx_widget_news_list">
                                 <div class="dx_newspaper">
                                    <div><span>Bạn đã đọc những {{$tin->title}} HOT nhất hôm nay chưa?</span></div>
                                    <div><i class="fa fa-newspaper-o"></i></div>
                                 </div>
                                 <div class=" clearfix"></div>
                                 <ul>
                                    @foreach($post_tin as $item)
                            <li><a href="{{$tin->alias}}/{{$item->alias}}-{{$item->id}}.html">{{$item->title}}</a></li>
                                    @endforeach
                                </ul>
                             </div>
                          </div> -->
                            <!--Tin thị trường End--><!--Tính lãi vay Start-->
                            <div class="dx_widget_interest">
                                <h6>Tính lãi vay hàng tháng</h6>
                                <div class="dx_widget_interest_detail">
                                    <div class="dx_widget_interest_detail_cs">
                                        <p class="col-md-6 col-sm-6 col-xs-6">Số tiền vay</p>
                                        <input type="text" class="col-md-6 col-sm-6 col-xs-6" id="money">
                                    </div>
                                    <div class="dx_widget_interest_detail_cs">
                                        <p class="col-md-6 col-sm-6 col-xs-6">Lãi suất (0%)</p>
                                        <input class="col-md-3 col-sm-3 col-xs-3" type="text" id="interest"
                                               maxlength="5">
                                        <select class="col-md-3 col-sm-3 col-xs-3" id="time">
                                            <option value="1">Tháng</option>
                                            <option value="2">Năm</option>
                                        </select>
                                    </div>
                                    <div class="dx_widget_interest_detail_cs">
                                        <p class="col-md-6 col-sm-6 col-xs-6">Thời hạn vay</p>
                                        <input class="col-md-3 col-sm-3 col-xs-3" type="text" id="deadline"
                                               maxlength="2">
                                        <select class="col-md-3 col-sm-3 col-xs-3" id="time2">
                                            <option value="1">Tháng</option>
                                            <option value="2">Năm</option>
                                        </select>
                                    </div>
                                    <div class="dx_widget_interest_detail_cs">
                                        <p class="col-md-6 col-sm-6 col-xs-6">Loại hình</p>
                                        <select class="col-md-6 col-sm-6 col-xs-6" id="type">
                                            <option value="3">Trả góp theo dư nợ giảm dần</option>
                                            <option value="1">Trả góp đều hàng tháng theo lãi suất kép</option>
                                            <option value="2">Trả góp đều hàng tháng theo lãi suất đơn</option>
                                        </select>
                                    </div>
                                    <button type="button" class="dx_md_btn dx_btn_1" id="pc-interest">Tính ngay</button>
                                    <!-- Tính tiền lãi vay -->
                                    <div id="caculated" class="modal fade" role="dialog">
                                        <div class="modal-dialog dx_interest">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header dx_interest_title">
                                                    <h4 class="modal-title">Số tiền thanh toán hàng tháng</h4>
                                                    <p>* Công cụ tính toán trên website chỉ mang tính chất tham khảo</p>
                                                </div>
                                                <div class="modal-body dx_interest_content">
                                                    <div class="dx_interest_content_total">
                                                        <div class="col-md-4 col-sm-4">
                                                            <span>TỔNG TIỀN PHẢI TRẢ<br>(GỐC + LÃI)</span>
                                                            <p class="all-money"></p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <span>TỔNG TIỀN GỐC PHẢI TRẢ</span>
                                                            <p class="before-money"></p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                            <span>TỔNG TIỀN LÃI PHẢI TRẢ</span>
                                                            <p class="all-interest"></p>
                                                        </div>
                                                    </div>
                                                    <div class="dx_interest_content_table">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td>Tháng</td>
                                                                <td>Tiền gốc còn lại</td>
                                                                <td>Tiền gốc trả hàng tháng</td>
                                                                <td>lãi trả hàng tháng</td>
                                                                <td>Tổng tiền trả hàng tháng</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="content-value"></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer dx_interest_close">
                                                    <button type="button" class="dx_md_btn dx_btn_1"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Tính lãi vay End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Dx Sell Detail Posts End-->
        <div class="clearfix"></div>
        <!--Dx Tv Start--><!--Dx Đất Xanh TV Start--><!--Đất Xanh TV Pc Start-->
        <div class="dx_dat_xanh_tv_bg">
            <div class="col-md-4 col-sm-12 no-padding dx_tv_title">
                <?php
                $video = DB::table('videos')->select('img', 'link')->take(4)->get();

                ?>
                <h2>{{$info->home_intro_video1}}</h2>
                <p>{!!$info->home_intro_video2!!}</p>
                <div class="dx_button_all col-md-12 col-sm-12 col-xs-12">
                    <button class="dx_md_btn dx_btn_1 dx_tv_btn"><a href="{{$info->home_intro_video4}}"
                                                                    target="_blank">{{$info->home_intro_video3}}</a>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 no-padding dx_tv_video frameClass">
                {!!$video[0]->link!!}
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 no-padding dx_tv_video_list">
                @foreach($video as $item)
                    <div class="col-md-12 col-sm-3 col-xs-3"><img src="{{$item->img}}" class="video-change"
                                                                  alt='{!!$item->link!!}'>
                    </div>
                @endforeach

            </div>
        </div>
        <!--Đất Xanh TV Pc End-->
        <!--Đất Xanh TV Mobile Start-->
        <div class="dx_dat_xanh_tv_bg_mobile">
            <div class="kf_rent_property owl-carousel owl-theme">
                @foreach($video as $item)
                    <div class="item dx_project_vihomes_list">
                        {!!$item->link!!}
                    </div>
                @endforeach

            </div>
        </div>
        <!--Đất Xanh TV Mobile End-->
        <!--Dx Đất Xanh TV End-->
        <!--Dx Dự Án Đang Bán theo vùng Start-->
        <section class="dx_consulting_services_bg">
            <!--Heading Wrap Start-->
            <div class="dx_heading_1">
                {!!$info->tu_van!!}
            </div>
            <div class="kf_rent_property owl-carousel owl-theme">
                <?php
                $contact = DB::table('contacts')->select('img', 'name')->get();
                ?>
                @foreach($contact as $item)
                    <div class="item dx_consulting_services_list">
                        <a href="javascript:void()"><img src="{{$item->img}}" alt="{{$item->name}}"></a>
                        <h4><a href="javascript:void()">{{$item->name}}</a></h4>
                    </div>
                @endforeach
            </div>
            <!--Heading Wrap End-->
        </section>
        <!--Dx Dịch vụ tư vấn End--><!--DX Đăng Ký Nhận Thông Tin Start-->
        <section class="dx_register_project_bg">
            <div class="col-md-6"></div>
            <div class="col-md-6 dx_register_project_detail">
                <h3>Đăng Ký Nhận Thông Tin Dự Án</h3>
                <p>mới nhất & chính xác nhất</p>
                <ul>
                    <li>Chính sách và tiến độ dự án</li>
                    <li>Thông tin chính thống về dư án</li>
                </ul>
                <ul>
                    <li>Mặt bằng căn hộ</li>
                    <li>Các tài liệu hữu ích khác</li>
                </ul>
                <form action="subcribe" method="post">
                    {{csrf_field()}}
                    <div class="dx_search_field">
                        <input type="text" id="reg-name" placeholder="Họ và tên" name="name" required="">
                    </div>
                    <div class="dx_search_field">
                        <input type="text" id="reg-email" placeholder="Email" name="email">
                    </div>
                    <div class="dx_search_field">
                        <input type="text" name='phone' id="reg-phone" placeholder="Số điện thoại">
                    </div>

                    <div class="dx_search_field">
                        <textarea id="reg-note" name='content' placeholder="Nội dung yêu cầu..."
                                  style="width: 100%; height: 100px"></textarea>
                    </div>
                    <div class="kf_property_field">
                        <button class="btn btn-primary" id="send-register-project">Gửi yêu cầu</button>
                    </div>
                </form>
        </section>
        <!--DX Đăng Ký Nhận Thông Tin End-->
    </div>
    <!-- Dat Xanh Content End -->
    <div class="clearfix"></div>

@stop
@section('script')
    <script>
        $(document).ready(function(){

            var element = $('.dx_widget_bg');
            originalY = element.offset().top;
            console.log(1);

// Space between element and top of screen (when scrolling)
            var topMargin = 20;

// Should probably be set in CSS; but here just for emphasis
            element.css('position', 'relative');

            $(window).on('scroll', function(event) {
                var scrollTop = $(window).scrollTop();
                var topContent = $('.box_slidebar').height() + originalY;

                if (scrollTop < (topContent - 560) ){
                    console.log(scrollTop);
                    element.stop(false, false).animate({
                        top:
                            scrollTop < originalY ? 0 : scrollTop - originalY + topMargin +70
                    }, 300);
                }
            });
        });
    </script>
@stop
