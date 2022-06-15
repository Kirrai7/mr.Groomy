<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rec;
use App\Models\booking;

class HomeController extends Controller
{
    //
    public function index2(){
        $rec_count=rec::all()->count();
        $booking_count=booking::all()->count();
        return view('admin.home.index',['rec_count'=>$rec_count],['booking_count'=>$booking_count]);
    }
    public function admin_count(){
        
    }
    public function table(){
        return view('admin.home.services');
    }
}
