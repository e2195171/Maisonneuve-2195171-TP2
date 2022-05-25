@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="height: 580px;">
                <a href="." class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>
                <h4 class="display-one mt-4">{{ ucfirst($student->name) }}</h4>
                <hr>
                <p class="display-one">{{ trans('lang.text_address') }} : {{ $student->address }}</p>
                <p class="display-one">{{ trans('lang.text_phone') }} : {{ $student->phone }}</p>
                <p class="display-one">{{ trans('lang.text_email') }} : {{ $student->email }}</p>
                <p class="display-one">{{ trans('lang.text_birthday') }} : {{ $student->date_birthday }}</p>
                <p class="display-one">{{ trans('lang.text_city') }} : {{ $city->city }}</p> 
                    <hr>
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-dark">{{ trans('lang.text_update_student') }}</a>
                    <hr>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-trash">{{ trans('lang.text_delete_student') }}</i>
                    </button>
                    <hr>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('lang.text_btn_delete') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ trans('lang.text_alert') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">{{ trans('lang.text_btn_cancel') }}</button>
                    <form method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash">{{ trans('lang.text_btn_delete') }}</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection