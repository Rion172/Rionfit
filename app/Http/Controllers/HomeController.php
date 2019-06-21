<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Weight;
use App\Charts\UserWeight;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();
        $userWeight = DB::table('weights')->where('user_id', '=', Auth::id())->pluck('userweight')->toArray();


        $chart = new UserWeight;
        $chart->labels(['Weight']);
        $chart->dataset('Gewicht', 'line', $userWeight);



        if ($user->musclebuilding == 1 || $user->weight_loss == 1) {
            return view('choice', ['chart' => $chart])->with('user', $user)->with('userWeight', $userWeight);
        } else {
            return view('home')->with('user', $user);
        }
        
    }
}

