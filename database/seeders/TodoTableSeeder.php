<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "title" => "Laravelの勉強",
            "comment" => "青本を取り組む",
        ];
        $todo = new Todo;
        $todo->fill($param)->save();

        $param = [
            "title" => "SQLの勉強",
            "comment" => "実際にDBを弄ってみる",
        ];
        $todo = new Todo;
        $todo->fill($param)->save();

        $param = [
            "title" => "Railsの勉強",
            "comment" => "カリキュラムの準備",
        ];
        $todo = new Todo;
        $todo->fill($param)->save();

    }
}
