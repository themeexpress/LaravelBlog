	@extends('master')
	@section('home_slider')
	<div class="agile-banner category_banner">
		<img src="{{asset('public/frontend/images/3.jpg')}}" class="img-responsive">
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html">Home</a></li>
				<li class="active">Life Style</li>
			</ol>
		</div>
	</div>
	@endsection