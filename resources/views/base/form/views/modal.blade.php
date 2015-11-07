@extends('base.modal')

@section('modal-title')
    {{ $title }}
@stop

@section('modal-id')modal-{{ $type }}@stop

@section('modal-body')
    {!! $form !!}
    @if(starts_with($type, 'delete'))
        Are you sure ?
    @endif
@stop

@section('modal-footer')
    <button id="btn-{{ $type }}" type="button" class="btn btn-info">{{ $text_button_save }}</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ $text_button_cancel }}</button>
@stop