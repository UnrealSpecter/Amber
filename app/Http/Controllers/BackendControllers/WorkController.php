<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Work;

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
        $work = Work::create($request->all());
        $image = $request->file('imagepath');
    
        if($image->move(public_path("/uploads/works"), $image->getClientOriginalname())){
            $work->imagepath = $image->getClientOriginalname();
        }

        if($work->save()){
            return redirect()->route('works.index');
        }
        
    }

    public function edit($id){
        $work = Work::find($id);
        return view('amber.backend.works.edit', compact($work, 'work'));
    }

    public function update(Request $request, $id){
        $work = Work::find($id);
        $work->title = $request->title;
        $work->dimensions = $request->dimensions;
        $work->workDate = $request->workDate;
        if($work->save()){
            return redirect()->route('works.index');
        }
    }

    public function destroy($id){
        $work = Work::findOrFail($id);
        $work->delete();
        return redirect()->route('works.index');
    }

}
