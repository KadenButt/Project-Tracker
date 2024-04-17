<!DOCTYPE html>

<head>
    <title>Create Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/showProject.css') }}" rel="stylesheet" />

</head>

<body>
    <header>
        <h1 class="main-header"> Create New Project </h1>
        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <input type="text" name="search" placeholder="Search...">
            <button type="submit" class="btn-main">Search</button>
        </form>



    </header>
    <main>
        <form method="POST" action="{{route('home.create')}}" class="search-bar">
            @csrf
            <label>Title</label>
            <input type="text" name="title" > <br>
            <label>Start Date</label>
            <input type="date" name="start_date" > <br>
            <label>End Date</label>
            <input type="date" name="end_date" > <br>
            <label>Phase</label>
            <select name="phase">
                <option value="design">Design</option>
                <option value="development">Development</option>
                <option value="testing">Testing</option>
                <option value="deployment">Deployment</option>
                <option value="complete">Complete</option>
            </select>  <br>
            <label>Description</label><br>
            <textarea name="description" rows="10" cols="30"></textarea><br>
            <button type="submit">Submit</button>
        </form>

        <a href="{{route('home')}}">Return</a>


    <footer>
    </footer>
</body>
