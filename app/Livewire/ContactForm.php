<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\contactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email|min:3|max:255',
        'message' => 'required|string|min:3|max:1000',
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated($propertyName){

        $this->validateOnly($propertyName);

    }
    
    public function send(){
        $validateDate = $this->validate();

        // send email
        try{

            Mail::to('yrn.norsuy@gmail.com')->send(New contactUsMail($validateDate));

            // notif succes dari toastr
            toastr()->timeOut(10000)->closeButton()->success('Pesan Berhasil Saya Terima.');   

        } catch (\Throwable $th){

            // notif succes dari toastr
            toastr()->timeOut(10000)->closeButton()->warning('Gagal Mengirim Pesan.'); 
        }

        $this->reset();
    }
}
