
   <footer class="footer-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<div class="text-left-md text-center-sm">
						&copy; 2020 | СontactList
					</div>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="text-right-md text-center-sm ">
						@if(Auth::check())
						<div class="btn-group">
							<a href="{{ route('add') }}" class="btn btn-primary">Создать контакт</a>
						</div>
						<div class="btn-group">
							<a href="{{ route('delete-page-contact') }}" class="btn btn-danger">Удалить</a>
						</div>
						@endif
						<div class="btn-group">
							<a href="{{ route('all-contact') }}" class="btn btn-dark">
								<i class="fa fa-arrow-left"></i>
							</a>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- SCRIPTS JS AND JQUERY -->
	<script src="/js/jquery-3.4.1.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/popper.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/all.min.js"></script>
	<script src="/js/main.js"></script>