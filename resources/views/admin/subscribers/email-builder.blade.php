@extends('layouts.admin')

@section('content')
    <iframe src="{{ url('public/email-builder') }}" frameborder="0" style="width: 100%;height: calc(100vh - 100px);"></iframe>
@endsection
