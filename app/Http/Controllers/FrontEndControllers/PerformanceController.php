<?php
namespace App\Http\Controllers\FrontEndControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Models\Performance;
use Illuminate\Routing\Redirector;
use Carbon\Carbon;

use \Input as Input;

class PerformanceController extends Controller
{
    public function index(){
        $performances = Performance::orderBy('performanceDate', 'desc')->get();
        $now = Carbon::today();
        foreach($performances as $performance){
            $performanceDate = new Carbon($performance->performanceDate);
            //check the diff in days from the performance to now
            if(!isset($closestPerformanceDays)){
            	$closestPerformanceDays = $now->diffInDays($performanceDate);
            	$closestPerformanceId = $performance->id;
            }
            elseif($now->diffInDays($performanceDate) < $closestPerformanceDays){
            	$closestPerformanceId = $performance->id;
            	$closestPerformanceDays = $now->diffInDays($performanceDate);
            }
        }
        return view('amber.frontend.performances.index', compact('performances', 'closestPerformanceId'));
    }
}
