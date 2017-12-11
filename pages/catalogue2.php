<?php
$cat = Url::getParam('category');

$rows = [];

if(empty($cat)) {
    require_once("error.php");
} else {

    $objCatalogue = new Catalogue();
    $category = $objCatalogue->getCategory($cat);



    if (empty($category)) {
        require_once("error.php");
    } else {
        $rows = $objCatalogue->getProducts($cat);

// instantiate paging class
        $objPaging = new Paging($rows, 30);
        $rows = $objPaging->getRecords();
    }
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
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php include "includes/navbar.php"; ?>
    <div class="container">
        <header class="page-header">
            <h1 class="page-title"> <?php echo $category['name']; ?> </h1>
            <ol class="breadcrumb page-breadcrumb">
                <li><a href="/commerce?page=index">Acceuil</a>
                </li>
                <li class="active">Electroniques</li>
            </ol>
            <ul class="category-selections clearfix">
                <li>
                    <a class="fa fa-th-large category-selections-icon active" href="#"></a>
                </li>
                <li>
                    <a class="fa fa-th-list category-selections-icon" href="#"></a>
                </li>
                <li><span class="category-selections-sign">Sort by :</span>
                    <select class="category-selections-select">
                        <option selected>Newest First</option>
                        <option>Best Sellers</option>
                        <option>Trending Now</option>
                        <option>Best Raited</option>
                        <option>Price : Lowest First</option>
                        <option>Price : Highest First</option>
                        <option>Title : A - Z</option>
                        <option>Title : Z - A</option>
                    </select>
                </li>
                <li><span class="category-selections-sign">Items :</span>
                    <select class="category-selections-select">
                        <option>9 / page</option>
                        <option selected>12 / page</option>
                        <option>18 / page</option>
                        <option>All</option>
                    </select>
                </li>
            </ul>
        </header>
        <div class="row">
            <div class="col-md-3">
                <aside class="category-filters">
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Category</h3>
                        <ul class="cateogry-filters-list">
                            <li><a href="#">Téléphones</a>
                            </li>
                            <li><a href="#">Tablettes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Prix</h3>
                        <input type="text" id="price-slider"/>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Relese Date</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>Les derniers 30 jours<span
                                    class="category-filters-amount">(59)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>les derniers 90 jours<span
                                    class="category-filters-amount">(29)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>nouvel Arrivage<span
                                    class="category-filters-amount">(20)</span>
                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Marques</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>Apple<span
                                    class="category-filters-amount">(31)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>Samsung<span class="category-filters-amount">(66)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>LG<span
                                    class="category-filters-amount">(71)</span>
                            </label>
                        </div>

                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Réduction</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>10% Off ou plus<span
                                    class="category-filters-amount">(78)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>25% Off ou plus<span
                                    class="category-filters-amount">(26)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>50% Off ou plus<span
                                    class="category-filters-amount">(37)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>75% Off ou plus<span
                                    class="category-filters-amount">(89)</span>
                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Fonctionnalités</h3>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>Nouveau<span
                                    class="category-filters-amount">(75)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>Fonctionnalités<span class="category-filters-amount">(27)</span>
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox"/>En Solde<span class="category-filters-amount">(32)</span>
                            </label>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-md-9">
                <div class="row" data-gutter="15">

                    <?php
                    $loader = new Twig_Loader_Filesystem('../commerce/templates/');

                    $twig = new Twig_Environment($loader);

                    foreach ($rows as $row) {
                            echo '<div class="col-md-3">';
                            echo $twig->render('produit.twig', [
                                'id' => $row['id'],
                                'nom' => $row['name'],
                                'description' => $row['description'],
                                'prix' => $row['price'],
                                'image' => $row['image'],
                                'imageAlt' => $row['image2'],
                                'href' => '/commerce?page=catalogue-item2&id=' . $row['id'],
                                
                            ]);
                            echo '</div>';
                    }
                    ?>
                </div>
<!--                <div class="row" data-gutter="15">-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels"></ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/note41.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/note42.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Samsung Galaxy Note 4 IV 4G FACTORY UNLOCKED Black or-->
<!--                                    White</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$91</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>3 left</li>-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels"></ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/s71.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/s72.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Samsung Galaxy S7 IV 4G FACTORY UNLOCKED Black or-->
<!--                                    White</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$78</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>-50%</li>-->
<!--                                <li>stuff pick</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/iphone4s1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/iphone4s2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Apple iPhone 4S 16GB Factory Unlocked Black and White-->
<!--                                    Smartphone</h5>-->
<!--                                <div class="product-caption-price"><span-->
<!--                                        class="product-caption-price-old">$77</span><span-->
<!--                                        class="product-caption-price-new">$39</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>5 left</li>-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>hot</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/ipadair1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/ipadair2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Ipad Air 1 16 GB 12 Mpx</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$70</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>3 left</li>-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row" data-gutter="15">-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>stuff pick</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/nokia1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/nokia2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Nokia Lumia</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$104</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Free Shipping</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>hot</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/berry1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/berry2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">BlackBerry TORCH 8GB 12 Mpx</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$147</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels"></ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/s61.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/s62.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$116</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>-30%</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/iphone5s1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/iphone5s2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Apple iPhone 5s 16GB Factory Unlocked Smartphone Space-->
<!--                                    Gray / Silver / Gold</h5>-->
<!--                                <div class="product-caption-price"><span-->
<!--                                        class="product-caption-price-old">$58</span><span-->
<!--                                        class="product-caption-price-new">$41</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row" data-gutter="15">-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels"></ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/lgg31.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/lgg32.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">LG G3 VS985 - 32GB - Verizon Smartphone - Metallic-->
<!--                                    Black or Silk White - Great</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$107</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>5 left</li>-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>-50%</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/htc1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/htc2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone Gold /-->
<!--                                    Silver Gray</h5>-->
<!--                                <div class="product-caption-price"><span-->
<!--                                        class="product-caption-price-old">$79</span><span-->
<!--                                        class="product-caption-price-new">$40</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>1 left</li>-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels"></ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/tab1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/tab2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">Lenovo 11.6" Tablette  Notebook (Early 2015)</h5>-->
<!--                                <div class="product-caption-price"><span class="product-caption-price-new">$64</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-3">-->
<!--                        <div class="product ">-->
<!--                            <ul class="product-labels">-->
<!--                                <li>-70%</li>-->
<!--                            </ul>-->
<!--                            <div class="product-img-wrap">-->
<!--                                <img class="product-img-primary" src="img/lgg1.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                                <img class="product-img-alt" src="img/lgg2.png" alt="Image Alternative text"-->
<!--                                     title="Image Title"/>-->
<!--                            </div>-->
<!--                            <a class="product-link" href="#"></a>-->
<!--                            <div class="product-caption">-->
<!--                                <ul class="product-caption-rating">-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                    <li class="rated"><i class="fa fa-star"></i>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <h5 class="product-caption-title">LG G Flex D959 - 32GB - Titan Silver GSM Unlocked-->
<!--                                    Android Smartphone (B)</h5>-->
<!--                                <div class="product-caption-price"><span-->
<!--                                        class="product-caption-price-old">$99</span><span-->
<!--                                        class="product-caption-price-new">$30</span>-->
<!--                                </div>-->
<!--                                <ul class="product-caption-feature-list">-->
<!--                                    <li>Livraison Gratuite</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="row">
                    <div class="col-md-6">
                        <p class="category-pagination-sign"><?php echo count($rows) ?> produits trouvés en vente de téléphones.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>

    <?php include "includes/footer.php"; ?>
</div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php require_once "includes/header.php"; ?>
</head>

</html>
