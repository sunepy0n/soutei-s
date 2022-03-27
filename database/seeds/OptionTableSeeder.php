<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'type' => 1,
            'name' => '標準コート紙',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 1,
            'name' => '特殊紙',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 1,
            'name' => 'カバー付き',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 2,
            'name' => 'インク色替え',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 2,
            'name' => '本文紙部分変更',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 2,
            'name' => '遊び紙印刷',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 3,
            'name' => '変形断裁',
        ];
        DB::table('options')->insert($param);
        
        $param = [
            'type' => 3,
            'name' => '小口染め',
        ];
        DB::table('options')->insert($param);
        
    }
}
