<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    #[Rule('required', message: 'Изглежда името ви не е въведено, опитай пак :)')]
    public $name;

    #[Rule('required', message: 'Изглежда фамилното ви име не е въведено, опитай пак :)')]
    public $secondname;

    #[Rule('required', message: 'Нека пробваме отново, без буквички, моля :)')]
    #[Rule('numeric')]
    public $number;

    #[Rule('required', message: 'Изглежда имейлът ви не е въведен, опитай пак :)')]
    #[Rule('email', message: 'Моля, въведете валиден имейл адрес.')]
    public $email;

    #[Rule('required', message: 'Да не сте забравили да напишете нещо в текстовото поле? Ето ви втори шанс. :)')]
    #[Rule('string')]
    #[Rule('max:500')]
    public $body;


    public function submit()
    {
        $this->validate();

        $name = $this->name;
        $number = $this->number;
        $email = $this->email;
        $body = $this->body;
        $secondname = $this->secondname;

        Mail::to(config('mail.to.address'))->send(new ContactMail($name, $number, $email, $body, $secondname));

        $this->reset();

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
