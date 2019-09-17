@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Slide đầu trang chủ <small>Thêm Slide đầu trang chủ mới</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li>Quản lý slide</li>
    </ol>
  </section>
    <!-- Main content -->
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
              <form role="form" method="post" action="admin/slide/{{$slide->id}}" class="form-horizontal">
               {{method_field('PUT')}}
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label class="col-md-3">Hình ảnh</label>
                  <div class="col-md-9">
                  <img id="my_image" src="{{old('img',isset($slide->img)?$slide->img:'')}}"  style="border:none;width:200px;height:auto;"><br />
                <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
                Chọn ảnh
                </button>
                
                <input id="image" name="img" type="hidden" value="{{old('img',isset($slide->img)?$slide->img:'')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3">Link liên kết</label>
                  <div class="col-md-9">
                  <input type="text" class="form-control" value="{{old('link',isset($slide->link)?$slide->link:'')}}" name="link">
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
    <div class="box-footer col-md-3 col-md-offset-2">
                <button type="submit" class="btn btn-warning btn-block">Lưu thay đổi</button>
                </div>
                </form>
  </div>

  
    <!-- /.content -->

@stop