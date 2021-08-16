<a {{ $attributes->merge(['class' => 'block items-center cursor-pointer space-x-4 hover:text-gray-800 text-gray-400'])->only('class') }}
    {{ $attributes->except('class') }}>
    @isset($iconDelete)
    <x-atom.svg-delete /> @endisset

    @if (isset($label))
    <label>{{$label}}</label>
    @else
    {{$slot}}
    @endif
</a>
