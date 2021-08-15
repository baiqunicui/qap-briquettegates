<x-mole.input.group :label="$label" :name="$model">
    <input {{ $attributes->merge(
            [
                'class' => 'form-class !-mt-3',
                'type' => 'text',
                'placeholder' => 'Fill ' . $label . ' here'
            ])
        }} wire:model.defer="{{$model}}" />
</x-mole.input.group>
