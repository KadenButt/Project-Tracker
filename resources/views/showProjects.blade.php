<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/showProjects.css') }}" rel="stylesheet" />
    <!-- From w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <header>

        <h1 class="main-header" class="obj">Projects</h1>

        <form method="GET" action="{{ route('projectSearch') }}" class="search-bar">
            @csrf
            <div class='search-container'>
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
        <table class="content-table">
            <thead>
                <tr>
                    <th> PID</th>
                    <th> Title</th>
                    <th> Start Date </th>
                    <th> End Date </th>
                    <th> Phase</th>
                    <th> Description </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="active-row">
                        <td> {{ $project->pid }} </td>
                        <td> <a href="{{route('showProject', [$project->id,$project->pid])}}">{{ $project->title }}</a>
                        </td>
                        <td> {{ $project->start_date }} </td>
                        <td> {{ $project->end_date }} </td>
                        <td> {{ $project->phase }} </td>
                        <td>{{ $project->description }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

</body>
