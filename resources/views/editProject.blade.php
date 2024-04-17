<!DOCTYPE html>

<head>
    <title>{{ $project->title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/showProject.css') }}" rel="stylesheet" />

</head>

<body>
    <header>
        <h1 class="main-header"> {{ $project->title }} </h1>
        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <input type="text" name="search" placeholder="Search...">
            <button type="submit" class="btn-main">Search</button>
        </form>



    </header>
    <main>
        <form method="POST" action="{{route('home.edit')}}" class="search-bar">
            @csrf
            <input type="hidden" name="pid" value="{{$project->pid}}">
            <label>Title</label>
            <input type="text" name="title" value="{{$project->title}}"> <br>
            <label>Start Date</label>
            <input type="date" name="start_date" value="{{$project->start_date}}"> <br>
            <label>End Date</label>
            <input type="date" name="end_date" value="{{$project->end_date}}"> <br>
            <label>Phase</label>
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
            <button type="submit">Submit</button>
        </form>

        <a href="{{route('home')}}">Return</a>


    <footer>
    </footer>
</body>
