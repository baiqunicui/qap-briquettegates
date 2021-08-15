<div {{ $attributes->merge(['class' => 'square'])->only('class') }}>
    <div class="content">
        <x-atom.img {{ $attributes->except('class') }} src="{{$src}}" class="w-full h-full {{$imgClass ?? ''}}" />
    </div>
</div>
