<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::where('id', session('id'))->get();
        return view('home', compact('projects'));
    }

    public function editLayout($pid)
    {

        $project = Project::where('pid', $pid)->first();
        //dd($projects);
        if($project->id == session('id'))
        {
            return view('editProject', compact('project'));
        }

        return redirect('login');
    }

    public function editProject(Request $request)
    {
        $affectedRows = DB::table('projects')
        ->where('pid', $request->input("pid"))
        ->update([
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'phase' => $request->input('phase'),
            'description' => $request->input('description'),
        ]);

        if($affectedRows > 0)
        {
            return redirect(route('home'));

        }else
        {
            return redirect()->back()->with('error', 'Failed to update project.');
        }

    }

    public function createLayout(Request $request)
    {
        return view('createProject');
    }

    public function createProject(Request $request)
    {
        DB::insert('insert into projects (title, start_date,end_date,phase,description,id) values (?,?,?,?,?,?)', [$request->input('title'),$request->input('start_date'),$request->input('end_date'),$request->input('phase'),$request->input('description'), session("id")]);
        return redirect('home');
    }

}
