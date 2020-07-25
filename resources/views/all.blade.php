@extends('layouts.app')

@section('title-block') СontactList @endsection

@section('content')
	<div class="container mb-4 mt-3">

		@if(isset($count))
			<h5><p>Количество контактов ({{ $count }})</p></h5>
		@else
			<h5><p>Количество контактов (0)</p></h5>
		@endif

		@if(session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif
		
		<div class="row">
			@foreach($contacts as $contact)
			<div class="col-12">
				<div class="card pl-4">
					<div class="card-body">
						<div class="row">
							<div class="col-1">
								<!-- <i class="fa fa-user-circle"></i> -->					
								<i class="icon icon-{{$contact->icons}}">{{ $contact->icons }}</i>
							</div>
							<div class="col-11">
								<a href="{{ route('one-contact', $contact->id) }}" class="btn btn-default ml-2">
									@if(isset($contact->username))
										{{ $contact->username }} 
									@else
										{{ $contact->user_call }}
									@endif
								</a>
							</div>
						</div>
					</div>	
				</div>
			</div>
			
			@endforeach
		
		</div>

	</div>
	<div class="text-center bottom">
		<div class="btn-group">
			<button type="button" data-target="#show" data-toggle="collapse" class="btn btn-warning">
				<i class="fa fa-arrow-down"></i>
			</button>
		</div>
		<div class="btn-group">
			<button class="btn btn-info" type="button" data-toggle="modal" data-target="#loginModal">
				Оставить коментарии
			</button>
		</div>
	</div>
	
	<hr>

	<div id="show" class="collapse text-arraund">

		@foreach($comments as $comment)
			<div class="card">
				<div class="card-body">
					<h5><strong class="mb-1">{{ $comment->title }}</strong></h5>
					<p>{{ $comment->message }}</p>
					<small>{{ $comment->created_at }}</small>
				</div>
			</div>
		@endforeach

		<div class="text-left my-4">
			@if (isset($countComments))
				<strong>Количество коментарии ({{ $countComments }})</strong>
			@else
				<strong>Количество коментарии (0)</strong>
			@endif
		</div>

	</div>

@endsection