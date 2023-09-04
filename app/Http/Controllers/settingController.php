<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = setting::all();
        return view('pages.settingManage.setting-list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.settingManage.setting-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required',
            'value' => 'required',
            'type' => 'required',
        ]);
        $id = auth()->User()->id;
        $data = array(
            "user_id"=>$id,
            "key" => $request['key'],
            "value" => $request['value'],
            "type" => $request['type'],

        );
        $result = setting::create($data);
        Session::flash('success', 'Data SuccessFully');
        return redirect()->back();
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        setting::destroy($id);
        Session::flash('error', 'Deleted ! ');
        return redirect ()->to('/settin');
    }
}
