@extends('site.layout.master')
@section('title',$post->meta_title?$post->meta_title:$post->title.' | '.$info->meta_title)
@section('keywords',$post->meta_keywords)
@section('description',$post->meta_description)
@section('css')
<style>
    /* sdfsdf */
@charset "UTF-8";



.cssanimations{
    padding-top: 0;
}
.home-gallery{
    border: none;
    padding-top: 0;
    padding-bottom: 50px;
}
.home-gallery ul.gallery{
    text-align: center;
}
.home-gallery ul.gallery li{
    float: none;
    display: inline-block;
    min-height: 168px;
}
.listOuter{
}
.timelineList .container{
}
@media (min-width: 767px) {
    .timelineList{
        position: relative;
        display: block;
        margin: 20px 0;
        margin-top: 50px;
        height: 4px;
        background: #ee1c25;
        padding: 0 30px;
    }
    .timelineBlock{
        display: inline-block;
        padding: 0 4px;
        position: relative;
        top: -12px;
        vertical-align: middle;
        margin-bottom: 36px;
    }
    .timelineImg i {
   
    display: inline-block;
    width: 16px;
    height: 16px;
    margin-top: 2px;
}
    .timelineBlock .line{
        position: absolute;
        height: 4px;
        width: 150px;
        display: block;
        color: #EE1C25;
        background: #EE1C25;
        top: 50%;
        margin-top: -1px;
        left: -134px;
        z-index: 2;
    }
    .timelineBlock .blockTitle {
        position: absolute;
        top: -27px;
        left: -68px;
        display: inline-block;
        text-align: center;
        float: left;
        width: 150px;
        font: bold 16px arial;
        display: none;
        z-index: 3;
    }
    .timelineBlock.active .blockTitle,
    .timelineBlock:hover .blockTitle{
        display: block;
    }
    .onHover .timelineBlock.active .blockTitle{
        display: none;
    }
    .timelineBlock .timelineImg{
        background-color: #ee1c25;
        -webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
        width: 25px;
        height: 25px;
        display: block;
        text-align: center;
        -webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
        -webkit-transition: .15s ease-in-out;
        -moz-transition: .15s ease-in-out;
        -ms-transition: .15s ease-in-out;
        -o-transition: .15s ease-in-out;
        transition: .15s ease-in-out;
        position: relative;
        z-index: 5;
    }
    .timelineImg img{
        display: none;
    }
    /* .timelineImg i{
        display: inline-block;
        width: 16px;
        height: 16px;
        margin-top: 2px;
    } */
    .ion {
    background-image: url(../img/spritesheet.png);
    display: inline-block;
    background-repeat: no-repeat;
    vertical-align: middle;
    width: 20px;
    height: 20px;
}
    .timelineBlock.active .timelineImg,
    .timelineBlock:hover .timelineImg{
        background: #fff;
        border-color: #fff;
        cursor: pointer;
    }
    .timelineBlock.active .timelineImg img,
    .timelineBlock:hover .timelineImg img{
        display: block;
    }
    .timelineBlock.active .timelineImg i,
    .timelineBlock:hover .timelineImg i{
        display: none;
    }

    .timelineBlock.active .timelineImg{
        -webkit-animation: neon4 1.5s ease-in-out infinite alternate;
        -moz-animation: neon4 1.5s ease-in-out infinite alternate;
        animation: neon4 1.5s ease-in-out infinite alternate;
    }
    .timelineBlock .blockContent{
        margin-top: 20px;
        display: none;
        position: absolute;
        left: 0;
    }

    .cd-timeline-img{
        display: none;
    }
    .readMore{
        display: none;
    }
    .cd-timeline-block{
        display: none;
    }
    .cd-timeline-block.active{
        display: block;
    }

    .blockContent img{
        max-width: 600px;
    }
    @-webkit-keyframes neon4 {
      from {
        -webkit-box-shadow: 0 0 10px #fff,
                   0 0 20px  #ee1c25,
                   0 0 30px  #ee1c25; -moz-box-shadow: 0 0 10px #fff,
                   0 0 20px  #ee1c25,
                   0 0 30px  #ee1c25; -khtml-box-shadow: 0 0 10px #fff,
                   0 0 20px  #ee1c25,
                   0 0 30px  #ee1c25; box-shadow: 0 0 10px #fff,
                   0 0 20px  #ee1c25,
                   0 0 30px  #ee1c25;
      }
      to {
        -webkit-box-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,; -moz-box-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,; -khtml-box-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,; box-shadow: 0 0 5px #fff,
                   0 0 10px #fff,
                   0 0 15px #fff,
      }
    }
    @-moz-keyframes neon4 {
        from {
            -webkit-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -moz-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -khtml-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25;
          }
          to {
            -webkit-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -moz-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -khtml-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,
          }
    }
    @-o-keyframes neon4 {
        from {
            -webkit-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -moz-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -khtml-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25;
          }
          to {
            -webkit-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -moz-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -khtml-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,
          }
    }
    @keyframes neon4 {
        from {
            -webkit-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -moz-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; -khtml-box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25; box-shadow: 0 0 10px #fff,
                       0 0 20px  #ee1c25,
                       0 0 30px  #ee1c25;
          }
          to {
            -webkit-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -moz-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; -khtml-box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,; box-shadow: 0 0 5px #fff,
                       0 0 10px #fff,
                       0 0 15px #fff,
          }
    }
}
.blockTitle{
    font-size: 32px;
    margin-bottom: 20px;
    text-align: center;
}
.blockContent{
    text-align: center;
}
@media (max-width: 767px) {
    .timelineList{
        display: none;
    }
    .topTimeline{
        display: none;
    }
    #cd-timeline {
        position: relative;
        padding: 6em 0;
    }
    #cd-timeline::before {
        /* this is the vertical line */
        content: '';
        position: absolute;
        top: 0;
        left: 18px;
        height: 100%;
        width: 4px;
        background: #d7e4ed;
    }
    .cd-timeline-block {
        position: relative;
        margin: 2em 0;
        margin-bottom: 50px;
    }
    .cd-timeline-block:after {
        content: "";
        display: table;
        clear: both;
    }
    .cd-timeline-block:first-child {
        margin-top: 0;
    }
    .cd-timeline-block:last-child {
        margin-bottom: 0;
    }
    .cd-timeline-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 40px;
        height: 40px;
        -webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
    }
    .cd-timeline-img img {
        display: block;
        width: 40px;
        height: 40px;
        position: relative;
        left: 50%;
        top: 50%;
        margin-left: -20px;
        margin-top: -20px;
    }
    .cd-timeline-img.cd-picture {
        background: #fff;
    }

    .cd-timeline-content {
        position: relative;
        margin-left: 60px;
        background: #e9f0f5;
        -webkit-border-radius: 0.25em; -moz-border-radius: 0.25em; -khtml-border-radius: 0.25em; border-radius: 0.25em;
        padding: 1em;
        -webkit-box-shadow: 0 3px 0 #d7e4ed; -moz-box-shadow: 0 3px 0 #d7e4ed; -khtml-box-shadow: 0 3px 0 #d7e4ed; box-shadow: 0 3px 0 #d7e4ed;
        text-align: center;
    }
    .cd-timeline-content:after {
        content: "";
        display: table;
        clear: both;
    }
    .cd-timeline-content::before {
        content: '';
        position: absolute;
        top: 16px;
        right: 100%;
        height: 0;
        width: 0;
        border: 7px solid transparent;
        border-right: 7px solid #e9f0f5;
    }
    .readMore{
        display: inline-block;
        color: #fff;
        text-align: center;
    }
    .readMore:hover{
        text-decoration: underline;
        color: #fff;
    }
    .readMore.hide{
        display: none;
    }

    .readMore img{
        max-width: 480px;
    }
    .blockTitle{
        font-size: 20px;
        position: absolute;
        top: -46px;
    }
    .blockContent{
        display: none;
        text-align: center;
    }
    .blockContent.show{
        display: none;
    }

}

