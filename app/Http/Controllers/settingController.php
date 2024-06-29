<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

class settingController extends Controller
{
    public function index()
    {
        // $currentPath = Route::getFacadeRoot()->current()->uri();
        // $data = setting::where('value','like','%'.$currentPath.'%')->get();
        $data = setting::get();
  
        return view('pages.settingManage.setting-list', compact('data'));
    }

    public function create()
    {
        return view('pages.settingManage.setting-add');
    }

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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        setting::destroy($id);
        Session::flash('error', 'Deleted ! ');
        return redirect ()->to('/setting');
    }
}
