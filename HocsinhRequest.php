<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HocsinhRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [

            'mahocsinh' => 'required|unique:hosohocsinh',
            'hoten' => 'required',
            'ngaysinh' => 'required',
            'gioitinh' => 'required',
            'nienkhoa' => 'required',
            'lop' => 'required',
        ];
    }

    public function messages() {
        return [
            'mahocsinh.required' => 'Yêu cầu bạn nhập mã học sinh !',
            'mahocsinh.unique' => 'Mã học sinh đã tồn tại !',
            'ngaysinh.required' => 'Yêu cầu bạn nhập ngaysinh !',
            'gioitinh.required' => 'Yêu cầu bạn chọn giới tính !',
            'lop.required' => 'Yêu cầu bạn nhập lớp học !',
            'nienkhoa.required'=> 'Yêu cầu bạn nhập niên khóa !',
            'hoten.required' => 'Yêu cầu bạn nhập họ tên !'
        ];
    }

}
