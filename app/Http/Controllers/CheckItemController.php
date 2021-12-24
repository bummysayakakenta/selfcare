<?php

namespace App\Http\Controllers;

use App\Models\CheckItem;
use Illuminate\Http\Request;

class CheckItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkItems = CheckItem::all();
        return view('check_items.index',compact('checkItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('check_items.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkItem = $request->all();
        CheckItem::create($checkItem);
        return redirect('checkItems');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckItem  $checkItem
     * @return \Illuminate\Http\Response
     */
    public function show(CheckItem $checkItem)
    {
        return view('check_items.show', compact('checkItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckItem  $checkItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckItem $checkItem)
    {
        return view('check_items.form', compact('checkItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckItem  $checkItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckItem $checkItem)
    {
        $input = $request->all();
        
        $checkItem->update($input);
        return redirect ('check_items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckItem  $checkItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckItem $checkItem)
    {
        $checkItem->delete();
        return redirect ('check_items');
    }
}
