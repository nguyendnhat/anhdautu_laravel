@extends('site.layout.master')
@section('title',$info->meta_title)
@section('keywords',$info->meta_keywords)
@section('description',$info->meta_description)
@section('menu')
@include('site.layout.menu')
@stop
@section('content')
    <section class="home-services wow fadeInUp" id="galleryOverview">
    <?php  
    $page_home_1=\App\Page::select('id','title','parent_id','alias')->where('id',$info->home_id1)->first();
    if($page_home_1->parent_id==0){
    	$post_home_1=\App\Post::select('title','alias','id','page_id','description','img','page_id')->whereIn("page_id",getId($page_home_1))->take($info->home_num_id1)->orderBy('id','desc')->get();
    }else{
    	$post_home_1=\App\Post::select('title','alias','id','page_id','description','img','page_id')->where('page_id',$page_home_1->id)->take($info->home_num_id1)->orderBy('id','desc')->get();
    }
    $post_home_shift1=$post_home_1->shift();
    $post_home_shift2=$post_home_1->splice(0,5);
    ?>
		<div class="container">
			<div class="col-xs-12 text-center" id="tin-tuc">
				<div class="title-box">
					<h2>{{$page_home_1->title}}</h2>
					<span></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="dx_market_news_top">
					@if($post_home_shift1)
						<a href="{{$post_home_shift1->page->alias}}/{{$post_home_shift1->alias}}-{{$post_home_shift1->id}}.html"><img src="{{$post_home_shift1->img}}" alt="{{$post_home_shift1->title}}">
						</a>
						<h3><a href="{{$post_home_shift1->page->alias}}/{{$post_home_shift1->alias}}-{{$post_home_shift1->id}}.html">{{$post_home_shift1->title}}</a></h3>
						<p>{{$post_home_shift1->description}}</p>
					@endif
					</div>
					<div class="dx_market_news_banner">
						<a href=""><img src="">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-ms-6 col-xs-12">
					@foreach($post_home_shift2 as $item)
					<div class="dx_market_news_list">
						<a href="{{$item->page->alias}}/{{$item->alias}}-{{$item->id}}.html"><img src="{{$item->img}}" >
						</a>
						<h3><a href="{{$item->page->alias}}/{{$item->alias}}-{{$item->id}}.html">{{$item->title}}</a></h3>
					</div>
					@endforeach
				</div>
				<div class="col-md-4 col-ms-6 col-xs-12">
					@foreach($post_home_1 as $item)
					<div class="dx_market_news_list">
						<a href="{{$item->page->alias}}/{{$item->alias}}-{{$item->id}}.html"><img src="{{$item->img}}" >
						</a>
						<h3><a href="{{$item->page->alias}}/{{$item->alias}}-{{$item->id}}.html">{{$item->title}}</a></h3>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
    <div class="clear"></div>
    <section class="our-projects text-center" id="du-an">
		<div class="container">
		<?php  
		$page_home_2=DB::table('pages')->select('id','title','alias')->where('id',$info->home_id2)->first();
		$post_id2=DB::table('posts')->select('id','title','alias','page_id','img','investment_capital','large','finish')->where("page_id",$page_home_2->id)->orderBy('id','desc')->take($info->home_num_id2)->get();
		?>
			<div class="title-box sec-title wow fadeInLeft">
				<h2>{{$page_home_2->title}} Của Chúng Tôi</h2> <span></span> </div>
			<div class="projects-container filter-list clearfix">
				@foreach($post_id2 as $item)
				<article class="project-box mix mix_all mall architecture">
					<figure class="image"> <img src="{{$item->img}}" alt="{{$item->title}}" />
						<a href="{{$page_home_2->alias}}/{{$item->alias}}-{{$item->id}}.html" class="lightbox-image zoom-icon">
							<div class="bold">Vị trí dự án</div> <span>{{$item->investment_capital}}</span>
							<div class="bold">Tiến độ bàn giao</div> <span>{{$item->large}}</span> </a>
					</figure>
					<div class="text-content">
						<div class="text"> <span class="cat">
						@if($item->finish==2)
										Đã Hoàn Thành
						@else
						Chưa hoàn thành
						@endif
										
									</span>
							<h3>{{$item->title}}</h3> </div>
					</div>
				</article>
				@endforeach
			</div>
		</div>
	</section>
    
    <div class="dx_dat_xanh_tv_bg">
		<div class="col-md-4 col-sm-12 no-padding dx_tv_title">
			<?php  
			$video=DB::table('videos')->take(4)->get();
			
			?>
			<h2>{{$info->home_intro_video1}}</h2>
			<p>{!!$info->home_intro_video2!!}</p>
			<div class="dx_button_all col-md-12 col-sm-12 col-xs-12">
				<button class="dx_md_btn dx_btn_1 dx_tv_btn"><a href="{{$info->home_intro_video4}}" target="_blank">{{$info->home_intro_video3}}</a>
				</button>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 no-padding dx_tv_video frameClass">
			{!!$video[0]->link!!}
		</div>
		<div class="col-md-2 col-sm-12 col-xs-12 no-padding dx_tv_video_list">
			@foreach($video as $item)
			<div class="col-md-12 col-sm-3 col-xs-3"><img src="{{$item->img}}" class="video-change" alt='{!!$item->link!!}'>
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
	<section class="dx_project_selling_bg">
		<!--Heading Wrap Start-->
		<div class="dx_heading_1">
			<h2>Dự án đang bán</h2>
		</div>
		<!--Heading Wrap End-->
		<div class="container">
		<?php  
		$sold_duan=DB::table('pages')->select('alias','id')->where("alias",'du-an')->first();
		//dd($sold_duan);
		$sold_duan2=DB::table('posts')->select('page_id','alias','status','img','title','id')->where([["page_id",$sold_duan->id],['status',1]])->take(3)->orderBy('id','desc')->get();
		?>
			<div class="dx_project_selling_list">
				@foreach($sold_duan2 as $item)
				<div class="col-md-4 col-sm-4 dx_project_selling">
					<a href="{{$sold_duan->alias}}/{{$item->alias}}-{{$item->id}}.html"><img src="{{$item->img}}" >
					</a>
					<h4><a href="{{$sold_duan->alias}}/{{$item->alias}}-{{$item->id}}.html">{{$item->title}}</a></h4>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!--Dx Dự Án Đang Bán theo vùng End-->
	<!--Dx Tư Vấn Start-->
	<?php $page_help1=DB::table('pages')->select('id','alias','title')->where('id',$info->help_page1)->first(); ?>
	<div class="dx_suicide_bg" >
		<div class="col-md-12 dx_suicide_list_1" id="tu-van">
			<div class="col-md-6 dx_suicide_img">
				<a href="{{$page_help1->alias}}.html"><img src="{{$info->help_img1}}">
				</a>
			</div>
			<div class="col-md-6 dx_suicide_title">
				<h3>{{$page_help1->title}}</h3>
				<p>{!!$info->help_description1!!}</p>
				<button class="dx_md_btn dx_btn_1 dx_tv_btn_01"><a href="{{$page_help1->alias}}.html">Xem thêm</a>
				</button>
			</div>
		</div>
	<?php $page_help2=DB::table('pages')->select('id','alias','title')->where('id',$info->help_page2)->first(); ?>
		<div class="col-md-12 dx_suicide_list_2" >
			<div class="col-md-6 dx_suicide_title">
				<h3>{{$page_help2->title}}</h3>
				<p>{!!$info->help_description2!!}</p>
				<button class="dx_md_btn dx_btn_1 dx_tv_btn_01"><a href="{{$page_help2->alias}}.html">Xem thêm</a>
				</button>
				</button>
			</div>
			<div class="col-md-6 dx_suicide_img">
				<a href="{{$page_help2->alias}}.html"><img src="{{$info->help_img2}}">
				</a>
			</div>
		</div>
	</div>
	<!--Dx Tư Vấn End-->
	<!--Dx Tại Sao Lựa Chọn DX Start-->
	<section class="dx_why_choose_bg">
		<div class="container">
			<!--Heading Wrap Start-->
			<div class="dx_heading_1">
				<h2>{{$info->home_select}}</h2>
			</div>
			<!--Heading Wrap End-->
			<div class="row">
				<div class="col-md-3">
					<div class="dx-action7_content"><a href="#"><i class="fa fa-info"></i></a>
						<h5>{{$info->home_select_1a}}</h5>
						<ul>
							{!!$info->home_select_1b!!}
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dx-action7_content"><a href="#"><i class="fa fa-thumbs-up"></i></a>
						<h5>{{$info->home_select_2a}}</h5>
						<ul>
							{!!$info->home_select_2b!!}
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dx-action7_content"><a href="#"><i class="fa fa-cogs"></i></a>
						<h5>{{$info->home_select_3a}}</h5>
						<ul>
							{!!$info->home_select_3b!!}
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="dx-action7_content"><a href="#"><i class="fa fa-usd"></i></a>
						<h5>{{$info->home_select_4a}}</h5>
						<ul>
							{!!$info->home_select_4b!!}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Dx Tại Sao Lựa Chọn DX End-->
	<!--Dx Ý Kiến Khách Hàng Start-->
	<section class="dx_opinion_bg">
		<div class="container">
			<!--Heading Wrap Start-->
			<div class="dx_heading_1"><div class="dx_heading_p">
			{!!$info->home_intro_customer!!}
			</div>
			</div>
			<!--Heading Wrap End-->
			<div class="kf_testimonial_wrap">
				<ul class="kf_testimonial_slider">
				<?php  
				$customer=DB::table('customers')->get();
				?>
				@foreach($customer as $item)
					<li>
						<div class="kf_testimonial_slide">
							<figure><img src="{{$item->img}}" alt="">
							</figure>
							<div class="kf_testimonial_name">
								<h6>{{$item->name}}</h6>
							</div>
						</div>
						<div class="kf_testimonial_slide_des">
							<p>{!!$item->comment!!}</p>
						</div>
					</li>
				@endforeach
				</ul>

			</div>
		</div>
	</section>
	<!--Dx Ý Kiến Khách Hàng End-->
	<!--Dx Đối Tác Ngân Hàng Start-->
	<section class="dx_partner_bg">
		<!--Heading Wrap Start-->
		<div class="dx_heading_1">
			<h2>{{$info->home_intro_partner2}}</h2>
			<p>{!!$info->home_intro_partner!!}</p>
		</div>
		<!--Heading Wrap End-->
		<div class="kf_property_compnay_bg">
			<div class="container">
				<div class="kf_company_slider owl-carousel owl-theme">
					@foreach($partner as $item)
					<div class="item">
						<div class="kf_compnay_wrap">
							<a href="{{$item->link}}" target="_blank"><img src="{{$item->img}}" alt="">
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

@stop