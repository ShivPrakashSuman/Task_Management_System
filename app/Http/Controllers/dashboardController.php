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
        $userData = User::count();
        return view('pages.dashboard', compact('userData'));

        // $id = auth()->User()->id;
        // $taskAll = taskModel::where('user_id','=',$id)->get();
        // return view('pages.dashboard')->with('taskData', $taskAll);
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
