<div>
    <form wire:submit.prevent="submit" class="pt-3">
        <div class="w-full mx-auto space-y-3 border-black md:space-y-8">
            <x-mole.input.select label="{{$contact->form[0]['form'][0]['label']}}" model="contactFormList.category_id"
                class="flex">
                <option value=""></option>
                @foreach ($this->listsForFields['category'] as $key => $item)
                <option value="{{$key}}">{{ $item }}</option>
                @endforeach
            </x-mole.input.select>

            <div class="flex flex-col w-full space-x-0 space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                <x-mole.input.text type="text" label="{{$contact->form[0]['form'][1]['label']}}"
                    placeholder="{{$contact->form[0]['form'][1]['placheolder']}}" model="contactFormList.name"
                    class="flex-1" />
                <x-mole.input.text type="tel" label="{{$contact->form[0]['form'][2]['label']}}"
                    placeholder="{{$contact->form[0]['form'][2]['placheolder']}}" model="contactFormList.phone"
                    class="flex-1" />
                <x-mole.input.text placeholder="{{$contact->form[0]['form'][3]['placheolder']}}" type="email"
                    label="{{$contact->form[0]['form'][3]['label']}}" model="contactFormList.email" class="flex-1" />
            </div>
            <x-mole.input.text label="{{'Subject'}}" placeholder="{{'subject'}}" model="contactFormList.subject"
                class="" />

            <x-mole.input.textarea label="{{$contact->form[0]['form'][4]['label']}}" model="contactFormList.message"
                placeholder="{{$contact->form[0]['form'][4]['placheolder']}}" class="form-input" />

            <x-atom.button colorSecondary class="w-full">Submit</x-atom.button>
        </div>
    </form>
</div>
