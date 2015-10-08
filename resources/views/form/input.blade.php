<?php
if (!isset($label))
    $label = ucfirst($name);
if (!isset($type))
    $type = 'text';
if (isset($attr))
{
    $attr = array_map(function($value, $key){
        return e($key).'="'.e($value).'"';
    }, $attr, array_keys($attr));
}
?>
<div class="form-group">
    <label class="col-md-4 control-label">{{ $label }}</label>
    <div class="col-md-6">
        <input
            id="{{ $name }}"
            type="{{ $type }}"
            class="form-control"
            name="{{ $name }}"
            value="{{ old($name, isset($default)?$default:'') }}"
            {!! (isset($attr)?implode(' ', $attr):'') !!}
        />
    </div>
</div>