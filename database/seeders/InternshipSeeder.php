<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Internship;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Internship::create(
        [
            'company_id' => '1',
            'company_name' => 'Kaneko Consulting',
            'title' => '法人営業へのサポート業務',
            'pic_name' => '金子よしお',
            'pic_email' => 'kaneko00@gmail.com',
            'pic_tel' => '05011112222',
            'position_name' => '法人営業',
            'duration' => '2023年8月20日から3ヶ月間',
            'salary_type' => '時給1,300円',
            'content' => '法人営業をするに当たっての営業リストの作成とアプローチ方法の提案をして頂きます。',
            'image' => 'https://cdn.pixabay.com/photo/2017/10/06/10/36/graphic-2822614_1280.png',
            'limit_of_candidates' => '10人',
            'attachment_1' => 'PDF',
            'attachment_2' => 'PDF',
        ],
        [
            'company_id' => '2',
            'company_name' => 'Marketengo',
            'title' => '顧客からの市場調査依頼受付',
            'pic_name' => '田中なつき',
            'pic_email' => 'tanaka00@gmail.com',
            'pic_tel' => '05044442222',
            'position_name' => 'マーケットアナリスト',
            'duration' => '2023年8月20日から3ヶ月間',
            'salary_type' => '時給1,300円',
            'content' => '弊社の顧客に対してSNSマーケティング指導をするに当たっての市場調査等をして頂きます。',
            'image' => 'https://cdn.pixabay.com/photo/2016/11/01/03/28/magnifier-1787362_1280.png',
            'limit_of_candidates' => '10人',
            'attachment_1' => 'PDF',
            'attachment_2' => 'PDF',
        ],
        [
            'company_id' => '3',
            'company_name' => '八神証券',
            'title' => '顧客データベース活用の提案',
            'pic_name' => '八神かいと',
            'pic_email' => 'yagami00@gmail.com',
            'pic_tel' => '05064647777',
            'position_name' => '金融マネージャー',
            'duration' => '2023年8月20日から3ヶ月間',
            'salary_type' => '時給1,300円',
            'content' => '既にある顧客リストを参照して、新しく商品を提案する方法を一から考えて頂きます。',
            'image' => 'https://cdn.pixabay.com/photo/2017/09/26/21/45/spiral-2790215_1280.png',
            'limit_of_candidates' => '10人',
            'attachment_1' => 'PDF',
            'attachment_2' => 'PDF',
        ],
        [
            'company_id' => '4',
            'company_name' => ' Vieras',
            'title' => '自社サービスのフロントエンド改善業務',
            'pic_name' => 'Disney Yesis',
            'pic_email' => 'disney00@gmail.com',
            'pic_tel' => '05011112222',
            'position_name' => 'フロントエンド(React)',
            'duration' => '2023年8月20日から3ヶ月間',
            'salary_type' => '時給1,300円',
            'content' => '自社Webサイトのページを改良するに当たってのアイデアの提案とUIの改善策を練って頂きます。',
            'image' => 'https://cdn.pixabay.com/photo/2012/11/26/15/07/earth-67359_1280.jpg',
            'limit_of_candidates' => '10人',
            'attachment_1' => 'PDF',
            'attachment_2' => 'PDF',
        ],
        [
            'company_id' => '1',
            'company_name' => 'Kaneko Consulting',
            'title' => '新規の個人顧客開拓リスト作成',
            'pic_name' => '金子よしお',
            'pic_email' => 'kaneko00@gmail.com',
            'pic_tel' => '05011112222',
            'position_name' => '新規営業',
            'duration' => '2023年8月20日から3ヶ月間',
            'salary_type' => '時給1,300円',
            'content' => '法人以外の個人の顧客を発見するために、新規の顧客リストを作成して頂きます。',
            'image' => 'https://cdn.pixabay.com/photo/2017/10/06/10/36/graphic-2822614_1280.png',
            'limit_of_candidates' => '10人',
            'attachment_1' => 'PDF',
            'attachment_2' => 'PDF',
        ],
    
        );
    }
}
