<nav class="navbar navbar-default navbarTop belowSlider">
			<div class="container">
				<div class="inner-header gradient">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#nav"> <i class="ion ion-navicon"></i> </button>
						<a class="navbar-brand transition" href="" title="logo-hateco"><img src="{{$info->logo}}" >
						</a>
					</div>
					<div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="nav">
						<ul class="nav navbar-nav main-nav nav-tabs">
							<li class="active"><a class="scrollTo" href="#" title="Trang chủ">Trang chủ</a>
							</li>
							@foreach($page0 as $item)
							<li class="dropdown "><a data-link="gioi-thieu/" href="{{$item->alias}}.html" >{{$item->title}}</a>
								@if(count($item->children)>0)
								<ul class="dropdown-menu" role="menu">
									@foreach($item->children as $item2)
											<li><a class="transition" href="{{$item2->alias}}.html">{{$item2->title}}</a>
									@endforeach
								</ul>
								@endif
							</li>
							@endforeach
							<li class="lien-he.html"><a class="scrollTo" href="#" title="Liên Hệ">Liên Hệ</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right socialNav">
							<li>
								<a href="{{$info->facebook}}" title="facebook" target="_blank"><img src="img/facebook.png" alt="facebook" />
								</a>
							</li>
							<li>
								<a href="{{$info->twitter}}" title="twitter" target="_blank"><img src="img/twitter.png" alt="twitter" />
								</a>
							</li>
							<li>
								<a href="{{$info->google}}" title="gplus" target="_blank"><img src="img/gplus.png" alt="gplus" />
								</a>
							</li>
							<li>
								<a href="{{$info->youtube}}" title="youtube" target="_blank"><img src="img/youtube.png" alt="youtube" />
								</a>
							</li>
							<li>
								<a href="{{$info->skype}}" title="skype" target="_blank"><img src="img/skype.png" alt="skype" />
								</a>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<!-- end inner-header -->
			</div>
			<!-- end container -->
		</nav>