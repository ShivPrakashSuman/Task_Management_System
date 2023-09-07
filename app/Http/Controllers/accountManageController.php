<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\setting;
use Illuminate\Support\Facades\Session;
class accountManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $loginUser = auth()->User();
        $settingData = setting::where('user_id','=',$loginUser->id)->get();
        return view('pages/accountManage/profile')
        ->with('loginUser', $loginUser)
        ->with('settingData', $settingData);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $loginUser = User::find($id);
        return view('pages.accountManage.profile-edit')->with('loginUser',$loginUser);
    }

    public function update(Request $request, string $id)
    {
        if($request->file()) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('images/users', $fileName, 'public');
        } else {
            $loginUser = User::find($id);
            $fileName = $loginUser->image;
        }
        $update = [
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "address" => $request->address,
            "image" => $fileName,
        ];
        User::where('id', $id)->update($update);
        Session::flash('success', 'User Updated successful!');
        return redirect ()->to('/account');
    }

    public function destroy(string $id)
    {
        //
    }
}
