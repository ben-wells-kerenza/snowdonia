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
        <select
            id="{{ $id }}"
            class="form-control"
            name="{{ $name }}{{ isset($array)&&$array?'[]':'' }}"
            {{ (isset($array) && $array?'multiple="multiple"':'') }}
            value="{{ $value }}"
            {!! (isset($attr)?implode(' ', $attr):'') !!}
        >
        @foreach($options as $key => $option)
        	<option value="{{ $option['id'] }}">{{ $option['name'] or $option }}</option>
        @endforeach
        </select>
    </div>
</div>