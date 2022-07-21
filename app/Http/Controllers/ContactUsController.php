<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
// use App\Models\contactuses;
use App\Models\ContactUsForm;
use App\Models\Demo;
use App\Models\DemoQueires;
use App\Models\installationQuery;
use Illuminate\Support\Facades\DB;


class ContactUsController extends Controller
{
    public function index(){
        $countries = DB::table('countries_name')->get();
        return view('frontend.contactus',compact('countries'));
    }
    public function show(){
        $contact_messages = ContactUsForm::orderby('created_at','DESC')->paginate(15);
        $total = ContactUsForm::all();
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
        $contact = new ContactUsForm;
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



    // demo queries
    public function demoShow(){
        $demo_messages = DemoQueires::orderby('created_at','DESC')->paginate(15);
        return view('admin.queries.demo',compact('demo_messages'));
    }

    public function demoStore(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
            ]
        );
        $demo = new DemoQueires;
        $demo->name = $request->name;
        $demo->email = $request->email;
        if($demo->save()){
            return redirect()->back()->with('success','Your Query sent Successfully.');
        }
        else{
            return redirect()->back()->with('erro','Something went wrong.');
        }

    }

    // installation queries
    public function intallationShow(){
        $installation_messages = installationQuery::orderby('created_at','DESC')->paginate(15);
        return view('admin.queries.insatallation',compact('installation_messages'));
    }

    public function installationStore(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'phone' => 'required',
            ]
        );
        $installation = new installationQuery;
        $installation->name = $request->name;
        $installation->phone = $request->phone;
        if($installation->save()){
            return redirect()->back()->with('success','Your Query sent Successfully.');
        }
        else{
            return redirect()->back()->with('erro','Something went wrong.');
        }

    }
}
