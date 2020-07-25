@extends('layouts.app')

@section('title-block')Друзья@endsection

@section('content')
	<div class="container my-3">

		@if(isset($count))
		<h5><p>Друзья ({{ $count }})</p></h5>
		@else
		<h5><p>Друзья (0)</p></h5>
		@endif

		<div class="row">
			@foreach($contacts as $contact)
			<div class="col-12">
				<div class="card pl-4">
					<div class="card-body">
						<div class="row">
							<div class="col-1">
								<i class="fa fa-user-circle"></i>
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
@endsection