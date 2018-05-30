<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AquiMarceneiro</title>
    
    <!-- Styles -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css') }}" rel="stylesheet">

   <link rel="stylesheet" href="/gallery-css/gallery.css">
   <link rel="stylesheet" href="/gallery-css/gallery.theme.css">
    
    <script type="text/javascript" src="{{asset('jquery/jquery.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->


</head>
<body>
            
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header" style="padding-bottom:15px; margin-right:50px;">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                           <img src="/img/logoteste.png">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register')}}">Cadastro</a></li>
                            @else
                                <li class="dropdown">


                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
                                        <div class="circle circle-avatar">
                                            <img src="/img/fotoupload/{{ Auth::user()->foto_usuario }}" class="rounded" alt="{{Auth::user()->name}}" />
                                        </div> 
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="/home/minhaConta">
                                                 Minha conta
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        
                @yield('content')
            
        <!-- FOOTER -->


        <footer class="footer">
                    <p>
                       Com o AquiMarceneiros, você que é marceneiro tem maior visibilidade do seu trabalho. E pra quem necessita de<br />algum reparo, ou planeja um móvel novo, o AquiMarceneiros lhe ajuda a encontrar o melhor profissional mais próximo a você
                    </p>
        </footer>   
        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js">
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpAJ6nuKLV3KhTYVsUOY3ZgmEkt9oQKV4&callback=initMap"></script>

</body>
</html>
