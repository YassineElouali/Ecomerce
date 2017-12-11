<?php
$id = Url::getParam('id');
$product = null;
if (!empty($id)) {

    $objCatalogue = new Catalogue();
    $product = $objCatalogue->getProduct($id);
}

?>

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
            <?php
           

            echo $twig->render('produit-details.twig', [
                'nom' => $product['name'],
                'prix' => $product['price'],
                'description' => $product['description'],
                'image' => $product['image'],
                'rel' => Basket::activeButton($product['id'])['rel'],
                'label' => Basket::activeButton($product['id'])['label']
            ]);
            ?>
        </div>
    </div>

    <div class="gap"></div>
    <div class="container">


    </div>

    <?php include "includes/footer.php" ?>


</body>

</html>

