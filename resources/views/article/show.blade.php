@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p class="lead">{{$item->title}}</p>

                    <div class="align-items-end" >
                        {{ date("Y年 m月 d日",strtotime($item->created_at)) }}
                        <span class="main-color">by{{$item->writer}}</span>
                    </div>
                </div>

                <div class="card-body">
                    {!! nl2br($item->article) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
