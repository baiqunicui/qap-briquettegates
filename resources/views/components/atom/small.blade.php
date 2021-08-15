<small {{ $attributes->merge(['class' => 'uppercase tracking-wider leading-loose opacity-60'])->only('class') }}
    {{ $attributes->except('class')}}>
    {{$slot}}
</small>
