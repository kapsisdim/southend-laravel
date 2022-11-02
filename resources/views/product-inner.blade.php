<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southend Apparel</title>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/carousel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
    <div id="overlay">
        <header>
            <div class="container flex">
                <div id="mobile">
                    <i id="bars" class="fa fa-bars"></i>
                </div>
                <div class="header-item">
                    <a href="home.html">
                        <img src="../images/logo.svg" alt="logo" width="250" class="logo">
                    </a>
                </div>
                <div class="justify-self-end flex align-center">
                    <li><a ><i href="search.html" class="fas fa-search"></i></a></li>
                    <li id="cart-container">
                        <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                        <div class="mini-cart font-anek">
                            Your shopping cart is empty!
                        </div>
                    </li>
                </div>
            </div>
            <div class="container flex" id="navbar-desktop">
                <li class="drop-down-button">
                    <a class="active" href="shop.html">SHOP</a>
                    <div class="drop-down">
                        <a href=""><div class="submenu-link">Category 1</div></a>
                        <a href=""><div class="submenu-link">Category 2</div></a>
                        <a href=""><div class="submenu-link">Category 3</div></a>
                        <a href=""><div class="submenu-link">Category 4</div></a>
                    </div>
                </li>
                <li><a href="collections.html">COLLECTIONS</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </div>
        </header>

        <section class="main-container">
            <div class="container bg-black">
                <div class="teaser">
                    <div class="splide">
                        <div class="splide__track" id="splide-track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="../images/products_dummy/1.jpeg" alt="image1">
                                </li>

                                <li class="splide__slide">
                                    <img src="../images/products_dummy/2.jpeg" alt="image2">
                                </li>

                                <li class="splide__slide">
                                    <img src="../images/products_dummy/3.jpeg" alt="image3">
                                </li>

                                <li class="splide__slide">
                                    <img src="../images/products_dummy/4.jpeg" alt="image4">
                                </li>

                            </ul> <!-- /.splide__list -->
                        </div> <!-- /.splide__track -->
                    </div> <!-- /.splide -->
                    <div id="description">
                        <div class="protitle">
                            <h1>TITLE 1</h1>
                            <h6 class="font-anek">SKU: 12345</h6>
                        </div>

                        <div class="price">$20.00</div>

                        <div class="font-anek">
                            <form action="" id="cart-form">
                                <h3 class="pro-form">Select Size</h3>
                                <div class="selector">
                                    <div class="selecotr-item">
                                        <input type="radio" name="size" id="S" value="S" class="selector-item_radio">
                                        <label class="selector-item_label" for="S">S</label>
                                    </div>
                                    <div class="selecotr-item">
                                        <input type="radio" name="size" id="M" class="selector-item_radio" value="M">
                                        <label class="selector-item_label" for="M">M</label>
                                    </div>
                                    <div class="selecotr-item">
                                        <input type="radio" name="size" id="L" class="selector-item_radio"value="L">
                                        <label class="selector-item_label" for="L">L</label>
                                    </div>
                                    <div class="selecotr-item">
                                        <input type="radio" name="size" id="XL" class="selector-item_radio"value="XL">
                                        <label class="selector-item_label" for="XL">XL</label>
                                    </div>
                                </div>
                                <h3 class="pro-form">Quantity</h3>
                                <div class="wrapper">
                                    <h3 class="input-button remove">-</h3>
                                    <input type="number" value="1" name="quantity" id="quantity">
                                    <h3 class="input-button add">+</h3>
                                </div>
                                <button class="btn"><span>Add to cart</span></button>
                            </form>
                        </div>

                        <p class="font-anek">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quaerat doloribus nesciunt amet, laboriosam vero deleniti cum dolorem similique cupiditate ipsa totam pariatur voluptatum fuga harum asperiores qui. Facilis, quam.</p>

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <div class="flex justify-space-between social-con font-anek">
                <h3 class="center">SOUTHEND APPAREL</h3>
                <div id="social-media" class="flex justify-center">
                    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/southend_apparel/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                </div>
            </div>
            <div class="font-anek center">Omirou 3, Argyroupoli</div>
            <div class="font-anek border-bottom center">Athens 16451</div>
            <div class="flex justify-space-between footer-sitemap">
                <h6 class="font-anek">@ SOUTHEND APPAREL 2022</h6>
                <ul id="footer-menu" class="flex font-anek">
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="terms.html">TERMS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <div class="container flex" id="navbar-mobile">
        <li>
            <h3>MENU</h3>
            <i id="close" class="fas fa-times"></i>
        </li>
        <li><a href="shop.html">SHOP</a></li>
        <li><a href="collections.html">COLLECTIONS</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </div>

    <script src="../src/js/index.js"></script>
    <script src="../src/js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.15/dist/js/splide.min.js"></script>
</body>
</html>
