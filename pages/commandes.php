<?php
Login::restrictFront();

$objOrder = new Order();
$orders = $objOrder->getClientOrders(Session::getSession(Login::$_login_front));

$objPaging = new Paging($orders, 5);
$rows = $objPaging->getRecords();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include "includes/header.php"; ?>
</head>
<body>
    <?php include "includes/navbar.php"; ?>
    <div class="container">
        <header class="page-header">
            <h1 class="page-title">Mes commandes</h1>
        </header>
        <div class="row">
            <div class="col-md-10">
                <table class="table table table-shopping-cart">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Total</th>
                        <th>Invoice</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if (!empty($rows)) { ?>

                            <?php foreach($rows as $row) { ?>

                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo Helper::setDate(1, $row['date']); ?></td>
                                    <td>
                                        <?php
                                        $status = $objOrder->getStatus($row['status']);
                                        echo $status['name'];
                                        ?>
                                    </td>
                                    <td class="ta_r">
                                        &pound;<?php echo number_format($row['total'], 2); ?>
                                    </td>
                                    <td class="ta_r">
                                        <?php
                                        if ($row['pp_status'] == 1) {
                                            echo '<a href="/?page=invoice&amp;id=';
                                            echo $row['id'];
                                            echo '" target="_blank">Invoice</a>';
                                        } else {
                                            echo '<span class="inactive">Invoice</span>';
                                        }
                                        ?>
                                    </td>


                                </tr>
                            <?php } ?>

                        </table>

                        <?php echo $objPaging->getPaging(); ?>

                    <?php } else { ?>
                        <p>Vous n'avez actuellement aucune commande.</p>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="gap gap-small"></div>
            </div>
            <div class="col-md-2">
                <ul class="shopping-cart-total-list">
                    <li><span>Subtotal</span><span>$2199</span>
                    </li>
                    <li><span>Shopping</span><span>Free</span>
                    </li>
                    <li><span>Taxes</span><span>$0</span>
                    </li>
                    <li><span>Total</span><span>$2199</span>
                    </li>
                </ul><a class="btn btn-primary" href="#">Checkout</a>
            </div>
        </div>
        <ul class="list-inline">
            <li><a class="btn btn-default" href="#">Continue Shopping</a>
            </li>
            <li><a class="btn btn-default" href="#">Update Bag</a>
            </li>
        </ul>
    </div>
    <div class="gap"></div>




    <?php include "includes/footer.php"; ?>
</body>
</html>