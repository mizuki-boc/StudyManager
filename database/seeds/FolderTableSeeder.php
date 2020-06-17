<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memos = ['testmemo1', 'testmemo2', 'testmemo3'];
        foreach ($memos as $memo) {
            DB::table('folders')->insert([
                'memo' => $memo,
                'study_time' => '0:0:0',
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
