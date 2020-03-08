@extends('layout')

@section('content')
    <h2 class="mb-5">{{ $message }}</h2>
    @include('search')
        <div class="message">
        @foreach ($articles as $article)

                <div class="message_item">
                    <p><span>投稿者名: {{ $article->user_name }}<span></p>
                    <p>
                        <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
                        {!! nl2br(e($article->content)) !!}
                        </a>
                    </p>
                </div>
        @endforeach
        </div>
    <div>
        <a href={{ route('article.new') }} class='btn btn-outline-primary'>新規投稿</a>
    </div>
@endsection