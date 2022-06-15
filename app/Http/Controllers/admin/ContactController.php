<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact=contact::orderBy('created_at','desc')->get();
        return view('admin.table.contact.index',[
            'contact'=>$contact
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.table.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_contact = new contact();
        $new_contact->number = $request->number;
        $new_contact->adres = $request->adres;
        $new_contact->email = $request->email;
        $new_contact->time_work = $request->time_work;
        $new_contact->save();
        return redirect()->back()->withSuccess('Запись была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
        return view('admin.table.contact.edit',['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
        $contact->id=$request->id;
        
        $contact->number = $request->number;
        $contact->adres = $request->adres;
        $contact->email = $request->email;
        $contact->time_work = $request->time_work;
        $contact->save();
        return redirect()->back()->withSuccess('Контакт был успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
        $contact->delete();
        return redirect()->back()->withSuccess('Контакт был успешно удалён!');
    }
}
