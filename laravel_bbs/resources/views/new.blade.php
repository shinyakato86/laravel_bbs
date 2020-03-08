@extends('layout')

@section('content')
    <h2 class="heading02">{{ $message }}</h2>
    {{ Form::open(['route' => 'article.store']) }}
        <div class='form-group'>
        {{ Form::label('content', '投稿内容:', ['class' => 'inline-block align-top']) }}
            {{ Form::textarea('content', null, ['size' => '50x5']) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', '投稿者名:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group mt-5">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary mr-3']) }}
            <a href={{ route('article.list') }} class="btn btn-secondary ">一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection
