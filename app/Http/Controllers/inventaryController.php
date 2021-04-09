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
    public function index(Request $request){
       // $inventary = Inventary::all();
        //return view('inventary.index')->with(compact('inventary'));
        $inventary = Inventary::first()->get();
        
        if ($request->ajax()) {
            $data = Inventary::first()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a ref="javascript:void(0)" data-toggle="modal" data-target="#ajaxModel"  data-id="'.$row->id.'" data-original-title="Edit" class="far fa-edit editbtn"  style="color: #009bdd;">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="far fa-trash-alt deletebtn"  style="color: #009bdd;">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('Inventary.index')->with(compact('inventary'));
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
    {  /* 
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
        
        $inventary->save(); */
        Inventary::updateOrCreate(['id' => $request->book_id],
                ['section' => $request->section, 'position' => $request->position, 'state' => $request->state, 'product' => $request->product, 'pdrpid' => $request->pdrpid, 'serial' => $request->serial, 'code' => $request->code, 'channel' => $request->channel, 'observation' => $request->observation]);

        return response()->json(['success' => 'Inventario Registrado correctamente']);

  
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
        $inventary = Inventary::find($id);
        return response()->json($inventary);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function update(Request $request, $id)
    {
        $inventary= Inventary::findOrFail($id);

        $inventary->section =$request->section;
        $inventary->position =$request->position;
        $inventary->state =$request->state;
        $inventary->product =$request->product;
        $inventary->pdrpid =$request->pdrpid;
        $inventary->serial =$request->serial;
        $inventary->code =$request->code;
        $inventary->channel =$request->channel;
        $inventary->observation =$request->observation;
        
        $inventary->save();
    }

    
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventary = Inventary::findOrFail($id);
        $inventary->delete();
     
        return response()->json(['success'=>'Inventary deleted successfully.']);
    }
}
