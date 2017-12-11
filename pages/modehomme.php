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
            <h1 class="page-title">Mode Hommes</h1>
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
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/casio1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/casio2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
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
                                <h5 class="product-caption-title">Montre casio pour homme </h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$67</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/nike1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/nike2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">T-shirt NIKE pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$137</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>-30%</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/puma1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/puma2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Basket puma pour homme
                                </h5>
                                <div class="product-caption-price"><span
                                        class="product-caption-price-old">$53</span><span
                                        class="product-caption-price-new">$38</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>hot</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/bottines1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/bottines2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Bottines pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$113</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>4 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-gutter="15">
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/c1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/c2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">ceinture pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$91</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>3 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/pantalon1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/pantalon2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
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
                                <h5 class="product-caption-title">Pontalon pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$78</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>-50%</li>
                                <li>stuff pick</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/sport1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/sport2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">protege de sport pour homme</h5>
                                <div class="product-caption-price"><span
                                        class="product-caption-price-old">$77</span><span
                                        class="product-caption-price-new">$39</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>5 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>hot</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/nike3.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/nike4.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
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
                                <h5 class="product-caption-title">Chaussures nike pour homme de sport</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$15</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>3 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-gutter="15">
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>stuff pick</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/polo1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/polo2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
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
                                <h5 class="product-caption-title">T-shirt POLO pour homme </h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$90</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Free Shipping</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>hot</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/pantalon3.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/pantalon4.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Pontalon de sport pour Homme abercrombie & fitch</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$67</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/festina1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/festina2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Montre festina pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$116</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>-30%</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/v1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/v2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">vetement de sport pour homme adidas</h5>
                                <div class="product-caption-price"><span
                                        class="product-caption-price-old">$58</span><span
                                        class="product-caption-price-new">$41</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-gutter="15">
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/cas1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/caS2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">casquette pour homme adidas</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$107</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>5 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>-50%</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/lun1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/lun2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Lunette RAYBAN sport pour homme </h5>
                                <div class="product-caption-price"><span
                                        class="product-caption-price-old">$79</span><span
                                        class="product-caption-price-new">$40</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>1 left</li>
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels"></ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/cal1.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/cal2.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="product-caption-title">Claquette ipanema pour homme</h5>
                                <div class="product-caption-price"><span class="product-caption-price-new">$64</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product ">
                            <ul class="product-labels">
                                <li>-70%</li>
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="/commerce/pages/img/cal3.png" alt="Image Alternative text"
                                     title="Image Title"/>
                                <img class="product-img-alt" src="/commerce/pages/img/cal4.png" alt="Image Alternative text"
                                     title="Image Title"/>
                            </div>
                            <a class="product-link" href="#"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
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
                                <h5 class="product-caption-title">Claquete havainas pour homme</h5>
                                <div class="product-caption-price"><span
                                        class="product-caption-price-old">$99</span><span
                                        class="product-caption-price-new">$30</span>
                                </div>
                                <ul class="product-caption-feature-list">
                                    <li>Livraison Gratuite</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="category-pagination-sign">58 produits trouvés en vente de téléphones.</p>
                    </div>
                    <div class="col-md-6">

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
