<?php

namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\AgendaFragment;
use Illuminate\Routing\Redirector;

use Intervention\Image\ImageManagerStatic as Image;
use \Input as Input;

class AgendaFragmentController extends Controller
{
	public function index(){
        $agendafragments = AgendaFragment::all();
        return view('amber.backend.agendafragments.index', compact($agendafragments, 'agendafragments'));
    }

    public function create(){
        return view('amber.backend.agendafragments.create');
    }

    public function store(Request $request){
        $agendafragment = new AgendaFragment;
        $image = $request->file('imagepath');
        //save orignal image to uploads
        Image::make($image)->save(public_path('uploads/agendafragments/') . $image->getClientOriginalname());
        //save path
        $agendafragment->imagepath = $image->getClientOriginalname();
        //save work object
        if($agendafragment->save()){
            return redirect()->route('agendafragments.index');
        }
    }

    // public function edit($id){
    //     $fotoblog = Fotoblog::find($id);
    //     return view('amber.backend.photos.edit', compact($fotoblog, 'fotoblog'));
    // }

    // public function update(Request $request, $id){
    //     $fotoblog = Fotoblog::find($id);
    //     $fotoblog->title = $request->title;
    //     $fotoblog->description = $request->description;
    //     // check if there is an image uploaded, move it to the uploads folder and save the name.
    //     if($image = $request->file('image')){
    //         $image->move(public_path("/uploads"), $image->getClientOriginalname());
    //         $fotoblog->image = $image->getClientOriginalname();
    //     }
    //     if($fotoblog->save()){
    //         return redirect()->route('photos.index');
    //     }
    // }

    // public function destroy($id){
    //     $fotoblog = Fotoblog::find($id);
    //     if($fotoblog->delete()){
    //         return redirect()->route('photos.index');
    //     }
    // }
}
