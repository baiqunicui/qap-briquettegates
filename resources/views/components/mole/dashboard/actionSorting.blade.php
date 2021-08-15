<div {{ $attributes->merge(['class' => ''])->only('class') }}>
    <label>
        {{ $heading }}
    </label>

    <x-atom.select {{ $attributes->only('wire:model') }}>
        @foreach ($collection as list($value, $name))
        <option value="{{$value}}">{{ $name }}</option>
        @endforeach
    </x-atom.select>
</div>
