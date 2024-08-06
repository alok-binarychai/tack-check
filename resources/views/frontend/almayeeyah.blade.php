@extends('frontend.layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ mix('/frontend_assets/css/style.css') }}" />

<style>
    .ALMayeeyah1 h2 {
        margin-bottom: 45px;
    }

    .page-h4 {
        margin-top: 45px;
        font-size: 2rem !important;
        margin-bottom: 10px;
    }

    .page-ul {
        margin-left: 15px !important;
    }

    .page-ul .page-li {
        
    }

    .ALMayeeyah1> div:nth-of-type(5){
        margin-top: 25px !important;
    }

    .ALMayeeyah1 > div:nth-of-type(1) p {
        margin-top: 20px;
    }

    .ALMayeeyah1 > div:nth-of-type(6) {
        margin-top: 45px;
        border: 2px solid red;
        padding: 20px 20px;
    }
</style>
@endsection

@section('content')

{{-- style it --}}

<div class="container alm ALMayeeyah1" style="margin-top: 10rem;">
    {!! settings('almayeeyah', 'almayeeyah') !!}
</div>
@endsection