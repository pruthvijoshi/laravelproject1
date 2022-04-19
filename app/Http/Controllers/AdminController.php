<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchefe;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
   {
        $data=user::all();
        return view("admin.users",compact("data"));
   }

   public function deleteuser($id)
   {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
   }
   public function foodmenu()
   {
        $data= food::all();
     return view("admin.foodmenu",compact("data"));
   }
   public function upload(Request $request)
   {
        $data = new food;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename; 
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();

   }
   public function deletemenu($id)
   {
        $data= food::find($id);
        $data->delete();
        return redirect()->back();
   }
   public function updatemenu($id)
   {
        $data= food::find($id);
        return view("admin.updatemenu",compact("data"));
   }
   public function update(Request $request, $id)
   {

     $data= food::find($id);
     $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename; 
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
   }

   public function reservation(Request $request)
   {
        $data = new reservation;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->guest=$request->guest;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();

        return redirect()->back();

   }
   public function viewreservation()
   {
        if(Auth::id()==$id)
        {
        $data = reservation::all();
        return view("admin.adminreservation",compact("data"));
        }
        else
        {
             return redirect('login');
        }

   }
   public function deletereservation($id)
   {
        $data= reservation::find($id);
        $data->delete();
        return redirect()->back();
   }
   public function updatereservation($id)
   {
        $data= reservation::find($id);
        return view("admin.updatereservation",compact("data"));
   }
   public function updateres(Request $request, $id)
   {

     $data= reservation::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();

        return redirect()->back();
   }
   public function viewchefe()
   {
     $data = foodchefe::all();
        return view("admin.adminchefe",compact("data"));
   }

   public function uploadchef(Request $request)
   {
        $data = new foodchefe;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename; 
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();

   }
   public function deletechef($id)
   {
        $data= foodchefe::find($id);
        $data->delete();
        return redirect()->back();
   }
   public function updatechef($id)
   {
        $data= foodchefe::find($id);
        return view("admin.updatechef",compact("data"));
   }
   public function updatechefs(Request $request, $id)
   {

     $data= foodchefe::find($id);
     $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename; 
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();

        return redirect()->back();
   }
   public function orders()
   {
        $data = order::all();
        return view("admin.adminorder",compact("data"));

   }
   public function search(Request $request)
   {
        $search = $request->search;
        $data = order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')
        ->get();
        return view("admin.adminorder",compact("data"));

   }

}
