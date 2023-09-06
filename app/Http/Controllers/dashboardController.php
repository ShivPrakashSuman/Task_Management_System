<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\taskModel;

class dashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all_user = User::count();
        $all_task = taskModel::all()->count();
        $all_participant_user = taskModel::get()->where('assign_id')->count();
        $all_task_close = taskModel::onlyTrashed()->get()->count();
        $all_task_done = taskModel::where('status','=' ,'done')->count();
        $all_task_todo = taskModel::where('status','=' ,'to_do')->count();
        $all_task_progress = taskModel::where('status','=' ,'in_progress')->count();
        $all_task_approval = taskModel::where('status','=' ,'on_approval')->count();
        return view('pages.dashboard')
            ->with('alluser', $all_user)
            ->with('alltask', $all_task)
            ->with('participantUser', $all_participant_user)
            ->with('closeTask', $all_task_close)
            ->with('doneTask', $all_task_done)
            ->with('todoTask', $all_task_todo)
            ->with('progressTask', $all_task_progress)
            ->with('approvalTask', $all_task_approval);
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
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
