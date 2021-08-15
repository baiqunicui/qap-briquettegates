<section class="py-8 space-y-10 md:py-16 md:space-y-12">
    @foreach ($footer->content as $item)
    <div class="flex flex-col justify-between space-y-2 md:space-y-0 md:flex-row">
        <div>
            <h5>{{$item['text_1']}}</h5>
            <p>{{$item['text_2']}}</p>
        </div>

        <p>
            {{$item['text_3']}}
        </p>
    </div>

    <div class="border-b border-gray-200 dark:border-white/20"></div>

    <div class="flex items-center justify-between space-x-4">
        <div>
            <small>
                {{$item['text_4']}}
            </small>
        </div>

        <div id="address" class="flex space-x-4">
            @foreach ($item['socmed'] as $item)
            <x-atom.a href="{{$item['link']}}">
                <small>{{$item['title']}}</small>
            </x-atom.a>
            @endforeach
        </div>
    </div>
    @endforeach
</section>
