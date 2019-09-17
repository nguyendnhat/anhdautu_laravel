@extends('admin.layout.master')
@section('content')
<style>
.table td,.table th{
	border:1px solid #ccc !important;
}
</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        quảng cáo tại trang chủ
        <small>danh sách quảng cáo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        <li><a href="admin/adcate">danh sách quảng cáo</a></li>
        
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="admin/adcate/create"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới quảng cáo</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row"><div class="col-sm-12">
              <table class="table table-bordered dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row" >
               <th>Hình ảnh</th>
                <th width='150'>Link liên kết</th>
                <th>Lựa chọn ẩn/hiển</th>
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
                
                
                <td>

                <img src="{{$item->img}}" alt="" width='70' height='70'>
                {{$item->title}}
                </td>
                  <td>{{$item->link}}</td>
                  <td>
                     <input type="checkbox" id="{{$item->id}}" value="check" class='checkbox' 
                      @if($item->status==1)
                      checked="checked" 
                      @endif
                      > 
                  </td>
                 
                  <td><a href="admin/adcate/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
                  <form action="admin/adcate/{{$item->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <td><input type="submit" value="Xóa" class='btn-xs btn-danger' onclick='return confirm("bạn có chắc muốn xóa?")'>
                  </form>

                 
                </tr>
                @endforeach
                </tbody>
                
              </table>


      <!-- /.row -->
      <div align="center">
        {{$list->links()}}
      </div>

    </section>
    <!-- /.content -->
@stop
@section('script')
<script src="admin_asset/js/sweetalert.min.js"></script> 
<link rel="stylesheet" type="text/css" href="admin_asset/js/sweetalert.css">
<script type='text/javascript'>

  jQuery(document).ready(function($){
    $(".checkbox").click(function(){
        var id=$(this).attr('id');
        
        if($(this).is(":checked")){
          var status=1;
        }else{
          var status=0;
        }

        $.ajax({

          url:'admin/qcdanhmuc/'+id+'/'+status,
          type:'get',
          cache:false,
          data:{"id":id,"status":status},
          success:function(data){
            if(status==1){
              swal("Bạn đã chọn hiện quảng cáo này","", "success")
            }else{
              swal("Bạn đã chọn ẩn quảng cáo này","", "success")
            }
          }
        });
        
        
    });
  });
</script>
@stop