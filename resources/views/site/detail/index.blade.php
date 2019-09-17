@extends('site.layout.master')
@section('title',$post->meta_title?$post->meta_title:$post->title.' | '.$info->meta_title)
@section('keywords',$post->meta_keywords)
@section('description',$post->meta_description)
@section('meta')
<meta property="og:url"           content="{{url()->current()}}" />
<meta property="og:title"         content="{{$post->title}}" />
<meta property="og:description"   content="{{$post->description}}" />
<meta property="og:image"         content="{{$post->img}}" />
@stop
@section('menu')
@include('site.layout.menu_page')

@stop
@section('content')
@include('site.layout.breadcumbs')

    <section class="news-list services">
        <div class="container">
            <div class="row">
                <div class="col-md-9 wow fadeInRight">
                    <div class="news-box">
                        <h3>{{$post->title}}</h3> <small>{{date('d/m/y',strtotime($post->created_at))}}</small> <span class="border"></span>
                        <p class="lead" style='color:#2F2E33;'>
                        <b>{!!$post->description!!}</b>
                        </p>
                        <p>{!!$post->content!!}</p>
                        <div style="text-align: right">{{$post->source}}</div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp">
                    @include('site.layout.sidebar')
                </div>
            </div>
        </div>
    </section>
@stop