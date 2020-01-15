<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    //
    public function submit(Request $request){
        $this->validate($request, ['name'=>'required','email'=>'required|email','project_type'=>'required','budget'=>'required']);
        $contact = new Contact;

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->project_type = $request->input('project_type');
        $contact->budget = $request->input('budget');
        $contact->message = $request->input('message');

        $contact->save();

        $message = "Dear <b>{$request->input('name')}</b>, I am excited to start work on your <b>{$request->input('project_type')}</b> project.
        I will reach out to you in less than 24hours to ask for further details.
        ";
        return redirect('/hire-me')->with('success',$message);
    }
}
