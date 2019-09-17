@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Gửi tin mới</h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a >Gửi tin mới</a></li>
    </ol>
  </section>

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
              <form role="form" method="post" action="admin/subcribe" class="form-horizontal">
              {{csrf_field()}}
                <!-- text input -->
                
                <div class="form-group">
                  <label >Tiêu đề email</label>
                  <div >
                  <input type="text" class="form-control" value="{{old('title_email')}}" name="title_email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Nội dung email</label>
                  <div>
                  <textarea name="content_email" id="content_email" cols="30" rows="10">
                    {{old('content_email',isset($info->content_email)?$info->content_email:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'content_email', {
                      height: '650px',

                        });
                </script>
                  </div>
                
            		</div>
            <!-- /.form-group -->
        </div>
        <!-- /box body -->

        <!--/.col (right) -->
        </div>
      </div>
      
      <!-- /.row -->
    </section>
    </div>


    <div class="box-footer col-md-3 col-md-offset-4">
      <button type="submit" class="btn btn-warning btn-block">Gửi</button>
    </div>
    </form>
  </div>
  <div class="clearfix"></div>


  
    <!-- /.content -->

@stop