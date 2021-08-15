<section {{ $attributes->merge(['class' => 'grid grid-cols-12 py-5 border-b-2 border-gray-400'])->only('class') }}>
    {{$slot}}
</section>
