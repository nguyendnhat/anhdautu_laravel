@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>liên hệ <small>Thêm liên hệ mới</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/contact">Bảng liên hệ</a></li>
      <li>Thêm mới liên hệ</li>
    </ol>
  </section>

    <!-- Main content -->


  <!-- Nav tabs -->
  

  <!-- Tab -->
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/contact" class="form-horizontal">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label >Tiêu đề Phòng giao dịch</label>        
                  <input type="text" class="form-control" value="{{old('name')}}" name="name">
                  

                </div>
                <div class="form-group">
                  <label>Ảnh đại diện Phòng giao dịch</label>
                  
                                  <img id="my_image" src="{{old('img',isset($post->img)?$post->img:'')}}"  style="border:none;width:200px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="img" type="hidden" value="{{old('img',isset($post->img)?$post->img:'')}}">
                  
                </div>

               

                

                <div class="form-group">
                  <label class="">Thông tin phòng giao dịch</label>
                  
                  <textarea class="form-control" name='content' id='content' rows="3" placeholder="Enter ...">{{old('content')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'content', {
                      height: '500px',

                        });
                </script>

                </div>
                <div class="form-group">
                  <label class="">Bản đồ (mã nhúng iframe google)</label>
                  
                  <textarea class="form-control" name='iframe' id='iframe' rows="3" placeholder="Enter ...">{{old('iframe')}}</textarea>
                 

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

    

  
     <div class="box-footer col-md-4 col-md-offset-3">
                <button type="submit" class="btn btn-warning btn-block">Thêm mới</button>
                </div>

              </form>
              <div class="clearfix"></div>

  </div>

  
    <!-- /.content -->

@stop