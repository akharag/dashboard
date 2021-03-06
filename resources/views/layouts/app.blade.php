<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-300">
    <nav class="p-6 bg-white mb-6">
        <ul class="flex justify-end">
            @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>
