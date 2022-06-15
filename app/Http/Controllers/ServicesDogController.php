<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesDog;

class ServicesDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesDog=ServicesDog::orderBy('created_at','desc')->get();
        return view('admin.table.servicesDog.index',[
            'servicesDog'=>$servicesDog
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
        return view('admin.table.servicesDog.create');
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
        $new_services_dog = new ServicesDog();
        $new_services_dog->title=$request->title;
        $new_services_dog->price10=$request->price10;
        $new_services_dog->price10_30=$request->price10_30;
        $new_services_dog->price30=$request->price30;

        $new_services_dog->save();
        return redirect()->back()->withSuccess('Услуга была успешно добавлена!');
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
    public function edit(servicesDog $servicesDog)
    {
        
        return view('admin.table.servicesDog.edit',[
            'servicesDog' => $servicesDog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicesDog $servicesDog)
    {
        //
        $servicesDog->title=$request->title;
        $servicesDog->price10=$request->price10;
        $servicesDog->price10_30=$request->price10_30;
        $servicesDog->price30=$request->price30;
        $servicesDog->save();
        return redirect()->back()->withSuccess('Услуга была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicesDog = ServicesDog::find($id);
        $servicesDog->delete();
        return redirect()->back()->withSuccess('Услуга была успешно удалена!');
    }
}
