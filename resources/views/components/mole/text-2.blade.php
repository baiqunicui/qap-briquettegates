<ul {{$attributes->merge(['class' => 'w-full sm:w-2/3 lg:w-1/2 space-y-4 sm:space-y-8'])}}>
    <ul class="space-y-2 sm:space-y-4">
        @isset($subheading)
        <h4>{{ $subheading ?? ''}}</h4>
        @endisset

        @isset($heading)
        <h2>{{ $heading ?? '' }}</h2>
        @endisset

    </ul>

    @isset($desc)
    <p>{{ $desc ?? '' }}</p>
    @endisset

    {{$slot}}
</ul>
