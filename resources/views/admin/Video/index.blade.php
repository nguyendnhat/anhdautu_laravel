@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Video <small><a href="admin/video/create">Thêm Video</a></small></h1>
    <ol class="breadcrumb">
      <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
      <li><a href="admin/video">Bảng Video</a></li>
    </ol>
  </section>

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
          <td>Ảnh đại diện video</td>
          <td>link liên kết</td>
          <td style="width:100px;">Xóa</td>
        </tr>
      </thead>
 
      <tbody>
      @foreach($list as $item)
      <tr>
      <td><img src="{{$item->img}}" alt="" width="150"></td>
        
        <td>{!!$item->link!!}
        
       <form action="admin/video/{{$item->id}}" method="post">
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

@stop