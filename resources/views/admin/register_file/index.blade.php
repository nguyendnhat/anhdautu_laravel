@extends('admin.layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="">
        <ol class="breadcrumb">
            <li><a href="admin"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="admin/register-file">Khách hàng đăng ký nhận file</a></li>
        </ol>
    </section>

    <!-- Main content -->


    <!-- Nav tabs -->


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
                                <td width="5%">STT</td>
                                <td width='100px' >Email</td>
                                <td>Số điện thoại</td>
                                <td>Thuộc dự án</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $id => $item)
                                <tr>
                                    <td>{{($id+1)}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->link}}</td>
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