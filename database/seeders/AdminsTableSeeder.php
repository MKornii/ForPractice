<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords =[
          [  'id' => 1,
            'name'=> 'Admin',
            'type'=> 'admin',
            'mobile'=>'098656779400',
            'email'=> 'admin@admin.com',
            'password'=>$password,
            'status'=> 1],
          [  'id' => 2,
            'name'=> 'Admin',
            'type'=> 'admin',
            'mobile'=>'0986567794',
            'email'=> 'admin1@admin.com',
            'password'=>$password,
            'status'=> 1 ],
        ];
        Admin::insert($adminRecords);
    }
}
