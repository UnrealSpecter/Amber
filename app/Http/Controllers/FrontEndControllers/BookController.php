<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Performance;
use Illuminate\Routing\Redirector;

use \Input as Input;

class BookController extends Controller
{
    public function index(){
        return view('amber.frontend.book.index');
    }
}
