@extends('admin.layout.master')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        quản trị viên
        <small>danh sách quản trị viên</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        <li><a href="admin/admin">Bảng quản trị viên</a></li>
        
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="admin/admin/create"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới quản trị viên</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row"><div class="col-sm-12">
              <table id="example1" class="table table-bordered dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row" >
                <th>STT</th>
                <th>Tên tài khoản</th>
               
                  <th>Email</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                  
                  </tr>
                </thead>
                <tbody>
                <?php  
                $i=0;
                ?>
                @foreach($list as $item)
                
                <tr role="row" class="odd">
                
                <td>{{++$i}}</td>
                <td >
                <img src="{{$item->img}}" alt="" width='50'>
                {{$item->username}}
                </td>
                
                 
                  <td>{{$item->email}}</td>
                  <td><a href="admin/admin/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
                  <form action="admin/admin/{{$item->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <td><input type="submit" value="Xóa" class='btn-xs btn-danger' onclick='return confirm("bạn có chắc muốn xóa?")'>
                  </form>

                 
                </tr>
                @endforeach
                </tbody>
                
              </table>


      <!-- /.row -->

    </section>
    <!-- /.content -->
@stop
@section('script')
<script src="admin_asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin_asset/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@stop