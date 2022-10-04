<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 追記開始
        \App\Models\User::create([
            'name' => 'テストユーザ',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\User::create([
            'name' => 'ぼやき太郎',
            'email' => 'boyaki@example.com',
            'password' => bcrypt('password'),
        ]);

        \App\Models\Company::create([
            'message' => 'テストユーザによる投稿',
            'user_id' => 1
        ]);

        \App\Models\Company::create([
            'message' => 'ぼやき太郎による投稿',
            'user_id' => 2
        ]);
        // 追記終了

    }
}