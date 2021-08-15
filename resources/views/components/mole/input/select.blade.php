<x-mole.input.group :label="$label" :name="$model">
    <select {{ $attributes->merge(
                    [
                        'class' => 'form-class !-mt-1',
                        'placeholder' => 'Fill ' . $label . ' here',
                    ])
                }} wire:model="{{$model}}">
        {{$slot}}
    </select>
</x-mole.input.group>
