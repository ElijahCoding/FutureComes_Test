@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $user->name }} ({{ $user->email }})
                        <span class="float-right">created at <em><strong>{{ $user->created_at->format('d-m-y') }}</strong></em> ({{ $user->created_at->diffForHumans() }})</span>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($articles as $article)
                                <li class="list-group-item">
                                    <a href="{{ route('article.show', $article->id) }}">
                                        {{ $article->title }} (<strong>{{ $article->body }}</strong>)
                                    </a>
                                </li>
                            @endforeach
                            {{ $articles->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
