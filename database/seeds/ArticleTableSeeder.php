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
    	家族や恋人、サークル、仕事など相手やシーンに応じて複数のカレンダーを簡単に作成し、共有できるアプリ「TimeTree」。同サービスを提供するJUBILEE WORKSは12月4日、2018年11月までに株式譲渡を含めて総額約9.2億円の出資を受けたことを明らかにした。
    	今回のラウンドには既存株主であるKAKAO VENTURES、 SMBCベンチャーキャピタルや個人投資家のほか、新規株主としてみずほキャピタルが参加。同社はこれまで2016年10月に2.1億円、2017年8月にも5.3億円を調達するなどしていて、これまでのファイナンス総額は約17億円になるという。

    	冒頭でも触れた通り、TimeTreeはスマホ向けのカレンダーシェアアプリだ。特徴は相手や目的に応じて“グループ専用のカレンダー”を複数作成し共有できること。開発段階からシェアすることを前提に設計しているからこそ、それをベースにした機能がいくつも搭載されている（この辺りの思想やサービスの背景は前回詳しく紹介している）。";

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
