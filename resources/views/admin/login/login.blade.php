@extends('admin.base.layout')

@section('title')
    @parent
    - Login
@stop


@section('content')
    @include('admin.login.body')
@stop


@section('scripts')
    @parent
    {{ HTML::script('app/js/login.js') }}
    <script>$(function(){ ReadyLogin.init(); });</script>
@stop