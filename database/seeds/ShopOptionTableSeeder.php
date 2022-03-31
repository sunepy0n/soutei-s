<?php

use App\Option;
use App\Shop;
use Illuminate\Database\Seeder;

class ShopOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 1,
            'option_id' => 1,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 1,
            'option_id' => 2,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 1,
            'option_id' => 5,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 1,
            'option_id' => 8,
        ];
        DB::table('shop_option')->insert($param);
        
        
        $param = [
            'shop_id' => 2,
            'option_id' =>3,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 2,
            'option_id' => 4,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 2,
            'option_id' => 5,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 2,
            'option_id' => 6,
        ];
        DB::table('shop_option')->insert($param);
        
        
        $param = [
            'shop_id' => 3,
            'option_id' => 1,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 3,
            'option_id' => 2,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 3,
            'option_id' => 7,
        ];
        DB::table('shop_option')->insert($param);
        
        $param = [
            'shop_id' => 3,
            'option_id' => 8,
        ];
        DB::table('shop_option')->insert($param);
        
    }
}
