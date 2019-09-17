@extends('admin.layout.master')
@section('css')
<style type="text/css">
.custom-date-style {
  background-color: red !important;
}
.input{ 
}
.input-wide{
  width: 500px;
}
.blank{
  width: 100%;height: 200px;
}
img{
  display: block !important;
}

</style>

@section('content')

    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 ">
            <!-- general form elements disabled -->
              <h4>Sửa quảng cáo </h4>

         <div class="box box-warning">

            <div class="box-header with-blink">
              <div class="box-header">
              <div class="row">
                </div>
           </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="admin/adcate/{{$adcate->id}}">
              {{csrf_field()}}
              {{method_field('PUT')}}
                <!-- text input -->
                
               
                <div class="form-group">
                  <label>Hình quảng cáo</label>
                          <div>
              <img id="my_image" src="{{old('img',isset($adcate->img)?$adcate->img:'')}}"  style="width:400px;height:auto;"><br />
              <button type="button" id="popupimage" value="Hình ảnh" style='margin-left:15px;'>
              Chọn ảnh
              </button>
              
              <input id="image" name="img" type="hidden" value="{{old('img',isset($adcate->img)?$adcate->img:'')}}">
    </div>
                </div>
                <div class="form-group">
                  <label>Đường dẫn liên kết quảng cáo</label>
                  <input type="text" class="form-control" value="{{old('link',isset($adcate->link)?$adcate->link:'')}}" name="link">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-danger">Lưu thay đổi</button>
              </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <!-- /.box -->
          
        
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->

@stop
@section('script')
<script type='text/javascript'>

  jQuery(document).ready(function($){
    
    $("#checkbox").click(function(){
      
        $("#content").show();
        $("#content").removeAttr('disabled');
        $("#my_image").attr('src','');
        $("#image").attr('value','');
        $("#my_image").hide();


      
    });
    $("#popupimage").click(function(){
      $(".cke_wysiwyg_frame cke_reset").text('');
      $("#my_image").show();
      $("#content").hide();
      
    });
    
    if($("#content").val()!=""){
        $("#my_image").hide();
    }
    
      
  });
</script>
@stop
