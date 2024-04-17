<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/welcome.css') }}" rel="stylesheet" />
    <!-- From w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <header>
        <h1>Project Manager</h1>
    </header>

    <main>

        <div class="centre">
            <h1>Welcome to Project Manger</h1>
        </div>

        <div class="button-container">
            <form action="{{route('login')}}">
                <button class="btn-main" >Coninue logged in</button>
            </form>

            <form action="{{route('showProjects')}}">
                <button class="btn-main" >Coninue as guess</button>
            </form>
        </div>

    </main> 

</body>
