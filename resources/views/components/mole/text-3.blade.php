<div class="items-end justify-between block space-y-3 sm:flex sm:space-y-0">
    @isset($subheading)
    <h4>{{ $subheading ?? '' }}</h4>
    @endisset

    @isset($heading)
    <h2 class="w-full sm:w-5/12">{{ $heading ?? '' }}</h2>
    @endisset

    @isset($desc)
    <p class="w-full sm:w-5/12">{{ $desc ?? '' }}</p>
    @endisset
</div>
