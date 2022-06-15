<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\stock;
use App\Models\about;
use App\Models\gallery;
use App\Models\rec;
use App\Models\contact;
use App\Models\kindAnimal;
use App\Models\ServicesDog;
use App\Models\ServicesCat;
use App\Models\master;
use App\Models\Room;
use App\Models\booking;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request){
        $servicesCat=ServicesCat::all();
        // $stock1=stock::find(1);
        // $stock2=stock::find(2);
        // $stock3=stock::find(3);
        // $stock4=stock::find(4);
        $stock=stock::all();
        $gallery=gallery::all();
        $servicesDog=ServicesDog::all();
        return view("home", compact('stock','gallery','servicesCat','servicesDog'));    
    }

    public function about(){
        $kind=kindAnimal::all();
        $master=master::all();
        $servicesCat=ServicesCat::all();
        $about=about::find(1);
        return view("about", compact('about','servicesCat','kind','master'));    
    }
    public function gallery(){
        $servicesCat=ServicesCat::all();
        $gallery=gallery::all();
        return view("home", compact('gallery','servicesCat','kind' ));    
    }
    public function stock(){
        $kind=kindAnimal::all();
        $servicesCat=ServicesCat::all();
        $stock1=stock::all();
       
        return view("stock", compact('stock1','kind','servicesCat'));
    }
    public function services(){
        $kind=kindAnimal::all();
        $servicesCat=ServicesCat::all();
        $servicesDog=ServicesDog::all();
        
        return view("services", compact('servicesCat','servicesDog','kind' ));
    }
    public function contact(){
        $kind=kindAnimal::all();
        $servicesCat=ServicesCat::all();
        $contact=contact::find(1);
        return view("contact", compact('contact','servicesCat','kind' ));  
    }
    //гостиница и запись

    public function hotel(Request $request){
        $room=room::all();
        // $roomDog=room::all();
       
        return view('hotel', compact('room'));
    }
    public function booking(Request $request){
        $room=room::all();
        $booking=new booking();
        $booking->name = $request->name;
        $booking->date1 = $request->date1;
        $booking->date2 = $request->date2;
        $booking->rooms = implode(',', $request->rooms);
        $booking->number = $request->number;
        $booking->save();
        return redirect('/hotel#rules')->withSuccess("Данные отправлены. Ожидайте, с вами свяжется администратор для подтверждения записи.");
    }


    // Запись

    public function selectKind(Request $request){
        $servicesCat=ServicesCat::all();
        $kind=kindAnimal::all();
        $kindS = $request->breed;
        $kindTitle = KindAnimal::find( $kindS);

        $name = $request->name;
        $weight = $request->weight;
        
        return view("selectKind", compact('servicesCat','kind','kindS','name','weight','kindTitle'));;    
    }
    public function selectServices(Request $request){
        $servicesCat=ServicesCat::all();
        $servicesDog=ServicesDog::all();
        $kind=kindAnimal::all();

        $kindS = $request->breed;
        $kindTitle = KindAnimal::find( $kindS);

        $name = $request->name;
        $weight = $request->weight;

        return view("selectServices", compact('servicesCat','kind','kindS','servicesDog','name','weight','kindTitle'));;    
    }
    public function rec(Request $request){
        $servicesCat=ServicesCat::all();
        $kind=kindAnimal::all();
        $servicesDog=ServicesDog::all();

        $kindS = $request->breed;
        $kindTitle = KindAnimal::find( $kindS);

        $name=$request->name;
        $weight=$request->weight;

        $rec=new rec();
        $rec->name = $request->name;
        $rec->breed = $kindS;
        $rec->weight = $weight;
        $rec->services = implode(',', $request->services);
        $rec->number = $request->number;
        $rec->date = $request->date;
        $rec->save();
        return redirect('/selectKind')->withSuccess("Данные отправлены. Ожидайте, с вами свяжется администратор для подтверждения записи.");
        
    }
    public function login(){
        return view('login');
        }
        public function register(){
            return view('register');
            }

}
