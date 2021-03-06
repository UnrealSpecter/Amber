<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\AgendaFragment;
use Illuminate\Routing\Redirector;

use \Input as Input;

class AgendaFragmentController extends Controller
{
    public function index(){
    	$agendafragments = AgendaFragment::all();
        return view('amber.frontend.agendafragments.index', compact($agendafragments, 'agendafragments'));
    }
}
