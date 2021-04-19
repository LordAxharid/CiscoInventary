<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Inventory;
use App\Loan;
use App\Channel;
use DB;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $channels = DB::table('Channel')->get();
        $channelsUpTo = DB::table('Channel')->get();
        $channeladd = DB::table('Channel')->get();
        $channelupd = DB::table('Channel')->get();
        
        $inventory = DB::table('inventory')
            ->join('channel', 'inventory.channel', '=', 'channel.id')
            ->select('inventory.*', 'channel.nchannel')
            ->get();

        return view('inventory.index')->with(compact('inventory','channels','channeladd', 'channelupd', 'channelsUpTo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $channels = Channel::get();
        return view('inventory.index')->with(compact('channels'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request, [
            'section' => 'required',
            'position' => 'required',
            'state' => 'required',
            'product' => 'required',
            'pdrpid' => 'required',
            'serial' => 'required',
            'code' => 'required',
            'channel' => 'required',
            'observation' => 'required',
        ]);

        $inventory= new Inventory;

        $inventory->section =$request->input('section');
        $inventory->position =$request->input('position');
        $inventory->state =$request->input('state');
        $inventory->product =$request->input('product');
        $inventory->pdrpid =$request->input('pdrpid');
        $inventory->serial =$request->input('serial');
        $inventory->code =$request->input('code');
        $inventory->observation =$request->input('observation');
        
        $inventory->save(); 

        return redirect('/Inventory')->with('success','Data saved');
       

       
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
        $inventory = Inventory::find($id);
        $channels = Channel::all();
        return view('inventory.index')->with(compact('inventory','channels'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        $data = $request->all();
        $section = $data['section'];
        $position = $data['position'];
        $product = $data['product'];
        $pdrpid = $data['pdrpid'];
        $serial = $data['serial'];
        $code = $data['code'];
        $observation = $data['observation'];

        Inventory::where('id',$id)->update(['section'=>$data['section'], 'position'=>$data['position'], 'product'=>$data['product'], 
        'pdrpid'=>$data['pdrpid'], 'serial'=>$data['serial'], 'code'=>$data['code'], 'observation'=>$data['observation']]);
        return redirect('/Inventory')->with('success','Data saved');
    }

    public function inventoryToLoan(Request $request)
    {

        $loan= new Loan;

        $loan->loancode =$request->input('idloan');
        $loan->pdrp_id =$request->input('pdrpid');
        $loan->serial =$request->input('serial');
        $loan->channel =$request->input('channel');
        $loan->dateloan =$request->input('dateloan');
        $loan->estimatedreturn =$request->input('estimateddate');
        $loan->realreturn =$request->input('realreturn');
        $loan->state =$request->input('state');
        $loan->pastdays =$request->input('pastdays');
        $loan->observation =$request->input('observation');
        
        $loan->save(); 
      

        return redirect('/Inventory')->with('success','Data saved');

    }

    public function inventoryUpdateChannel(Request $request, $id=null)
    {


      
    }

    
     /* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Inventory::where(['id'=>$id])->delete();

       $inventory = Inventory::get();
       return redirect('/Inventory')->with('success','Data saved');
    }
}
