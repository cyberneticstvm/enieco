<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fullname' => ['required', 'min:5', 'max:25'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:10', 'max:50'],
            'message' => ['required', 'min:10', 'max:500']
        ]);
        $contact = new Contact();
        $contact->contact_name = request('fullname');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->message = request('message');
        $contact->save();

        /*Mail::send('contact',
            array(
                'name' => $request->get('fullname'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('mail@cybernetics.me')->subject($request->subject);
            }
        );*/

        Mail::raw(request('message'), function ($message) use ($request) {
            $message->from($request->email, $request->fullname);
            $message->to('mail@cybernetics.me')->subject($request->subject);
        });
        
        return back()->with('success', 'Thank you! We have recieved your message and our team will reach you shortly.');
        //return redirect("/contact");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
