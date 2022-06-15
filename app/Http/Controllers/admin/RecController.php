<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\rec;
use Illuminate\Http\Request;

class RecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rec=rec::orderBy('created_at','desc')->get();
        return view('admin.table.rec.index',[
            'rec'=>$rec
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rec  $rec
     * @return \Illuminate\Http\Response
     */
    public function show(rec $rec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rec  $rec
     * @return \Illuminate\Http\Response
     */
    public function edit(rec $rec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rec  $rec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rec $rec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rec  $rec
     * @return \Illuminate\Http\Response
     */
    public function destroy(rec $rec)
    {
        //
        $rec->delete();
        return redirect()->back()->withSuccess('Запись была успешно удалена!');
    }
}
