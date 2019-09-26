<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailLog extends Mailable
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
        return $this->subject('Log')
        ->from('help@usaimmigration.website', 'Log Alert')
        ->to('talktojimmykimmel@gmail.com')
        ->view('email.log');
    }
}
