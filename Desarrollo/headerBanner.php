<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce Jabobo</title>
    <!-- favicon -->
	<link rel="icon" type="image/x-icon" href="./imagenes/favicon.png">
    <!-- íconos -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&family=Rye&display=swap"
        rel="stylesheet"
    />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <?php
    // require functions.php file
    require ('functions.php');
    ?>
</head>
<body>
<header id="header">
    <!-- header top -->
    <div class="header-div">
        <p id='Europa'>Jacobo 430-895 Europa</p>
        <div>
            <a href="#" class="header-links">Login</a>
            <a href="#" class="header-links">Deseados (0)</a>
        </div>
    </div>
    <!-- nav -->
    <!-- nav -->
    <nav class="nav" id="commerce">
        <a href="#Europa" class="logo nav-link">JACOBO COMMERCE</a>
        <button class="nav-toggle" id="nav-toggle-btn" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu" >
            <li class="nav-menu-item">
            <a href="#en-oferta" class="nav-menu-link nav-link nav-toggle">Categorías</a>
            </li>
            <li class="nav-menu-item">
                <a href="#blogs" class="nav-menu-link nav-link nav-toggle">Blog</a>
            </li>
            <li class="nav-menu-item">
                <a href="#en-oferta" class="nav-menu-link nav-link nav-toggle">Productos</a>
            </li>
            <li class="nav-menu-item">
                <a href="#banner2" class="nav-menu-link nav-link nav-toggle">Moda</a>
            </li>
            <li class="nav-menu-item">
                <a
                    href="#en-oferta"
                    class="nav-menu-link nav-link nav-toggle nav-menu-link_active"
                >Ofertas</a
                >
            </li>
            <li class="nav-menu-item">
                <form action="#">
                    <a href="cart.php" class="carrito-btn">
								<span class="carrito">
									<i class="fas fa-shopping-cart"></i>
								</span>
                        <span class="carrito-nm">1</span>
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    <img src="imagenes/Banner1.png" class="img-banner" alt="Banner1" />
</header>

<main id="main">