<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    //
    protected $table = 'thanhvien';
    protected $fillable = ['username','password', 'fullname','email'];
    public $timestamps = false;
}
