<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Work;

use \Input as Input;

class WorkController extends Controller
{
    public function index(){
        $works = DB::table('works')->orderBy('created_at', 'desc')->get();
        return view('amber.frontend.works.index', compact($works, 'works'));
    }
}
