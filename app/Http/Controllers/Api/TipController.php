<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tip;
use App\Models\Tipster;

class TipController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tip::get()->toJson(JSON_PRETTY_PRINT); 
        return response($tips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tipster_id)
    {   
        if (Tip::where('tipster_id', $tipster_id)->exists()) 
        {

        $tips = Tip::where('tipster_id', $tipster_id)->get()->toJson(JSON_PRETTY_PRINT);  
        return response($tips);

        } else {

            return response()->json([
                "messege" => "Tip Not Found"
            ], 404);
        }
    }

    public function showStats($tipster_id)
    {
        if (Tip::where('tipster_id', $tipster_id)->exists()) 
        {

        $tips = Tip::where('tipster_id', $tipster_id)->get()->toJson(JSON_PRETTY_PRINT);  
        return response($tips);

        } else {
            
            return response()->json([
                "messege" => "Tip Not Found"
            ], 404);
        }
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
