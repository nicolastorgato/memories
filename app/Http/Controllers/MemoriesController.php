<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MemoriesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $memories = Memory::orderBy('created_at', 'asc')->get();
        $memories = Auth::user()->memories->sortByDesc('created_at');

        return view('memories', [
            'memories' => $memories
        ]);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/memories')
                ->withInput()
                ->withErrors($validator);
        }

        $memory = new Memory;
        $memory->user_id = Auth::user()->id;
        $memory->name = $request->name;
        $memory->description = $request->description;
        $memory->save();

        return redirect('/memories');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function show(Memory $memory)
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function edit(Memory $memory)
    {
        //
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memory $memory)
    {
        //
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Memory::findOrFail($id)->delete();

        return redirect('/memories');
    }
}
