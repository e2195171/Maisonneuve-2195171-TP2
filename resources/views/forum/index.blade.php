@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="{{ route('forum.create') }}" class="btn btn-dark float-end">{{ trans('lang.text_add_article') }}</a>
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">{{ trans('lang.text_forum') }}</h1>
                </div>
            </div>
            <ol class="list-group list-group-numbered">
                @forelse($articles as $article)
                    <li class="list-group-item"><a href="{{ route('forum.show', $article->id) }}" class="text-dark">{{ ucfirst($article->title) }}</a></li>
                @empty
                    <li class="list-group-item">{{ trans('lang.text_no_article') }}</li>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection