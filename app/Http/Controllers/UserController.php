<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\File;

class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('pages.userManage.user-list')->with('userData', $data);
    }

    public function create()
    {
        return view('pages.userManage.user-add');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'mobile' => ['required', 'string'],
            'address' => ['required', 'string'],
            'image' => ['required','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
    }
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return redirect('/user/create')->withErrors($validator)->withInput();
        }
        if($request->file()) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('images/users', $fileName, 'public');
        }

        $id = auth()->User()->id;
        $data = array(
            "user_id"=>$id,
            "name" => $request['name'],
            "username" => $request['username'],
            "email" => $request['email'],
            "password" => $request['password'],
            "mobile" => $request['mobile'],
            "address" => $request['address'],
            "image" => $fileName
        );
        $result = User::create($data);
        Session::flash('success', 'Data SuccessFully');
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = user::find($id);
        return view('pages.userManage.user-edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        if($request->file()) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('images/users', $fileName, 'public');
        }
        else {
            $loginUser = User::find($id);
            $fileName = $loginUser->image;
        }
        $update = [
            "name"=> $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "address" => $request->address,
            "image" => $fileName,
        ];
        User::where('id', $id)->update($update);
        Session::flash('info', 'Update SuccessFull!');
        return redirect ()->to('/user');
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        Session::flash('error', 'Deleted ! ');
        return redirect ()->to('/user');
    }
}
