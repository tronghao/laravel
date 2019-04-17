<?php
	namespace App\Http\Controllers;
	class chuyenhuong extends Controller
	{
		public function layct()
		{
			return redirect()->route("ct");
		}
	}
?>