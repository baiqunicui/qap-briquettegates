<p {{ $attributes->merge(['class' => 'text-[9px] uppercase tracking-wider leading-loose flex'])->only('class') }}>
    {{$slot}}
</p>
