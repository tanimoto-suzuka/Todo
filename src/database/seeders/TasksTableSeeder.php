<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルの中身を削除
        DB::table('tasks')->truncate();

        // テーブルにデータを挿入
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'タスク1の名前',
                'content' => 'タスク1の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => 'タスク2の名前',
                'content' => 'タスク2の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => 'タスク3の名前',
                'content' => 'タスク3の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'name' => 'タスク4の名前',
                'content' => 'タスク4の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ],
            [
                'id' => 5,
                'user_id' => 2,
                'name' => 'タスク5の名前',
                'content' => 'タスク5の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ],
            [
                'id' => 6,
                'user_id' => 3,
                'name' => 'タスク6の名前',
                'content' => 'タスク6の内容',
                'created_at' => '2022-04-01 10:10:10',
                'updated_at' => '2022-04-01 10:10:10'
            ]
        ]);
    }
}
