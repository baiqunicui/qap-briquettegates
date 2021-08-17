<ul class="w-full space-y-8 sm:w-2/3 lg:w-1/2 sm:space-y-8">
    <ul class="space-y-2 sm:space-y-4">
        @isset($subheading)
        <h4>{{ $subheading ?? ''}}</h4>
        @endisset

        @isset($heading)
        <h1>{{ $heading ?? '' }}</h1>
        @endisset

    </ul>

    @isset($desc)
    <p>{{ $desc ?? '' }}</p>
    @endisset
</ul>
