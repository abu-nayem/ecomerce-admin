@extends('frontend.frontend_master')
@section('content')
<style type="text/css">
	h3.w3-head {
    color: #FF5722;
    font-size: 35px;
    margin: 0 0 35px 0;
}
.faq-w3agile h5, .privacy-w3row h5 {
    font-size: 20px;
    color: #1e1e1e;
    margin: 16px 0 0;
    letter-spacing: 1px;
}
ul.faq {
    padding-left: 1.5em;
}
.faq-w3agile .faq li {
    margin-top: 2em;
    list-style-type: decimal;
    padding-left: 0.5em;
}
.faq-w3agile .faq > li > a { 
    color: #025061;
    font-size: 17px;
    letter-spacing: 0.5px;
} 
li.subitem1 p {
    line-height: 25px;
    font-size: 14px;
    letter-spacing: 0.5px;
    color: #000;
}
.faq-w3agile .faq li li.subitem1 {
    display: block;
    margin-top: 1em;
} 
</style>
	<!-- FAQ-help-page -->
	<div class="faqs-w3l" style="padding-top: 3em">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center">Faqs
				<hr>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head">Top 10 Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq">
					@foreach($faq as $data)
					<li class="item1">
						<a href="#" title="click here">{{$data->question}}</a>
						<ul>
							<li class="subitem1">
								<p> {!!$data->ans !!}</p>
							</li>
						</ul>
					</li>
					@endforeach
				
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->
@endsection