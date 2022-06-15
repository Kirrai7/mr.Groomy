<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery=gallery::orderBy('created_at','desc')->get();
        return view('admin.table.gallery.index',[
            'gallery'=>$gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new gallery();
        //добавляем к имени файла адрес папки для БД
        $gallery->photo = "public/img/galery/" . $_FILES['img']['name'];
        ////переносим файл из временной папки сервера в папку проекта
        if (!empty($_FILES)) {
        move_uploaded_file(
            $_FILES['img']['tmp_name'],
            'img/galery/' . $_FILES['img']['name']
        );
    }
        $gallery->save();
        return Redirect()->back()->withSuccess("Фото было успешно добавлено!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gallery = gallery::find($id);
        // $gallery=gallery::orderBy('created_at','desc')->get();
        return view('admin.table.gallery.edit',['gallery'=>$gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
        $gallery->photo = "public/img/galery/" . $_FILES['imgRed']['name']; //файл
        if (!empty($_FILES)) {
        //перемещение
        move_uploaded_file(
        $_FILES['imgRed'] ['tmp_name'],
        'img/galery/' . $_FILES['imgRed']['name']
        );
    }
        // // если не меняем картнку, то оставлять имя
        if ($_FILES['imgRed']['name']=="") {
        $gallery->photo = $request->imgHidden;
        }
        $gallery->save();
        return redirect()->back()->withSuccess('Фото было успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
        $gallery->delete();
        return redirect()->back()->withSuccess('Фото было успешно удалено!');
    }
}
