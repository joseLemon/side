<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ResetPassword;
use App\Providers\EventServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSending;

class MailerController extends Controller {

    function sendContactMail(Request $request) {
        $this->validate($request, [
            'contact_name'      =>  'required|max:255',
            'contact_email'     =>  'required|email',
            'contact_message'   =>  'required|max:512'
        ],[
            'contact_name.required'     =>  'El nombre de contato es obligatorio',
            'contact_name.max'          =>  'La cantidad máxima de caracteres permitida para el nombre es de :max',

            'contact_mail.required'     =>  'El correo electrónico de contacto es obligatorio',
            'contact_mail.email'        =>  'El correo electrónico ingresado no tiene un formato válido',

            'contact_message.required'  =>  'El contenido del mensaje es obligatorio',
            'contact_message.max'       =>  'La cantidad máxima de caracteres permitida para el contenido del mensaje es de :max',
        ]);

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

            /*foreach(Mail::failures as $email_address) {
                echo " - $email_address <br />";
            }*/

            $jsonResponse = [
                'alert_class' => 'alert-danger',
                'msg'   => 'Error en el envio, favor de intentarlo nuevamente más tarde'
            ];

        } else {
            $jsonResponse = [
                'alert_class' => 'alert-success',
                'msg'   => 'Mensaje enviado exitosamente'
            ];
        }

        return response()->json($jsonResponse);
    }
}