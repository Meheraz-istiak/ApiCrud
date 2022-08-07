<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\api;

class ApiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api =[
           ['name'=>'meheraz','email'=>'m@gmail.com','phone'=>'01782938586'],
           ['name'=>'arif','email'=>'j@gmail.com','phone'=>'01782935286'],
           ['name'=>'rakib','email'=>'hay@gmail.com','phone'=>'017845586'],
           ['name'=>'monur','email'=>'mor@gmail.com','phone'=>'01788948586'],
        ];

        api::insert($api);
    }
}
