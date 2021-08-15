<p {{ $attributes->merge(['class' => 'tracking-[-0.015em] !leading-relaxed opacity-60'])->only('class') }}
    {{ $attributes->except('class')}}>
    {{$slot}}
</p>
