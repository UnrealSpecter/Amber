<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\CVCategory;

use \Input as Input;

class CVCategoryController extends Controller
{
    public function create(){
        return view('amber.backend.cv.categories.create');
    }

    public function store(Request $request){
        $cvCategory = CVCategory::create($request->all());

        return redirect()->route('CV.index');
    }

    public function edit($id){
        $category = CVCategory::findOrFail($id);

        return view('amber.backend.cv.categories.edit', compact($category, 'category'));
    }

    public function update(Request $request, $id){
        $category = CVCategory::findOrFail($id);
        $category->update($request->all());

        $category->save();

        return redirect()->route('CV.index');
    }

    public function destroy($id){
        $category = CVCategory::findOrFail($id);

        $category->delete();

        return redirect()->route('CV.index');
    }
}
