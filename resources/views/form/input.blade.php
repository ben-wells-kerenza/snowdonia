<?php
if (!isset($value))
    $value = old($name, isset($default)?$default:'');
if (isset($attr))
{
    $attr = array_map(function($value, $key){
        return e($key).'="'.e($value).'"';
    }, $attr, array_keys($attr));
}
$id = $name.(isset($array)&&$array?'_'.$value:'');
?>
<div class="form-group">
    <label class="col-md-4 control-label" for="{{ $id }}">{{ $label or ucfirst($name) }}</label>
    <div class="col-md-6">
        <input
            id="{{ $id }}"
            type="{{ $type or 'text' }}"
            class="form-control"
            name="{{ $name }}{{ isset($array)&&$array?'[]':'' }}"
            value="{{ $value }}"
            {!! (isset($attr)?implode(' ', $attr):'') !!}
        />
    </div>
</div>