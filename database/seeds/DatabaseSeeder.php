<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	DB::table('thanhvien')->insert([
      		array('username'=>'admin', 'password'=>'123456','email'=>'', 'fullname'=>''),
      		array('username'=>'tai', 'password'=>'123456', 'email'=>'110117058@sv.tvu.edu.vn', 'fullname'=>'Nguyễn Huỳnh Hữu Tài'),
          array('username'=>'hao', 'password'=>'123456', 'email'=>'110117051@sv.tvu.edu.vn', 'fullname'=>'Đổ Trọng Hảo'),
      		array('username'=>'chau', 'password'=>'123456', 'email'=>'110117045@sv.tvu.edu.vn', 'fullname'=>'Võ Minh Châu')
      	]); 
    }
}
