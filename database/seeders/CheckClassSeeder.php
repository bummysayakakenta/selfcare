<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheckClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('check_classes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
       
        
        DB::table('check_classes')->insert([
            [
                'name'	=>  '良好サイン',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'	=>  '注意サイン',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'	=>  '悪化サイン',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'name'	=>  'リカバリー',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ]);
    }
}
