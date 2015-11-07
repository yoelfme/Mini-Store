{!! Form::open($options) !!}
    {!! $body !!}

    <div class="text-right">
        @if($type == 'delete')
            {!! Form::submit(trans('layout.actions.delete'), ['class' => $classYesButton]) !!}
        @elseif ($type == 'edit')
            {!! Form::submit(trans('layout.actions.edit'), ['class' => $classYesButton])  !!}
        @elseif ($type == 'create')
            {!! Form::submit(trans('layout.actions.create'), ['class' => $classYesButton]) !!}
        @endif

        <a href="{{ $previousUrl }}" class="{{ $classCancelButton }}">{{ trans('layout.actions.cancel') }}</a>
    </div>
{!! Form::close() !!}
