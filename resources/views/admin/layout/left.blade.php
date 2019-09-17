<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <a href="admin"><img src="{{Auth::user()->img}}"  alt="User Image" width="100"></a>
        </div>
        <div class="pull-left info">
          
          
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="admin">
            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
            
          </a>

        </li>

        <li class="treeview
         @if($segment2=='post'|| $segment2=='source'|| $segment2=='calendar')
          active
          @endif
        ">
          <a href="javascript:void()">
            <i class="fa fa-newspaper-o"></i>
            <span>Bài viết</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id='five'
             @if($segment2=='post' || $segment3=='create' )
          active
          @endif
            ><a href="admin/post/create"><i class="fa fa-pencil-square" aria-hidden="true"></i>Thêm bài viết mới</a></li>
            <li id='fivess'
             @if($segment2=='post' || $segment3=='index')
          active
          @endif
            ><a href="admin/post"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh sách bài viết</a></li>
            <li id='fsaivess'
             @if( $segment2=='source')
          active
          @endif
            ><a href="admin/source"><i class="fa fa-book" aria-hidden="true"></i>Quản lý nguồn đăng tin</a></li>
            <li id='fsaivesdss'
             @if( $segment2=='calendar')
          active
          @endif
            ><a href="admin/calendar"><i class="fa fa-external-link-square" aria-hidden="true"></i>Cập nhật tiến độ dự án</a></li>

          </ul>
        </li>
        <li class="treeview
         @if($segment2=='page')
          active
          @endif
        ">
          <a href="javascript:void()">
            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
            <span>Danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li
             @if($segment2=='page' && $segment3=='create')
          class='active'
          @endif
             ><a href="admin/page/create"><i class="fa fa-plus-square"></i>Thêm danh mục mới</a></li>
            <li
            @if($segment2=='page' && $segment3=='')
          class='active'
          @endif
            ><a href="admin/page"><i class="fa fa-clone" aria-hidden="true"></i>Danh sách danh mục</a></li>
            <li  id='sevensfssff'
          @if($segment2=='menu')
          class='active'
          @endif
            ><a href="admin/menu"><i class="fa fa-check-square-o" aria-hidden="true"></i>Quản lý menu</a></li>
          </ul>
        </li>
        <li class="treeview
          @if($segment2=='admin' || $segment2=='slide2')
          active
          @endif
        ">
          <a href="javascript:void()">
            <i class="fa fa-user"></i>
            <span>Tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id='fosdfurf'
          @if($segment2=='admin')
          class='active'
          @endif
            ><a href="admin/admin"><i class="fa fa-sitemap" aria-hidden="true"></i>Danh sách Admin</a></li>
            <li id='fosdfur3fd'
          @if($segment2=='slide2')
          class='active'
          @endif
            ><a href="admin/slide2"><i class="fa fa-picture-o" aria-hidden="true"></i>Slide hình ảnh đăng nhập</a></li>
            
          </ul>
        </li>
                
            <li class="treeview
             @if($segment2=='slide' || $segment2=='subcribe'|| $segment2=='customer'|| $segment2=='doitac'|| $segment2=='video')
          active
          @endif
            ">
          <a href="javascript:void()">
            <i class="fa fa-google-wallet"></i>
            <span>Quản lý</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  id='sevens'
            @if($segment2=='slide')
          class='active'
          @endif
            ><a href="admin/slide"><i class="fa fa-sliders" aria-hidden="true"></i>Quản lý Slide</a></li>
            <li  id='sevensdfs'
            @if($segment2=='customer')
          class='active'
          @endif
            ><a href="admin/customer"><i class="fa fa-phone" aria-hidden="true"></i>Đánh giá của Khách hàng</a></li>
            <li  id='sevesds'
            @if($segment2=='doitac')
          class='active'
          @endif
            ><a href="admin/doitac"><i class="fa fa-coffee" aria-hidden="true"></i>Quản lý Đối tác</a></li>
            <li  id='sevenssdf'
            @if($segment2=='video')
          class='active'
          @endif
            ><a href="admin/video"><i class="fa fa-youtube-square" aria-hidden="true"></i>Quản lý Video</a></li>
            <li  id='sevdfensfssdffs'
            @if($segment2=='subcribe')
          class='active'
          @endif
            ><a href="admin/subcribe"><i class="fa fa-rss" aria-hidden="true"></i>Quản lý đăng ký nhận bản tin</a></li>
            <li  id='sevdfensfssdffs'
                 @if($segment2=='register-file')
                 class='active'
                    @endif
            ><a href="admin/register-file"><i class="fa fa-rss" aria-hidden="true"></i>Quản lý đăng ký nhận file</a></li>
          </ul>
        </li>
            
                    <li class="treeview
                     @if($segment2=='info')
          active      
      
          @endif
                    " id="twenty-one">
          <a href="admin/info/1/edit">
            <i class="fa fa-wrench" aria-hidden="true"></i>
            <span>Cài đặt</span>
          </a>   
        </li> 
        <li class="treeview
                     @if($segment2=='contact')
          active      
      
          @endif
                    " id="twenty-ossne">
          <a href="admin/contact">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span>Liên hệ</span>
          </a>   
        </li> 
        </ul>
          
    </section>
    <!-- /.sidebar -->
  </aside>