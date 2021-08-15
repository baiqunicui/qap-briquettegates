<h3
    {{ $attributes->merge(['class' => 'leading-tight font-medium text-6xl tracking-tighter !leading-snug'])->only('class') }}>
    {{$slot}}</h3>
