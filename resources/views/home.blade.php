<!DOCTYPE html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/showProjects.css') }}" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>Home Page</h1>
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
        <h2>My Projects</h2>
        <table class="content-table">
            <thead>
                <tr>
                    <th> PID</th>
                    <th> Title</th>
                    <th> Start Date </th>
                    <th> End Date </th>
                    <th> Phase</th>
                    <th> Discription </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="active-row">
                        <td> {{ $project->pid }} </td>
                        <td> <a
                                href="{{ route('showProject', [$project->id, $project->pid]) }}">{{ $project->title }}</a>
                        </td>
                        <td> {{ $project->start_date }} </td>
                        <td> {{ $project->end_date }} </td>
                        <td> {{ $project->phase }} </td>
                        <td>{{ $project->description }} </td>
                        <td><a href="{{ route('home.editProject', $project->pid) }}" class="btn-main">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
    </main>

    <footer>
    </footer>
</body>
