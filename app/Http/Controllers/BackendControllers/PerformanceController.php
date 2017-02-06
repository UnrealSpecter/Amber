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

        return view('amber.backend.performances.edit', compact($performance, 'performance'));
    }

    public function update($id, Request $request){
        // perform update
        $performance = Performance::findOrFail($id);

        $performance = $performance->update($request->all());

        $image = $request->file('mediaItem');
        // if new image has been uploaded, save it, otherwise ignore.
        if($image != null)
        {
            // after update, Laravel seems to lose the reference to $performance, so we just fetch it again for now.
            $performance = Performance::findOrFail($id);

            if($image->move(public_path("/uploads"), $image->getClientOriginalname())){
                $performance->mediaItem = $image->getClientOriginalname();
            }

            $performance->save();
        }

        return redirect()->route('performances.index');
    }

    public function destroy($id){
        $performance = Performance::findOrFail($id);
        $performance->delete();

        return redirect()->route('performances.index');
    }
}
