<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $available = Item::where('status','0')->get();
        $selected = Item::where('status','1')->get();
        $response_available = [];
        $response_selected = [];
        foreach ($available as $key => $avail) {
            $response_available[] = array(
                "value" => $avail->id,
                "displayValue" => $avail->name,
                "isSelected" => false,
               );
        }
        foreach ($selected as $key => $select) {
            $response_selected[] = array(
                "value" => $select->id,
                "displayValue" => $select->name,
                "isSelected" => false,
               );
        }

        return response()->json(array('available'=>$response_available,'selected'=>$response_selected));
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

        $request->validate([
           'name' => 'required|unique:items'
        ]);
        $input = $request->all();
        $item = Item::create($input);
        $response[] = array(
                "value" => $item->id,
                "displayValue" => $item->name,
                "isSelected" => false,
               );
        return $response;
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
        $item = Item::findOrFail($id);
        $item->status = $request->status;
        $item->save();
        
        return "Successfully update";
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
