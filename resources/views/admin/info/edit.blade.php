@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Thông tin Website<small>Cập nhật thông tin website</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li>Thông tin website</li>
    </ol>
  </section>

    <!-- Main content -->


  <!-- Nav tabs -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#vi" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i> Chung</a></li>
              <li role="presentation"><a href="#home2" aria-controls="profile2" role="tab" data-toggle="tab"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i> Tin Tức & Dự án (trang chủ)</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-youtube-square" aria-hidden="true"></i> Khu vực Video</a></li>
              <li role="presentation"><a href="#help" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-yelp" aria-hidden="true"></i> Tư vấn</a>
              </li>
              <li role="presentation"><a href="#why" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-question-circle" aria-hidden="true"></i> Tại sao Lựa chọn?</a></li>
              <li role="presentation"><a href="#customer" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-phone" aria-hidden="true"></i> Khách hàng</a></li>
              <li role="presentation"><a href="#partner" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-coffee" aria-hidden="true"></i> Đối tác</a></li>
              <li role="presentation"><a href="#home" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin hỗ trợ</a></li>
              
              <li role="presentation"><a href="#home3" aria-controls="profile2" role="tab" data-toggle="tab"><i class="fa fa-list-ol" aria-hidden="true"></i> Cài đặt số bản tin tại trang danh sách</a></li>
              <li role="presentation"><a href="#tiendo" aria-controls="profile2" role="tab" data-toggle="tab"><i class="fa fa-line-chart" aria-hidden="true"></i> Quản lý ảnh cuối trang chủ</a></li>
              
              <li role="presentation"><a href="#seo" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-rss" aria-hidden="true"></i>  Dành cho SEO</a></li>

        </ul>
      </div>
    </div>
  </div>

  <!-- Tab -->
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/info/{{$info->id}}" class="form-horizontal">
               {{method_field('PUT')}}
              {{csrf_field()}}  
              
                
                            <!-- text input -->
                <div class="form-group">
                  <label class="col-md-2">Favicon</label>
                  <div class="col-md-10">
                  <img id="my_image" src="{{old('favicon',isset($info->favicon)?$info->favicon:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="favicon" type="hidden" value="{{old('favicon',isset($info->favicon)?$info->favicon:'')}}">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-2">Logo</label>
                  <div class="col-md-10">
                                  <img id="my_image1" src="{{old('logo',isset($info->logo)?$info->logo:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage1" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image1" name="logo" type="hidden" value="{{old('logo',isset($info->logo)?$info->logo:'')}}">
                  </div>
                </div> 

           

                 <div class="form-group">
                  <label class="col-md-2">Địa chỉ chân trang bên trái</label>
                  <div class="col-md-10">
                  <textarea name="footer_left" id="footer_left" cols="30" rows="10">
                    {{old('footer_left',isset($info->footer_left)?$info->footer_left:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'footer_left', {
                      height: '250px',

                        });
                </script>
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-md-2">Địa chỉ chân trang bên phải</label>
                  <div class="col-md-10">
                  <textarea name="footer_right" id="footer_right" cols="30" rows="10">
                    {{old('footer_right',isset($info->footer_right)?$info->footer_right:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'footer_right', {
                      height: '250px',

                        });
                </script>
                  </div>
                </div>         
                
                <div class="form-group">
                  <label class="col-md-2">Copyright</label>
                  <div class="col-md-10">
                <input type="text" class="form-control" value="{{old('copyright',isset($info->copyright)?$info->copyright:'')}}" name="copyright">
                  </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
        <div role="tabpanel" class="tab-pane" id="home">
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12 left">
            <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Email nhận thư liên hệ</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('email_lienhe',isset($info->email_lienhe)?$info->email_lienhe:'')}}" name="email_lienhe">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Thông tin hỗ trợ trang chi tiết dự án</label>
                    <div class="col-md-9">
                    <textarea name="tu_van" id="tu_van" cols="30" rows="10">
                    {{old('tu_van',isset($info->tu_van)?$info->tu_van:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'tu_van', {
                      height: '250px',

                        });
                </script>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>

                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Địa chỉ facebook</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('facebook',isset($info->facebook)?$info->facebook:'')}}" name="facebook">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Địa chỉ youtube</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('youtube',isset($info->youtube)?$info->youtube:'')}}" name="youtube">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Địa chỉ google+</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('google',isset($info->google)?$info->google:'')}}" name="google">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Địa chỉ twitter</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('twitter',isset($info->twitter)?$info->twitter:'')}}" name="twitter">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3">Địa chỉ skype</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" value="{{old('skype',isset($info->skype)?$info->skype:'')}}" name="skype">
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              

            </div>
            <!--/.col (right) -->
          </div>
      <!-- /.row -->
    </section>
    </div>
  
  <div role="tabpanel" class="tab-pane" id="home2">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <!-- text input -->
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">chuyên mục đầu tiên(hiện tại là tin thị trường)</label>
                  <div class="col-md-9">
                  
                  <select class="form-control" name="home_id1">

                    
                    <?php echo cate($page0,0,'',old('home_id1',isset($info->home_id1)?$info->home_id1:'')); ?>
                  </select>
                  </div>
                </div> 
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Số tin trong chuyên mục đầu tiên</label>
                  <div class="col-md-9">
                  <input type="number" class="form-control" value="{{old('home_num_id1',isset($info->home_num_id1)?$info->home_num_id1:'')}}" name="home_num_id1">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">chuyên mục thứ 2(hiện tại là dự án)</label>
                  <div class="col-md-9">
                  
                  <select class="form-control" name="home_id2">

                    <option value="0">là chuyên mục gốc</option>
                    <?php echo cate($page0,0,'',old('home_id2',isset($info->home_id2)?$info->home_id2:'')); ?>
                  </select>
                  </div>
                </div> 
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Số tin trong chuyên mục Thứ 2</label>
                  <div class="col-md-9">
                  <input type="number" class="form-control" value="{{old('home_num_id2',isset($info->home_num_id2)?$info->home_num_id2:'')}}" name="home_num_id2">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-md-3">Hotline thứ nhất</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" value="{{old('hotline',isset($info->hotline)?$info->hotline:'')}}" name="hotline">
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-md-2">Ảnh gif hotline thứ nhất</label>
                    <div class="col-md-10">
                        <img id="my_image6" src="{{old('hotline_img',isset($info->hotline_img)?$info->hotline_img:'')}}"  style="border:none;width:120px;height:auto;"><br />
                        <button type="button" id="popupimage6" value="Hình ảnh" style='margin-left:15px;'>
                            Chọn ảnh
                        </button>

                        <input id="image6" name="hotline_img" type="hidden" value="{{old('hotline_img',isset($info->hotline_img)?$info->hotline_img:'')}}">
                    </div>
                </div>

            </div>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-md-3">Hotline thứ 2</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" value="{{old('hotline2',isset($info->hotline2)?$info->hotline2:'')}}" name="hotline2">
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-md-2">Ảnh gif hotline 2</label>
                    <div class="col-md-10">
                        <img id="my_image7" src="{{old('hotline_img2',isset($info->hotline_img2)?$info->hotline_img2:'')}}"  style="border:none;width:120px;height:auto;"><br />
                        <button type="button" id="popupimage7" value="Hình ảnh" style='margin-left:15px;'>
                            Chọn ảnh
                        </button>

                        <input id="image7" name="hotline_img2" type="hidden" value="{{old('hotline_img2',isset($info->hotline_img2)?$info->hotline_img2:'')}}">
                    </div>
                </div>

            </div>
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>

    <div role="tabpanel" class="tab-pane" id="home3">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <!-- text input -->
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Số tin tức trong mỗi chuyên mục tại sidebar</label>
                  <div class="col-md-9">
                  <input type="number" class="form-control" value="{{old('num_sidebar',isset($info->num_sidebar)?$info->num_sidebar:'')}}" name="num_sidebar">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Số tin trong trang dự án</label>
                  <div class="col-md-9">
                  <input type="number" class="form-control" value="{{old('list_num_project',isset($info->list_num_project)?$info->list_num_project:'')}}" name="list_num_project">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Số tin trong trang danh mục</label>
                  <div class="col-md-9">
                  <input type="number" class="form-control" value="{{old('list_num_pages',isset($info->list_num_pages)?$info->list_num_pages:'')}}" name="list_num_pages">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-3">Lụa chọn danh mục hiển thị trong trang chi tiết dự án</label>
                  <div class="col-md-9">
                  
                  <select class="form-control" name="chi_tiet_sidebar">

                    
                    <?php echo cate($page0,0,'',old('chi_tiet_sidebar',isset($info->chi_tiet_sidebar)?$info->chi_tiet_sidebar:'')); ?>
                  </select>
                  </div>
                </div> 
            </div>
            
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
 <div role="tabpanel" class="tab-pane" id="seo">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
           
              
                <!-- text input -->
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Tiêu đề</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_title',isset($info->meta_title)?$info->meta_title:'')}}" name="meta_title">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
             <div class="box-body">
                <div class="form-group">
                  <label class="col-md-2">Meta Description</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_description',isset($info->meta_description)?$info->meta_description:'')}}" name="meta_description">
                  </div>
                </div>

                
              
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Meta Keyword <small>(Dành cho SEO)</small></label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_keywords',isset($info->meta_keywords)?$info->meta_keywords:'')}}" name="meta_keywords">
                  </div>
                </div>
                
            </div>
            
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
    <div role="tabpanel" class="tab-pane" id="video">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
           
              
                <!-- text input -->
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề mục Video-trang chủ</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_intro_video1',isset($info->home_intro_video1)?$info->home_intro_video1:'')}}" name="home_intro_video1">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">lời dẫn Video</label>
                  <div class="col-md-10">
                  <textarea name="home_intro_video2" id="home_intro_video2" cols="30" rows="10">
                    {{old('home_intro_video2',isset($info->home_intro_video2)?$info->home_intro_video2:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_intro_video2', {
                      height: '250px',

                        });
                </script>
                  </div>
                </div>   
            </div>
           
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Slogan mục Video</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_intro_video3',isset($info->home_intro_video3)?$info->home_intro_video3:'')}}" name="home_intro_video3">
                  </div>
                </div>
                
            </div>
             <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Link tới kênh Video</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_intro_video4',isset($info->home_intro_video4)?$info->home_intro_video4:'')}}" name="home_intro_video4">
                  </div>
                </div>
                
            </div>
           
            
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
    <div role="tabpanel" class="tab-pane" id="why">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
           
              
                <!-- text input -->
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Slogan Tại sao lựa chọn?</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_select',isset($info->home_select)?$info->home_select:'')}}" name="home_select">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề 1</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_select_1a',isset($info->home_select_1a)?$info->home_select_1a:'')}}" name="home_select_1a">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tiêu đề 1</label>
                  <div class="col-md-9">
                 <textarea name="home_select_1b" id="home_select_1b" cols="30" rows="10">
                    {{old('home_select_1b',isset($info->home_select_1b)?$info->home_select_1b:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_select_1b', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề 2</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_select_2a',isset($info->home_select_2a)?$info->home_select_2a:'')}}" name="home_select_2a">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tiêu đề 2</label>
                  <div class="col-md-9">
                  <textarea name="home_select_2b" id="home_select_2b" cols="30" rows="10">
                    {{old('home_select_2b',isset($info->home_select_2b)?$info->home_select_2b:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_select_2b', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề 3</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_select_3a',isset($info->home_select_3a)?$info->home_select_3a:'')}}" name="home_select_3a">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tiêu đề 3</label>
                  <div class="col-md-9">
                  <textarea name="home_select_3b" id="home_select_3b" cols="30" rows="10">
                    {{old('home_select_3b',isset($info->home_select_3b)?$info->home_select_3b:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_select_3b', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề 4</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_select_4a',isset($info->home_select_4a)?$info->home_select_4a:'')}}" name="home_select_4a">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tiêu đề 4</label>
                  <div class="col-md-9">
                  <textarea name="home_select_4b" id="home_select_4b" cols="30" rows="10">
                    {{old('home_select_4b',isset($info->home_select_4b)?$info->home_select_4b:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_select_4b', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
           
            
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
        <div role="tabpanel" class="tab-pane" id="partner">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề về đối tác</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('home_intro_partner2',isset($info->home_intro_partner2)?$info->home_intro_partner2:'')}}" name="home_intro_partner2">
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">lời dẫn về đối tác</label>
                  <div class="col-md-10">
                  <textarea name="home_intro_partner" id="home_intro_partner" cols="30" rows="10">
                    {{old('home_intro_partner',isset($info->home_intro_partner)?$info->home_intro_partner:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_intro_partner', {
                      height: '250px',

                        });
                </script>
                  </div>
                </div>  
                
            </div> 

        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>

     <div role="tabpanel" class="tab-pane" id="customer">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">lời dẫn về khách hàng</label>
                  <div class="col-md-10">
                  <textarea name="home_intro_customer" id="home_intro_customer" cols="30" rows="10">
                    {{old('home_intro_customer',isset($info->home_intro_customer)?$info->home_intro_customer:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'home_intro_customer', {
                      height: '250px',

                        });
                </script>
                  </div>
                </div>  
                
            </div>
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
    <div role="tabpanel" class="tab-pane" id="tiendo">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <?php  
            $duan=DB::table("pages")->select('alias','id')->where("alias","du-an")->first();
            $tiendo=DB::table("posts")->select('id','page_id','title')->where("page_id",$duan->id)->get();
            ?>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Số điện thoại</label>
                  <div class="col-md-10">
                  <input type="text" name="tiendo" class="form-control" value="{{old('tiendo',isset($info->tiendo)?$info->tiendo:'')}}">
                  </div>
                </div> 
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Ảnh đại diện Hình cuối trang chủ</label>
                  <div class="col-md-10">
                                  <img id="my_image5" src="{{old('tiendo_img',isset($info->tiendo_img)?$info->tiendo_img:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage5" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image5" name="tiendo_img" type="hidden" value="{{old('help_img1',isset($info->tiendo_img)?$info->tiendo_img:'')}}">
                  </div>
                </div>  
                
            </div>
            
            
          
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
    <div role="tabpanel" class="tab-pane" id="help">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Hình ảnh Tư vấn 1</label>
                  <div class="col-md-10">
                                  <img id="my_image3" src="{{old('help_img1',isset($info->help_img1)?$info->help_img1:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage3" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image3" name="help_img1" type="hidden" value="{{old('help_img1',isset($info->help_img1)?$info->help_img1:'')}}">
                  </div>
                </div>  
                
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">chuyên mục tư vấn 1</label>
                  <div class="col-md-10">
                  <select class="form-control" name="help_page1">
                    <?php echo cate($page0,0,'',old('help_page1',isset($info->help_page1)?$info->help_page1:'')); ?>
                  </select>
                  </div>
                </div> 
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tư vấn 1</label>
                  <div class="col-md-9">
                 <textarea name="help_description1" id="help_description1" cols="30" rows="10">
                    {{old('help_description1',isset($info->help_description1)?$info->help_description1:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'help_description1', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Hình ảnh Tư vấn 2</label>
                  <div class="col-md-10">
                                  <img id="my_image4" src="{{old('help_img2',isset($info->help_img2)?$info->help_img2:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage4" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image4" name="help_img2" type="hidden" value="{{old('help_img2',isset($info->help_img2)?$info->help_img2:'')}}">
                  </div>
                </div>  
                
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">chuyên mục tư vấn 2</label>
                  <div class="col-md-10">
                  <select class="form-control" name="help_page2">
                    <?php echo cate($page0,0,'',old('help_page2',isset($info->help_page2)?$info->help_page2:'')); ?>
                  </select>
                  </div>
                </div> 
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Mô tả về tư vấn 2</label>
                  <div class="col-md-9">
                 <textarea name="help_description2" id="help_description2" cols="30" rows="10">
                    {{old('help_description2',isset($info->help_description2)?$info->help_description2:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'help_description2', {
                      height: '150px',

                        });
                </script>
                  </div>
                </div>
                
            </div>
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>

    <div class="box-footer col-md-4 col-md-offset-5">
        <button type="submit" class="btn btn-success btn-block">Cập nhật</button>
      </div>
      </form>
</div>

  
    <!-- /.content -->
<div class="clearfix"></div>
@stop