@extends('site.layout.master')
@section('title',$page->meta_title?$page->meta_title:$page->title.' | '.$info->meta_title)
@section('keywords',$page->meta_keywords)
@section('description',$page->meta_description)
@section('meta')
<meta property="og:url"           content="{{url()->current()}}" />
<meta property="og:title"         content="{{$page->title}}" />
<meta property="og:description"   content="{{$page->description}}" />
<meta property="og:image"         content="{{$page->img}}" />
@stop
@section('menu')
@include('site.layout.menu_page')
@stop
@section('content')
@include('site.layout.breadcumbs')
@if($page->alias=='du-an')
<?php  
$post=DB::table('posts')->select('page_id','id','alias','title','img')->where("page_id",$page->id)->orderBy('id','desc')->get();
?>
<section class="projects">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @foreach($post as $item)
                    <div class="col-md-6">
                        <div class="project-box">
                            <figure>
                                <a href="{{$page->alias}}/{{$item->alias}}-{{$item->id}}.html" title="{{$item->title}}"> <img src="{{$item->img}}"  /> </a>
                            </figure>
                            <figcaption>
                                <h5>{{$item->title}}</h5> <span class="border"></span> </figcaption>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@else
    <section class="news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-9 wow fadeInRight">
                @if($page->content=="")
                <?php  
                if($page->parent_id==0){
                   $post_page=\App\Post::select('page_id','id','alias','title','img')->whereIn("page_id",getId($page))->orderBy('id','desc')->paginate($info->list_num_pages); 
                }else{
                $post_page=\App\Post::select('page_id','id','alias','title','img')->where("page_id",$page->id)->orderBy('id','desc')->paginate($info->list_num_pages);
                }
                ?>
                <?php $i=0; ?>
                @foreach($post_page as $item)
                <?php $i++; ?>
                
                   <div class="newItem col-md-6 col-xs-12 wow fadeInUp">
                        <div class="news-box">
                            <figure><a href="{{$page->alias}}/{{$item->alias}}-{{$item->id}}.html"><img src="{{$item->img}}" > </a></figure>
                            <h3><a href="{{$page->alias}}/{{$item->alias}}-{{$item->id}}.html">{{$item->title}}</a></h3> <small>{{date('d/m/y',strtotime($item->created_at))}}</small> <span class="border"></span>
                            <p>{{rutgon($item->description,200)}}</p>
                        </div>
                    </div>
                @if($i%2==0)
                <div class="clearfix"></div>
                @endif
                @endforeach
                 

                   
                    <ul class="pagination">
                        {{$post_page->render()}}
                        
                    </ul>
                  @else
                  {!!$page->content!!}
                  @endif
                </div>
                <div class="col-md-3 wow fadeInUp">
                    @include('site.layout.sidebar')
                </div>
            </div>
        </div>
    </section>
@endif
@stop