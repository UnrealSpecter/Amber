<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    public function index(){
        return view('amber.frontend.home.index');
    }
}
