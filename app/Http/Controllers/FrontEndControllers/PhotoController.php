<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Fotoblog;

use \Input as Input;

class PhotoController extends Controller
{
    public function index(){
        $fotoblogs = Fotoblog::all();
        return view('amber.frontend.photos.index', compact($fotoblogs, 'fotoblogs'));
    }

}
