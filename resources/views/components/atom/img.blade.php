<img {{ $attributes->merge(['class' => 'object-cover object-center'])->only('class') }}
    {{ $attributes->except('class') }}>
