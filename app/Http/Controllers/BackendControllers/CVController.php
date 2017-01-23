<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\CVCategory;

use \Input as Input;

class CVController extends Controller
{
    public function index(){
        $categories = CVCategory::with('entries')->get();
        dd($categories);

        return view('amber.backend.cv.index', compact($categories, 'categories'));
    }

    public function create(){
        return view('amber.backend.cv.create');
    }

    public function store(Request $request){
        // TODO Store CV stuff
    }

    public function edit($id){
        // TODO load CV stuff

        return view('amber.backend.cv.edit');
    }

    public function update(Request $request, $id){
        // TODO Update CV stuff
    }

    public function destroy($id){
        // TODO delete CV stuff
    }
}
