<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Inventary;
use DataTables;

class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
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
        $inventary= new Inventary;

        $inventary->section =$request->input('section');
        $inventary->position =$request->input('position');
        $inventary->state =$request->input('state');
        $inventary->product =$request->input('product');
        $inventary->pdrpid =$request->input('pdrpid');
        $inventary->serial =$request->input('serial');
        $inventary->code =$request->input('code');
        $inventary->channel =$request->input('channel');
        $inventary->observation =$request->input('observation');
        
        $students->save();

  
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
