@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $article->title }}
                        <span class="float-right">created by <em><strong><a href="{{ route('user.show', $article->user->id) }}">{{ $article->user->name }}</a></strong></em></span>
                    </div>

                    <div class="card-body">
                        <h3>{{ $article->body }}</h3>
                        @if ($article->comments->count())
                            <ul class="list-group list-group-flush">
                                @foreach ($article->comments()->orderBy('created_at', 'desc')->get() as $comment)
                                    <li class="list-group-item">
                                        {{ $comment->body }} (<strong>{{ $comment->created_at->diffForHumans() }}</strong>) {{ $comment->created_at->format('d-m-y') }}
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No comments</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
