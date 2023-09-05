<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taskModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class taskController extends Controller
{
    public function index()
    {
        $id = auth()->User()->id;
        $todo_task_list = taskModel::where('user_id','=',$id)->Where('status','=','to_do')->get();
        $inprogress_task_list = taskModel::where('user_id','=',$id)->Where('status','=','in_progress')->get();
        $on_approval_task_list = taskModel::where('user_id','=',$id)->Where('status','=','on_approval')->get();
        $done_task_list = taskModel::where('user_id','=',$id)->Where('status','=','done')->get();
        $all_task_list = taskModel::with('getUser')->get();

        return view('pages.taskList.task-list')
            ->with('taskList', $all_task_list)
            ->with('todo_task_list', $todo_task_list)
            ->with('inprogress_task_list', $inprogress_task_list)
            ->with('on_approval_task_list', $on_approval_task_list)
            ->with('done_task_list', $done_task_list);
    }

    public function changeStatus()
    {
        $response = array('status'=>false, 'message'=>'oop\'s something went wrong', 'data'=>null);
            $task_id = $_GET['task_id'];
            $field_id = $_GET['field_id'];
            if($task_id && $field_id){
                $update = [
                    "status" => $field_id,
                ];
                taskModel::where('id', $task_id)->update($update);
                $response['message'] =  "Update SuccessFull!";
                $response['status'] = true;
            } else {
                $response['message'] = 'task_id not found';
            }
        echo json_encode($response);
    }

    public function create()
    {
        $data = User::all();
        return view('pages.taskList.task-add')->with('userData', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'assign_id' => 'required',
            'due_date' => 'required',
            'status' => 'required'
        ]);
        $id = auth()->User()->id;
        $data = array(
            "user_id"=>$id,
            "title" => $request['title'],
            "description" => $request['description'],
            "assign_id" => $request['assign_id'],
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
        $userData = User::all();
        $status = ['to_do', 'in_progress', 'on_approval', 'done'];
        return view('pages.taskList.task-edit')
            ->with('data', $data)
            ->with('userData', $userData)
            ->with('statusShow', $status);
    }

    public function update(Request $request, string $id)
    {
        $update = [
            "title" => $request->title,
            "description" => $request->description,
            "assign_id" => $request->assign_id,
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
