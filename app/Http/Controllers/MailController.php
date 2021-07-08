<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function form(){
        return view('index');
      }
        

    public function sendEmail(Request $request)
    {
        $request->validate([
          'nom' => 'required|string',
          'email' => 'required|email',
          'sujet' => 'required|string',
          'message' => 'required|string',
        ]);

        $data = [
          'nom' => $request->nom,
          'email' => $request->email,
          'message' => $request->message
        ];

        Mail::send('contact', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['message']);
        });

        return redirect('index')->with(['message' => 'Email envoyé avec succès!']);
    }
}
