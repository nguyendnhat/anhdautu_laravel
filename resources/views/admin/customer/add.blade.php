@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Khách hàng <small>Thêm Đánh giá của Khách hàng</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li>Quản lý Đánh giá của Khách hàng</li>
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
        <div class="col-md-12 left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/customer" class="form-horizontal">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label class="col-md-3">Hình ảnh</label>
                  <div class="col-md-9">
                  <img id="my_image" src="{{old('img')}}"  style="border:none;width:200px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="img" type="hidden" value="{{old('img')}}">
                  </div>
                </div>
                 

                <div class="form-group">
                  <label class="col-md-3">Họ và tên</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('name')}}" name="name">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-md-3">Bình luận của khách hàng</label>
                  <div class="col-md-9">
                  <textarea name="comment" id="footerselect" cols="30" rows="10">
                    {{old('comment',isset($info->comment)?$info->comment:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'comment', {
                      height: '250px',

                        });
                </script>
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

    
    <div class="box-footer col-md-3 col-md-offset-4">
                <button type="submit" class="btn btn-warning btn-block">Thêm mới</button>
                </div>
                </form>
  </div>

  
    <!-- /.content -->
<div class="clearfix"></div>
@stop