<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản Lý Học Sinh</title>
        <link type="text/css" href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <style type="text/css">
        ul li {width: 220px;height: 30px;background: #F25252;color:white;line-height: 30px;text-align: center; }
    </style>
    </head>
    
    <body>
        @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
            <li>{!!$error!!}</li>
            @endforeach
        </ul>

        @endif
        <div class="container" style="margin-top:20px">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Thêm Học Sinh</h3>
                </div>
                <div class="panel-body">

                    <form method="POST" action="{!! route('hocsinh.store') !!}" name="frmAdd">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="lblMahocsinh">Mã học sinh</label>
                            <input type="text" class="form-control" name="txtMahocsinh" />
                        </div>
                        <div class="form-group">
                            <label for="lblHoTen">Họ Tên Học Sinh</label>
                            <input type="text" class="form-control" name="txtHoTen" />
                        </div>
                        <div class="form-group">
                            <label for="lblNgaysinh">Ngày sinh học sinh</label>
                            <input type="text" class="form-control" name="txtNgaysinh" />
                        </div>
                        <div class="form-group">
                            <label for="lblnienkhoa">Niên Khóa</label>
                            <input type="text" class="form-control" name="txtNienkhoa" />
                        </div>
                        <div class="form-group">
                            <label for="lblLop">Lớp</label>
                            <input type="text" class="form-control" name="txtLop" />
                        </div>
                        <div class="form-group">
                            <label for="lblGioitinh">Giới tính</label>
                            <div class="radio">
                                <label><input type="radio" name="gioitinh" value="1">Nam</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="gioitinh" value="2">Nữ</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>