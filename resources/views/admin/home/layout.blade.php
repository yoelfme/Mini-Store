@extends('base.layout')

@section('title')
    @parent
    - Inicio
@stop

@section('main-content')
    <div id="page-wrapper" class="page-loading">
        <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
            <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
                <div id="sidebar-scroll-alt">
                    <div class="sidebar-content">
                        @include('admin.home.settings')
                    </div>
                </div>
            </div>

            @include('admin.home.sidebar',compact('menu'))

            <div id="main-container">
                @include('base.header')

                <div id="page-content">
                    @include('generic.base.preloader')
                    @include('generic.base.preloader-div')
                    <div id="page">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('other-scripts')
    {!! Html::script('assets/js/app.js') !!}
    {!! Html::script('assets/js/attrchange.min.js') !!}
@stop