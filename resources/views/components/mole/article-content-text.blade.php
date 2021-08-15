<div {{ $attributes->merge(['class' => 'mt-20 space-y-20 flex flex-col'])->only('class') }}>
    <h4 class="text-primary">{{$title}}</h4>
    <div id="rte">
        <p>{!! $desc !!}</p>
    </div>
</div>

<style>
    #rte ol {
        list-style-type: decimal;
        list-style-position: inside;
    }

    #rte ul {
        list-style-type: disc;
        list-style-position: inside;
    }
</style>
