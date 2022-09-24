<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '課題',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'content' => '食器洗い',
        ];
        DB::table('todos')->insert($param);

        $param = [
            'content' => 'お買い物',
        ];
        DB::table('todos')->insert($param);
    }
}
