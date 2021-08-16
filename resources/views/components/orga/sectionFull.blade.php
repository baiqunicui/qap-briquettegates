<section {{ $attributes->merge(['class' => 'section-full']) }} {{ $attributes->except('class') }}>
    {{ $slot }}
</section>
