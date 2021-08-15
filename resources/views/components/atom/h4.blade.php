<h4 {{ $attributes->merge(['class' => 'font-body font-bold leading-tight !tracking-tight'])->only('class') }}>
    {{$slot}}
</h4>
