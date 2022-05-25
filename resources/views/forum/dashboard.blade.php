@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 pt-4" style="min-height: 580px;">
            <span class="navbar-brand mr-auto">{{ trans('lang.text_welcome') }}</span><a class="navbar-brand mr-auto" href="#">{{ $name }}</a><span class="navbar-brand mr-auto">{{ trans('lang.text_dashboard_login') }}</span>
        </div>
    </div>    
</div>

@endsection