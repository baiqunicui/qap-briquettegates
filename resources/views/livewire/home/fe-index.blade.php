<div class="main">
    <x-orga.sectionFull class="justify-between bg-gray-100">
        <x-orga.section class="my-32 sm:my-auto">
            <x-mole.text-1>
                <x-slot name="subheading">{!! 'Welcome<b>to</b>' !!}</x-slot>
                <x-slot name="heading">{!! 'Briquette<br>gates' !!}</x-slot>
                <x-slot name="desc">{!! 'INDONESIA' !!}</x-slot>
            </x-mole.text-1>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex flex-wrap">
                <ul class>
                    <label>{!!'More About us'!!}</label>
                    <small>{!!'Briquette gates'!!}</small>
                </ul>
            </div>
        </x-orga.section>

        <div class="absolute right-0 bottom-32 sm:bottom-0 sm:my-auto">
            <x-atom.img src="/assets/images/b1.png" class="w-[80%] md:w-[100%] ml-auto"></x-atom.img>
        </div>
    </x-orga.sectionFull>

    <x-orga.sectionFull>
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="lg:w-8/12">
                <x-slot name="subheading">{!! 'About us' !!}</x-slot>
                <x-slot name="heading">{!! 'Our Company' !!}</x-slot>
                <x-slot name="desc">{!! 'Briquette Gates Indonesia (PT. Sembilan Gerbang Indonesia) is a private company
                    with a diverse customer base. Our
                    dedicated production and quality control team has worked tirelessly to deliver the highest quality
                    products that our
                    customers expect.' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex flex-wrap">
                <ul class>
                    <label>{!!'More About us'!!}</label>
                    <small>{!!'Click to learn more'!!}</small>
                </ul>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull class="justify-between bg-gray-100">
        <x-orga.section class="pt-12 my-0 sm:pt-0 sm:my-auto">
            <x-mole.text-2>
                <x-slot name="subheading">{!! 'Learn more' !!}</x-slot>
                <x-slot name="heading">{!! 'Our<br>Products' !!}</x-slot>
                <x-slot name="desc">{!! 'Less ash, odorless, not shiny, long burning time.<br>Raw material 100% coconut
                    from Indonesia.' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex flex-wrap">
                <ul class>
                    <label>{!!'Go to'!!}</label>
                    <small>{!!'Product Page'!!}</small>
                </ul>
            </div>
        </x-orga.section>

        <div class="absolute right-0 bottom-32 sm:bottom-0 sm:my-auto">
            <x-atom.img src="/assets/images/b2.png" class="w-[90%] ml-auto"></x-atom.img>
        </div>
    </x-orga.sectionFull>
</div>
