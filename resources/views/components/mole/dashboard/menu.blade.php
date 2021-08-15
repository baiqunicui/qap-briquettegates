<div {{ $attributes->merge(['class' => 'space-x-20 flex my-auto'])->only('class') }}>
    @foreach ($collections as $item)
    <x-atom.a class="hover:text-red-300" href="/aaa">
        <label class="font-medium capitalize">
            {{$item}}
        </label>
    </x-atom.a>
    @endforeach
</div>
