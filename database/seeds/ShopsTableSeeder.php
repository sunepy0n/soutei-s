<?php

use Illuminate\Database\Seeder;
use App\Shops;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'あかつき印刷',
            'url' => 'https://www.akatsuki-insatsu.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => '株式会社栄光',
            'url' => 'https://www.eikou.com/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'オレンジ工房',
            'url' => 'https://www.orangekoubou.com/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'くりえい社',
            'url' => 'https://www.kurieisha.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'コミックモール',
            'url' => 'https://comicmall.jp/wiki.cgi?page=FrontPage',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'サングループ',
            'url' => 'https://sungroup.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'SAN24',
            'url' => 'https://www.san24.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'サンライズ',
            'url' => 'https://www.sunrisep.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'しまや出版',
            'url' => 'https://www.shimaya.net/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'STAR BOOKS',
            'url' => 'https://www.starbooks.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => '大陽出版',
            'url' => 'https://taiyoushuppan.co.jp/doujin/index.php',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'トム出版',
            'url' => 'https://www.tomshuppan.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => '西村謄写堂',
            'url' => 'https://nishimura-p.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => '日光企画',
            'url' => 'http://www.nikko-pc.com',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'ねこのしっぽ',
            'url' => 'https://www.shippo.co.jp/neko/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'book next',
            'url' => 'https://booknext.ink/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'フリーク',
            'url' => 'http://freak-net.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'PrintWalk',
            'url' => 'https://www.print-walk.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'プリントオン',
            'url' => 'https://www.print-on.jp/doujin/doujin_index.htm',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'BRO’S',
            'url' => 'https://www.bros-comic.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'ホープ21',
            'url' => 'https://www.hope21.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'ポプルス',
            'url' => 'https://www2.popls.co.jp/pop/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => '丸正インキ',
            'url' => 'https://www.marusho-ink.co.jp/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'みかんの樹 ',
            'url' => 'https://mikan-no-ki.com/',
        ];
        DB::table('shops')->insert($param);

        $param = [
            'name' => 'One Books',
            'url' => 'https://red-train.co.jp/onebooks',
        ];
        DB::table('shops')->insert($param);
        
        
    }
}
