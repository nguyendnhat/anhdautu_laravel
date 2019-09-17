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
        bài viết 
        <small><a href="admin/post">danh sách bài viết</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
        <li><a href="admin/post">danh sách bài viết</a></li>
        
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="admin/post/create"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm bài viết mới</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row"><div class="col-sm-12">
              <table>
                 <tr>
                 <form action="admin/post" method="get">
                 {{csrf_field()}}
              <td align="left"><label >Tiêu đề bài viết</label></td>
              <td class="item" style="width:155px;padding-left:10px;"><input class='form-control' name="name" value="<?php if(isset($_GET['name']))echo $_GET['name']; ?>" id="filter_iname" type="text" style="width:155px;"></td>
              
              <td align="left" style="padding-left: 5px;"><label>Thuộc chuyên mục</label></td>
              <td class="item" style='padding-left:10px;'>
                <select name="page_id" class="form-control">
                <option value="">Vui lòng chọn danh mục bài viết</option>
                <?php  
                echo cate($list,'0','',isset($_GET['page_id'])?$_GET['page_id']:'');
                ?>
                </select>
              </td>
              
              <td style="width:150px;padding-left: 5px;">
              <input type="submit" class="btn btn-success" value="tìm kiếm bài viết"></td>
              </form
              
            </tr>
              </table>
              <table id="example1" class="table condesed dataTable table-bordered" role="grid" aria-describedby="example1_info">
              
          
           
         
                <thead>
                
                <tr role="row" >
                <th >STT</th>
                <th>Tiêu đề  <img src="admin_asset/images/vi.png" alt=""></th>
                  
                  <th>Thuộc danh mục</th>
				  
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
                <img src="{{$item->img}}" alt="" width='50' style="float:left;max-height:33px;margin-right:10px;">
                {{$item->title}}</a>
                </td>
          
            <td>
              {{$item->page->title}}
           
            
          </td>
		  
            
          </td>


                  <td><a href="admin/post/{{$item->id}}/edit"><i class="fa fa-edit"></i></a></td>
                  <form action="admin/post/{{$item->id}}" method="post">
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
