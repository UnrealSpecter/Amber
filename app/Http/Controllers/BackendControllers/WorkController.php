<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Work;

use Intervention\Image\ImageManagerStatic as Image;
use \Input as Input;
use File;

class WorkController extends Controller
{
    public function index(){
        $works = DB::table('works')->orderBy('created_at', 'desc')->get();
        return view('amber.backend.works.index', compact($works, 'works'));
    }

    public function create(){
        return view('amber.backend.works.create');
    }

    public function store(Request $request){
        $work = Work::create($request->all());
        $image = $request->file('imagepath');
        //save orignal image to uploads
        Image::make($image)->save(public_path('uploads/works/') . $image->getClientOriginalname());
        //resize image to width
        $thumb = Image::make($image);
        $thumb->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        // //resize image to height
        $thumb->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
        });
        //save thumb
        $thumb->save(public_path('uploads/works/thumbs/') . $image->getClientOriginalname());
        //save path
        $work->imagepath = $image->getClientOriginalname();
        //save work object
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
        $work = Work::find($id);

        $residualImage = public_path('uploads/works/' . $work->imagepath);
        $residualThumbImage = public_path('uploads/works/thumbs/' . $work->imagepath);

        if($work->delete() && File::delete($residualImage) && File::delete($residualThumbImage)){
            return redirect()->route('works.index');
        }
    }

}
