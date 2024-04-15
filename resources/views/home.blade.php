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
                        <td> <a href="{{URL("project")}}/{{ $project->id }}/{{$project->pid}}">{{ $project->title }}</a>
                        </td>
                        <td> {{ $project->start_date }} </td>
                        <td> {{ $project->end_date }} </td>
                        <td> {{ $project->phase }} </td>
                        <td>{{ $project->description }} </td>
                        <td><a href="{{URL("home")}}/{{$project->pid}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
    </main>

    <footer>
        <a href="{{URL("home")}}/create">Create new project</a>

    </footer>
</body>
