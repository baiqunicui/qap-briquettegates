<?php

namespace App\Http\Livewire\ContactFormList;

use App\Models\ContactFormList;
use Livewire\Component;

class FeIndex extends Component
{
    public ContactFormList $contactFormList;

    public function mount(ContactFormList $contactFormList)
    {
        $this->contactFormList = $contactFormList;
    }

    public function submit()
    {
        $this->validate();
        $this->contactFormList->save();
        session()->flash('message', 'Your message has been received');
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

    public function render()
    {
        return view('livewire.contact-form-list.fe-index');
    }
}
