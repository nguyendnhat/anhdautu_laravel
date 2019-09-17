@extends('admin.layout.master')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Sửa quản trị viên {{$admin->username}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        <li><a href="admin/admin">Bảng quản trị</a></li>
        <li>Sửa quản trị viên</li>

        
      </ol>
  </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 ">
            <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/admin/{{$admin->id}}">
              {{method_field('put')}}
              {{csrf_field()}}
                <!-- text input -->
				
                <div class="form-group">
                  <label>Tên tài khoản</label>
                  <input type="text" class="form-control" value="{{old('username',isset($admin->username)?$admin->username:'')}}" name="username">
                </div>
                <!-- textarea -->
                
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="{{old('email',isset($admin->email)?$admin->email:'')}}" >
                </div>
                
                <div class="form-group">
                  <label>Mật khẩu (không nhập sẽ giữ nguyên mật khẩu cũ)</label>
                  <input type="password" class="form-control" name="password" value="{{old('password')}}" >
                </div>
                <div class="form-group">
                  <label>Mật khẩu xác nhận</label>
                  <input type="password" class="form-control" name="password2" value="{{old('password2')}}" >
                </div>
                
                <div class="form-group">
                  <label>Hình đại diện</label>
                          <div>
              <img id="my_image" src="{{old('img',isset($admin->img)?$admin->img:'')}}"  style="border:none;width:200px;height:auto;"><br />
              <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
              Chọn ảnh
              </button>
              
              <input id="image" name="img" type="hidden" value="{{old('img',isset($admin->img)?$admin->img:'')}}">
    </div>
                </div>
                <div class="formRow">
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
              </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <!-- /.box -->
          
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@stop