@media (max-width: 480px) {
    #cd-timeline::before{
        left: 11px;
    }
    .cd-timeline-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 25px;
        height: 25px;
        -webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
    }
    .cd-timeline-img img {
        display: block;
        width: 25px;
        height: 25px;
        position: relative;
        left: 50%;
        top: 50%;
        margin-left: -12.5px;
        margin-top: -12.5px;
    }
    .readMore img{
        max-width: 100%;
    }
    .cd-timeline-content{
        margin-left: 42px;
    }
    .cd-timeline-content::before{
        top: 5px;
    }
}
.bbCodeImageFullSize{
    display: none;
}


/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
.fancybox-wrap,
.fancybox-skin,
.fancybox-outer,
.fancybox-inner,
.fancybox-image,
.fancybox-wrap iframe,
.fancybox-wrap object,
.fancybox-nav,
.fancybox-nav span,
.fancybox-tmp
{
    padding: 0;
    margin: 0;
    border: 0;
    outline: none;
    vertical-align: top;
}

.fancybox-wrap {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 8020;
}

.fancybox-skin {
    position: relative;
    background: #f9f9f9;
    color: #444;
    text-shadow: none;
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
            -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}

.fancybox-opened {
    z-index: 8030;
}

.fancybox-opened .fancybox-skin {
    -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
       -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); -khtml-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
}

