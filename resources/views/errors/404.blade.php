
@extends('layouts.frontend')

@section('title', '404')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:center; margin-top:3em; ">
                    <img src="{{asset('asset/frontend/img/error/404.png')}}" style="max-width:666px" width="100%">
                </div>
                <div class="col-md-12" style="text-align:center; margin-top:20px">
                    <a href="{{route('frontend.index')}}" data-text="ta meg hjem" class="splbtns">ta meg hjem</a>
                </div>
            </div>
        </div>
@endsection
