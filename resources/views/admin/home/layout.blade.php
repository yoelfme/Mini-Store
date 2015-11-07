@extends('base.layout')

@section('title')
    @parent
    - Inicio
@stop

@section('content')
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

                <div id="page-content" class="monitor">
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
    {{ Html::script('assets/js/sammy.min.js') }}
    {{ Html::script('assets/js/app.js') }}
    {{ Html::script('app/js/helpers/helper.js') }}
    {{ Html::script('app/js/admin/admin.js') }}
    {{ Html::script('app/js/helpers/crud.js') }}
    {{ Html::script('assets/js/attrchange.min.js') }}
    {{ Html::script('http://104.131.59.219:3000/socket.io/socket.io.js') }}
@stop