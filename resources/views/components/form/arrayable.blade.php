@php
$name = $props['name'];
$hasErrors = $errors->has($name);
@endphp

<div class="p-6 space-y-6 bg-white border-2 border-gray-400 form-group">
    <div class="space-y-4 list-group">

        {{-- Label Add --}}
        <div class="flex items-center justify-between">
            @isset($props['label'])
            <label class="form-label">{{ __($props['label']) }}</label>
            @endisset
            <button type="button" wire:click="addArrayableItem('{{ $name }}')"
                class="px-4 py-2 bg-blue-300 cursor-pointer">
                <label class="m-auto form-label">Add</label>
            </button>
        </div>

        @foreach((array) $this->data($name, []) as $key => $value)
        <div class="space-y-5">
            @foreach($props['fields'] as $field)
            <div>
                {{ $field->prefix($name . '.' . $key)->render()->with($field->data()) }}
            </div>
            @endforeach

            <button type="button" wire:click="removeArrayableItem('{{ $name . '.' . $key }}')"
                class="px-4 py-2 bg-red-300 cursor-pointer">
                <label class="m-auto form-label">Remove</label>
            </button>
        </div>
        @endforeach
    </div>

    @error($name)
    <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror

    @isset($props['help'])
    <div class="form-text">{{ __($props['help']) }}</div>
    @endisset
</div>
