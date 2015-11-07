@extends('base.layout')

@section('title')
    @parent
    - Login
@stop


@section('main-content')
    @include('admin.login.body')
@stop