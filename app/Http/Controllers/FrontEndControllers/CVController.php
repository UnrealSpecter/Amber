<?php
namespace App\Http\Controllers\FrontEndControllers;
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
        return view('amber.frontend.cv.index', compact($categories, 'categories'));
    }
}
