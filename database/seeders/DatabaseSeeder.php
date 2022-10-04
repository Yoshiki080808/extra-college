<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // 追記開始
        // \App\Models\User::create([
        //     'name' => 'テストユーザ',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        // \App\Models\User::create([
        //     'name' => 'ぼやき太郎',
        //     'email' => 'boyaki@example.com',
        //     'password' => bcrypt('password'),
        // ]);

        // \App\Models\Company::create([
        //     'message' => 'テストユーザによる投稿',
        //     'user_id' => 1
        // ]);

        // \App\Models\Company::create([
        //     'message' => 'ぼやき太郎による投稿',
        //     'user_id' => 2
        // ]);
        // 追記終了

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
            ]);
        \App\Models\Company::create(    
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
            ]);
        \App\Models\Company::create(     
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
                'password' => Hash::make('yagami00'),
                'tel' => '05064647777',
                'image' => 'https://cdn.pixabay.com/photo/2017/09/26/21/45/spiral-2790215_1280.png',
            ]);
        \App\Models\Company::create(   
            [
                'name' => 'Vieras',
                'industry' => 'IT技術',
                'zipcode' => '1440056',
                'country' => 'それ以外',
                'address_1' => 'America',
                'address_2' => 'New York',
                'address_3' => 'Boston',
                'pic_name' => 'Disney Yesis',
                'email' => 'disney00@gmail.com',
                'password' => Hash::make('disney00'),
                'tel' => '05011112222',
                'image' => 'https://cdn.pixabay.com/photo/2012/11/26/15/07/earth-67359_1280.jpg',
            ]);

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
                'image' => 'https://cdn.pixabay.com/photo/2017/11/11/14/58/need-help-2939262_1280.png',
                'limit_of_candidates' => '10人',
                'attachment_1' => 'PDF',
                'attachment_2' => 'PDF',
            ]);
        \App\Models\Internship::create(    
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
            ]);
        \App\Models\Internship::create(   
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
            ]);
        \App\Models\Internship::create(   
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
            ]);
        \App\Models\Internship::create(   
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
                'image' => 'https://cdn.pixabay.com/photo/2014/12/11/08/08/customer-563967_1280.jpg',
                'limit_of_candidates' => '10人',
                'attachment_1' => 'PDF',
                'attachment_2' => 'PDF',
            ]);

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
                'image' => 'https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_1280.png',
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
                'image' => 'https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_1280.png',
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
                'image' => 'https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_1280.png',
                'degree' => '大学',
                'university' => '日農業大学',
                'department' => '農業',
                'faculty' => '経営',
            ]);
        
        \App\Models\Matching::create(   
            [
                'student_id' => '1',
                'company_id' => '3',
                'internship_id' => '3',
                'is_matching' => '1',
                'is_orientation' => '0',
                'is_internship' => '0',
                'is_done' => '0'
            ]);
            \App\Models\Matching::create(   
            [
                'student_id' => '2',
                'company_id' => '1',
                'internship_id' => '5',
                'is_matching' => '1',
                'is_orientation' => '0',
                'is_internship' => '0',
                'is_done' => '0'
            ]);   
            \App\Models\Matching::create(   
            [
                'student_id' => '3',
                'company_id' => '4',
                'internship_id' => '4',
                'is_matching' => '0',
                'is_orientation' => '0',
                'is_internship' => '0',
                'is_done' => '0'
            ]);            
         
            
    }
}
