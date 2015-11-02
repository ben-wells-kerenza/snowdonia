<?php
$attrs = [
        'name' => $name,
        'type' => 'checkbox',
        'value' => (isset($value)?$value:TRUE),
    ];
if (isset($label))
    $attrs['label'] = $label;
if (isset($array))
    $attrs['array'] = $array;
if (isset($attr))
    $attrs['attr'] = $attr;
else
    $attrs['attr'] = [];
if (
    (isset($array) && $array && is_array(app()->request->{$name}) && in_array($value, app()->request->{$name}))
    || ((!isset($array) || !$array) && app()->request->{$name}==TRUE)
    || (isset($default) && $default)
)
    $attrs['attr']['checked'] = 'checked';
?>
@include('form.input', $attrs)

