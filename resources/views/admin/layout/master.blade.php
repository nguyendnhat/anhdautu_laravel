<!DOCTYPE html>
<html>
<head>
@include('admin.layout.head')
@yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.layout.topbar')
  <!-- Left side column. contains the logo and sidebar -->
@include("admin.layout.left")

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 946px;">
 @if(count($errors)>0)
    <div class="alert alert-danger alert-dismissible" role='alert' >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <ul>
      @foreach($errors->all() as $err)
      <li>{{$err}}</li>
      @endforeach
    </ul>
    </div>
    @endif
    @if(Session('thongbao'))
    <div class="alert alert-success"><span class="fa fa-thumbs-o-up"></span>
    {{Session('thongbao')}}
    </div>
    @endif

@yield('content')
</div>
  <!-- /.content-wrapper -->


@include('admin.layout.footer')

  <!-- Control Sidebar -->
@include('admin.layout.aside')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

{{-- script --}}
@yield('script')
@include('admin.layout.script')

</body>
</html>
