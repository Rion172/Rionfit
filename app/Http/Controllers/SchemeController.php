<?php

namespace App\Http\Controllers;

use App\Scheme;
use App\User;
use App\Exercise;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class SchemeController extends Controller
{
    public function index() {

    	$user = Auth::user();

    	$chest = Exercise::where(['scheme_id' => 1])->pluck('exercisename')->toArray();
    	$shoulders = Exercise::where(['scheme_id' => 2])->pluck('exercisename')->toArray();
    	$biceps = Exercise::where(['scheme_id' => 4])->pluck('exercisename')->toArray();
    	$triceps = Exercise::where(['scheme_id' => 5])->pluck('exercisename')->toArray();
    	$rug = Exercise::where(['scheme_id' => 6])->pluck('exercisename')->toArray();
    	$buik = Exercise::where(['scheme_id' => 7])->pluck('exercisename')->toArray();
    	$benen = Exercise::where(['scheme_id' => 8])->pluck('exercisename')->toArray();
        $fullbody = Exercise::where(['scheme_id' => 9])->pluck('exercisename')->toArray();

    	$musclegroup = DB::table('scheme')->pluck('musclegroup');

        $sets = Exercise::get('sets')->pluck('sets')->first();
        $reps = Exercise::get('reps')->pluck('reps')->first();

    	if ($user->musclebuilding == 1) {

    	return view('musclebuilding')
    	->with('musclegroup', $musclegroup)
    	->with('user', $user)
    	->with('chest', $chest)
    	->with('shoulders', $shoulders)
    	->with('biceps', $biceps)
    	->with('triceps', $triceps)
    	->with('rug', $rug)
    	->with('buik', $buik)
    	->with('benen', $benen)
        ->with('sets', $sets)
        ->with('reps', $reps);

    	}else {

    	return view('weightloss')
    	->with('musclegroup', $musclegroup)
    	->with('user', $user)
    	->with('chest', $chest)
    	->with('shoulders', $shoulders)
    	->with('biceps', $biceps)
    	->with('triceps', $triceps)
    	->with('rug', $rug)
    	->with('buik', $buik)
    	->with('benen', $benen)
        ->with('fullbody', $fullbody)
        ->with('sets', $sets)
        ->with('reps', $reps);
    	}
    	
    }
}
