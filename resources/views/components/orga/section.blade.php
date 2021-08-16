<section {{ $attributes->merge(['class' => 'section']) }} {{ $attributes->except('class') }} {{-- data-aos="fade-up"
    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true"
    data-aos-once="false" data-aos-anchor-placement="top-center" --}}>
    {{ $slot }}
</section>
