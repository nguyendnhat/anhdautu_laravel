@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Quản lý menu </h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li>Bảng menu</li>
    </ol>
  </section>
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
          
          <td width='200px' align="left">Tên danh mục</td>
          <td width='100px' >Thứ tự hiển thị</td>
          <td>Lụa chọn có show ra menu website</td>

        </tr>
      </thead>    
      <tbody>
      @foreach($page as $item)
      <tr>
        <td  style='text-align:left;'>{{$item->title}}</td>
        <td><input type='text' value='{{$item->order}}' id={{$item->id}} class='menucon'></td>
         <td align="left" width='60'>
            
            <input type="checkbox" id="{{$item->id}}" value="check" class='checkbox' 
            @if($item->status==1)
            checked="checked" 
            @endif
            > 

            
          </td>
      </tr>
      @foreach($item->children as $item2)
      <tr>
        <td style='text-align:left;'>___{{$item2->title}}</td>
        <td><input type='text' value='{{$item2->order}}' id={{$item2->id}} class='menucon'></td>
         <td align="left" width='60'>
            
            <input type="checkbox" id="{{$item2->id}}" value="check" class='checkbox' 
            @if($item2->status==1)
            checked="checked" 
            @endif
            > 

            
          </td>
      </tr>
      @endforeach
      @endforeach
          
        
      </tbody>
    </table>
          
        </div>
        <!-- /.left -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    </div>
            
  </div>

  
    <!-- /.content -->

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
          url:'admin/menu/'+id+'/'+status,
          type:'get',
          cache:false,
          data:{"id":id,"status":status},
          success:function(data){
            if(status==1){
              swal("Thay đổi của bạn đã được cập nhật","", "success");
              
            }else{
              swal("Thay đổi của bạn đã được cập nhật","", "success");
            }
          }
        });
    });
    $(".menucon").change(function(){
        var id=$(this).attr('id');
        var status=$(this).val();
        $.ajax({
          url:'admin/menu2/'+id+'/'+status,
          type:'get',
          cache:false,
          data:{"id":id,"status":status},
          success:function(data){
            if(status==1){
              swal("Thay đổi của bạn đã được cập nhật","", "success")
            }else{
              swal("Thay đổi của bạn đã được cập nhật","", "success")
            }
          }
        });
    });
  });
</script>
@stop