<div class="main">
    <x-orga.sectionFull class="justify-end bg-gray-100">
        <x-orga.section class="block space-y-12">
            <x-mole.text-3>
                <x-slot name="heading">{!! 'About<br>Us' !!}</x-slot>
                <x-slot name="desc">{!! 'Especially wood charcoal briquettes and coconut shells. We are experts in the
                    field.' !!}</x-slot>
            </x-mole.text-3>

            <x-atom.img src="/assets/images/a1.jpg" class="h-[50vh] w-full"></x-atom.img>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull>
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="lg:w-8/12">
                <x-slot name="subheading">{!! 'Meet Our Company' !!}</x-slot>
                <x-slot name="heading">{!! 'We are an Indonesian company engaged in the export sector' !!}</x-slot>
                <x-slot name="desc">{!! 'Especially wood charcoal briquettes and coconut shells. We are experts in
                    the field, and provide the best customer experience in the industry.' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull class="bg-gray-100">
        <x-orga.section class="my-auto">
            <x-mole.text-2>
                <x-slot name="subheading">{!! 'Bussiness With Us' !!}</x-slot>
                <x-slot name="heading">{!! 'Investor Relations' !!}</x-slot>
                <x-slot name="desc">{!! 'Briquette Gates Indonesia has developed strategies to grow and sustain its
                    global business success. We take advantage of
                    the large amount of resources located in Indonesia. We believe Briquette Gates Indonesia is very
                    well positioned to take
                    advantage of these.' !!}</x-slot>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section class="pb-12">
            <div class="flex flex-wrap">
                @foreach ([1,2,3,4] as $item)
                <ul class="pb-3 pr-3 md:pr-10">
                    <label>{!!'Strategy Key to Success'!!}</label>
                    <small>{!!'Click to learn more'!!}</small>
                </ul>
                @endforeach
            </div>
        </x-orga.section>

        <div class="absolute bottom-0 right-0 sm:bottom-36 sm:my-auto">
            <x-atom.img src="/assets/images/b3.png" class="opacity-20 md:opacity-100 h-full sm:h-[50%]"></x-atom.img>
        </div>
    </x-orga.sectionFull>

    <x-orga.sectionFull class="!min-h-full my-16">
        <x-orga.section class="my-auto">
            <x-mole.text-2 class="!w-full">
                <x-slot name="subheading">{!! 'About us' !!}</x-slot>
                <x-slot name="heading">{!! 'Our Company' !!}</x-slot>
                <p class="gap-16 col-count-1 sm:col-count-2">
                    {!! "Briquette Gates Indonesia (PT. Sembilan Gerbang Indonesia) is a private company with a diverse
                    customer base. Our
                    dedicated production and quality control team has worked tirelessly to deliver the highest quality
                    products that our
                    customers expect. Backed by the best technology in our industry. Ultimately, it is our top priority
                    to meet the
                    satisfaction and expectations of our customers. At first our company was engaged in manufacturing
                    where we processed
                    coconut derivative products, namely coconut shells, into coconut shell charcoal.

                    And after that, our company expanded to become a well-established charcoal producer based in
                    Jakarta, Indonesia. Our
                    vision is to be the world's number one supplier of coconut & wood based charcoal products. Our
                    mission is to provide our
                    customers with quality goods at competitive prices and the best service in the industry. Some of our
                    highlights include: "!!}
                </p>
            </x-mole.text-2>
        </x-orga.section>

        <x-orga.section class="pt-16 my-auto">
            <div class="grid grid-cols-1 gap-10 sm:gap-y-12 sm:gap-x-16 sm:grid-cols-2">
                @foreach ([1,2,3,4,5] as $item)
                <ul>
                    <h6>{!!'01'!!}</h6>
                    <p>{!!'We have machines with the latest technology to meet customer demand in quantity and
                        quality.'!!}</p>
                </ul>
                @endforeach
            </div>
        </x-orga.section>
    </x-orga.sectionFull>

    <x-orga.sectionFull class="bg-gray-100">
        <x-orga.section
            class="flex flex-col-reverse items-center justify-center my-auto space-y-10 space-y-reverse sm:justify-between sm:flex-row sm:space-y-0">
            <x-mole.text-2 class="text-center sm:text-left">
                <x-slot name="subheading">{!! 'Welcome customers' !!}</x-slot>
                <x-slot name="heading">{!! 'to visit our<br> facilities' !!}</x-slot>
                <x-slot name="desc">{!! 'to witness the wonders of our manufacturing world for themselves!' !!}</x-slot>
            </x-mole.text-2>

            <div class="w-[80%] sm:w-[60%] md:w-[40%]">
                <x-atom.img-square src="/assets/images/p3.jpg" imgClass="rounded-full"></x-atom.img-square>
            </div>
        </x-orga.section>

        <x-orga.section class="flex justify-end">
            <div class="p-4 sm:py-6 sm:px-10 bg-[#F34F1F] w-full sm:w-[60%] md:w-[40%]">
                <h6 class="text-white">Contact us</h6>
            </div>
        </x-orga.section>
    </x-orga.sectionFull>
</div>
