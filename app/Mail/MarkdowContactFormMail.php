<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MarkdowContactFormMail extends Mailable
{
  use Queueable, SerializesModels;

  public $contact;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Contact $contact)
  {
    //
    $this->data = $contact;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this
      ->from('noreply@example.com')
      ->subject('New Lead')
      ->markdown('mail.contacts.mdlead')->with([
        'url' => route('guest.home')
      ]);
  }
}