.fancybox-outer, .fancybox-inner {
    position: relative;
}

.fancybox-inner {
    overflow: hidden;
}

.fancybox-type-iframe .fancybox-inner {
    -webkit-overflow-scrolling: touch;
}

.fancybox-error {
    color: #444;
    font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
    margin: 0;
    padding: 15px;
    white-space: nowrap;
}

.fancybox-image, .fancybox-iframe {
    display: block;
    width: 100%;
    height: 100%;
}

.fancybox-image {
    max-width: 100%;
    max-height: 100%;
}

#fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
    background-image: url('styles/builder1/fancy/fancybox_sprite.png');
}

#fancybox-loading {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -22px;
    margin-left: -22px;
    background-position: 0 -108px;
    opacity: 0.8;
    cursor: pointer;
    z-index: 8060;
}

#fancybox-loading div {
    width: 44px;
    height: 44px;
    background: url('styles/builder1/fancy/fancybox_loading.gif') center center no-repeat;
}

.fancybox-close {
    position: absolute;
    top: -18px;
    right: -18px;
    width: 36px;
    height: 36px;
    cursor: pointer;
    z-index: 8040;
}

.fancybox-nav {
    position: absolute;
    top: 0;
    width: 40%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
    background: transparent url('styles/builder1/fancy/blank.gif'); /* helps IE */
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    z-index: 8040;
}

.fancybox-prev {
    left: 0;
}

.fancybox-next {
    right: 0;
}

.fancybox-nav span {
    position: absolute;
    top: 50%;
    width: 36px;
    height: 34px;
    margin-top: -18px;
    cursor: pointer;
    z-index: 8040;
    visibility: hidden;
}

.fancybox-prev span {
    left: 10px;
    background-position: 0 -36px;
}

.fancybox-next span {
    right: 10px;
    background-position: 0 -72px;
}

.fancybox-nav:hover span {
    visibility: visible;
}

.fancybox-tmp {
    position: absolute;
    top: -99999px;
    left: -99999px;
    visibility: hidden;
    max-width: 99999px;
    max-height: 99999px;
    overflow: visible !important;
}

/* Overlay helper */

.fancybox-lock {
    overflow: hidden !important;
    width: auto;
}

.fancybox-lock body {
    overflow: hidden !important;
}

.fancybox-lock-test {
    overflow-y: hidden !important;
}

.fancybox-overlay {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    display: none;
    z-index: 8010;
    background: url('styles/builder1/fancy/fancybox_overlay.png');
}

.fancybox-overlay-fixed {
    position: fixed;
    bottom: 0;
    right: 0;
}

.fancybox-lock .fancybox-overlay {
    overflow: auto;
    overflow-y: scroll;
}

/* Title helper */

