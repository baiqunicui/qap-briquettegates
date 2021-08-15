<div {{ $attributes->merge(['class' => 'my-auto flex justify-end'])->only('class') }}>
    <img
        class="w-20 h-auto"
        src="{{$src}}"
    >
</div>
