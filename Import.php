<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table= 'thongtin';
    protected $fillable = ['id','MSSV_SinhVien','Value','id_KyHoc','id_Type'];
}
