<?php

namespace App\Http\Livewire\ContactFormList;

use App\Models\ContactFormList;
use Livewire\Component;

class Edit extends Component
{
    public ContactFormList $contactFormList;

    public function mount(ContactFormList $contactFormList)
    {
        $this->contactFormList = $contactFormList;
    }

    public function render()
    {
        return view('livewire.contact-form-list.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->contactFormList->save();

        return redirect()->route('admin.contact-form-lists.index');
    }

    protected function rules(): array
    {
        return [
            'contactFormList.name' => [
                'string',
                'nullable',
            ],
            'contactFormList.email' => [
                'email:rfc',
                'nullable',
            ],
            'contactFormList.phone' => [
                'string',
                'nullable',
            ],
            'contactFormList.subject' => [
                'string',
                'nullable',
            ],
            'contactFormList.message' => [
                'string',
                'nullable',
            ],
        ];
    }
}
