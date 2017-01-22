<?php

namespace App\Http\Controllers\AmberWebsite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\AmberWebsite\Fotoblog;

use \Input as Input;

class AmberController extends Controller
{
    /* return frontend views */
    //homepage 
    public function index(){
    	return view('Amber/front-end/home');
    }

    //werken
     public function werken(){
        return view('Amber/front-end/werken');
    }

    //theater
    public function theater(){
        return view('Amber/front-end/theater');
    }

    //curriculum vitea
    public function cv(){
        return view('Amber/front-end/curriculum-vitae');
    }

    /* return backend views */
    public function dashboard(){
        return view('Amber/backend/dashboard');
    }

    //fotoblog
    public function fotoblog(){
        $fotoblogs = Fotoblog::all();
        return view('Amber/backend/fotoblog-overview', compact($fotoblogs, 'fotoblogs'));
    }

    public function fotoblogCreate(){
        return view('Amber/backend/fotoblog-create');
    }

    public function createFotoblog(Request $request){
        $fotoblog = new Fotoblog();
        $fotoblog->title = $request->title;
        $fotoblog->description = $request->description;
        $image = $request->file('image');
        if($image->move(public_path("/uploads"), $image->getClientOriginalname())){
            echo 'fuck yeah';
        }
        // if(Input::hasFile('image')){
        //     echo 'image';
        //     $image = Input::file('image');
        //     $image->move('uploads', $file->getClientOriginalname());
        //     echo '<img src="uploads/' . $image->getClientOriginalname() . '"/>';
        // }
        die('lel');
        if($fotoblog->save()){
            return $this->index();
        }
    }

    // public function addChampion(){
    // 	return view('all-in.addChampion');
    // }

    // public function editChampion($id){
    // 	$champion = Champion::find($id);
    // 	return view('all-in.editChampion', compact($champion, 'champion'));
    // }

    // public function saveChampion(Request $request){
    // 	$champion = Champion::find($request->id);
    // 	$champion->name = $request->name;
    // 	if($champion->save()){
    // 		return $this->index();
    // 	}
    	
    // }

    // public function createChampion(Request $request){
    // 	$champion = new Champion();
    // 	$champion->name = $request->name;
    // 	if($champion->save()){
    // 		return $this->index();
    // 	}
    	
    // }

}
