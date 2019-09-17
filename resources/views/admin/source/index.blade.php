@extends('admin.layout.master')
@section('css')
<style>
  th{
    text-align: center;
  }
</style>
@stop
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        danh sách nguồn đăng tin
        
      </h1>
      
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="javascript:void()" id="add_catalog">Thêm mới nguồn đăng tin</a></h3>
            </div>
			<div class="box-body1">
              <form role="form" method="post" action="admin/source">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Tên Nguồn tin mới</label>
                  <input type="text" class="form-control" value="{{old('name')}}" name="name" required="">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-warning">Thêm mới</button>
              </div>

              </form>
            </div>
				
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row"><div class="col-sm-12">
              <table id="example1" class="table table-bordered dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row" >
                <th>STT</th>
                <th>Tên nguồn</th>
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
                
                <td class="sorting_1">{{$item->name}}</td>
                  <form action="admin/source/{{$item->id}}" method="post">
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
<script>
  $(function(){
    
    
    $("#add_catalog").click(function(){

      $(".box-body1").fadeToggle('600');
    });
    $(".box-body1").hide();
    
  });
</script>
@stop