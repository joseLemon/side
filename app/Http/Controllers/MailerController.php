<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ResetPassword;
use App\Providers\EventServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSending;

class MailerController extends Controller {

    function sendContactMail(Request $request) {
        $contact_name = $request->input('contact_name');
        $contact_email = $request->input('contact_email');
        $contact_message = $request->input('contact_message');

        $contact = new \stdClass();
        $contact->contact_name = $contact_name;
        $contact->contact_email = $contact_email;
        $contact->contact_message = $contact_message;

        \Mail::to('pepe.lujan2@gmail.com','José Angel')
            ->send(new Contact($contact));


        if( count(\Mail::failures()) > 0 ) {

            echo 'Error en el envio.';

            foreach(Mail::failures as $email_address) {
                echo " - $email_address <br />";
            }

            return true;

        } else {
            return 'Mensaje enviado exitosamente.';
        }
    }
}