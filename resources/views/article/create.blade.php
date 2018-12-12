@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('記事投稿') }}</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

                @endif

                <div class="card-body">
                    <form action="/article" method="post" enctype="multipart/form-data" files='true'>
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('タイトル') }}</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('記事') }}</label>
                            <div class="col-md-8">
                             <textarea id="article" name="article" class="form-control" aria-label="With textarea"></textarea>
                         </div>
                     </div>

                     <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('画像') }}</label>
                        <div class="col-md-8">
                            <input type="file" name="image" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="mx-auto d-flex justify-content-between col-8">
                            <button type="button" onclick="history.back()" class="btn btn-secondary">{{ __('戻る') }}</button>
                            
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-primary">
                                {{ __('投稿する') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
