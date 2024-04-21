<!DOCTYPE html>

<head>
    <title>Create Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/projectForm.css') }}" rel="stylesheet" />

</head>

<body>
    <header>
        <h1 class="main-header"> Create New Project </h1>
        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <div class='search-container'>

                <a href="{{ route('showProjects') }}" class="btn-main">Projects</a>
                @if(Auth::check())
                    <a href="{{ route('home') }}" class="btn-main">{{ Session::get('username') }}</a>
                    <a href="{{ route('logout') }}" class="btn-main">Logout</a>
                @else

                <a href="{{ route('login') }}" class="btn-main">Login</a>
                <a href="{{ route('register') }}" class="btn-main">Register</a>
                <input type="text" name="search"  placeholder="Search...">
                <button type="submit" id='search-submit'  class="btn-main">Search</button>
                @endif

            </div>
        </form>



    </header>
    <main>
        <form method="POST" action="{{route('home.create')}}" class="project-form">
            @csrf
            <label>Title</label> <br>
            <input type="text" name="title" > <br>
            <label>Start Date</label><br>
            <input type="date" name="start_date" > <br>
            <label>End Date</label><br>
            <input type="date" name="end_date" > <br>
            <label>Phase</label><br>
            <select name="phase">
                <option value="design">Design</option>
                <option value="development">Development</option>
                <option value="testing">Testing</option>
                <option value="deployment">Deployment</option>
                <option value="complete">Complete</option>
            </select>  <br>
            <label>Description</label><br>
            <textarea name="description" rows="10" cols="30"></textarea><br>
            <button type="submit" class="btn-main">Submit</button><br>
            <a href="{{route('home')}}">Return</a>
        </form>



    <footer>
    </footer>
</body>
