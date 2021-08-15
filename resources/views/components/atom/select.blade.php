<select
    {{ $attributes->merge(['class' => 'form-input w-full'])->only('class') }}
    {{ $attributes->except('class') }}
>
    {{ $slot }}
</select>
