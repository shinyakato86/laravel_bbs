@extends('layout')

@section('content')
    <h2>投稿詳細</h2>
    <div class="message">
        <div class="message_item">
            <p>{{ $message }}<span class="ml-3">投稿者名:{{ $article->user_name }}</span></p>
            <p>{{ $article->content }}</p>
        </div>
    </div>
    <p>
        <a href={{ route('article.list') }} class='btn btn-outline-primary mr-3'>一覧に戻る</a>
        <a href={{ route('article.edit', ["id" =>  $article->id]) }} class='btn btn-outline-primary'>編集</a>
    </p>
    <div>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
            {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
        {{ Form::close() }}
    </div>
@endsection