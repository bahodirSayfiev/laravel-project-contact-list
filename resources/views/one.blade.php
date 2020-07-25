@extends('layouts.app')

@section('title-block') СontactList @endsection

@section('content')
	<div class="container one-content width">
		<div class="row">
			<div class="col-lg-3 col-sm-4 col-xs-12 text-center">
				<i class="fa fa-user text-info add-user-icon mb-2"></i>
			</div>
			<div class="col-lg-9 col-sm-8">
				<div class="card">
					<div class="card-header text-light bg-dark text-center">
						<h3>{{ $elem->username }}</h3>
					</div>
					<div class="card-body">
						<p><strong> {{ $elem->user_call }}</strong></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row text-center">
					@if(Auth::check())
					<div class="col-lg-4 col-sm-12 mt-2 p-0">
						<a href="{{ route('add-form') }}" class="btn btn-primary">Создать контакт</a>
					</div>
					<div class="col-lg-4 col-sm-12 mt-2 p-0">
						<a href="{{ route('edit-contact', $elem->id) }}" class="btn btn-success">Редактировать</a>
					</div>
					<div class="col-lg-4 col-sm-12 mt-2 p-0">
						<a href="{{ route('delete-contact', $elem->id) }}" class="btn btn-danger">Удалить контакт</a>
					</div>
					@endif
				</div>
				<div class="text-center">
					<a href="{{ route('all-contact') }}" class="btn mt-4 btn-secondary">Назад</a>
				</div>
			</div>

		</div>
	</div>
@endsection