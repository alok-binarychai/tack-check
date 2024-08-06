<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEnquiryMail extends Mailable
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
        return $this->from(config('myconfig.MAIL_FROM_ADDRESS'), config('myconfig.MAIL_FROM_NAME'))
        ->subject($this->data['name'].' - Contact Enquiry - '.config('app.name'))
        ->view('frontend.mailtemplate.contact_enquiry_mail')
        ->with('data', $this->data);
    }
}
