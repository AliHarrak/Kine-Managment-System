<!DOCTYPE html>
<html lang="en">

<style>
    .btn-success {
  color: #000;
  background-color: #00d9a5;
  border-color: #00d9a5; 
  margin-left: 1rem;
  font-size: 0.875rem;

}

</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kine Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
   
</head>

<body style="background-color:#000C ;">
    <nav class="p-6 bg-black flex justify-between mb-6">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class="p-3" style="color: white;">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3" style="color: white;">Dashboard</a>
            </li>
        </ul>
    </div>
    <a class="navbar-brand brand-logo-mini" href="/"><img height="60" width="60" src="{{asset('admin/assets/images/logoKine-mini.png')}}" alt="logo" /></a>

        

        <ul class="flex items-center">

            @auth
            <li>
                <a href="" class="p-3">{{ auth()->user()->username }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post"
                class="p-3 inline">
                    @csrf
                     <button type="submit" style="color: white; background-color: #00d9a5; border-color: #00d9a5;" class="px-4 py-3 rounded 
                font-medium w-full">Logout</button>

                </form>

            </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login') }}" class="btn-lg btn-success rounded p-3" style="color: white;">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="btn-lg btn-success rounded p-3" style="color: white;">Register</a>
            </li>
            @endguest

        </ul>

    </nav>

    @yield('content')
</body>

</html>