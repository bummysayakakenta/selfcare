<?php

namespace App\Http\Controllers;

use App\Models\CheckClass;
use Illuminate\Http\Request;

class CheckClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkClasses = CheckClass::all();
        return view('check_classes.index',compact('checkClasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('check_classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkClass = $request->all();
        CheckClass::create($checkClass);
        return redirect('check_classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckClass  $checkClass
     * @return \Illuminate\Http\Response
     */
    public function show(CheckClass $checkClass)
    {
        return view('check_classes.show', compact('checkClass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckClass  $checkClass
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckClass $checkClass)
    {
        return view('check_classes.form', compact('checkClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckClass  $checkClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckClass $checkClass)
    {
        $input = $request->all();
        
        $checkClass->update($input);
        return redirect ('check_classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckClass  $checkClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckClass $checkClass)
    {
        $checkClass->delete();
        return redirect ('check_classes');
    }
}
