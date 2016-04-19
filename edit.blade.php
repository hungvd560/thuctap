<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Quản Lý Học Sinh</title>
    <link type="text/css" href="{{ asset('public/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Sửa Thông Tin Học Sinh</h3>
        </div>
        <div class="panel-body">
          {!! Form::open(array('route'=>array('hocsinh.update',$data->id),'method'=>'PUT')) !!}
             <div class="form-group">
              <label for="lblMahocsinh">Mã học sinh</label>
              <input type="text" class="form-control" name="txtMahocsinh" value="{!! old('txtMahocsinh',isset($data) ? $data['mahocsinh'] : null) !!}"/>
            </div>  
            <div class="form-group">
              <label for="lblHoTen">Họ Tên Học Sinh</label>
              <input type="text" class="form-control" name="txtHoTen" value="{!! old('txtHoTen',isset($data) ? $data['hoten'] : null) !!}"/>
            </div>
            <div class="form-group">
              <label for="lblNgaysinh">Ngày sinh</label>
              <input type="text" class="form-control" name="txtNgaysinh" value="{!! old('txtNgaysinh',isset($data) ? $data['ngaysinh'] : null) !!}"/>
            </div>
            <div class="form-group">
              <label for="lblNienKhoa">Niên Khóa</label>
              <input type="text" class="form-control" name="txtNienkhoa" value="{!! old('txtNienkhoa',isset($data) ? $data['nienkhoa'] : null) !!}"/>
            </div>
            
            <div class="form-group">
              <label for="lblLop">Lớp</label>
              <input type="text" class="form-control" name="txtLop" value="{!! old('txtLop',isset($data) ? $data['lop'] : null) !!}" />
            </div>
          <div class="form-group">
                             <label for="lblGioitinh">Giới tính</label>
                            <div class="radio">
                                <input type="radio" id="sex" name="gioitinh" value="1" @if($data->gioitinh ==  1) checked="checked" @endif />Nam
                            </div>
                            <div class="radio">
                                <input type="radio" id="sex" name="gioitinh" value="2" @if($data->gioitinh ==  2) checked="checked" @endif />Nữ
                            </div>
                        </div>
            <button type="submit" class="btn btn-default">Sửa</button>
          </form>{!! Form::close() !!}
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>