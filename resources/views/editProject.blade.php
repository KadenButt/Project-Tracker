<!DOCTYPE html>

<head>
    <title>{{ $project->title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/projectForm.css') }}" rel="stylesheet" />

</head>

<body>
    <header>
        <h1 class="main-header"> {{ $project->title }} </h1>
        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <div class='search-container'>

                <a href="{{ route('home') }}" class="btn-main">{{ Session::get('username') }}</a>
                <a href="{{ route('home.createProject') }}" class="btn-main">Create New Project</a>
                <a href="{{ route('showProjects') }}" class="btn-main">Projects</a>
                <a href="{{ route('logout') }}" class="btn-main">Logout</a>
            </div>
        </form>



    </header>
    <main>
        <form method="POST" action="{{route('home.edit')}}" class="project-form">
            @csrf
            <input type="hidden" name="pid" value="{{$project->pid}}"><br>
            <label>Title</label><br>
            <input type="text" name="title" value="{{$project->title}}"> <br>
            <label>Start Date</label><br>
            <input type="date" name="start_date" value="{{$project->start_date}}"> <br>
            <label>End Date</label><br>
            <input type="date" name="end_date" value="{{$project->end_date}}"> <br>
            <label>Phase</label><br>
            <select name="phase" value="{{$project->phase}}">
                <option value="design">Design</option>
                <option value="development">Development</option>
                <option value="testing">Testing</option>
                <option value="deployment">Deployment</option>
                <option value="complete">Complete</option>
            </select>  <br>
            <label>Description</label><br>
            <textarea name="description" rows="10" cols="30">
                {{$project->description}}
            </textarea><br>
            <button type="submit" class="btn-main">Submit</button><br>
            <a href="{{route('home')}}">Return</a>
        </form>



    <footer>
    </footer>
</body>
