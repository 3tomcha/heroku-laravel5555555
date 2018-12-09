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

    	冒頭でも触れた通り、TimeTreeはスマホ向けのカレンダーシェアアプリだ。特徴は相手や目的に応じて“グループ専用のカレンダー”を複数作成し共有できること。開発段階からシェアすることを前提に設計しているからこそ、それをベースにした機能がいくつも搭載されている（この辺りの思想やサービスの背景は前回詳しく紹介している）。



    	一例をあげると、誰かが予定を作成・変更した際に通知が届く機能や各予定ごとにコメントや画像を投稿できるチャット機能、日程が決まっていない予定をメモして共有できるキープ機能などを備える。

    	カレンダーの共有はLINEやメールで招待URLを送るだけ。カレンダーを共有してないユーザーに個別の予定だけ共有することもできる。Googleカレンダーと連携しているので「仕事の予定はGoogleカレンダーに登録している」というユーザーもスムーズに予定を反映することが可能だ。


    	1300万は見込み数

    	2015年3月のサービスリリースから約3年半が経過した現在では登録ユーザー数が1200万を突破（2018年11月時点）。今回調達した資金はさらに多くのユーザーにTimeTreeを知ってもらうためのプロモーションと「予定による人と情報のマッチングプラットフォーム」に向けた機能開発に用いるという。

    	具体的には各ユーザーが自分で予定を入力して管理するだけでなく、各々にマッチした新たな情報に出会えるようなプラットフォームを目指し、以下のような機能群を開発する計画だ。

    	予定情報を元にターゲティング可能な広告商品である「TimeTree Ads」（今夏より国内で展開済み）
    	カレンダー形式でインターネット上にイベント情報を発信可能な「公開カレンダー」
    	TimeTree外部から予定の入力や呼び出しを可能にする「TimeTree API」「TimeTree Plugin」";

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
