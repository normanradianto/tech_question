<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subscribe.page1');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['first_name' => 'required', 'last_name' => 'required', 'favorite_color' => 'sometimes']);
        $subscribe = new Subscribe(['first_name' => $request->get('first_name'), 'last_name' => $request->get('last_name'), 'favorite_color' => '']);
        $subscribe->save();

        return view('subscribe.page2',compact('subscribe'));

        //return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['favorite_color' => 'required']);
        $subscribe = Subscribe::find($id);
        // $subscribe->first_name = $request->get('first_name');
        // $subscribe->last_name = $request->get('last_name');
        $subscribe->favorite_color = $request->get('favorite_color');

        $subscribe->save();

        return view('subscribe.page3',compact('subscribe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
