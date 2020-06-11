@extends('layout')

@section('content')
    <h1 class="title">Edit project </h1>

    <form action="/projects/{{$project->id}}"  method="POST" >
        {{ csrf_field() }}

        {{method_field('PATCH')}}

        <div class="field">
        <label class="label" for="title">title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Tittle" value="{{ $project->title}}" >
        </div>

        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea" >{{ $project->description}}</textarea>
        </div>
        <div class="field">
            <button type="submit" class="button is-link " > Update Project </button>
        </div>
        </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}" >
            {{method_field('delete')}}
            {{csrf_field()}}


        <div >
            <button   class="button" > Delete Project </button>
        </div>

    </forom>
@endsection
