<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeaveMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $data; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data_array = $this->data;
        return $this->from($data_array['email'])
        ->subject('Customer Enquiry')
        ->view('mail.leaveMessage')
        ->with('data', $data_array); 
    }
}
