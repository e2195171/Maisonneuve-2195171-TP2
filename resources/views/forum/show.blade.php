@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">  
            <a href="{{ route('forum') }}" class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>
            <a href="{{ route('forum.pdf', $article->id)}}" class="btn btn-outline-dark btn-sm" target="_blank">PDF</a>             
            <h1 class="display-one mt-4">{{ ucfirst($article->title) }}</h1>
            {!! $article->body !!}
            <hr>
            @if(session()->has('locale') &&  session()->get('locale') == 'en')
            <strong>{{ trans('lang.text_category') }} : </strong> {{ $article->forumHasCategorie->categorie_en }}
            @elseif(session()->has('locale') &&  session()->get('locale') == 'fr')
            <strong>{{ trans('lang.text_category') }} : </strong> {{ $article->forumHasCategorie->categorie_fr }}
            @endif
            <hr>
            <strong>{{ trans('lang.text_author') }} : </strong> {{ $article->forumHasUser->name }}
            <hr>
            <strong>{{ trans('lang.text_date') }} : </strong> {{ $article->created_at }}
            <hr>
            @if(auth()->user()->id == $article->forumHasUser->id)
            <a href="{{ route('forum.edit', $article->id)}}" class="btn btn-dark">{{ trans('lang.text_button_edit') }}</a>
            <hr>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa fa-trash">{{ trans('lang.text_button_delete') }}</i>
            </button>
            @endif
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
                <p>{{ trans('lang.text_delete') }}</p>
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