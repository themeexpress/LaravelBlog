@extends('master')
@section('home_slider')
<ul id="demo1">
			<li>
				<img src="{{asset('public/frontend/images/1.jpg')}}" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Fashion</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy. </p>
				</div>
			</li>
			<li>
				<img src="{{asset('public/frontend/images/2.jpg')}}" alt="" />
				  <div class="slide-desc">
					<h3>Life Style </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</li>
			<li>
				<img src="{{asset('public/frontend/images/3.jpg')}}" alt="" />
				<div class="slide-desc">
					<h3>Photography</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
				</div>
			</li>
		</ul>
		@endsection