<div {{ $attributes->merge(['class' => 'grid grid-cols-4 gap-y-7']) }}>
    <div class="col-span-2 flex items-center space-x-3">
        <x-atom.img class="w-5 h-5 rounded-full" src="{{$src}}" />

        <small>
            {{$name}}
        </small>
    </div>

    <div class="col-span-2 flex">
        <label class="ml-auto">
            {{$date}}
        </label>
    </div>

    <div class="col-span-3">
        <label class="normal-case">
            {{$comment}}
        </label>
    </div>

    <div class="col-span-4 border-b-2 border-primary"></div>
</div>
