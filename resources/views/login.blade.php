@extends('layouts.app')

@section('title-block') СontactList @endsection

@section('content')
<div class="text-center">
	<div class="form-center">
		<div class="text-center">
			<i class="fa fa-user user-icon"></i>
			<h2>Вход в систему</h2>
		</div>

		@if(session('info'))
			<div class="alert alert-info">
				{{ session('info') }}
			</div>
		@endif

		<form action="{{ route('login-form') }}" method="POST">
			@csrf

			<div class="form-group">
				<div class="row">
					<div class="col-lg-2 col-sm-12">
						<label for="login"><h5>Логин</h5></label>
					</div>
					<div class="col-lg-10 col-sm-12">
						<input class="form-control ml-3" id="login" type="text" name="login" placeholder="Логин">
					</div>
				</div>
				@if($errors->has('login'))
					<span class="help-block text-danger">
						{{ $errors->first('login') }}
					</span>
				@endif
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-2 col-sm-12">
						<label for="password"><h5>Пароль</h5></label>
					</div>
					<div class="col-lg-10 col-sm-12">
						<input class="form-control ml-3" id="password" type="password" name="password" placeholder="Пароль">
					</div>
				</div>
				@if($errors->has('password'))
					<span class="help-block text-danger">
						{{ $errors->first('password') }}
					</span>
				@endif
			</div>
			<div class="form-group">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" name="remember" class="custom-control-input" id="remember">
					<label for="remember" class="custom-control-label">Запомнить меня</label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success mt-2">Войти</button>
				<a href="{{ route('signin') }}" class="btn btn-primary mt-2">Регистрация</a>
			</div>

		</form>
	</div>
</div>
@endsection