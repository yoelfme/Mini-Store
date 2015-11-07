<div class="form-group">
    <label class="col-md-3 control-label">{{ $label }}</label>
    <div class="col-md-9">
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-{{ $class }} btn-file">
                    {{ trans('controls.upload') }}&hellip; <input class="file" type="file" name="{{ $name }}" >
                </span>
            </span>
            <input type="text" class="form-control" value="{{ $src }}" readonly>
        </div>
    </div>
</div>