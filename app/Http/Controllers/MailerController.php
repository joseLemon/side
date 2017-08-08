<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller {

    function sendContactMail(Request $request) {
        $contact_name = $request->input('contact_name');
        $contact_email = $request->input('contact_email');
        $contact_message = $request->input('contact_message');

        $message_body = "De: ".$contact_name."\r\n";
        $message_body .= "Correo: <".$contact_email.">\r\n\r\n";
        $message_body .= "Mensaje: \r\n".$contact_message;

        $contact_data = [
            'name'      => $contact_name,
            'email'     => $contact_email,
            'message'   => $contact_message
        ];

        /*\Mail::send('site.index', [], function ($message){
            $message->to('pepe.lujan2@gmail.com')->subject('Expertphp.in - Testing mail');
        });*/

        try {
            Mail::raw($message_body, function ($message) use ($contact_data) {
                $subject = 'Mensaje de la forma de contacto del Sitio Web de SIDE';

                $message->from($contact_data['email'], $contact_data['name']);
                $message->to('pepe.lujan2@gmail.com')->subject($subject);
            });

            return 'Mensaje enviado exitosamente.';
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}