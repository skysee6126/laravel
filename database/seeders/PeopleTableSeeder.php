<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@taro.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hana',
            'mail' => 'hana@taro.jp',
            'age' => 32,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'mako',
            'mail' => 'mako@taro.jp',
            'age' => 24,
        ];
        DB::table('people')->insert($param);
    }
}
