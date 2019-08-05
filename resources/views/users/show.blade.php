@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $user->name }}
                        <span class="float-right">created by <em><strong><a href="{{ route('user.show', $article->user->id) }}">{{ $article->user->name }}</a></strong></em></span>
                    </div>

                    <div class="card-body">
                        <h3>{{ $article->body }}</h3>
                        <ul class="list-group list-group-flush">
                            @foreach ($article->comments as $comment)
                                <li class="list-group-item">
                                    {{ $comment->body }} (<strong>{{ $comment->created_at->diffForHumans() }}</strong>) {{ $comment->created_at->format('d-m-y') }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
