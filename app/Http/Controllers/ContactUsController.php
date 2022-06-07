<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Models\contactus;
use Illuminate\Support\Facades\DB;


class ContactUsController extends Controller
{
    public function index(){
        $countries = DB::table('countries')->get();
        return view('frontend.contactus',compact('countries'));        
    }
    public function show(){
        $contact_messages = contactus::orderby('created_at','DESC')->paginate(15);
        $total = contactus::all();
        return view('admin.contact-messages',compact('contact_messages','total'));        
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first-name' => 'required',   // required and email format validation
                'last-name' => 'required',
                'message' => 'required',
                'email' => 'required|email',
                'country' => 'required',
                'g-recaptcha-response' => 'required|captcha'

            ]
        );
        $contact = new contactus;
        $contact->f_name = $request->f_name;
        $contact->l_name = $request->l_name;
        $contact->email = $request->email;
        $contact->country = $request->country;
        $contact->message = $request->message;
        if($contact->save()){
            return redirect()->back()->with('success','Your Query sent Successfully.');
        }
        else{
            return redirect()->back()->with('erro','Something went wrong.');
        }

    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

}
