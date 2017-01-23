<?php

namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Performance;
use Illuminate\Routing\Redirector;

use \Input as Input;

class PerformanceController extends Controller
{
    public function index(){
        $performances = Performance::all();

        return view('amber.backend.performances.index', compact($performances, 'performances'));
    }

    public function create(){
        return view('amber.backend.performances.create');
    }

    public function store(Request $request){
        $performance = Performance::create($request->all());

        $image = $request->file('mediaItem');
        if($image->move(public_path("/uploads"), $image->getClientOriginalname())){
            $performance->mediaItem = $image->getClientOriginalname();
        }

        $performance->save();

        return redirect()->route('performances.index');
    }

    public function edit($id){
        $performance = Performance::findOrFail($id);

        return view('amber.backend.performances.edit', compact($performances, 'performances'));
    }

    public function update($id, Request $request){
        // perform update
        $performance = Performance::findOrFail($id);

        $performance = Performance::update($request->all());

        return redirect()->route('performances.index');
    }

    public function destroy($id){
        $performance = Performance::findOrFail($id);
        $performance->delete();

        return redirect()->route('performances.index');
    }
}
