
<?php 

include("bd/conexion.php");



/*$_SESSION["usuario"]*/

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/b7780524f2.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <link rel="stylesheet" href="css/main.css">
        <!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
        <title>Sistema de Ventas</title>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>

	<?php 
    require_once 'bd/conexion.php';
	?>

	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-map"></i> Proyecto Final Desarrollo Web</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> Saldo</a></li>
						<li><a href="login.php"><i class="fa fa-user-o"></i> Mi Cuenta</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Categorias</option>
									<?php
										$sql = "SELECT * FROM categoria ";
										$result = $conex->query($sql);

										while($row = mysqli_fetch_array($result)){ ?>

											<option value="0"><?php echo $row["descripcion_categoria"]."" ?></option>
									<?php
										}
									?>
										
										
									</select>
									<input class="input" placeholder="Buscar">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Mis Compras</span>
										<div class="qty">0</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Principal</a></li>
						<li><a href="#">Popular</a></li>
						<li><a href="#">Categorias</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Telefonos</a></li>
						<li><a href="#">Camaras</a></li>
						<li><a href="#">Accesorios</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Tecnologia<br></h3>
								<a href="#" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Hogar<br></h3>
								<a href="#" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Bebidas<br></h3>
								<a href="#" class="cta-btn">Comprar <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Agregados Recientemente</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
