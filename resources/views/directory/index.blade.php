@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">
            <a href="{{ route('directory.create') }}" class="btn btn-dark float-end">{{ trans('lang.text_file') }}</a>
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">{{ trans('lang.text_directory') }}</h1>
                </div>
            </div>
            <ol class="list-group list-group-numbered">
                @forelse($directories as $directory)
                    <li class="list-group-item"><a href="{{ route('directory.show', $directory->id) }}" class="text-dark">{{ ucfirst($directory->name) }}</a></li>
                @empty
                    <li class="list-group-item">{{ trans('lang.text_no_file') }}</li>
                @endforelse
            </ol>
        </div>
    </div>
</div>

@endsection