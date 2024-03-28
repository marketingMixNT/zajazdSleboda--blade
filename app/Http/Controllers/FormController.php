<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function contact_form(ContactFormRequest $request)
    {

        Mail::send(
            'mails.contactMail',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'tel' => $request->get('tel'),
                'content' => $request->get('content')
            ],

            
            function ($message) {
                $message->from("contactForm@mmhub.pl");
                $message->to("contactForm@mmhub.pl")->cc('marek.gacek@marketingmix.pl')
                    // $message->to(env('MAIL_USERNAME'))->cc(env('SECONDARY_EMAIL'))
                    ->subject('Nowa wiadomość ze strony zajazdsleboda.pl');
            }
        );
        $formSubmitted = true;

        return view('pages.contact.index', ['formSubmitted' => $formSubmitted]);
    }
}