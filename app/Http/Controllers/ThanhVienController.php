<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ThanhVienController extends Controller
{
    public function dangNhap()
    {
		return view('dang-nhap/form-dang-nhap');
    }
    public function xuLyDangNhap()
    {
		echo $_POST['tenDangNhap'];
    }
}
