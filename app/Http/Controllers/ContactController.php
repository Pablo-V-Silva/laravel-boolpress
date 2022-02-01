<?php

namespace App\Http\Controllers;

use App\Mail\MarkdowContactFormMail;
use App\Mail\SendContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  //
  public function show_contact_page()
  {
    # code...
    return view('guest.contacts.form');
  }

  public function store(Request $request)
  {

    $valData = $request->validate([
      'name' => 'required|min:4|max:50',
      'email' => 'required|email',
      'message' => 'required|min:10|max:500'
    ]);
    //ddd($request);
    $contact = Contact::create($valData);

    $this->sendEmail($contact);



    //return (new SendContactFormMail($valData))->render();
    //Mail::to('admin@example.com')->send(new SendContactFormMail($valData));



    //return (new MarkdowContactFormMail($valData))->render();

    return redirect()->back()->with('message', ' Thanks For Message');
  }

  public function sendEmail(Contact $contact)
  {
    # code...
    Mail::to('admin@example.com')->send(new MarkdowContactFormMail($contact));
  }
}
