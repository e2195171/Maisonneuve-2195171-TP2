@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="{{ route('directory') }}" class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>
            <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-6">{{ trans('lang.text_mod_file') }}</h1>
                <p>{{ trans('lang.text_modify_file') }}</p>
                <hr>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="name_en">{{ trans('lang.text_directory_name') }}</label>
                            <input type="text" id="name_en" class="form-control" name="name_en" value="{{ $directory->name_en }}"></input>
                        </div>
                        <div class="control-group col-12 pb-4">
                            <label for="name_fr">{{ trans('lang.text_directory_name') }}</label>
                            <input type="text" id="name_fr" class="form-control" name="name_fr" value="{{ $directory->name_fr }}"></input>
                        </div>
                        <div class="control-group col-12">
                        <input name="document" id="document" type="file" required></input>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="control-group text-center">
                            <button class="btn btn-dark">
                            {{ trans('lang.text_btn_file') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection