<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	  @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<body>
@include('layouts.navMain')
	
	<div class="container-fluid indexHomePage">
	</div>

	<div class="container">
		<div class="row CategoryIndexSection">

			@php
				$catRandom = array_rand($category, 4);
			@endphp
			@foreach ($catRandom as $c)
					
					<div class="col-3">
				<div class="row cardCategoryIndex">
					<div class="col-12">
						<img src="{{asset('storage/image/'.$c->imageCategory)}}" alt="">
					</div>

					<div class="col-12">
						<h5 class="px-3">{{$c->nameCategory}}</h5>
					</div>
				</div>
			</div>


			@endforeach


			
			
		</div>
	</div>
</body>
</html>