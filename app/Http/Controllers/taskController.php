<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taskModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class taskController extends Controller
{
    public function index()
    {
        $data = taskModel::all();
        return view('pages.taskList.task-list', compact('data'));
    }

    public function create()
    {
        return view('pages.taskList.task-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ]);
        $id = auth()->User()->id;
        $data = array(
            "user_id"=>$id,
            "title" => $request['title'],
            "description" => $request['description'],
            "due_date" => $request['due_date'],
            "status" => $request['status']
        );
        $result = taskModel::create($data);
        Session::flash('success', 'Data SuccessFully');
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = taskModel::find($id);
        return view('pages.taskList.task-edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $update = [
            "title" => $request->title,
            "description" => $request->description,
            "due_date" => $request->due_date,
            "status" => $request->status,
        ];
        taskModel::where('id', $id)->update($update);
        Session::flash('info', 'Update SuccessFull!');
        return redirect ()->to('/task');
    }

    public function destroy(string $id)
    {
        taskModel::destroy($id);
        Session::flash('error', 'Deleted ! ');
        return redirect ()->to('/task');
    }
}
