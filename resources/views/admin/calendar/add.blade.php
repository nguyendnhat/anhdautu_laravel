@extends('admin.layout.master')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
  } );
  </script>
@stop

@section('content')
<section class="content-header">
    <h1>Tạo lịch tiến độ dự án</h1>
    
  </section>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12  left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
         
              <form role="form" method="post" action="admin/calendar" class="form-horizontal" enctype="multipart/form-data">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label class="col-md-2">Thuộc Dự án</label>
                  <div class="col-md-6">
                  <select class="form-control" name="post_id">
                    <option value="">vui lòng chọn dự án</option>
                    <?php echo cate($page,0,'',old('post_id')); ?>
                  </select>
                 </div>
                </div> 
                <div class="form-group">
                <label class="col-md-2">Ngày </label>
                <div class="col-md-6">
                <input type="text" id="datepicker" name="start" class="form-control">
                 </div>
               </div>
               <div class="form-group">
                  <label class="col-md-2">Tiêu đề </label>
                  <div class="col-md-6">
                  <input type="text" class="form-control" value="{{old('title')}}" name="title">
                  </div>
                </div>
                
               <div class="form-group">
                  <label >Nội dung cập nhật</label>
                  <div >
                  <textarea name="content" id="content" cols="30" rows="10">
                    {{old('content',isset($info->content)?$info->content:'')}}
                  </textarea>
                  <script>
                    CKEDITOR.replace( 'content', {
                      height: '550px',

                        });
                </script>
                  </div>
                </div> 
               <div class="box-footer col-md-4 col-md-offset-3">
                <button type="submit" class="btn btn-warning btn-block">Thêm công việc mới</button>
                </div>
               </form>
            
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
<div class="clearfix"></div>
@stop