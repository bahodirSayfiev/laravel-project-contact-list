@extends('layouts.app')

@section('title-block')Контакт-лист@endsection

@section('content')
	<div class="container width">
		<h3 class="text-center m-4">Редактирование</h3>

		<form action="{{ route('update-contact-submit', $edit->id) }}" method="POST">
			@csrf

			<div class="row">
				<div class="col-lg-3 col-sm-4 col-xs-12 text-center">
					<i class="fa fa-user add-user-icon"></i>
				</div>
				<div class="col-lg-9 col-sm-8">
					<div class="form-group">
						<label for="username">Имя</label>
						<input value="{{ $edit->username }}" id="username" name="username" type="text" class="form-control" placeholder="Имя">
						@if($errors->has('username'))
							<span class="help-block text-danger">
								{{ $errors->first('username') }}
							</span>
						@endif
					</div>
					<div class="form-group">
						<label for="number">Телефон</label>
						<input value="{{ $edit->user_call }}" id="number" name="user_call" type="text" class="form-control" placeholder="Номер телефона">
						@if($errors->has('user_call'))
							<span class="help-block text-danger">
								{{ $errors->first('user_call') }}
							</span>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="Email">E-mail адрес</label>
						<input value="{{ $edit->user_email }}" id="Email" name="user_email" type="text" class="form-control" placeholder="E-mail">
						@if($errors->has('user_email'))
							<span class="help-block text-danger">
								{{ $errors->first('user_email') }}
							</span>
						@endif
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="form-group">
						<label for="groupContact">Группа контакта</label>
						<select class="form-control" name="group" id="groupContact">
							<option value="" selected="selected">{{ $edit->group }}</option>
							<option value="Семья">Семья</option>	
							<option value="Друзья">Друзья</option>
							<option value="Работа">Работа</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group text-right">
				<a href="{{ route('one-contact', $edit->id) }}" class="btn btn-secondary">Отмена</a>
				<button type="submit" class="btn btn-info">Редактировать</button>
			</div>
		</form>
	</div>
@endsection