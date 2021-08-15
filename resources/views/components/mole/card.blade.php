<div class="col-span-1 border-2 border-black">
    @foreach($image as $key => $entry)
    <x-atom.img src="{{ $entry['url'] ?? 'http://via.placeholder.com/300x300' }}" class="w-full h-1/2" />
    @endforeach

    <div class="h-1/2 p-6 2xl:p-10 flex flex-col items-stretch">
        <label class="cursor-default">
            {{$date}}
        </label>

        <x-atom.a href="{{$slug}}" class="mt-6">
            <h4 class="line-clamp-2">{!!$title!!}</h4>
        </x-atom.a>

        @foreach ($category as $item)
        <x-atom.a :href="route('category', $item['slug'])" class="mt-auto">
            <label># {{$item->name}}</label>
        </x-atom.a>
        @endforeach
    </div>
</div>
