<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản Lý Học Sinh</title>
        <link type="text/css" href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.bootstrap.min.css">
        <style type="text/css">
            .btn {padding:0px;font-weight:bold}
        </style>
        <script type="text/javascript">
            
            function xacnhanxoa(msg) {
                if (window.confirm(msg)) {
                    return true;
                }
                return false;
            }
            $("#nienkhoa").keyup(function () {
                alert('Handler for .keyup() called.');
            });
            $("#lop").keyup(function () {
                alert('Handler for .keyup() called.');
            });
        </script>
    </head>

    <body>
        <div class="container" style="margin-top:20px">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh Sách Học Sinh</h3>
                </div>
                <div class="col-xs-3">
                    <label for="ex2" class="text-danger">Niên khóa</label>
                    <input class="form-control" id="nienkhoa" type="text"  placeholder="Nhập niên khóa" >
                </div>
                <div class="col-xs-3">
                    <label for="ex2" class="text-danger ">Lớp</label>
                    <input class="form-control" id="lop" type="text"  placeholder="Nhập lớp">
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
                <div class="panel-body">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã Học Sinh</th>
                                <th>Họ Tên</th>
                                <th>Ngày Sinh</th>
                                <th>Niên Khóa</th>
                                <th>Lớp</th>
                                <th>Giới Tính</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hocsinh as $hs)
                            <tr class="info">
                                <th scope="row">1</th>
                                <td>{{ $hs->mahocsinh }}</td>
                                <td>{{ $hs->hoten }}</td>
                                <td>{{$hs->ngaysinh}}</td>
                                <td>{{$hs->nienkhoa}}</td>
                                <td>{{$hs->lop}}</td>
                                <td>@if($hs->gioitinh==1)nam @else nữ @endif</td>
                                <th>
                                    {!! Form::open(array('route'=>array('hocsinh.destroy',$hs->id),'method'=>'DELETE')) !!}
                                    <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete" class="btn btn-link">Xóa</button>

                                </th>
                                {!! Form::close() !!}
                                <th><a href="{!! route('hocsinh.edit',$hs->id) !!}">Sửa</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                        <div>
                            <?php echo $hocsinh->render(); ?> 
                        </div>   
                    </table>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.2/js/responsive.bootstrap.min.js"></script>
    </body>
</html>