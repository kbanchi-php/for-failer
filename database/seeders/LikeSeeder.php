<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
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
                'challenge_id' => 2,
            ],
            [
                'user_id' => 2,
                'challenge_id' => 3,
            ],
            [
                'user_id' => 3,
                'challenge_id' => 1,
            ],
        ];
        DB::table('likes')->insert($param);
    }
}
