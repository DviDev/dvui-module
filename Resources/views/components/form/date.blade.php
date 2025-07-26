@php
    use Modules\Base\View\Components\Form\BaseFormBladeComponent;

    BaseFormBladeComponent::prepare($attributes);
@endphp
<x-dvui::form.field :validate="$attributes->get('validate')" :required="$attributes->get('required')" {{$attributes}}>
    <x-dvui::dev.info suite="dvui" :alias="$componentAlias->value"/>
    <div @class(["w-full flex flex-col"])>
        @if($attributes->has('label'))
            <label>{{$attributes->get('label')}}</label>
        @endif
        <input {{$attributes}}>
    </div>
</x-dvui::form.field>
