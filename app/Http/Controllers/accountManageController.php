<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        return view('pages/accountManage/profile')->with('loginUser', $loginUser);

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
        //
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
        $loginUser = User::find($id);
        return view('pages.accountManage.profile-edit')->with('loginUser',$loginUser);
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
            "address" => $request->address,
            "image" => $request->image,
        ];

        User::where('id', $id)->update($update);
        Session::flash('success', 'User Updated successful!');
        return redirect ()->to('/account');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
