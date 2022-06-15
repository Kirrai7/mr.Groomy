<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stock=stock::orderBy('created_at','desc')->get();
        return view('admin.table.stock.index',[
            'stock'=>$stock
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
        return view('admin.table.stock.create');
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
        $new_stock = new stock();
        $new_stock->title = $request->title;
        $new_stock->text = $request->text;
        $new_stock->photo = "img/stock/" . $_FILES['img']['name'];
        ////переносим файл из временной папки сервера в папку проекта
        if (!empty($_FILES)) {
        move_uploaded_file(
            $_FILES['img']['tmp_name'],
            'img/stock/' . $_FILES['img']['name']
        );
    }
        $new_stock->save();
        return redirect()->back()->withSuccess('Акция была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
        return view('admin.table.stock.edit',['stock'=>$stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
       
        $stock->title=$request->title;
        $stock->text=$request->text;
        $stock->photo = "img/stock/" . $_FILES['imgRed']['name']; //файл
        if (!empty($_FILES)) {
        //перемещение
        move_uploaded_file(
        $_FILES['imgRed'] ['tmp_name'],
        'img/stock/' . $_FILES['imgRed']['name']
        );
    }
        // // если не меняем картнку, то оставлять имя
        if ($_FILES['imgRed']['name']=="") {
        $stock->photo = $request->imgHidden;
        }
        $stock->save();
        return redirect()->back()->withSuccess('Акция была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
        $stock->delete();
        return redirect()->back()->withSuccess('Акция была успешно удалена!');
    }
}
