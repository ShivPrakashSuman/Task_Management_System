<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoTaskControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.todoList.list');
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
        $response = array('status'=>false, 'message'=>'oop\'s something went wrong', 'data'=>null);

            $response['message'] =  "Fetch Data Success";
            $response['status'] = true;
        return json_encode($response);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
