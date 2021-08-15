<h1 {{ $attributes->merge(['class' => 'font-serif'])->only('class') }}>
    {{$slot}}</h1>