<!-- 									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li> -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
											<?php

												$sqlproducto = "SELECT * FROM producto ";
												$producto = $conex->query($sqlproducto);
												

												for($i=0; $i < 6; $i++){
													$arrayproducto = mysqli_fetch_array($producto);?>
											<div class="product">
												<div class="product-img">
													<img src="data:image/png;base64, <?php echo base64_encode($arrayproducto['img']); ?>" alt="">
													<div class="product-label">
														<span class="new">Nuevo</span>
													</div>
												</div>

												<div class="product-body">
													<p class="product-category"></p>
													<h3 class="product-name"><a href="#"><?php echo $arrayproducto["nombre_producto"]; ?></a></h3>
													<h4 class="product-price"><?php echo "S/ ".$arrayproducto["precio"]; ?><del class="product-old-price"></del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista Previa</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Carrito</button>
												</div>
											</div>

											
											<?php
												}							
											?>

										<!-- /product -->

										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mas Vendidos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<!-- <li class="active"><a data-toggle="tab" href="#tab2">Tecnologia</a></li>
									<li><a data-toggle="tab" href="#tab2">Hogar</a></li>
									<li><a data-toggle="tab" href="#tab2">Bebidas</a></li>
									<li><a data-toggle="tab" href="#tab2">Herramientas</a></li> -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->

										<?php

											$sqlproductotop = "SELECT * FROM producto WHERE stock < 15 ";
											$productotop = $conex->query($sqlproductotop);
												
											while($arrayproductotop = mysqli_fetch_array($productotop)){
										?>
											<div class="product">
											<div class="product-img">
												<img src="data:image/png;base64, <?php echo base64_encode($arrayproductotop['img']); ?>" alt="">
												<div class="product-label">
													<!-- <span class="sale"></span> -->
													<span class="new">TOP</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"></p>
												<h3 class="product-name"><a href="#"><?php echo $arrayproductotop["nombre_producto"]; ?></a></h3>
												<h4 class="product-price"><?php echo "S/ ".$arrayproductotop["precio"]; ?><del class="product-old-price"></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista Previa</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Carrito</button>
											</div>
										</div>

										<?php
											}							
										?>

										
										<!-- /product -->

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Tecnologia</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							
						<?php

							$sqlproductotec = "SELECT * FROM producto WHERE id_categoria = 3 ";
							$productotec = $conex->query($sqlproductotec);
						?>

							<div>
								<!-- product widget -->

								
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductotec = mysqli_fetch_array($productotec)
								?>

									<div class="product-widget">
										<div class="product-img">
											<img src="data:image/png;base64, <?php echo base64_encode($arrayproductotec['img']); ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="#"><?php echo $arrayproductotec["nombre_producto"]; ?></a></h3>
											<h4 class="product-price"><?php echo "S/ ".$arrayproductotec["precio"]; ?><del class="product-old-price"></del></h4>
										</div>
									</div>

								<?php 
									} 
								?>
								<!-- /product widget -->
	
							</div>

							<div>
								<!-- product widget -->

								
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductotec = mysqli_fetch_array($productotec)
								?>

									<div class="product-widget">
										<div class="product-img">
											<img src="data:image/png;base64, <?php echo base64_encode($arrayproductotec['img']); ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="#"><?php echo $arrayproductotec["nombre_producto"]; ?></a></h3>
											<h4 class="product-price"><?php echo "S/ ".$arrayproductotec["precio"]; ?><del class="product-old-price"></del></h4>
										</div>
									</div>

								<?php 
									} 
								?>
								<!-- /product widget -->
	
							</div>

						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Hogar</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">

						<?php

							$sqlproductohogar = "SELECT * FROM producto WHERE id_categoria = 4 ";
							$productohogar = $conex->query($sqlproductohogar);
						?>
							<div>
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductohogar = mysqli_fetch_array($productohogar)
								?>
							
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="data:image/png;base64, <?php echo base64_encode($arrayproductohogar['img']); ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="#"><?php echo $arrayproductohogar["nombre_producto"]; ?></a></h3>
										<h4 class="product-price"><?php echo "S/ ".$arrayproductohogar["precio"]; ?><del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->


								<?php 
									} 
								?>
								<!-- product widget -->
							</div>
							<div>
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductohogar = mysqli_fetch_array($productohogar)
								?>
							
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="data:image/png;base64, <?php echo base64_encode($arrayproductohogar['img']); ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"></p>
										<h3 class="product-name"><a href="#"><?php echo $arrayproductohogar["nombre_producto"]; ?></a></h3>
										<h4 class="product-price"><?php echo "S/ ".$arrayproductohogar["precio"]; ?><del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->


								<?php 
									} 
								?>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Herramientas</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">

						<?php

							$sqlproductoHerra = "SELECT * FROM producto WHERE id_categoria = 5 ";
							$productoHerra = $conex->query($sqlproductoHerra);
						?>

							<div>
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductoHerra = mysqli_fetch_array($productoHerra)
								?>
									<!-- product widget -->
									<div class="product-widget">
										<div class="product-img">
											<img src="data:image/png;base64, <?php echo base64_encode($arrayproductoHerra['img']); ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="#"><?php echo $arrayproductoHerra["nombre_producto"]; ?></a></h3>
											<h4 class="product-price"><?php echo "S/ ".$arrayproductoHerra["precio"]; ?><del class="product-old-price"></del></h4>
										</div>
									</div>
									<!-- /product widget -->

								<?php 
									} 
								?>

							
							</div>

							<div>
								<?php			
									for($i = 0; $i<3; $i++){
										$arrayproductoHerra = mysqli_fetch_array($productoHerra)
								?>
									<!-- product widget -->
									<div class="product-widget">
										<div class="product-img">
											<img src="data:image/png;base64, <?php echo base64_encode($arrayproductoHerra['img']); ?>" alt="">
										</div>
										<div class="product-body">
											<p class="product-category"></p>
											<h3 class="product-name"><a href="#"><?php echo $arrayproductoHerra["nombre_producto"]; ?></a></h3>
											<h4 class="product-price"><?php echo "S/ ".$arrayproductoHerra["precio"]; ?><del class="product-old-price"></del></h4>
										</div>
									</div>
									<!-- /product widget -->

								<?php 
									} 
								?>

							
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Enterate de las <strong>OFERTAS</strong> antes que que los demas</p>
							<form>
								<input class="input" type="email" placeholder="Ingresa tu correo">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribirme</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

	<?php
		include_once 'library/footer.php';
	?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
