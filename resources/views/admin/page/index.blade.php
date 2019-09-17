@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Danh mục <small><a href="admin/page/create">Thêm danh mục mới</a></small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/page">Bảng danh mục</a></li>
    </ol>
  </section>

  <!-- Main content -->

  <!-- Tab -->
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck table table-bordered" id="checkAll">
      <thead>
        <tr class="danger">
          
          <td width='200px' style='text-align:left;'>Tên danh mục</td>
          <td width='100px' >Thứ tự hiển thị</td>
          <td style="width:100px;">Sủa</td>
          <td style="width:100px;">Xóa</td>
        </tr>
      </thead>
      <tbody>
      <tr>
        <?php echo cate_list($list); ?>
      </tr>
          
        
      </tbody>
    </table>
          
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
   

@stop
@section('script')
<script>
  $(function(){
    $(".xoa").click(function(){
      if(!window.confirm('ban co chac muon xoa?')){
        return false;
      }
    });
  });
</script>
@stop
