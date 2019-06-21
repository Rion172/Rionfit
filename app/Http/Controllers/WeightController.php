<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Weight;
use App\Charts\UserWeight;
use Illuminate\Support\Facades\DB;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('gewichtaanpassen')
        ->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([

        'userweight'=>'required'

        ]);

        $userweight = new Weight;

        $userweight->userweight = $request->input('userweight');
        $userweight->user_id = Auth::id();
        $userweight->save();

        $userWeight = DB::table('weights')->where('user_id', '=', Auth::id())->pluck('userweight')->toArray();

        $chart = new UserWeight;
        $chart->labels(['Weight']);
        $chart->dataset('Gewicht', 'line', $userWeight);

        return view('choice', ['chart' => $chart])
        ->with('user', $user)
        ->with('userWeight', $userWeight);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
