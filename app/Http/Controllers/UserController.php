<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('pages.userManage.user-list')->with('userData', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.userManage.user-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'image' => 'required',

        ]);
        $id = auth()->User()->id;
        $data = array(
            "user_id"=>$id,
            "name" => $request['name'],
            "username" => $request['username'],
            "email" => $request['email'],
            "mobile" => $request['mobile'],
            "image" => $request['image']
        );
        $result = User::create($data);
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
        $data = User::find($id);
        return view('pages.userManage.user-edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = [
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "image" => $request->image,

        ];
        User::where('id', $id)->update($update);
        Session::flash('info', 'Update SuccessFull!');
        return redirect ()->to('/User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        Session::flash('error', 'Deleted ! ');
        return redirect ()->to('/User');
    }
}
