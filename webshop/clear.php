<?php
/**
 * Created by PhpStorm.
 * User: kevingeurts
 * Date: 2019-09-23
 * Time: 22:43
 */
session_start();
session_destroy();
echo "succes";
 header('Location: cart.php');
?>