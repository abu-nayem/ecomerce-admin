@extends('frontend.frontend_master')
@section('content')



	<!-- Terms of use-section -->
	<section class="terms-of-use" style="padding: 3em 0">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l text-center">Privacy Policy
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
					<hr>
				</h3>
				<!-- //tittle heading -->
				

				{!! $privacy->description !!}
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
@endsection