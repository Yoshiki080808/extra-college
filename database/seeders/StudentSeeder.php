<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Student::create(   
            [
                'name' => '西田たつや',
                'email' => 'nishida00@gmail.com',
                'password' => 'nishida00',
                'zipcode' => '1220022',
                'country' => '日本',
                'address_1' => '長野県',
                'address_2' => '中野市',
                'address_3' => '大久保',
                'tel' => '05011112222',
                'image' => '1',
                'degree' => '大学',
                'university' => '情報大学',
                'department' => '経営',
                'faculty' => '経営',
            ]);
        \App\Models\Student::create(   
            [
                'name' => '前園しんじ',
                'email' => 'maezono00@gmail.com',
                'password' => 'maezono00',
                'zipcode' => '1220023',
                'country' => '日本',
                'address_1' => '広島県',
                'address_2' => '大塚市',
                'address_3' => '大宮',
                'tel' => '05011113333',
                'image' => '1',
                'degree' => '大学',
                'university' => '双方大学',
                'department' => '情報',
                'faculty' => 'プログラミング',
            ]);
        \App\Models\Student::create(   
            [
                'name' => '関谷こうじ',
                'email' => 'sekiya00@gmail.com',
                'password' => 'sekiya00',
                'zipcode' => '1440022',
                'country' => '日本',
                'address_1' => '北海道',
                'address_2' => '間市',
                'address_3' => '北島',
                'tel' => '05055556666',
                'image' => '1',
                'degree' => '大学',
                'university' => '日農業大学',
                'department' => '農業',
                'faculty' => '経営',
            ]);
    }
}
