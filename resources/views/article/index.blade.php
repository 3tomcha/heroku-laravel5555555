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
                <div class="col-md-6 row">
                    <div class="col-md-12"><h2>{{$item->title}}</h2></div>
                    <div class="col-md-12"><h4>by <span class="main-color">{{$item->writer}}</span></h4></div>
                    <div class="col-md-12">{{mb_strimwidth($item->article,0,100,'...')}}</div>

                    @if(Auth::user())
                    <div class="col-md-2"><a href="/article/{{$item->id}}/edit" class="btn btn-primary">編集</a></div>
                    <div class="col-md-2">
                        <form action="/article/{{$item->id}}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="btn btn-secondary" value="削除">
                        </form>
                    </div>
                    @else
                    <div class="col-md-12 text-right">
                        <a href="/article/{{$item->id}}"><strong class="main-color">続きを読む</strong></a>
                    </div>
                    @endif
                </div>
                <div class="col-md-4">
                    @if(strpos($item->image,"http")!==false)
                    <img src="{!! $item->image !!}" class="img-fluid">
                    @else
                    <img src="{!! asset('storage/'.$item->image) !!}" class="img-fluid">
                    @endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
