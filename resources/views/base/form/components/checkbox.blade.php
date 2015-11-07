<div class="form-group">
    <label class="col-sm-3 control-label" for="{{ $name }}">{{ $label }}</label>
    <div class="col-sm-9">
        <label class="i-switch bg-{{ $class }} m-t-xs m-r">
            <input type="checkbox" name="{{ $name }}"   @if($value) {{"checked"}} @endif><i></i>
        </label>
    </div>
</div>