<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function path(Request $request)
    {
        $query = Project::where("title", $request->input("search"))->first();

        if ($query == null) {
            $query = Project::where("start_date", $request->input("search"))->first();
        }

        if ($query == null) {
            return back()->withInput();
        }

        return redirect()->route("showProject",['pid' => $query->pid, 'id' => $query->id]);
    }

    public function show($id, $pid)
    {
        $project = Project::where("pid", $pid)->first();
        $user = User::find($id);
        return view('showProject', compact('project', 'user'));
    }

    public function list()
    {
       // dd(array('projects'=>Project::all()));
        return view('showProjects', array('projects'=>Project::all()));
    }

}
