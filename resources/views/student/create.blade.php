@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="min-height: 580px;">  
                <a href="{{ route('student') }}" class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>             
                <div class="mt-5 pl-4 pr-4 pb-4">
                    <h1 class="display-4">{{ trans('lang.text_add_student') }}</h1>
                    <p>{{ trans('lang.text_student_form') }}</p>
                    <hr>
                    <form method="post">
                        @csrf
                        <div class="row">
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>                         
                        @endforeach
                            <div class="control-group col-12">
                                <label for="name">{{ trans('lang.text_name') }}</label>
                                <input type="text" id="name" class="form-control" name="name"
                                placeholder="{{ trans('lang.text_name_placeholder') }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="address">{{ trans('lang.text_address') }}</label>
                                <input type="text" id="address" class="form-control" name="address"
                                placeholder="{{ trans('lang.text_address_placeholder') }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="phone">{{ trans('lang.text_phone') }}</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                placeholder="{{ trans('lang.text_phone_placeholder') }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="email">{{ trans('lang.text_email') }}</label>
                                <input type="text" id="email" class="form-control" name="email"
                                placeholder="{{ trans('lang.text_email_placeholder') }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="date_birthday">{{ trans('lang.text_birthday') }}</label>
                                <input type="text" id="date_birthday" class="form-control" name="date_birthday"
                                placeholder="{{ trans('lang.text_birthday_placeholder') }}" required>
                            </div>
                            <div class="control-group col-12">
                               <label for="city">{{ trans('lang.text_city') }}</label>
                               <select class="form-select" aria-label="Default select example" name="city" id="city">
                               <option>{{ trans('lang.text_sities') }}</option>
                                @foreach($city as $city)
                                <option value="{{ $city->id }}">{{ $city->city }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                {{ trans('lang.text_create_student') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection