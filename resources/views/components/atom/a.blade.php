<a {{ $attributes->merge(['class' => 'block items-center cursor-pointer space-x-4 hover:opacity-80 hover:text-secondary'])->only('class') }}
    {{ $attributes->except('class') }}>
    @isset($iconDelete)
    <x-atom.svg-delete /> @endisset

    @if (isset($label))
    <small class="text-primary">{{$label}}</small>
    @else
    {{$slot}}
    @endif
</a>
