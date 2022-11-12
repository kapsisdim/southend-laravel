<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southend Apparel</title>
    <link rel="stylesheet" href="../css/style.css">
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
                        <img src="/storage/images/logo.svg" alt="logo" width="250" class="logo">
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

        <section class="hero">
            <img src="/storage/images/home.png" alt="hero-image">
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
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
