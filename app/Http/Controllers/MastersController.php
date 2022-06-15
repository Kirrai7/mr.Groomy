<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master;

class MastersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $master=master::orderBy('created_at','desc')->get();
        return view('admin.table.masters.index',[
            'master'=>$master
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.masters.create');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $master = new master();
        $master->name=$request->name;
        $master->time_work=$request->time_work;
        //добавляем к имени файла адрес папки для БД
        $master->photo = "public/img/worker/" . $_FILES['img']['name'];
        ////переносим файл из временной папки сервера в папку проекта
        if (!empty($_FILES)) {
        move_uploaded_file(
            $_FILES['img']['tmp_name'],
            'img/worker/' . $_FILES['img']['name']
        );
    }
        $master->save();
        return Redirect()->back()->withSuccess("Мастер был успешно добавлен!");
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
        $master = master::find($id);
        // $gallery=gallery::orderBy('created_at','desc')->get();
        return view('admin.table.masters.edit',['master'=>$master]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master $master)
    {
        $master->name=$request->name;
        $master->time_work=$request->time_work;
        $master->photo = "public/img/worker/" . $_FILES['imgRed']['name']; //файл
        if (!empty($_FILES)) {
        //перемещение
        move_uploaded_file(
        $_FILES['imgRed'] ['tmp_name'],
        'img/worker/' . $_FILES['imgRed']['name']
        );
    }
        // // если не меняем картнку, то оставлять имя
        if ($_FILES['imgRed']['name']=="") {
        $master->photo = $request->imgHidden;
        }
        $master->save();
        return redirect()->back()->withSuccess('Мастер успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $master = master::find($id);
        $master->delete();
        return redirect()->back()->withSuccess('Мастер был успешно удален!');
    }
}
