@extends('layout')
@section('content')

    <h1 class="title">{{$project->title}}</h1>
    <div>{{$project->description}}</div>
        <p>
            <a href="/projects/{{$project->id}}/edit">Edit</a>
        </p>
    <div>
        @foreach($project->tasks as $task)

            <div>
                <form method="post" action="/task/{{$task->id}}">
                    {{method_field('PATCH')}}
                    @csrf
                    <label class="checkbox">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ?'checked' : '' }}>
                        {{$task->description}}

                    </label>
                </form>

            </div>
         @endforeach
    </div>

    <form method="post"  action="/projects/{{ $project->id }}/task" class="box" >
        @csrf
        <div class ="field">
            <label class ="label" for="description " > new task</label>
            <div class="controle">
            <input type="text" class="input" name="description" placeholder="New task">
            </div>

        </div>
        <div class="field">
            <div class="controle">
                <button type="submit" class="button is-link">Add task</button>
            </div>
        </div>
    </form>

    @endsection
