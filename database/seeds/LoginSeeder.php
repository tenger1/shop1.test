<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$pass = 'admin1';
        $data = [
            ['id' => 1,'name' => 'Admin1','user' => 'admin1','password' => md5($pass."uyfvhsfias"),'role' => 'admin',],            
            
        ];
        
        DB::table('login')->insert($data);
    }
}
