<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ThanhVien;
use Auth;

class ThanhVienController extends Controller
{

    public function dangNhap()
    {
		return view('dang-nhap.form-dang-nhap');
    }

    public function xuLyDangNhap(Request $rq)
    {
    	$kq = new ThanhVien;
		if($kq->whereRaw('username = ? and password = ?', [$rq->tenDangNhap, $rq->pass])
			  ->get()
			  ->count() > 0)
		{
			if($rq->tenDangNhap == 'admin')
			{
				$rq->Session()->put('user', $rq->tenDangNhap);
				return redirect('admin/home');
			}
			else
			{
				//Lay du lieu user
				$ten = $kq->whereRaw('username = ? and password = ?', [$rq->tenDangNhap, $rq->pass])->get()->toArray();

				$rq->Session()->put('user', $ten[0]['fullname']);
				return redirect('user/home');
			}
		}
		else
		{
			return view('dang-nhap.form-dang-nhap')->with('error','Sai thông tin đăng nhập!');
		}
    }

    public function dangXuat(Request $rq)
    {
    	$rq->Session()->flush();
    	return redirect('/');
    }
}
