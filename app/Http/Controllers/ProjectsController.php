<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{   public function __construct()
        {
            $this->middleware('auth');
        }

    public function index(){
        $projects= project::where('owner_id',auth()->id())->get();
    return view('projects.index',compact('projects'));
    }

    public function update(project $project){
        $project->update(request(['title','description']));

//        $project->title = request('title');
//        $project->description =request('description');
//        $project -> save();
       return redirect('/projects');


    }
    public function show(project $project){
       // $this->authorize('view',$project);
       // abort_if ($project->owner_id!==auth()->id(),403);
        return view('projects.show',compact('project'));

    }
    public function edit(project $project){

        return view('projects.edit',compact('project'));

    }

    public function destroy(project $project){
     $project->delete();
    return redirect('/projects');

    }

    public function create(){
        return view('projects.create');

    }


    public function store(){
        request()->validate([
           'title'=>['required','min:3'],
            'description'=>'required'
        ]);


       // project::create(request(['title','description']));


        project::create([
            'title'=>request('title'),
            'description'=>request('description'),
            'owner_id'=>auth()->id()
        ]);
//        $project =new  project();
//        $project->title =request('title');
//        $project->description =request('description');
//        $project->save();

        return redirect('/projects');
    }

}
