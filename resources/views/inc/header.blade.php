<!-- Навигация и шапка сайта -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-bg sticky-top">
	<a href="{{ route('all-contact') }}" class="navbar-brand">
		<h2><strong class="text-decor">ContactList</strong></h2>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item nav-li">
				<a href="{{ route('all-contact') }}" class="nav-link">Все</a>
			</li>
			<li class="nav-item nav-li dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Группы</a>
				<div class="dropdown-menu">
					<a href="{{ route('family') }}" class="dropdown-item">Семья</a>
					<a href="{{ route('frands') }}" class="dropdown-item">Друзья</a>
					<a href="{{ route('jobs') }}" class="dropdown-item">Работа</a>
				</div>
			</li>
		</ul>

		<div class="text-center m-md-0 m-sm-3">
			<form action="/search" method="get">
				<div class="input-group">
					<input name="search" type="search" class="form-control" placeholder="Найти">
					<span class="input-group-prepend">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>		
			</form>
		</div>
		
		<ul class="navbar-nav ml-auto text-right">
			<li class="nav-item">
				<a href="{{ route('signin') }}" class="nav-link">
					Регистрация
				</a>
			</li>
			<li class="nav-item">
				@if(Auth::check())
				<a href="{{ route('logout') }}" class="btn btn-danger">Выход</a>
				@else
				<a href="{{ route('login') }}" class="btn btn-success">
					Вход
				</a>
				@endif
			</li>
		</ul>
	</div>	
</nav>