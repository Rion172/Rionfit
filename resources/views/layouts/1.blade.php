<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
              <div class="row">
            
            <table class="table col-md-11,5 table-dark">
              <thead>
                <tr>
                  <th scope="col">Training dag</th>
                  <th scope="col">Spiergroepen</th>
                  <th scope="col">Oefeningen</th>
                  <th scope="col">Sets&reps</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>{{$musclegroup[0]}}<br>{{$musclegroup[1]}}<br>{{$musclegroup[5]}}<br>{{$musclegroup[2]}}<br>{{$musclegroup[7]}}<br>{{$musclegroup[6]}}</td>
                  <td>
                      @for ($i = 0; $i < count($chest); $i++)
                          {{$chest[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($shoulders); $i++)
                          {{$shoulders[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($rug); $i++)
                          {{$rug[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($biceps); $i++)
                          {{$biceps[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($triceps); $i++)
                          {{$triceps[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($benen); $i++)
                          {{$benen[$i]}}<br>
                      @endfor
                      @for ($i = 0; $i < count($buik); $i++)
                          {{$buik[$i]}}<br>
                      @endfor
                  </td>
                  <td>{{$sets}} X {{$reps}}</td>
                </tr>
              </tbody>
            </table>
        </div>
            
        </main>
    </div>
</body>
</html>
