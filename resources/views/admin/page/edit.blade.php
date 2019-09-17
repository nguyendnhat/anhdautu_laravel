@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Chuyên mục <small>Sửa chuyên mục mới</small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/page">Bảng chuyên mục</a></li>
      <li>Sửa mới loại tin</li>
    </ol>
  </section>

    <!-- Main content -->


  <!-- Nav tabs -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#vn" aria-controls="home" role="tab" data-toggle="tab">Thông tin cơ bản</a></li>
              <li role="presentation"><a href="#seo" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> Dành cho SEO</a></li>

        </ul>
      </div>
    </div>
  </div>

  <!-- Tab -->
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vn">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/page/{{$page->id}}" class="form-horizontal">
              {{method_field('put')}}
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label class="col-md-2">Tên chuyên mục</label>
                  <div class="col-md-10">
                  <input type="text" class="form-control" value="{{old('title',isset($page->title)?$page->title:'')}}" name="title">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-2">Thuộc chuyên mục cha</label>
                  <div class="col-md-10">
                  <select class="form-control" name="parent_id">
                    <option value="0">là chuyên mục gốc</option>
                    <?php echo cate($list,0,'',old('parent_id',isset($page->parent_id)?$page->parent_id:'')); ?>
                  </select>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-md-2">Số thứ tự hiển thị</label>
                  <div class="col-md-10">
                  <input type="number" class="form-control" value="{{old('order',isset($page->order)?$page->order:'')}}" name="order">
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-md-2">Nội dung Trang <small>(vui lòng nhập nếu là trang duy nhất)</small></label>
                  <div class="col-md-10">
                  <textarea class="form-control" name='content' id='content' rows="3" placeholder="Enter ...">{{old('content',isset($page->content)?$page->content:'')}}</textarea>
                  <script>
                    CKEDITOR.replace( 'content', {
                      height: '300px',

                        });
                </script>
                </div>
<br />
                   
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      
      <!-- /.row -->
    </section>
    </div>
   <div role="tabpanel" class="tab-pane" id="seo">
        <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
            <!-- general form elements disabled -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                  <label class="col-md-2">Tiêu đề </small></label>
                  <div class="col-md-10">
                  <input type="text" class="form-control" value="{{old('meta_title',isset($page->meta_title)?$page->meta_title:'')}}" name="meta_title">
                  </div>
                </div>
            <!-- /.box-body -->
            </div>
            <div class="box-body">
                <div class="form-group">
                  <label class="col-md-2">Meta Description </label>
                  <div class="col-md-10">
                  <input type="text" class="form-control" value="{{old('meta_description',isset($page->meta_description)?$page->meta_description:'')}}" name="meta_description">
                  </div>
                </div>

                
              
            </div>
            <div class="box-body">
               <div class="form-group">
                  <label class="col-md-2">Meta Keywords </label>
                  <div class="col-md-10">
                  <input type="text" class="form-control" value="{{old('meta_keywords',isset($page->meta_keywords)?$page->meta_keywords:'')}}" name="meta_keywords">
                  </div>
                </div>
                
            </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section></div>

                <div class="box-footer col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-warning btn-block">Lưu thay đổi</button>
                </div>
                </form>
  </div>

  
    <!-- /.content -->

@stop