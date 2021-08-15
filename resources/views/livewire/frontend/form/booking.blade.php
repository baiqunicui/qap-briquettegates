<div x-data="{open: false}" class="flex justify-between px-10 py-8 text-white rounded-md bg-primary">
    <h4>Booking</h4>

    <x-atom.a id="menubutton" x-on:click="open = true" class="flex">
        <x-atom.button outlineSecondary>
            {{'booking Now'}}
        </x-atom.button>
    </x-atom.a>

    <x-orga.modal x-show="open" @click.away="open = false" class="w-full mx-auto text-primary">
        <x-atom.a x-on:click="open = false"
            class="absolute top-0 right-0 p-2 md:p-3 md:top-4 md:right-4 md:rounded-xl bg-secondary">
            <x-atom.svg-close class="h-5 font-bold md:h-8" />
        </x-atom.a>

        <section class="relative p-0 m-auto bg-white shadow-2xl rounded-xl">
            <div class="block w-full sm:flex">
                <div class="w-full p-5 sm:p-8 sm:border-r sm:border-b-2 sm:w-1/4">
                    <h5 class="font-semibold leading-tight">{!!'Booking<br>Form'!!}</h5>
                </div>

                <form wire:submit.prevent="submit" class="w-full px-5 pb-3 sm:p-8 space-y-3 sm:w-3/4 !text-primary/40">
                    <x-mole.input.select label="{{'category'}}" model="bookingList.category_id" class="flex">
                        <option value=""></option>
                        @foreach ($this->listsForFields['category'] ?? [] as $key => $item)
                        <option value="{{$key}}">{{ $item }}</option>
                        @endforeach
                    </x-mole.input.select>

                    {{-- <x-mole.input.text type="text" label="name" model="bookingList.title" class="flex-1" /> --}}
                    <div class="block space-y-2 sm:space-y-0 sm:space-x-4 sm:flex">
                        <x-mole.input.text type="text" label="name" model="bookingList.name" class="flex-1" />
                        <x-mole.input.text type="tel" label="phone" model="bookingList.phone" class="flex-1" />
                        <x-mole.input.text type="email" label="email" model="bookingList.email" class="flex-1" />
                    </div>

                    <div class="block space-y-2 sm:space-y-0 sm:space-x-4 sm:flex">
                        <x-mole.input.text type="date" label="date" model="bookingList.date" class="flex-1" />
                        <x-mole.input.text type="time" label="start time" model="bookingList.time_start" class="flex-1"
                            min="09:00" max="18:00" />
                        <x-mole.input.text type="time" label="end time" model="bookingList.time_end" class="flex-1"
                            min="09:00" max="18:00" />
                    </div>

                    <x-mole.input.textarea type="text" label="notes" model="bookingList.notes" class="flex-1" />

                    <div class="flex justify-end space-x-1">
                        <x-atom.button outlinePrimary x-on:click="open = false">Cancel</x-atom.button>
                        <x-atom.button colorPrimary iconUp type="submit">Submit</x-atom.button>
                    </div>
                </form>
            </div>
        </section>
    </x-orga.modal>
</div>
