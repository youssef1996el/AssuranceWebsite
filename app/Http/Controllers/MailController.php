<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\WelcomeEmail;
class MailController extends Controller
{
    public function index(Request $request)
    {




        $toEmail        = $request->Email;/* 'potebi1681@rehezb.com'; */
        $messageBody    = 'first message';
        $subject        = $request->TypeAssurance;
        $fullname       = $request->Fullname;
        $phone          = $request->phone;


        Mail::send('Send',
            [
                'fullname' => $fullname,
                'message' => $messageBody,
                'subject' => $subject,
                'phone' => $phone,
                'toEmail' => $toEmail,

            ],
            function ($message) use ($toEmail, $subject,$phone,$fullname) {
                $message->to($toEmail)
                    ->subject("Nouveau prospect "/* .$subject */);
            });



        return response()->json([
            'status'   => 200
        ]);

    }
}
