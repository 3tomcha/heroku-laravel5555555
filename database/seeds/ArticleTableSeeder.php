<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('articles')->truncate();
    	$article_sample = "
    	家族や恋人、サークル、仕事など相手やシーンに応じて複数のカレンダーを簡単に作成し、共有できるアプリ「TimeTree」。同サービスを提供するJUBILEE WORKSは12月4日、2018年11月までに株式譲渡を含めて総額約9.2億円の出資を受けたことを明らかにした。";

    	DB::table('articles')->insert([
    		'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
    		'writer' => 'masumi ohsaki',
    		'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
    	]);
        
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
        DB::table('articles')->insert([
            'title' => '1200万人が登録するカレンダー共有アプリ「TimeTree」が9.2億円のファイナンスを実施',
            'writer' => 'masumi ohsaki',
            'article' => $article_sample,
            'image' => 'https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg',
        ]);
    }
}
