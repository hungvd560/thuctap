<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Import;
use App\User;
use Excel,File;

class ImportController extends Controller {

    public function getImport() {
        return view("import.import");
    }

    public function postImport() {
        Excel::load(Input::file('file'), function ($reader) {
            $reader->each(function($sheet) {
                foreach ($sheet->toArray() as $row) {
                    User::firstOrCreate($sheet->toArray());
                }
            });
        });
    }
    public function geExport(){
        
        $export = User::select('id','name','email')->get();
        Excel::create('export data', function($excel) use($export){
            $excel->sheet('Sheet 1', function($sheet) use($export){
            
                $sheet->fromArray($export);
            });
        
            
        });
       
        }
}
