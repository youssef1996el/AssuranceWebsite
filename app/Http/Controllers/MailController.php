<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\WelcomeEmail;
class MailController extends Controller
{
    public function index(Request $request)
    {


        $toEmail ='';
        if($request->page == 'welcome')
        {
            if($request->TypeAssurance == 'Auto')
            {
                $toEmail ='leadsautohproconseil@gmail.com';
            }
            if($request->TypeAssurance == 'Habitation')
            {
                $toEmail ='leadshabitationhproconseil@gmail.com';
            }
            if($request->TypeAssurance == 'Multuelle santé')
            {
                $toEmail ='leadssantehproconseil@gmail.com';
            }
            if($request->TypeAssurance == 'RC décennale')
            {
                $toEmail ='leadsdecennalehproconseil@gmail.com';
            }
            if($request->TypeAssurance == 'Emprunteur')
            {
                $toEmail ='leadsautohproconseil@gmail.com';
            }
        }


        if($request->page == 'auto')
        {
            $toEmail ='leadsautohproconseil@gmail.com';
        }
        if($request->page == 'habitation')
        {
            $toEmail ='leadshabitationhproconseil@gmail.com';
        }
        if($request->page == 'sante')
        {
            $toEmail ='leadssantehproconseil@gmail.com';
        }
        if($request->page == 'decennale')
        {
            $toEmail ='leadsdecennalehproconseil@gmail.com';
        }
        if($request->page == 'emprunteur')
        {
            $toEmail ='leadsemprunteurhproconseil@gmail.com';
        }


        $subject        = '';
        if($request->TypeAssurance == "")
        {

            if($request->page == "auto")
            {

                $subject = 'Auto';
            }
            if($request->page == 'habitation')
            {
                $subject ='Habitation';
            }
            if($request->page == 'sante')
            {
                $subject ='Multuelle santé';
            }
            if($request->page == 'decennale')
            {
                $subject ='RC décennale';
            }
            if($request->page == 'emprunteur')
            {
                $subject ='Emprunteur';
            }
        }
        else
        {
            $subject        = $request->TypeAssurance;
        }

       /*  $toEmail        = $request->Email; */
        $messageBody    = 'first message';
        dd($toEmail);

        $fullname       = $request->Fullname;
        $phone          = $request->phone;
        $codepostal     = $request->codepostal;
        $matricule      = $request->matricule == "" ? null : $request->matricule;
        $datenaissance  = $request->datenaissance;
        $emailClient    = $request->Email;

        Mail::send('Send',
            [
                'fullname'       => $fullname,
                'message'        => $messageBody,
                'subject'        => $subject,
                'phone'          => $phone,
                'toEmail'        => $toEmail,
                'codepostal'     => $codepostal,
                'matricule'      => $matricule,
                'datenaissance'  => $datenaissance,
                'emailClient'    => $emailClient,

            ],
            function ($message) use ($toEmail, $subject,$phone,$fullname,$codepostal,$matricule,$datenaissance,$emailClient) {
                $message->to($toEmail)
                    ->subject($subject);
            });



        return response()->json([
            'status'   => 200
        ]);

    }
}
