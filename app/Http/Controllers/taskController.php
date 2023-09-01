<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taskModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate = taskModel::all();
        return view('pages.taskList.task-list', compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.taskList.task-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ]);
        $id = auth()->User()->id;
            $data=array(
            "user_id"=>$id,
            "title" => $request['title'],
            "description" => $request['description'],
            "due_date" => $request['due_date'],
            "status" => $request['status']
        );
        $result = taskModel::create($data);
        Session::flash('success', 'Data Save SuccessFully');
        return back();


        // $response = array('status'=>false, 'message'=>'oop\'s something went wrong', 'data'=>null);

        //     $response['message'] =  "Fetch Data Success";
        //     $response['status'] = true;
        // return json_encode($response);
    }

    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cate = taskModel::find($id);
        return view('pages.taskList.edit')->with('data', $cate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = [
            "user_id"=>auth()->user()->id,
            "title" => $request->title,
            "description" => $request->description,
            "due_date" => $request->due_date,
            "status" => $request->status,
        ];
        taskModel::where('id', $id)->update($update);
        Session::flash('success', 'User Updated successful!');
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
