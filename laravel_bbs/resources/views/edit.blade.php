@extends('layout')

@section('content')
    <h2 class="heading02">投稿編集フォーム</h2>
    <p>{{ $message }}</p>
    {{ Form::model($article, ['route' => ['article.update', $article->id]]) }}
        <div class='form-group'>
            {{ Form::label('content', '投稿内容:', ['class' => 'inline-block align-top']) }}
            {{ Form::textarea('content', null, ['size' => '50x5']) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', '投稿者名:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group mt-5">
            {{ Form::submit('保存する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('article.show', ['id' =>  $article->id]) }} class="btn btn-primary">戻る</a>
        </div>
    {{ Form::close() }}
@endsection