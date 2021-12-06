
<?php 

require("../bd/conexion.php");

/*$_SESSION["usuario"]*/

?>

<!DOCTYPE html>
<html lang="en">
	

	<?php 
		include_once '../library/head_cliente.php';
	?>

	<body>
		
	<?php

		include_once '../library/header_cliente.php';

	?>

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
								<img src="../img/shop01.png" alt="">
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
								<img src="../img/shop03.png" alt="">
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
								<img src="../img/shop02.png" alt="">
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
		include_once '../library/footer.php';
	?>

		<!-- jQuery Plugins -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/slick.min.js"></script>
		<script src="../js/nouislider.min.js"></script>
		<script src="../js/jquery.zoom.min.js"></script>
		<script src="../js/main.js"></script>

	</body>
</html>
