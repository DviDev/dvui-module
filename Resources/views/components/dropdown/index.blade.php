@props([
    'primary' => false,
    'secondary' => false,
    'success' => false,
    'danger' => false,
    'warning' => false,
    'attention' => false,
    'info' => false,
    'light' => false,
    'dark' => false,
    'link' => false,
    'xs' => false,
    'sm' => false,
    'md' => false,
    'lg' => false,
    'xlg' => false,
    'label'
])
<div class="dropdown relative">
    <x-dvui::button
        :primary="$primary || (!$secondary && !$success && !$danger && !$warning && !$attention && !$info && !$light && !$dark && !$link)"
        :secondary="$secondary"
        :success="$success"
        :danger="$danger"
        :warning="$warning"
        :attention="$attention"
        :info="$info"
        :light="$light"
        :dark="$dark"
        :link="$link"
        :xs="$xs"
        :sm="$sm"
        :md="$md || (!$xs && !$sm && !$lg && !$xlg)"
        :lg="$lg"
        :xlg="$xlg"
        class="dropdown-toggle flex items-center whitespace-nowrap rounded"
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        :label="$label">
        <x-dvui::icon.chevron.down_mini/>
    </x-dvui::button>
    <ul
        class="dropdown-menu
          min-w-max
          absolute
          hidden
          bg-white
          text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded-lg
          shadow-lg
          mt-1
          hidden
          m-0
          bg-clip-padding
          border-none"
        aria-labelledby="dropdownMenuButton1"
    >
        {{$slot}}
    </ul>
</div>
