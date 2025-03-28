@props([
    'field' => null
])
@php
    $field = $field ?: collect($attributes)->first(function($value, $key) {
        return str($key)->contains('wire:model')
            ?? $attributes['id'] ?? $attributes['name'] ?? $attributes->get('label');
    })
@endphp
@error($field)
<div class="text-red-600 text-sm leading-5" style="line-height: 17px">{{$message}}</div>
@enderror
