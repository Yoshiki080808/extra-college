<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::create(
        [
            'name' => 'Kaneko Consulting',
            'industry' => 'サービス',
            'zipcode' => '1440008',
            'country' => '日本',
            'address_1' => '東京都',
            'address_2' => '新宿区',
            'address_3' => '歌舞伎町',
            'pic_name' => '金子よしお',
            'email' => 'kaneko00@gmail.com',
            'password' => Hash::make('kaneko00'),
            'tel' => '05011112222',
            'image' => 'https://cdn.pixabay.com/photo/2017/10/06/10/36/graphic-2822614_1280.png',
        ],
        [
            'name' => 'Marketengo',
            'industry' => 'マーケティング',
            'zipcode' => '1330018',
            'country' => '日本',
            'address_1' => '東京都',
            'address_2' => '練馬区',
            'address_3' => '桜木町',
            'pic_name' => '田中なつき',
            'email' => 'tanaka00@gmail.com',
            'password' => Hash::make('tanaka00'),
            'tel' => '05044442222',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/01/03/28/magnifier-1787362_1280.png',
        ],
        [
            'name' => '八神証券',
            'industry' => '金融',
            'zipcode' => '1530002',
            'country' => '日本',
            'address_1' => '大阪府',
            'address_2' => '三本柳',
            'address_3' => '要町',
            'pic_name' => '八神かいと',
            'email' => 'yagami00@gmail.com',
            'password' => Hash::make('yagami00@gmail.com'),
            'tel' => '05064647777',
            'image' => 'https://cdn.pixabay.com/photo/2017/09/26/21/45/spiral-2790215_1280.png',
        ],
        [
            'name' => 'Vieras',
            'industry' => 'IT技術',
            'zipcode' => '1440056',
            'country' => 'それ以外',
            'address_1' => 'America',
            'address_2' => 'New York',
            'address_3' => 'Boston',
            'pic_name' => 'Disney Yesis',
            'email' => 'disney00',
            'password' => Hash::make('disney00@gmail.com'),
            'tel' => '05011112222',
            'image' => 'https://cdn.pixabay.com/photo/2012/11/26/15/07/earth-67359_1280.jpg',
        ]
    
        );
    }
}
