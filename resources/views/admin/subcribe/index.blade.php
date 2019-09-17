@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><small><a href="admin/subcribe/create">Gửi tin mới</a></small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/subcribe">Bảng Quản lý người theo dõi</a></li>
    </ol>
  </section>

    <!-- Main content -->


  <!-- Nav tabs -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
              
              

        </ul>
      </div>
    </div>
  </div>

  <!-- Tab -->
   <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="vi">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck table-bordered " id="checkAll" >
      <thead>
        <tr>

          <td>Email</td>
          <td>Họ và tên</td>
          <td>Số ĐT</td>
          <td>Dự án quan tâm</td>
          <td>Nội dung yêu cầu</td>
          <td style="width:100px;">Xóa</td>
        </tr>
      </thead>
      
      
      
      <tbody>
     
      @foreach($list as $item)
     
      <tr>

        <td>{{$item->email}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <?php  
        $page=DB::table('pages')->select('id','alias')->where("alias",'du-an')->first();
        $post=DB::table("posts")->where("page_id",$page->id)->get();
        ?>
        <td>
        @foreach($post as $item2)
        @if($item->project==$item2->id)
        {{$item2->title}}
        @endif
        @endforeach
        </td>
        <td>{!!$item->content!!}</td>
        
       <form action="admin/subcribe/{{$item->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <td><input type="submit" value="Xóa" class='btn-xs btn-danger' onclick='return confirm("bạn có chắc muốn xóa?")'>
                  </form>
        
      </tr>
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




    <div role="tabpanel" class="tab-pane" id="en">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 left">
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck table-bordered " id="checkAll">
      <thead>
        <tr>
          
          <td width='200px'>Tiêu đề subcribe</td>
          <td>link liên kết</td>
          <td style="width:100px;">Sủa</td>
          <td style="width:100px;">Xóa</td>
        </tr>
      </thead>
      
      
      
      <tbody>
      @foreach($list as $item)
      <tr>
        <td>{{$item->title_en}}</td>
        <td>{{$item->link_en}}</td>
        <td><a href="admin/subcribe/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
        
       <form action="admin/subcribe/{{$item->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <td><input type="submit" value="Xóa" class='btn-xs btn-danger' onclick='return confirm("bạn có chắc muốn xóa?")'>
                  </form>
        
      </tr>
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
    $(".checkbox1").click(function(){
        var id=$(this).attr('id');
        
        if($(this).is(":checked")){
          var status=1;
        }else{
          var status=0;
        }
        $.ajax({
          url:'admin/menu3/'+id+'/'+status,
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
    
  });
</script>
@stop