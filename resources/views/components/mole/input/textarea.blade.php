<x-mole.input.group :label="$label" :name="$model">
    <textarea rows="2" {{ $attributes->merge(
            [
                'class' => 'form-class !-mt-1',
                'type' => 'text',
                'placeholder' => 'Fill ' . $label . ' here'
            ])
        }} wire:model.defer="{{$model}}">

    </textarea>
</x-mole.input.group>
