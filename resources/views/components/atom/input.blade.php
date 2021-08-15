<input
    {{ $attributes->merge(['class' => 'bg-transparent outline-none focus:placeholder-primary text-base font-medium tracking-[-0.015em] leading-normal'])->only('class') }}
    {{ $attributes->except('class') }}
/>
