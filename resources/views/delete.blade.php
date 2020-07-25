@extends('layouts.app')

@section('title-block')Удалить контакт@endsection

@section('content')
	<div class="container my-3">

		@if(isset($count))
			<h5><p>Количество контактов ({{ $count }})</p></h5>
		@else
			<h5><p>Количество контактов (0)</p></h5>
		@endif
	
		<div class="row">

		@foreach($contacts as $contact)

			<div class="col-12">
				<div class="card pl-4">
					<div class="card-body">
						<div class="row">
							<div class="col-md-1 col-sm-2">
								<i class="fa fa-user-circle"></i>
							</div>
							<div class="col-md-9 col-sm-7">
								<a href="{{ route('one-contact', $contact->id) }}" class="btn btn-default btn-sm"> {{ $contact->username }} </a>
							</div>
							<div class="col-md-2 col-sm-3">
								<a href="{{ route('delete-contact', $contact->id) }}" class="btn btn-danger btn-sm">Удалить</a>
							</div>
						</div>
					</div>	
				</div>
				
			</div>

			@endforeach

		</div>
	</div>
@endsection