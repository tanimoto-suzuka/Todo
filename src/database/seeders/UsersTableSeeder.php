<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルの中身を削除
        DB::table('users')->truncate();

        // テーブルにデータを挿入
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'user1',
                'email' => 'test1111@email.com',
                'password' => Hash::make('test1111'),
                'created_at' => '2022-01-01 12:00:00',
                'updated_at' => '2022-01-01 12:00:00'
            ],
            [
                'id' => 2,
                'name' => 'user2',
                'email' => 'test2222y@email.com',
                'password' => Hash::make('test2222'),
                'created_at' => '2022-01-01 12:00:00',
                'updated_at' => '2022-01-01 12:00:00'
            ],
            [
                'id' => 3,
                'name' => 'user3',
                'email' => 'test3333@email.com',
                'password' => Hash::make('test3333'),
                'created_at' => '2022-01-01 12:00:00',
                'updated_at' => '2022-01-01 12:00:00'
            ]
        ]);
    }
}
