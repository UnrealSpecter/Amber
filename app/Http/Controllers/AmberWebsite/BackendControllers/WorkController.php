<?php
namespace App\Http\Controllers\AmberWebsite\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
// use App\Models\AmberWebsite\Work;

use \Input as Input;

class WorkController extends Controller
{
    public function index(){
        $works = Work::all();
        return view('amber.backend.works.index', compact($works, 'works'));
    }

    public function create(){
        return view('amber.backend.works.create');
    }

    public function store(Request $request){
        // $work = new Fotoblog();
        // $work->caption = $request->caption;
        // // check if there is an image uploaded, move it to the uploads folder and save the name.
        // $image = $request->file('image');
        // if($image->move(public_path("/uploads/works"), $image->getClientOriginalname())){
        //     $fotoblog->image = $image->getClientOriginalname();
        // }
        // if($fotoblog->save()){
        //     return redirect()->route('photos.index');
        // }
    }

    public function edit($id){
        $fotoblog = Fotoblog::find($id);
        return view('amber.backend.works.edit', compact($work, 'work'));
    }

    public function update(Request $request, $id){
        // $fotoblog = Fotoblog::find($id);
        // $fotoblog->title = $request->title;
        // $fotoblog->description = $request->description;
        // // check if there is an image uploaded, move it to the uploads folder and save the name.
        // if($image = $request->file('image')){
        //     $image->move(public_path("/uploads"), $image->getClientOriginalname());
        //     $fotoblog->image = $image->getClientOriginalname();
        // }
        // if($fotoblog->save()){
        //     return redirect()->route('photos.index');
        // }
    }

    public function destroy(Request $request){
        foreach($request as $workId){
            $work = Work::findOrFail($workId);
            $work->delete();
        }
        return redirect()->route('works.index');
    }

}
