@extends('admin.layout.master')
@section('css')
<style>
  .content{
    padding-top: 6px;
  }
  #example1{
    margin-top: 10px;
  }
</style>
@stop
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách công việc
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        <li><a href="admin/calendar">danh sách công việc</a></li>
        
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="admin/calendar/create"><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo lịch cập nhật tiến độ mới</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row"><div class="col-sm-12">
              
                            <table id="example1" class="table condesed dataTable table-bordered" role="grid" aria-describedby="example1_info">
              
          
           
         
                <thead>
                
                <tr role="row" >
                <th >STT</th>
                <th>Công việc</th>    
                  <th>Thuộc dự án</th>
                  <th>Thời gian</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                  
                  </tr>
                </thead>
                <tbody>
                <?php  
                $i=0;
                ?>
                @foreach($post as $item)
                
                <tr role="row" class="odd">
                
                <td>{{++$i}}</td>
                <td width='300px'>
               
                {{$item->title}}</a>
                </td>
          
            <td>
              {{$item->post->title}}
           
            
          </td>
          <td>{{date('d-m-Y',$item->time)}}</td>
      
            <td><a href="admin/calendar/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
          </td>


                 
                  <form action="admin/calendar/{{$item->id}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <td><input type="submit" value="Xóa" class='btn-xs btn-danger' onclick='return confirm("bạn có chắc muốn xóa?")'>
                  </form>

                 
                </tr>
                @endforeach
                </tbody>
                
              </table>
<div align="center">
{{$post->links()}}
</div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@stop
