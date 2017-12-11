<?php

if (Login::isLogged(Login::$_login_front)) {
    Helper::redirect(Login::$_dashboard_front);
}

$objForm = new Form();
$objValid = new Validation($objForm);
$objUser = new User();


// login form
if ($objForm->isPost('login_email')) {
    if (
    $objUser->isUser(
        $objForm->getPost('login_email'),
        $objForm->getPost('login_password')
    )
    ) {
        Login::loginFront($objUser->_id, Url::getReferrerUrl());
    } else {
        $objValid->add2Errors('login');
    }
}


// registration form
if ($objForm->isPost('first_name')) {

    $objValid->_exptected = array(
        'first_name',
        'last_name',
        'address_1',
        'address_2',
        'town',
        'county',
        'post_code',
        'country',
        'email',
        'password',
        'confirm_password'
    );

    $objValid->_required = array(
        'first_name',
        'last_name',
        'address_1',
        'post_code',
        'country',
        'email',
        'password',
        'confirm_password'
    );

    $objValid->_special = array(
        'email' => 'email'
    );

    $objValid->_post_remove = array(
        'confirm_password'
    );

    $objValid->_post_format = array(
        'password' => 'password'
    );


    // validate password
    $pass_1 = $objForm->getPost('password');
    $pass_2 = $objForm->getPost('confirm_password');

    if (!empty($pass_1) && !empty($pass_2) && $pass_1 != $pass_2) {
        $objValid->add2Errors('password_mismatch');
    }


    $email = $objForm->getPost('email');
    $user = $objUser->getByEmail($email);

    if (!empty($user)) {
        $objValid->add2Errors('email_duplicate');
    }


    if ($objValid->isValid()) {

        // add hash for activating account
        $objValid->_post['hash'] = mt_rand() . date('YmdHis') . mt_rand();
        // add registration date
        $objValid->_post['date'] = Helper::setDate();


        if ($objUser->addUser($objValid->_post, $objForm->getPost('password'))) {
            Helper::redirect('/commerce/?page=registered');
        } else {
            Helper::redirect('/commerce/?page=registered-failed');
        }

    } else {
        echo "Il y'a eu des erreurs. <br>" ;
    }

}
?>

<!DOCTYPE HTML>
<html>
<title>Enreg</title>
<?php include "includes/header.php"; ?>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">

    <?php include "includes/navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <header class="page-header">
                    <h1 class="page-title">Mon compte</h1>
                </header>
                <div class="box-lg">
                    <div class="row" data-gutter="60">
                        <div class="col-md-6">
                            <h3 class="widget-title">Se connecter</h3>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="login_email"/>

                                </div>
                                <div class="form-group">
                                    <label>Mot de Passe</label>
                                    <input class="form-control" type="text" name="login_password"/>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox"/>Remember me</label>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Sign in"/>
                            </form>
                            <br/><a href="#">Mot de passe oubliés?</a>
                        </div>


                        <div class="col-md-6">
                            <h3 class="widget-title">Créer un Compte</h3>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input name="last_name" class="form-control" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input name="first_name" class="form-control" type="text"/>
                                    <?php echo $objValid->validate('first_name'); ?>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email"/>
                                    <?php echo $objValid->validate('email'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="form-control" type="text" name="password"/>
                                    <?php echo $objValid->validate('password'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Confirmer Mot de Passe</label>
                                    <input class="form-control" type="text" name="confirm_password"/>
                                    <?php echo $objValid->validate('confirm_password'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Adresse 1</label>
                                    <input class="form-control" type="text" name="address_1"/>
                                    <?php echo $objValid->validate('address_1'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Adresse 2</label>
                                    <input class="form-control" type="text" name="address_2"/>
                                    <?php echo $objValid->validate('address_2'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input class="form-control" type="text" name="country"/>
                                    <?php echo $objValid->validate('country'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Code postale</label>
                                    <input class="form-control" type="text" name="post_code"/>
                                    <?php echo $objValid->validate('post_code'); ?>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input class="i-check" type="checkbox"/>Se connecter au Newsletter</label>
                                </div>
                                <input class="btn btn-primary" type="submit" value="Create Account"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>

    <?php include "includes/footer.php"; ?>


</body>

</html>
<th>
    <label for="town">Town: *</label>
</th>
