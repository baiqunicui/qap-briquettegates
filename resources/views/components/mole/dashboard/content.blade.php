<div {{ $attributes->merge(['class' => 'space-y-10'])->only('class') }}>
    <div class="space-y-4">
        <h4 class="font-bold">
            {{ $slotHeading }}
        </h4>

        <p class="font-medium tracking-tight">
            {!! $slotSubheading !!}
        </p>
    </div>

    <div class="flex space-x-4">
        @foreach ($collections as $item)
        <x-atom.a class="hover:text-red-300" href="/aaa">
            <label>
                {{$item}}
            </label>
        </x-atom.a>
        @endforeach
    </div>
</div>
