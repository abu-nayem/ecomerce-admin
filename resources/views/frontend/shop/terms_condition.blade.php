@extends('frontend.frontend_master')
@section('content')
	<style type="text/css">
		.terms h5 {
		    margin-top: 10px;
		    font-size: 21px;
		    letter-spacing: 1px;
		    color: #ff5a5a;
		    padding-bottom: 2em;
		}
	</style>
	<!-- Terms of use-section -->
	<section class="terms-of-use" style="padding: 3em 0">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l text-center">Terms & Condition
					<hr>
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<h5>PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY .</h5>
				{!! $terms->description !!}
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
@endsection