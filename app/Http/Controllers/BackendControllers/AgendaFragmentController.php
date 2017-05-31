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
use File;

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

    public function edit($id){
        $agendafragment = AgendaFragment::find($id);
        return view('amber.backend.agendafragments.edit', compact($agendafragment, 'agendafragment'));
    }

    public function update(Request $request, $id){
        $agendafragment = AgendaFragment::find($id);

        // check if there is an image uploaded, move it to the uploads folder and save the name.
        if($image = $request->file('image')){
            $image->move(public_path("uploads/agendafragments/"), $image->getClientOriginalname());
            $agendafragment->imagepath = $image->getClientOriginalname();
        }
        if($agendafragment->save()){
            return redirect()->route('agendafragments.index');
        }
    }

    public function destroy($id){
        $agendafragment = agendafragment::find($id);
		$residualImage = public_path('uploads/agendafragments/') . $agendafragment->imagepath;
        if($agendafragment->delete() && File::delete($residualImage)){
            return redirect()->route('agendafragments.index');
        }
    }
}
