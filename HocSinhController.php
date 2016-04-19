<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hocsinh;
use App\Http\Requests\HocsinhRequest;

class HocSinhController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $hocsinh = HocSinh::paginate(1);
        //print_r($hocsinh);
        return view('hocsinh.list')->with('hocsinh', $hocsinh);
    }

    public function danhsach(){
     
       $hocsinh = HocSinh::paginate(1);
        //print_r($hocsinh);
        return view('hocsinh.danhsach')->with('hocsinh', $hocsinh);
    }

    public function create() {
        return view('hocsinh.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HocsinhRequest $request) {
        $hocsinh = new Hocsinh();
        $hocsinh->mahocsinh = $request->txtMahocsinh;
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->ngaysinh = $request->txtNgaysinh;
        $hocsinh->gioitinh = $request->gioitinh;
        $hocsinh->nienkhoa = $request->txtNienkhoa;
        $hocsinh->lop = $request->txtLop;
        $hocsinh->save();
        return redirect()->route('hocsinh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }
     public function edit($id) {
        $data = Hocsinh::find($id);
        return view('hocsinh.edit', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request) {
        $hocsinh = Hocsinh::find($id);
        $hocsinh->mahocsinh = $request->txtMahocsinh;
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->ngaysinh = $request->txtNgaysinh;
        $hocsinh->gioitinh = $request->gioitinh;
        $hocsinh->nienkhoa = $request->txtNienkhoa;
        $hocsinh->lop = $request->txtLop;
        $hocsinh->save();
        return redirect()->route('hocsinh.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $hocsinh = Hocsinh::findOrFail($id);
        $hocsinh->delete();
        return redirect()->route('hocsinh.index');
    }
    public function getListStudent(Request $request){
		$nienkhoa = $request->input('nienkhoa');
		$lop = $request->input('lop');
                dd($nienkhoa);
		$students = Hocsinh::where('nienkhoa',$nienkhoa)->where('lop',$lop)->get();
		//$students = HocSinh::where('nienkhoa','like',"%$nienkhoa%")->where('lop','like',"%$lop%")->get();
		 //return Response::json($students);
		return response()->json(['students'=>$students]);	
	}
        
}