.fancybox-title {
    visibility: hidden;
    font: normal 13px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
    position: relative;
    text-shadow: none;
    z-index: 8050;
}

.fancybox-opened .fancybox-title {
    visibility: visible;
}

.fancybox-title-float-wrap {
    position: absolute;
    bottom: 0;
    right: 50%;
    margin-bottom: -35px;
    z-index: 8050;
    text-align: center;
}

.fancybox-title-float-wrap .child {
    display: inline-block;
    margin-right: -100%;
    padding: 2px 20px;
    background: transparent; /* Fallback for web browsers that doesn't support RGBa */
    background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0, 0, 0, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
    -webkit-border-radius: 15px;
       -moz-border-radius: 15px;
            -webkit-border-radius: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; border-radius: 15px;
    text-shadow: 0 0 0 transparent, 0 1px 2px #222;
    color: #FFF;
    font-weight: bold;
    line-height: 24px;
    white-space: nowrap;
}

.fancybox-title-outside-wrap {
    position: relative;
    margin-top: 10px;
    color: #fff;
}

.fancybox-title-inside-wrap {
    padding-top: 10px;
}

.fancybox-title-over-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    color: #fff;
    padding: 10px;
    background: #000;
    background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0, 0, 0, .8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
}

/*Retina graphics!*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
       only screen and (min--moz-device-pixel-ratio: 1.5),
       only screen and (min-device-pixel-ratio: 1.5){

    #fancybox-loading, .fancybox-close, .fancybox-prev span, .fancybox-next span {
        background-image: url('styles/builder1/fancy/fancybox_sprite@2x.png');
        background-size: 44px 152px; /*The size of the normal image, half the size of the hi-res image*/
    }

    #fancybox-loading div {
        background-image: url('styles/builder1/fancy/fancybox_loading@2x.gif');
        background-size: 24px 24px; /*The size of the normal image, half the size of the hi-res image*/
    }
}
.news-list{
    padding-top: 10px !important;
}
</style>

@stop
@section('menu')
@include('site.layout.menu_page')

@stop
@section('content')

    <section class="page-title">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h1>Tiến độ {{$post->title}}</h1> </div>
                    <div class="col-md-4 hidden-xs">
                        <ol class="breadcrumb">
                        <?php echo breadcumbs2($page); ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-list topTimeline">
    <?php  
    $calendar=DB::table("calendars")->where("post_id",$post->id)->get();
    ?>
    <div class="timelineList">
        <div class="container">
            <div class="listOuter">
            @foreach($calendar as $item)
            <div class="timelineBlock 
            @if($loop->last)
             active
            @endif
             " data-target="block-{{$item->id}}">
                <span class="line"></span>
                    <div class="timelineImg cdPicture">
                    
                        <i class="ion ion-android-checkmark"></i>
                        <img src="img/logo-40.png" alt="31/1/2015">
                    </div>
                    <h3 class="blockTitle"><a class="contentCtrl">{{date('d/m/Y',$item->time)}}</a></h3>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<section class="home-gallery process-list">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section id="cd-timeline" class="cd-container">
                    @foreach($calendar as $item)
                        <div class="cd-timeline-block  block-{{$item->id}} 
                        @if($loop->last)
                         active
                        @endif
                        ">
                            <div class="cd-timeline-img cd-picture">
                                <img src="styles/builder1/images/logo-40.png" >
                            </div>
                            <div class="cd-timeline-content">
                                <h3 class="blockTitle"><a class="contentCtrl">{{date('d/m/Y',$item->time)}}</a></h3>
                               
                                <div class="blockContent">
                                <p><div style="text-align: center">{{$item->title}}</div></p>
                                    {!!$item->content!!}
                                </div>
                            </div>
                        </div>
                    
                    @endforeach  
                </section>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
</section>

@stop
@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
<script src="js/xenforo.js"></script>

<script type="text/javascript">
(function($) {
    $(window).load(function(){
        $(".loading .table .inner").addClass("fade");
        $('.loading').delay(500).addClass("slide-up");
    });
})(jQuery)
</script>


    <script src="js/process.js"></script>


@stop
