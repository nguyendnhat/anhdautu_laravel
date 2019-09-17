@extends('site.layout.master')
@section('title','Liên hệ'.' | '.$info->meta_title)
@section('keywords','Liên hệ')
@section('description','Liên hệ')
@section('menu')
@include('site.layout.menu_page')
@stop
@section('css')
<link rel="stylesheet" href="css/typo.css">

@section('content')
<div class="dx_property_content_wrap">
   <div class="dx_contact_bg">
      <div class="container">
         <!--Heading Wrap Start-->
         <div class="dx_heading_1">
            <h3 style='font-size:30px;'>CÁC PHÒNG GIAO DỊCH CỦA CHÚNG TÔI</h3>
         </div>
         <!--Heading Wrap End-->

         <ul class="nav nav-pills dx_search_button_contact">
            @foreach($contact as $item)
            <li class=""><a data-toggle="pill" href="#{{$item->alias}}">{{$item->name}}</a></li>
            @endforeach
            <!-- <li><a data-toggle="pill" href="#lising">Quản lý và cho thuê</a></li> -->
         </ul>
         <div class="tab-content">
         <?php $i=0; ?>
            @foreach($contact as $item)
            <?php $i++; ?>
            <form id="{{$item->alias}}" class="tab-pane fade
            @if($i==1)
            in active
            @endif
            ">
               <div class="dx_heading_contact">
                  {!!$item->content!!}
               </div>
               <!--Google Maps-->
               <div class="clearfix"></div>
               <div class="dx_lease_detail_map">{!!$item->iframe!!}</div>
               <!--End Google Maps-->
            </form>
            @endforeach
            
         </div>
      </div>
   </div>
   <!--DX Đăng Ký Nhận Thông Tin Start-->
   <section class="dx_register_project_bg">
      <div class="col-md-6"></div>
      <div class="col-md-6 dx_contact_detail">
         <h3>Liên hệ</h3>
         @if(Session('thongbao'))
    <div class="alert alert-success"><span class="fa fa-thumbs-o-up"></span>
    {{Session('thongbao')}}
    </div>
    @endif
    
         <p>Vui lòng nhập các thông tin có dấu (*)</p>
         <div class="col-md-12">
         <form action="lien-he.html" method="post">
         {{csrf_field()}}
         <input type="text" placeholder="Họ tên (*)" name="name" required="">
         <input type="text" placeholder="Email của bạn (*)" name="email" required="">
         <input type="text" placeholder="Số điện thoại của bạn (*)" name="phone" required="">
         <input type="text" placeholder="Địa chỉ của bạn (*)" name="address" required="">
         </div>
         <div class="col-md-12"><textarea required="" placeholder="Vui lòng nhập nội dung (*)" name="content"></textarea></div>
         <input type="hidden" name="email_lienhe" value="{{$info->email_lienhe}}">
         <div class="clearfix"></div>
         <div class="col-md-3 ">
            <input type="submit" class="btn btn-danger btn-small" value="Gửi">
         </div>
         
         </form>
      </div>
   </section>
   <!--DX Đăng Ký Nhận Thông Tin End-->
</div>
<div class="clear-fix"></div>
@stop