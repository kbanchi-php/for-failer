<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'user_id' => 1,
                'title' => 'たいとる1',
                'challenge' => 'ちゃれんじ1',
                'bill' => 10000,
            ],
            [
                'user_id' => 2,
                'title' => 'たいとる2',
                'challenge' => 'ちゃれんじ2',
                'bill' => 15000,
            ],
            [
                'user_id' => 3,
                'title' => 'たいとる3',
                'challenge' => 'ちゃれんじ3',
                'bill' => 20000,
            ],
        ];
        DB::table('challenges')->insert($param);
    }
}
