@extends('layouts.app')

@section('title-block') СontactList @endsection

@section('content')
<div class="container width">
	<div class="container-fluid">

		<form action="{{ route('register-form') }}" method="post">
			@csrf

			<div class="bg-light border p-4">
				<h3 class="text-center mb-4 text-primary">
					<i class="fa fa-user"></i>
					<strong>Регистрация</strong>
				</h3>

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="firstName">Имя</label>
							<input type="text" name="first_name" class="form-control" id="firstName" placeholder="Ваше имя">
							@if($errors->has('first_name'))
								<span class="help-block text-danger">
									{{ $errors->first('first_name') }}
								</span>
							@endif
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="lastName">Фамилия</label>
							<input type="text" name="last_name" class="form-control" id="lastName" placeholder="Фамилия">
							@if($errors->has('last_name'))
								<span class="help-block text-danger">
									{{ $errors->first('last_name') }}
								</span>
							@endif
						</div>
					</div>
					<div class="col-12">
						<div class="form-froup mb-3">
							<label for="tel">Номер телефона</label>
							<input type="text" name="call" class="form-control" id="tel" placeholder="Ваше номер телефлна">
							@if($errors->has('call'))
								<span class="help-block text-danger">
									{{ $errors->first('call') }}
								</span>
							@endif
						</div>
						<div class="form-froup mb-3">
							<label for="login">Логин</label>
							<input type="text" name="login" class="form-control" id="login" placeholder="Ваш логин">
							@if($errors->has('login'))
								<span class="help-block text-danger">
									{{ $errors->first('login') }}
								</span>
							@endif
						</div>
						<div class="form-froup mb-3">
							<label for="email">E-mail</label>
							<input name="email" type="text" class="form-control" id="email"placeholder="E-mail адрес">
							@if($errors->has('email'))
								<span class="help-block text-danger">
									{{ $errors->first('email') }}
								</span>
							@endif
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="pass">Пароль</label>
							<input name="password" type="password" class="form-control" id="pass" placeholder="Ваш пароль">
							@if($errors->has('password'))
								<span class="help-block text-danger">
									{{ $errors->first('password') }}
								</span>
							@endif
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="pass">Поттвердить пароль</label>
							<input name="password_confirmation" type="password" class="form-control" id="pass" placeholder="поттвердить пароль">
							@if($errors->has('password_confirmation'))
								<span class="help-block text-danger">
									{{ $errors->first('password_confirmation') }}
								</span>
							@endif
						</div>
					</div>			
					<div class="col-md-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="date_of_birth">Дата раждение</label>
							<input type="date" name="date_of_birth" class="form-control" id="date_of_birth">
							@if($errors->has('date_of_birth'))
								<span class="help-block text-danger">
									{{ $errors->first('date_of_birth') }}
								</span>
							@endif
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="form-froup mb-3">
							<label for="city">Город</label>
							<select class="form-control" name="city" id="city">
								<option value="" selected="selected"></option>
								<option value="Таджикистан">Таджикистан</option>
								<option value="Россия">Россия</option>
								<option value="Америка">Америка</option>
								<option value="Китай">Китай</option>
							</select>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			<p class="text-right">
				<button class="btn btn-primary" type="submit">Выполнить</button>
				<a href="{{ route('all-contact') }}" class="btn btn-secondary">Отмена</a>
			</p>
		</form>
	</div>
</div>
@endsection