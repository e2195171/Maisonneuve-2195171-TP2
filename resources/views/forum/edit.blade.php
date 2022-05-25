@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="{{ route('forum') }}" class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>
            <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">{{ trans('lang.text_modify') }}</h1>
                <p>{{ trans('lang.text_modify_form') }}</p>
                <hr>
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-outline-dark btn-sm active" id="home-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab" aria-controls="home" aria-selected="true">{{ trans('lang.text_lg_en') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-outline-dark btn-sm" id="profile-tab" data-bs-toggle="tab" data-bs-target="#french" type="button" role="tab" aria-controls="profile" aria-selected="false">{{ trans('lang.text_lg_fr') }}</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="home-tab">
                                <div class="control-group col-12">
                                    <label for="title">{{ trans('lang.text_title_article') }}</label>
                                    <input type="text" id="title" class="form-control" name="title_en" value="{{ $forum->title }}">
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body">{{ trans('lang.text_body_article') }}</label>
                                    <textarea id="body" class="form-control" name="body_en">{{ $forum->body }}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="french" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="control-group col-12">
                                    <label for="title">{{ trans('lang.text_title_article') }}</label>
                                    <input type="text" id="title" class="form-control" name="title_fr" value="{{ $forum->title }}">
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body">{{ trans('lang.text_body_article') }}</label>
                                    <textarea id="body" class="form-control" name="body_fr">{{ $forum->body }}</textarea>
                                </div>
                            </div>
                        </div>    
                        <div class="control-group col-12 mt-2">
                            <label for="categorie">{{ trans('lang.text_category') }}</label>
                            <select id="categorie" class="form-control" name="categories_id">
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}"@if ($categorie->id == $forum->categories_id) selected="selected" @endif>{{$categorie->categorie}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                {{ trans('lang.text_btn_update') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection