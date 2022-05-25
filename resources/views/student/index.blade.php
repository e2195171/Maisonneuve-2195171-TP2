@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="{{ route('student.create') }}" class="btn btn-dark float-end">{{ trans('lang.text_add_student') }}</a>
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">{{ trans('lang.text_list_student') }}</h1>
                    </div>
                </div>
                <ol class="list-group list-group-numbered">
                    @forelse($students as $student)
                        <li class="list-group-item"><a href="{{ route('student.show', $student->id) }}" class="text-dark">{{ ucfirst($student->name)}}</a></li>
                    @empty
                        <li class="list-group-item">{{ trans('lang.text_no_student') }}</li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

@endsection