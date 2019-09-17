@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Slide</h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
    </ol>
  </section>
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
              <form role="form" method="post" action="admin/slide2" class="form-horizontal">
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
             
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>




    
    <div class="box-footer col-md-4 col-md-offset-2">
                <button type="submit" class="btn btn-danger btn-block">Thêm mới</button>
                </div>
                </form>
  </div>

  
    <!-- /.content -->

@stop