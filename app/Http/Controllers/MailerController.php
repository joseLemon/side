<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Providers\EventServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSending;

class MailerController extends Controller {

    function sendContactMail(Request $request) {
        $contact_name = $request->input('contact_name');
        $contact_email = $request->input('contact_email');
        $contact_message = $request->input('contact_message');

        /*$message_body = "De: ".$contact_name."\r\n";
        $message_body .= "Correo: <".$contact_email.">\r\n\r\n";
        $message_body .= "Mensaje: \r\n".$contact_message;

        $contact = [
            'name'      => $contact_name,
            'email'     => $contact_email,
            'message'   => $contact_message
        ];*/

        $contact = new \stdClass();
        $contact->contact_name = $contact_name;
        $contact->contact_email = $contact_email;
        $contact->contact_message = $contact_message;

        /*\Mail::send('site.index', [], function ($message){
            $message->to('pepe.lujan2@gmail.com')->subject('Expertphp.in - Testing mail');
        });*/
        echo \Mail::to('pepe.lujan2@gmail.com','José Angel')
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
        /*\Mail::raw($message_body, function ($message) use ($contact_data) {
            $message->from($contact_data['email'], $contact_data['name'])
                ->to('pepe.lujan2@gmail.com','José Angel')
                ->subject('Mensaje de la forma de contacto del Sitio Web de SIDE');
        });*/
    }
}