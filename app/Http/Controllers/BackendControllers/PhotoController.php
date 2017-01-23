<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\AmberWebsite\Fotoblog;

use \Input as Input;

class PhotoController extends Controller
{
    public function index(){
        $fotoblogs = Fotoblog::all();
        return view('amber.backend.photos.index', compact($fotoblogs, 'fotoblogs'));
    }

    public function create(){
        return view('amber.backend.photos.create');
    }

    public function store(Request $request){
        $fotoblog = new Fotoblog();
        $fotoblog->title = $request->title;
        $fotoblog->description = $request->description;
        // check if there is an image uploaded, move it to the uploads folder and save the name.
        $image = $request->file('image');
        if($image->move(public_path("/uploads"), $image->getClientOriginalname())){
            $fotoblog->image = $image->getClientOriginalname();
        }
        if($fotoblog->save()){
            return redirect()->route('photos.index');
        }
    }

    public function edit($id){
        $fotoblog = Fotoblog::find($id);
        return view('amber.backend.photos.edit', compact($fotoblog, 'fotoblog'));
    }

    public function update(Request $request, $id){
        $fotoblog = Fotoblog::find($id);
        $fotoblog->title = $request->title;
        $fotoblog->description = $request->description;
        // check if there is an image uploaded, move it to the uploads folder and save the name.
        if($image = $request->file('image')){
            $image->move(public_path("/uploads"), $image->getClientOriginalname());
            $fotoblog->image = $image->getClientOriginalname();
        }
        if($fotoblog->save()){
            return redirect()->route('photos.index');
        }
    }

    public function destroy($id){
        $fotoblog = Fotoblog::find($id);
        if($fotoblog->delete()){
            return redirect()->route('photos.index');
        }
    }

}
