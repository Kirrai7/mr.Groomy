<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\services_cat;
use Illuminate\Http\Request;

class ServicesCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services_cat=services_cat::orderBy('created_at','desc')->get();
        return view('admin.table.servicesCat.index',[
            'services_cat'=>$services_cat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.servicesCat.create');
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
        $new_services = new services_cat();
        $new_services->title = $request->title;
        $new_services->price_short = $request->price_short;
        $new_services->price_long = $request->price_long;
        $new_services->save();
        return redirect()->back()->withSuccess('Услуга была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services_cat  $services_cat
     * @return \Illuminate\Http\Response
     */
    public function show(services_cat $services_cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services_cat  $services_cat
     * @return \Illuminate\Http\Response
     */
    public function edit(services_cat $servicesCat)
    {   
        return view('admin.table.servicesCat.edit',[
            'servicesCat' => $servicesCat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services_cat  $services_cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, services_cat $servicesCat)
    {
        //
        $servicesCat->title=$request->title;
        $servicesCat->price_short=$request->price_short;
        $servicesCat->price_long=$request->price_long;
        $servicesCat->save();
        return redirect()->back()->withSuccess('Услуга была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services_cat  $services_cat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services_cat = services_cat::find($id);
        $services_cat->delete();
        return redirect()->back()->withSuccess('Услуга была успешно удалена!');
    }
}
