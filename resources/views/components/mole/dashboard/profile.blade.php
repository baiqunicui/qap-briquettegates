<div {{ $attributes->merge(['class' => 'col-span-2 flex items-center justify-end space-x-4']) }}>
    <div class="text-right">
        @isset($slotHeading)
        <small class="font-semibold !capitalize">
            {{ $slotHeading }}
        </small>
        @endisset

        @isset($slotSubheading)
        <small class="text-[9px]">
            {{ $slotSubheading }}
        </small>
        @endisset
    </div>

    <x-atom.img src={{$srcImage}} class="rounded-full w-14 h-14" />
</div>
