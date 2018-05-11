<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AquiMarceneiro</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
   	<link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body id="top-page" data-spy="scroll" data-target=".navbar" data-offset="50">
	<header style="background-color: #EEE8AA;">
		<div style="float: right; margin-top: 25px; margin-right: 25px;">
		@if(empty($usuario))
		<form action="{{ route('login') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
       				<input type="email" name="email" placeholder="E-mail" class="form-control" required="true">

       				@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
       			</div>

       			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
       				<input type="password" name="senha" placeholder="Senha" class="form-control" style="margin-top:5px" required="true">

       				@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
       			</div>
       			<button type="submit" class="btn btn-primary" style="width:100%;margin-top:5px">Login</button>
        </form>
        	<a href="{{ route('password.request') }}">Esqueceu a senha ?</a> <a href="/cadastrarUsuario">Cadastre Agora !</a>
        @endif
        </div>
		<div class="" style="width: 100%; height: 150px;">
			<a href="/index"><img src="/img/logo3.png" style="margin-left:15px" height="50" width="300" title="AquiMarceneiro" alt="logo1.png"></a>

        </div>

		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="160" style="background-color: #BDB76B;margin-top: 60px;">
			<div class="navbar-content" >
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="myMenu" style="background-color: #BDB76B;">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="/index" style="color: #8B4513;">Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#servicos" style="color: #8B4513;">Anuncie seu serviço</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#usuario" style="color: #8B4513;">Quem somos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

		@yield('conteudo')

	<!-- FOOTER -->
	<footer >
		<div class="inner">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			</p>
		</div>
	</footer>
</body>
</html>