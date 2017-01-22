<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class AmberController extends Controller
{
    /* return frontend views */

    //homepage 
    public function index(){
    	return view('Amber/front-end/home');
    }

    /* return backend views */


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
