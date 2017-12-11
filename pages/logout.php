<?php
Login::logout(Login::$_login_front);
header('Location: /commerce?page=index');