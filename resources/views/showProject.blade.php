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
            <div class='search-container'>

                <a href="{{ route('showProjects') }}" class="btn-main">Projects</a>
                @if(Auth::check())
                    <a href="{{ route('home') }}" class="btn-main">{{ Session::get('username') }}</a>
                    <a href="{{ route('logout') }}" class="btn-main">Logout</a>
                @else

                <a href="{{ route('login') }}" class="btn-main">Login</a>
                <a href="{{ route('register') }}" class="btn-main">Register</a>
                @endif
                <input type="text" name="search"  placeholder="Search...">
                <button type="submit" id='search-submit'  class="btn-main">Search</button>

            </div>
        </form>
    </header>

    <main>
        <h3>Made By: {{ $user->username }}<h3>
        <h3>Email: {{ $user->email }}</h3>
        <div class="description">
            <h2> Description </h2>
            <p>{{ $project->description }} </p>
        </div>


        <div>
            <p> Phase: {{ $project->phase }} </p>
            <p> Start Date: {{ $project->start_date }} </p>
            <p> End Date: {{ $project->end_date ?: 'NA' }} </p>
        </div>


    </main>

    <footer>
        <p> PID:{{ $project->pid }} UID:{{ $project->uid }} </p>
    </footer>
</body>
