<div {{ $attributes->merge(['class' => 'flex justify-between mt-12']) }}>
    <label>SHARE</label>

    <div class="flex space-x-3">
        <x-atom.a href="https://www.facebook.com/sharer/sharer.php?u=#{{$share}}" target="_blank">
            <x-atom.svg-facebook></x-atom.svg-facebook>
        </x-atom.a>

        <x-atom.a href="https://twitter.com/intent/tweet?text={{$share}}">
            <x-atom.svg-twitter></x-atom.svg-twitter>
        </x-atom.a>
    </div>
</div>
