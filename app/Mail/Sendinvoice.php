<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendinvoice extends Mailable
{
    protected $dynamic_data='';
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ishrat)
    {
        //
        $this->dynamic_data=$ishrat;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // Mail::to($request->Auth::user()->email)->send(new Sendinvoice());
        return $this->view('backend.mail.sendmail',[
            'data'=>$this->dynamic_data,
        ]);
    }
}
