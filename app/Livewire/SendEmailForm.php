<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

use Illuminate\Validation\Rules\File;
use Mail;
use App\Mail\SendEmail; 
use Livewire\WithFileUploads;

class SendEmailForm extends Component
{
    use WithFileUploads;

    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $adatkezeles;
    public $attachments = [];


    public function resetForm()
    {
        $this->dispatch('reset-form', name: $this->name, email: $this->email, phone: $this->phone, message: $this->message, attachments: $this->attachments);
    }

    public function render()
    {
        return view('livewire.send-email-form');
    }

    public function submit()
    {
        $errorMessages = [
            'name.required' => 'Név megadása kötelező!',
            'email.required' => 'Email megadása kötelező!',
            'phone.required' => 'Telefonszám megadása kötelező!',
            'message.required' => 'Üzenet megadása kötelező!',
            'adatkezeles.accepted' => 'Az adatkezelési nyilatkozat elfogadása kötelező!',
        ];

        $validatedData = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'attachments' => $this->attachments,
            'adatkezeles' => $this->adatkezeles,
        ], [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
            'attachments.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
            'adatkezeles' => 'accepted',
        ], $errorMessages)->validate();
        
        

        $email = new SendEmail($validatedData);

        if (!empty($this->attachments)) {
            foreach ($this->attachments as $attachment) {
                $email->attach($attachment->getRealPath(), [
                    'as' => $attachment->getClientOriginalName(),
                    'mime' => $attachment->getMimeType(),
                ]);
            }
        }
        
        Mail::to('info@krisz-vill.hu')->send($email);
        session()->flash('success', 'Üzenet sikeresen elküldve!');
        $this->reset();
        $this->resetForm();
    }
}


