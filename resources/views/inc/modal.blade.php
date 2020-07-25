
<!-- Модлальное окно с формой отправки коментарии -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" 
aria-lablledby="exampleModal"
aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-light bg-dark">
				<h4 class="modal-title ml-3 white-text text-center" id="exampleModalLabel">
					Напистаь коментарии
				</h4>
				<button class="close white-text" data-dismiss="modal" type="button" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<form action="{{ route('form-comment-submit') }}" method="POST">
					@csrf
						<div class="form-froup">
							<label for="title">Тема</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="Тема сообщение">
							@if($errors->has('title'))
								<span class="help-block text-danger">
									{{ $errors->first('title') }}
								</span>
							@endif
						</div>
						<br>
						<div class="form-froup">
							<label for="msg">Коментарие</label>
							<textarea placeholder="Введите ваши коментарии" class="form-control" name="message" id="msg" cols="30" rows="5"></textarea>
							@if($errors->has('message'))
								<span class="help-block text-danger">
									{{ $errors->first('message') }}
								</span>
							@endif
						</div>
						<hr>
						<p class="text-right">
							<button class="btn btn-info" type="submit">Отправить</button>
						</p>
					</form>
				</div>
			</div>

			<div class="modal-footer text-light bg-dark">
				<div class="container">
					<div class="text-center white-text">
						<strong>
							<h5>Your comments</h5>
						</strong>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>