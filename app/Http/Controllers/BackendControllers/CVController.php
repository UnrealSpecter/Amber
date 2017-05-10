<?php
namespace App\Http\Controllers\BackendControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\CVCategory;
use App\Models\CVEntry;

use \Input as Input;

class CVController extends Controller
{
    public function index(){
        $categories = CVCategory::with('entries')->get();
        $nav = [
            'brand' => 'Curriculum Vitae Overview',
            'active' => 'Overview',
            'menu-links' => [
                ''
            ]
        ]
        return view('amber.backend.cv.index', compact($categories, 'categories'));
    }

    public function create(){
        $categories = CVCategory::all();

        return view('amber.backend.cv.create', compact($categories, 'categories'));
    }

    public function store(Request $request){
        $leftSide = $request->leftSide;
        $rightSide = $request->rightSide;

        $category = $request->category_id;

        $cvEntry = new CVEntry;
        $cvEntry->leftSide = $leftSide;
        $cvEntry->rightSide = $rightSide;
        $cvEntry->category()->associate($category);

        $cvEntry->save();

        return redirect()->route('CV.index');
    }

    public function edit($id){
        $cvEntry = CVEntry::with('category')->findOrFail($id);
        $categories = CVCategory::all();

        return view('amber.backend.cv.edit', compact($cvEntry, ['cvEntry', 'categories']));
    }

    public function update(Request $request, $id){
        $leftSide = $request->leftSide;
        $rightSide = $request->rightSide;

        $category = $request->category_id;

        $cvEntry = CVEntry::findOrFail($id);
        $cvEntry->leftSide = $leftSide;
        $cvEntry->rightSide = $rightSide;
        $cvEntry->category()->associate($category);

        $cvEntry->save();

        return redirect()->route('CV.index');
    }

    public function destroy($id){
        $cvEntry = CVEntry::find($id);

        $cvEntry->delete();

        return redirect()->route('CV.index');
    }
}
