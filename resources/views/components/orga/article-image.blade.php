<div class="h-[50vh] w-full">
    @foreach($image as $key => $entry)
        <x-atom.img src="{{ $entry['url'] ?? 'http://via.placeholder.com/300x300' }}" class="w-full h-full"/>
    @endforeach
</div>
