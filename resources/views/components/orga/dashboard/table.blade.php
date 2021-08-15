<div {{ $attributes->merge(['class' => 'gap-x-3 flex justify-between'])->only('class') }}>
    {{$slot}}
</div>
