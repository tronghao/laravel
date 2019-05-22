<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhVien;
use App\Http\Requests;

class AdminController extends Controller
{
    public function home()
	{
		$kq = new ThanhVien;
		$data['allUser'] = $kq->all()->toArray();
		return view('admin.admin')->with($data);
	}

	public function deleteAccount($id)
	{
		$kq = new ThanhVien;
		$kq->destroy($id);
		return redirect('admin/home');
	}

	public function addAccount()
	{
		return view('admin.themtaikhoan');
	}

	public function postAddAccount(Request $rq)
	{
		$kq = new ThanhVien;
		if($kq->whereRaw('username = ? and email = ?', [$rq->tenDangNhap, $rq->email])
			  ->get()
			  ->count()  == 0)
		{
			$kq->username = $rq->tenDangNhap;
			$kq->password = $rq->pass;
			$kq->fullname = $rq->hoten;
			$kq->email = $rq->email;
			$kq->save();
			return view('admin.themtaikhoan')->with('info','Thêm tài khoản thành công');
		}
		else
		{
			return view('admin.themtaikhoan')->with('info','Tài khoản bị trùng');
		}
	}

	public function editAccount($id)
	{
		$kq = new ThanhVien;
		$data['dulieu'] = $kq->where('id','=',$id)->get()->toArray();
		return view('admin.suataikhoan')->with($data);
	}

	public function postEditAccount($id, Request $rq)
	{
		$kq = new ThanhVien;
		if($kq->whereRaw('(username = ? or email = ? ) and id != ?', [$rq->tenDangNhap, $rq->email,$id])
			  ->get()
			  ->count()  == 0)
		{
			$update =  ThanhVien::find($id);
			$update->username = $rq->tenDangNhap;
			$update->password = $rq->pass;
			$update->fullname = $rq->hoten;
			$update->email = $rq->email;
			$update->save();
			return view('admin.suataikhoan')->with('info','Sửa tài khoản thành công');
		}
		else
		{
			return view('admin.suataikhoan')->with('info','Tài khoản bị trùng');
		}
	}
}
