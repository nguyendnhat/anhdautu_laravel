<aside class="blog-sidebar">
                        <div class="widgets categories">
                        <?php  
                        $page_same=\App\Page::select('id','alias','title','parent_id')->where("parent_id",$page->parent_id)->get();
                        ?>
                            <h2>
                                @if($page_same[0]->parent)
                                {{$page_same[0]->parent->title}}
                                @else
                                Trang chủ
                                @endif
                            </h2>
                        
                            <ul>
                                @foreach($page_same as $item)
                                <li class="cat-item"><a href="{{$item->alias}}.html" title="{{$item->title}}">{{$item->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widgets social-media">
                            <h2>Chia Sẻ</h2>
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="ion ion-social-facebook-w"></i></a> <span>FACEBOOK</span>
                                </li>
                                <li><a href="https://twitter.com/home?status={{url()->current()}}"><i class="ion ion-social-twitter-w"></i></a> <span>TWITTER</span>
                                </li>
                                <li><a href="https://plus.google.com/share?url={{url()->current()}}"><i class="ion ion-social-googleplus-w"></i></a> <span>GOOGLE +</span>
                                </li>
                            </ul>
                        </div>
                        @if(isset($post))
                        <div class="widgets categories">
                            <h2>Tin Tức Khác</h2>
                            <?php  
                            if($page->parent_id==0){
                               $post_relate=\App\Post::select('page_id','id','alias','title','img')->whereIn("page_id",getId($page))->where('id','<>',$post->id)->orderBy('id','desc')->take($info->num_sidebar)->get();
                            }else{
                            $post_relate=\App\Post::select('page_id','id','alias','title','img')->where("page_id",$page->id)->where('id','<>',$post->id)->orderBy('id','desc')->take($info->num_sidebar)->get();
                            }
                           ?>
                            <ul>
                                @foreach($post_relate as $item)
                                <li class="cat-item"><a href="{{$page->alias}}/{{$item->alias}}-{{$item->id}}.html" title="{{$item->title}}">{{$item->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </aside>