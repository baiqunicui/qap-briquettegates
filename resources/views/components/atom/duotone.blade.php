<div
    {{ $attributes->merge(['class' => 'duotone dark:before:bg-secondary dark:after:bg-primary dark:saturate-100 before:bg-[#fff] after:bg-green-700 saturate-0'])->only('class') }}>
    <img src="{{$src}}" class="relative object-cover object-center w-full h-full max-w-full">
</div>
