<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\project;
class ProjectTasksController extends Controller
{
    //
    public function update(task $task)
    {
        $task->update(['completed'=>request()->has('completed')]);
        return back();
    }
    public function store(project $project){
    //dd(request('description'));
        request()->validate(['description'=>'required  ']);
        task::create([
            'project_id'=>$project->id ,
            'description'=>request('description')]);

    return back();
}}
