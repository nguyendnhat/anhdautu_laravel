@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Video trang chủ <small>Thêm Video trang chủ</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li>Quản lý Video</li>
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
        <div class="col-md-8 left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/video" class="form-horizontal">
              {{csrf_field()}}
                <!-- text input -->
                
                 
                <div class="form-group">
                  <label class="col-md-3">Ảnh đại diện video này</label>
                  <div class="col-md-9">
                  <img id="my_image" src="{{old('img',isset($info->img)?$info->img:'')}}"  style="border:none;width:120px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="img" type="hidden" value="{{old('img',isset($info->img)?$info->img:'')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3">Mã nhúng iframe</label>
                  <div class="col-md-9">
                  <textarea name="link" id="" cols="30" rows="10" class="form-control">{{old('link')}}</textarea>
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

    
    <div class="box-footer col-md-4 col-md-offset-3">
                <button type="submit" class="btn btn-success btn-block">Thêm mới</button>
                </div>
                </form>
  </div>

  
    <!-- /.content -->

@stop