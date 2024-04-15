<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <!-- From w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <header>
        <h1>Project Manager</h1>
    </header>

    <main>
        <h2>Welcome to Project Manger</h2>
        <form action="{{route('login')}}">
            <button onclick="">Coninue logged in</button>
        </form>

        <form action="{{route('showProjects')}}">
            <button onclick="">Coninue as guess</button>
        </form>
    </main>

</body>
