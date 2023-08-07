<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\ContactFormRequest;
use Mail;
use App\Mail\Contact;
use Validator;

class ContactController extends Controller
{
    //
    public function create()
	{
		return view('pages.support.contact');
	}

  public function store(Request $request)
    {
    //  $mailabe = new
    /*  Mail::to('admin@chezmoi.com')
              ->send(new Contact($request->except('_token')));

          return view('confirm');*/
          $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required'
           ]);
           /*Mail::send('Contact',[
             'msg'  => $request->messege
           ],function($mail) use($request){
             $mail->from('utilisateur@example.com')->subject('Contact Message');
           });*/
           Mail::to('admin@admin.com')
                     ->send(new Contact($request->except('_token')),function($mail) use($request){
                       $mail->from($request->email,$request->name);

                     });
           return redirect()->back()->with('flash_message','Thank you for your message');








   }


  }
