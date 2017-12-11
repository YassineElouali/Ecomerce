<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php require_once "includes/header.php"; ?>

</head>
<body>
<?php require_once "includes/navbar.php"; ?>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
        <h3 class="widget-title">Member Login</h3>
        <p>Welcome back, friend. Login to get started</p>
        <hr />
        <form>
            <div class="form-group">
                <label>Email or Username</label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="text" />
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check" type="checkbox" />Remeber Me</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Sign In" />
        </form>
        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
            </li>
            <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
            </li>
        </ul>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
        <h3 class="widget-title">Create TheBox Account</h3>
        <p>Ready to get best offers? Let's get started!</p>
        <hr />
        <form>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label>Repeat Password</label>
                <input class="form-control" type="text" />
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" />
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Create Account" />
        </form>
        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
            </li>
        </ul>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
        <h3 class="widget-title">Password Recovery</h3>
        <p>Enter Your Email and We Will Send the Instructions</p>
        <hr />
        <form>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" type="text" />
            </div>
            <input class="btn btn-primary" type="submit" value="Recover Password" />
        </form>
    </div>

    <div class="product-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="full-width" src="/commerce/pages/img/Rolex1.png" alt="Image Alternative text" title="Image Title" />
                </div>
                <div class="col-md-6">
                    <ul class="product-page-product-rating">
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p class="product-page-product-rating-sign"><a href="#">238 customer reviews</a>
                    </p>
                    <h1>Montre Rolex Saison été </h1>
                    <p class="product-page-price">$112.99</p>
                    <p class="text-muted text-sm">Livraison Gratuite</p>
                    <p class="product-page-desc-lg">ROLEX Model 2015 premier arrivage</p>
                    <ul class="product-page-option-list">
                        <li class="clearfix">

                        </li>
                        <li class="clearfix">

                        </li>
                    </ul>
                    <ul class="product-page-actions-list">
                        <li class="product-page-qty-item">
                            <button class="product-page-qty product-page-qty-minus">-</button>
                            <input class="product-page-qty product-page-qty-input" type="text" value="1" />
                            <button class="product-page-qty product-page-qty-plus">+</button>
                        </li>
                        <li><a class="btn btn-lg btn-primary" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                        </li>
                        <li><a class="btn btn-lg btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="gap"></div>
    <div class="container">


    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="row row-col-gap" data-gutter="60">
                <div class="col-md-3">
                    <h4 class="widget-title-sm">TheBox Shop</h4>
                    <p>un site de vente des produits, Accessoires...</p>
                    <ul class="main-footer-social-list">
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-pinterest" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-google-plus" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="widget-title-sm">Les tags Populaires</h4>
                    <ul class="main-footer-tag-list">
                        <li><a href="#">Nouvelle saison</a>
                        </li>
                        <li><a href="#">Montres</a>
                        </li>
                        <li><a href="#">Femmes</a>
                        </li>
                        <li><a href="#">classique</a>
                        </li>
                        <li><a href="#">moderne</a>
                        </li>
                        <li><a href="#">bleue</a>
                        </li>
                        <li><a href="#">chaussures</a>
                        </li>
                        <li><a href="#">running</a>
                        </li>
                        <li><a href="#">jeans</a>
                        </li>
                        <li><a href="#">sports</a>
                        </li>
                        <li><a href="#">laptops</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="widget-title-sm">NewsLetter</h4>
                    <form>
                        <div class="form-group">
                            <label>Sign up to the newsletter</label>
                            <input class="newsletter-input form-control" placeholder="Your e-mail address" type="text" />
                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign up" />
                    </form>
                </div>
            </div>
            <ul class="main-footer-links-list">
                <li><a href="#">á propos de nous</a>
                </li>
                <li><a href="#">Métier</a>
                </li>
                <li><a href="#">Légal</a>
                </li>
                <li><a href="#">Support & Service Clients</a>
                </li>
                <li><a href="#">Blog</a>
                </li>
                <li><a href="#">Privé</a>
                </li>
                <li><a href="#">Terms</a>
                </li>
                <li><a href="#">Presse</a>
                </li>
                <li><a href="#">Livraison</a>
                </li>
                <li><a href="#">Paiements & Remboursements</a>
                </li>
            </ul>
            <img class="main-footer-img" src="/commerce/pages/img/test_footer2-i.png" alt="Image Alternative text" title="Image Title" />
        </div>
    </footer>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright &copy; <a href="#">TheBox</a> 2014. Designed my remtsoy. All rights reseved</p>
                </div>
                <div class="col-md-6">
                    <ul class="payment-icons-list">
                        <li>
                            <img src="/commerce/pages/img/payment/visa-straight-32px.png" alt="Image Alternative text" title="Pay with Visa" />
                        </li>
                        <li>
                            <img src="/commerce/pages/img/payment/mastercard-straight-32px.png" alt="Image Alternative text" title="Pay with Mastercard" />
                        </li>
                        <li>
                            <img src="/commerce/pages/img/payment/paypal-straight-32px.png" alt="Image Alternative text" title="Pay with Paypal" />
                        </li>
                        <li>
                            <img src="/commerce/pages/img/payment/visa-electron-straight-32px.png" alt="Image Alternative text" title="Pay with Visa-electron" />
                        </li>
                        <li>
                            <img src="/commerce/pages/img/payment/maestro-straight-32px.png" alt="Image Alternative text" title="Pay with Maestro" />
                        </li>
                        <li>
                            <img src="/commerce/pages/img/payment/discover-straight-32px.png" alt="Image Alternative text" title="Pay with Discover" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/icheck.js"></script>
<script src="js/ionrangeslider.js"></script>
<script src="js/jqzoom.js"></script>
<script src="js/card-payment.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/magnific.js"></script>
<script src="js/custom.js"></script>





</body>

</html>
