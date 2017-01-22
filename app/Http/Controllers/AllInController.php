<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Champion;

use DB;

class AllInController extends Controller
{
    public function index(){
    	$champions = Champion::all();
    	return view('all-in.champion', compact($champions, 'champions'));
    }

    public function addChampion(){
    	return view('all-in.addChampion');
    }

    public function editChampion($id){
    	$champion = Champion::find($id);
    	return view('all-in.editChampion', compact($champion, 'champion'));
    }

    public function saveChampion(Request $request){
    	$champion = Champion::find($request->id);
    	$champion->name = $request->name;
    	if($champion->save()){
    		return $this->index();
    	}
    	
    }

    public function createChampion(Request $request){
    	$champion = new Champion();
    	$champion->name = $request->name;
    	if($champion->save()){
    		return $this->index();
    	}
    	
    }

}
