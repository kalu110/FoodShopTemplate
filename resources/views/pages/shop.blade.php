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
	
	<div class="container-fluid" style="position: relative; padding: 0px;">
		<div class="container-fluid shopHomePage"></div>
		<div class="container shopCategoryMore">
		<div class="row">
			<h2 id="naslovCategoryShopPage">Burgeri</h2>
			<div class="col-lg-3" id="imgCategoryMore">
			<img alt="">

			</div>
			<div class="col-lg-5 p-4">
			<p id="opisCategoryShopPage"></p>
			</div>
			<div class="col-lg-2 iconsShopCateg">
				<div class="text-center">
				<i class="fa-solid fa-clock fa-xl"> </i> <span> 20 - 30min</span></div>
				<div class="text-center"><i class="fa-solid fa-bicycle fa-xl"> </i> <span>Besplatna </span></div> 
			</div>
		</div>

	</div>
	</div>
	<div class="container" style="height:160px;"></div>

	<div class="container-fluid mt-5">
		<div class="row" style="width:96%; margin:auto">
			<div class="col-lg-2">
				@include('layouts.asideCategoryShop')
			</div>
			<div class="col-lg-10">
				<div class="row" id="ispisShopProduct">


		</div>
		</div>
		</div>
	</div>
<script>
	
	let category = <?php echo json_encode($category)?>;
	let product = <?php echo json_encode($product)?>;
</script>
</body>
</html>