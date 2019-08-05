@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Top 5 Articles</div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($articles as $article)
                                <li class="list-group-item">
                                    <a href="{{ route('article.show', $article->id) }}">
                                        {{ $article->title }} ({{ $article->comments_count }} {{ str_plural('comment', $article->comments_count) }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Top 5 Users</div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($users as $user)
                                <li class="list-group-item">
                                    <a href="{{ route('user.show', $user->id) }}">
                                        {{ $user->name }} ({{ $user->articles_count }} {{ str_plural('article', $user->articles_count) }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">Latest 5 comments</div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($comments as $comment)
                                <li class="list-group-item">
                                    <a href="{{ route('article.show', $comment->article->id) }}">
                                        {{ $comment->body }} (<strong>{{ $comment->created_at->diffForHumans() }}</strong>) {{ $comment->created_at->format('d-m-y') }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
