@php
$classes = str($attributes->get('class'));
@endphp
<div {{$attributes->class([
    'rounded-l rounded-r inline-flex',
    'shadow-md' => !$classes->startsWith('shadow-'),
    'hover:shadow-lg' => !$classes->startsWith('hover:shadow-'),
    'focus:shadow-lg' => !$classes->startsWith('focus:shadow-'),
    ])}} role="group" {{$attributes}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    {{ $slot }}
</div>
