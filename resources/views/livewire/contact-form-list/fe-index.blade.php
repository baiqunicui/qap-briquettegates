<div class="block w-full">
    <form wire:submit.prevent="submit" class="pb-20 space-y-3 sm:space-y-6">
        <div class="space-y-3 sm:space-y-0 sm:space-x-6 sm:flex">
            <x-mole.input.text placeholder="name" label="name" model="contactFormList.name" />
            <x-mole.input.text type="email" placeholder="email" label="email" model="contactFormList.email" />
            <x-mole.input.text type="tel" placeholder="phone" label="phone" model="contactFormList.phone" />
        </div>

        <x-mole.input.text placeholder="subject" label="subject" model="contactFormList.subject" />
        <x-mole.input.textarea placeholder="message" label="message" model="contactFormList.message" />
    </form>

    <div class="flex items-center justify-between w-full">
        <button wire:click.prevent="submit()" class="p-4 sm:py-6 sm:px-10 bg-gray-800 w-full sm:w-[40%]">
            <h6 class="text-white">{{'Submit'}}</h6>
        </button>

        @if (session()->has('message'))
        <p class="">{{ session('message') }}</p>
        @endif
    </div>
</div>
