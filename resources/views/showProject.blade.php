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
        <h3>Made By: {{ $user->username }}<h3>
        <h3>Email: {{ $user->email }}</h3>
        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>



    </header>
    <main>
        <h2> Discription </h2>
        <p>{{ $project->description }} </p>

        <ul>
            <li>Phase {{ $project->phase }}
        </ul>

        <div>
            <p> Start Date: {{ $project->start_date }} </p>
            <p> End Date: {{ $project->end_date ?: 'NA' }} </p>
        </div>


    </main>

    <footer>
        <p> PID:{{ $project->pid }} UID:{{ $project->uid }} </p>
    </footer>
</body>
