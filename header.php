<header class="header trans_300" id="header">
	<div class="main_nav_container">
		<div class="container">
			<div class="row">
				<div class="navbar_principal col-lg-12 text-right">
					<div class="logo_container">
						<a class="nav-link" data-link="cover_page">
							<img src="assets/images/logo.png" class="mi_logo">
						</a>
					</div>
					<div class="menu">
						<ul class="navbar_menu">
							<li><a class="nav-link" data-link="nosotros_page">Nosotros </a></li>
							<li><a class="nav-link" data-link="section_categorias">Productos</a></li>
							<li><a class="nav-link" data-link="">Cont&aacute;ctanos</a></li>
						</ul>
					</div>
					<nav class="navbar">
						<ul class="navbar_user">
							<li class="checkout">
								<a href="carrito.php">
									<img src="assets/images/icon.png" alt="dog" style="width: 20px;">
									<?php
									echo iconoCarrito($con);
									?>
								</a>
							</li>
						</ul>
						<div class="hamburger_container">
							<i class="bi bi-list"></i>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>


<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
	<div class="hamburger_close"><i class="bi bi-x-lg"></i></div>
	<div class="hamburger_menu_content text-right">
		<ul class="menu_top_nav">
			<li class="menu_item"><a href="./">Nosotros</a></li>
			<li class="menu_item"><a href="./">Productos</a></li>
			<li class="menu_item"><a href="#">Cont&aacute;ctanos</a></li>
		</ul>
	</div>
</div>