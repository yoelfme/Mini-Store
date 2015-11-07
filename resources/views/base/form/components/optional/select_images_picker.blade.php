<div class="form-group">
    <label class="col-md-3 control-label" for="{{ $name }}">{{ $label }}</label>

    <div class="col-md-9">
        <select class="image-picker select-chosen form-control" name="{{ $name }}">
            @foreach($list as $key => $description)
                <option data-img-src="{{ $key }}" value="{{ config('data.' . $key_values . '.' . $description) }}"
                @if($value === config('data.' . $key_values . '.' . $description) )
                    {{ "selected"  }}
                        @endif >
                    {{ $description }}
                </option>
            @endforeach
        </select>
    </div>
</div>