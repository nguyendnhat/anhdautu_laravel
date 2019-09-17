@extends('admin.layout.master')
@section('css')
<style type="text/css">
.field_wrapper div{ margin-bottom:10px;}
.add_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
.remove_button{ margin-top:10px; margin-left:10px;vertical-align: text-bottom;}
</style>
@stop
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Bài viết <small>Sủa Bài viết</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/post">Bảng Bài viết</a></li>
      <li>Sửa bài viết</li>
    </ol>
  </section>

    <!-- Main content -->


  <!-- Nav tabs -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#vi" aria-controls="home" role="tab" data-toggle="tab">Thông tin bài viết</a></li>
              <li role="presentation"><a href="#normal" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-pencil" aria-hidden="true"></i> Dành cho bài viết</a></li>
              <li role="presentation"><a href="#project" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-line-chart" aria-hidden="true"></i>  Dành cho dự án</a></li>
              <li role="presentation"><a href="#seo" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i>  Dành cho SEO</a></li>
        </ul>
      </div>
    </div>
  </div>
<form role="form" method="post" action="admin/post/{{$post->id}}" class="form-horizontal" enctype="multipart/form-data">
              {{method_field('put')}}
              {{csrf_field()}}
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              
                <!-- text input -->
                <div class="form-group">
                  <label >Tiêu đề Bài viết</label>        
                  <input type="text" class="form-control" value="{{old('title',isset($post->title)?$post->title:'')}}" name="title">

                </div>
                
                 <div class="form-group">
                  <label >Thuộc chuyên mục</label>
                  
                  <select class="form-control" name="page_id">
                    <option value="">vui lòng chọn chuyên mục</option>
                    <?php echo cate($list,0,'',old('page_id',isset($post->page_id)?$post->page_id:'')); ?>
                  </select>
                 
                </div> 

                <div class="form-group">
                  <label>Hình đại diện bài viết</label>
                  
                                  <img id="my_image" src="{{old('img',isset($post->img)?$post->img:'')}}"  style="border:none;width:200px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="img" type="hidden" value="{{old('img',isset($post->img)?$post->img:'')}}">
                  
                </div>
                
                <div class="form-group">
                  <label >Mô tả bài viết</label>         
                  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description',isset($post->description)?$post->description:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'description', {
                      height: '500px',

                        });
                </script>
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
<div role="tabpanel" class="tab-pane" id="normal">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
              <div class="form-group">
                  <label class="">Nội dung bài viết</label>
                  
                  <textarea class="form-control" name='content' id='content' rows="3" placeholder="Enter ...">{{old('content',isset($post->content)?$post->content:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'content', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
        <?php
          $source=DB::table("sources")->get();
        ?>
                  <label>Nguồn đăng tin </label>
                  <select name='source' class='form-control'>
          <option value="">Không chọn</option>
          @foreach($source as $item2)
          <option value="{{$item2->name}}"
          @if($post->source==$item2->name)
          selected="selected"
          @endif
          >{{$item2->name}}</option>
          @endforeach
          </select>
                  
                </div>
            </div>
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
  <!-- Tab -->

    <div role="tabpanel" class="tab-pane" id="seo">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
              
                <!-- text input -->
               
              <div class="form-group">
                  <label class="col-md-2">Tiêu đề </label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_title',isset($post->meta_title)?$post->meta_title:'')}}" name="meta_title">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            
            <div class="box-body">
                <div class="form-group">
                  <label class="col-md-2">Meta Description </label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_description',isset($post->meta_description)?$post->meta_description:'')}}" name="meta_description">
                  </div>
                </div>

                
              
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Meta Keywords </label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('meta_keywords',isset($post->meta_keywords)?$post->meta_keywords:'')}}" name="meta_keywords">
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
    <div role="tabpanel" class="tab-pane" id="project">
     <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <div class="box-body">
            <div class="form-group">
                  <label class="col-md-2">Ảnh Slide dự án(có thể chọn nhiều ảnh)</label>
                  <div class="col-md-9">
                 
                    <input type="file" name="multi[]" multiple/>
                    @foreach($post->relate as $item)
                    <img src="{{$item->img}}" alt="" style='margin-right:2px;' width='100'>
                    @endforeach
                
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
			<div class="box-body">
              <div class="form-group">
                  <label class="">Ưu đãi</label>
                  
                  <textarea class="form-control" name='uu_dai' id='uu_dai' rows="3" placeholder="Enter ...">{{old('uu_dai',isset($post->uu_dai)?$post->uu_dai:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'uu_dai', {
                      height: '200px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="">Tổng quan dự án</label>
                  
                  <textarea class="form-control" name='tong_quan' id='tong_quan' rows="3" placeholder="Enter ...">{{old('tong_quan',isset($post->tong_quan)?$post->tong_quan:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'tong_quan', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="">Vị trí dự án</label>
                  
                  <textarea class="form-control" name='vi_tri' id='vi_tri' rows="3" placeholder="Enter ...">{{old('vi_tri',isset($post->vi_tri)?$post->vi_tri:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'vi_tri', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="">Tiện ích</label>
                  
                  <textarea class="form-control" name='tien_ich' id='tien_ich' rows="3" placeholder="Enter ...">{{old('tien_ich',isset($post->tien_ich)?$post->tien_ich:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'tien_ich', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
            <label class="">Mặt bằng</label>
                  
              <div class="field_wrapper">
              @if(count($post->tab)>0)
              @foreach($post->tab as $item)
              <div>
                  <input type="text" value="{{$item->title}}" name="tab_title[]" class="form-control" placeholder="Điền tên căn mạt bằng">
                  <textarea class="ckeditor" name="tab_content[]">{!!$item->content!!}</textarea>
                     <a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="admin_asset/images/remove-icon.png"/></a>               
                     @if($loop->last)
                         <a href="javascript:void(0);" class="add_button" title="Add field"><img src="admin_asset/images/add-icon.png"/></a>
                        @endif
                   
              </div>
              @endforeach
             
              @else 
              
              <a href="javascript:void(0);" class="add_button" title="Add field"><img src="admin_asset/images/add-icon.png"/></a>
              @endif
            </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="">Giải pháp tài chính</label>
                  
                  <textarea class="form-control" name='giai_phap' id='giai_phap' rows="3" placeholder="Enter ...">{{old('giai_phap',isset($post->giai_phap)?$post->giai_phap:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'giai_phap', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="">Chính sách bán hàng</label>
                  
                  <textarea class="form-control" name='chinh_sach' id='chinh_sach' rows="3" placeholder="Enter ...">{{old('chinh_sach',isset($post->chinh_sach)?$post->chinh_sach:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'chinh_sach', {
                      height: '500px',

                        });
                </script>

                </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Số điện thoại liên hệ</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('phone',isset($post->phone)?$post->phone:'')}}" name="phone">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Địa chỉ dự án</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('address',isset($post->address)?$post->address:'')}}" name="address">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Giá tiền</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('price',isset($post->price)?$post->price:'')}}" name="price">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
            <div class="form-group">
                  <label class="col-md-2">Vị trí dự án </label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('investment_capital',isset($post->investment_capital)?$post->investment_capital:'')}}" name="investment_capital">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            
            <div class="box-body">
                <div class="form-group">
                  <label class="col-md-2">Tiến độ bàn giao</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('large',isset($post->large)?$post->large:'')}}" name="large">
                  </div>
                </div>

                
              
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Tình trạng dự án</label>
                  <div class="col-md-9">
                  <select class="form-control" name="finish">
                    <option value="1"
                    @if(isset($post->finish) && $post->finish=='1')
                    checked='checked'
                    @endif
                    >Dự án chưa hoàn thành</option>
                    <option value="2"
                    @if(isset($post->finish) && $post->finish=='2')
                    checked='checked'
                    @endif
                    >Dự án đã hoàn thành</option>
                  </select>
                </div>
                </div>
                
            </div>
             <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Dự án đang bán?</label>
                  <div class="col-md-9">
                  <input type='checkbox' value='1' name="status" class="checkbox11"
          @if($post->status==1)
          checked="checked"
          @endif
          >
                  </div>
                </div>
                
            </div>
            <div class="box-body">
              <div class="form-group">
                  <label>File đính kèm</label>
              
                                 
                <button type="button" id="popupimage1" value="Hình ảnh" style='margin-left:15px;'>
                Chọn File
                </button>
                <iframe src="{{old('file',isset($post->file)?$post->file:'')}}" frameborder="0" id="my_image1" style="border:none;width:800px;height:300px;"></iframe>
                
                <input id="image1" name="file" type="hidden" value="{{old('file',isset($post->file)?$post->file:'')}}">
                  
                </div>
            </div>
            
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
     <div class="box-footer col-md-4 col-md-offset-3">
                <button type="submit" class="btn btn-warning btn-block">Lưu Thay Đổi</button>
                </div>

              </form>
              <div class="clearfix"></div>

  </div>

  
    <!-- /.content -->

@stop
@section('script')
<script type="text/javascript">
$(document).ready(function(){
  var addButton = $('.add_button'); //Add button selector
  var wrapper = $('.field_wrapper'); //Input field wrapper
   var x = 1; //Initial field counter is 1
  
 $(wrapper).on('click', '.add_button', function(e){ //Once remove button is clicked
  $(this).hide();
     

    x++; //Increment field counter
var fieldHTML = '<div ><input type="text"  name="tab_title[]" class="form-control" placeholder="Điền tên căn mạt bằng"><textarea id="tab_content'+x+'" name="tab_content[]"></textarea><script>CKEDITOR.replace( "tab_content'+x+'", { height: "500px",});<\/script><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="admin_asset/images/remove-icon.png"/></a><a href="javascript:void(0);" class="add_button" title="Add field"><img src="admin_asset/images/add-icon.png"/></a></div>'; //New input field html 

      
      $(wrapper).append(fieldHTML); // Add field html
  });
  
  $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
  });
  

});
</script>

@stop