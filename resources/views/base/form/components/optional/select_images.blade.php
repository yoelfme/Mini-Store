<div class="form-group">
    <label class="col-md-3 control-label" for="{{ $name }}">{{ $label }}</label>

    <div class="col-md-9">
        <select class="selectpicker" name="{{ $name }}">
            @foreach($list as $key => $description)
                <option data-content="<img style='width:32px; height:32px' src='{{ $key }}'></span>  <span style='display:inline-block; width:100px; margin-left: 10px'>{{ $description }}</span>"
                        @if($value === $key )
                            {{ "selected"  }}
                        @endif >
                    {{ $key }}
                </option>
            @endforeach
        </select>
    </div>
</div>