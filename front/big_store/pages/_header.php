<a href="offer.html"><img src="<?php echo $base_url ?>/assets/images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">

			<div class="logo">
				<?php
				if ($logo->id == 2 && $logo->aktif == 1) {
				?>
				<h1 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
				<?php
				}else{
				?>
				<h1 ><a href="index.html"><img src="<?php echo $base_url ?>/assets/images/logo/<?php echo $logo->file ?>" width="<?php echo $logo->size ?>"></a></h1>
				<?php } ?>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>
			</div>

			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
			</div>


				<div class="nav-top">
					<nav class="navbar navbar-default">

					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.html" class="hyper "><span>Home</span></a></li>

							<?php
							while ($kategori = $menu->fetch(PDO::FETCH_OBJ) ) {
								$id_kategori = $kategori->id;
							?>
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span><?php echo $kategori->kategori ?><b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<?php
										//kolom sub menu
										$jml_sub_menu  = $conn->query("SELECT count(*) FROM rod_kategori_sub where id_kategori='$id_kategori' and id_member='$id_member' and aktif='1'")->fetch();
										$loop_sub_menu = $jml_sub_menu[0]/4;

										$col_sub_menu  = 12/(ceil($loop_sub_menu)+1);

										for ($i=0; $i < ceil($loop_sub_menu) ; $i++) {
											$pembagi = 4;
											$bawah = $jml_sub_menu[0]/$pembagi;
											if ($i == floor($bawah)) {
												$ke = $jml_sub_menu[0]%$pembagi;
											}else{

												$ke = $pembagi;
											}

											$awal = $i*$pembagi;


										?>
										<div class="col-sm-<?php echo $col_sub_menu ?>">
											<ul class="multi-column-dropdown">
												<?php
												$sub_menu = $conn->query("SELECT * FROM rod_kategori_sub where id_kategori='$id_kategori' and id_member='$id_member' and aktif='1' limit $awal,$ke");
												while ($sub_kategori = $sub_menu->fetch(PDO::FETCH_OBJ)) {

												?>
												<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $sub_kategori->sub_kategori ?></a></li>
												<?php

												}
												?>
											</ul>

										</div>
										<?php
										}
										?>

										<div class="col-sm-<?php echo $col_sub_menu ?> w3l">
											<a href="kitchen.html"><img src="<?php echo $base_url ?>/assets/images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<?php

							}

							while ($menu_header = $menu2->fetch(PDO::FETCH_OBJ)) {
							?>
							<li><a href="contact.html" class="hyper"><span><?php echo $menu_header->menu ?></span></a></li>
							<?php } ?>
						</ul>
					</div>
					</nav>
					 <div class="cart" >

						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>

				</div>
</div>
