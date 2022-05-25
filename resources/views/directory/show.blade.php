@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">  
            <a href="{{ route('directory') }}" class="btn btn-outline-dark btn-sm float-end">{{ trans('lang.text_back_button') }}</a>
            <a href="{{ route('directory.download', $directory->id) }}" class="btn btn-outline-dark btn-sm" target="_blank">{{ trans('lang.text_download') }}</a>
            @if(session()->has('locale') &&  session()->get('locale') == 'en')
            <h1 class="display-one mt-4">{{ ucfirst($directory->name_en) }}</h1>
            <hr>
            @elseif(session()->has('locale') &&  session()->get('locale') == 'fr')
            <h1 class="display-one mt-4">{{ ucfirst($directory->name_fr) }}</h1>
            <hr>
            @endif
            <strong>{{ trans('lang.text_author') }} : </strong> {{ $directory->directoryHasUser->name }}
            <hr>
            <strong>{{ trans('lang.text_date') }} : </strong> {{ $directory->created_at }}
            <hr>
            @if(auth()->user()->id == $directory->directoryHasUser->id)
            <a href="{{ route('directory.edit', $directory->id)}}" class="btn btn-dark">{{ trans('lang.text_btn_edit_file') }}</a>
            <hr>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa fa-trash">{{ trans('lang.text_but_del_file') }}</i>
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
                <p>{{ trans('lang.text_delete_file') }}</p>
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