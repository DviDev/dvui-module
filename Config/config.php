<?php

return [
    'name' => 'DvUi',
    'text-colors' => [
        'text-white',
        'text-gray',
        'text-purple',
        'text-yellow',
        'text-green',
        'text-pink',
        'text-red',
        'text-slate',
    ],
    'text-sizes' => [
        'text-xs',
        'text-sm',
        'text-base',
        'text-lg',
        'text-2',
        'text-3',
        'text-4',
        'text-5',
        'text-6',
        'text-7',
        'text-8',
        'text-9',
    ],
    'components' => [
        'multi-select-search' => [
            'show_selected_items' => env('DVUI_MULTI_SELECT_SEARCH_SHOW_SELECTED_ITEMS', true),
        ],
    ],
    'active_suite' => env('DVUI_ACTIVE_SUITE', 'flowbite'),
    'component_suite_tag' => 'dvui_component_suite_tag',
    'suite_providers' => [
        'flowbite' => \Modules\Flowbite\Services\ComponentMap::class,
    ],
];
