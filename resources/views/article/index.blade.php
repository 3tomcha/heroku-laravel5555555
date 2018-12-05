@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        @foreach($items as $item)   
        <div class="card2">
            <div class="row card-body">
                <div class="col-md-2">
                    <p class="bg-light text-secondary px-2 flexnowrap text-center">{{ date("Y年 m月 d日",strtotime($item->created_at)) }}</p>
                </div>
                <div class="col-md-6">
                    <h2>{{$item->title}}</h2>
                    <h4>by <span class="main-color">{{$item->writer}}</span></h4>
                    {{mb_strimwidth($item->article,0,100,'...')}}

                    @if(Auth::user())
                    <a href="/article/{{$item->id}}/edit">この記事を編集する</a>
                    <form action="/article/{{$item->id}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="この記事を削除する">
                    </form>
                    @else
                    <a href="/article/{{$item->id}}"><strong class="main-color">続きを読む</strong></a>
                    @endif
                </div>
                <div class="col-md-4"><img src="https://techcrunchjp.files.wordpress.com/2018/11/dscf3143.jpg" class="img-fluid" ></div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
