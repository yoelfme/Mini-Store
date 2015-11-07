<div class="form-group">
    <label class="col-xs-12 control-label" style="text-align: center" for="{{ $name }}">{{ $label }}</label>
    <div class="col-xs-12">
        <textarea name="editor_{{ $name }}@if($edit){{ "_edit" }}@endif" class="ckeditor form-control">{{ $value }}</textarea>
    </div>
</div>