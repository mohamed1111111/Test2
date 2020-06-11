<!DOCTYPE html>
<html>
     <title></title>
</head>
<body>
<h1>create a new project </h1>
<form method="POST" action="/projects">
    {{csrf_field()}}
    <div>
        <input type="text" name="title" placeholder="project title" value="{{old('title')}}"/>
    </div>
    <div>
        <textarea  name="description" placeholder="project description" required></textarea>
    </div>
    <div>
        <button type="submit" > create a project </button>
        <div class="notification is-danger">


                <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
        </div>
    </div>

</form>
</body>
</html>
