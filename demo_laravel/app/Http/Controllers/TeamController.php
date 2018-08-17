<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkAge');
    }

    public function index()
    {
        //
        $teams = Teams::paginate(5);
        $json = json_encode($teams, 200);
        $trimmed = str_replace("\n", "", $json);
        // $json = response()->json([$teams], 200);
        return view('ds_team',compact(['teams','trimmed']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $team = new Teams();
        $team->name = $data['name'];
        $team->description = $data['description'];
        $team->logo = $data['logo'];
        $team->leader_id = $data['leader_id'];
        $team->save();
        return redirect('team');
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
        $team = Teams::find($id);
        return view('update_team',compact('team'));
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
        $team = Teams::find($id);
        $data = $request->all();
        $team->name = $data['name'];
        $team->description = $data['description'];
        $team->logo = $data['logo'];
        $team->leader_id = $data['leader_id'];
        $team->save();
        return redirect('team');
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
        $team = Teams::find($id);
        $team->delete();
        return redirect('team');
    }
}
