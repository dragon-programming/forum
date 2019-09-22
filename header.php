<?php
/**
 * The header section of our theme. It c
 * 
 * @package Dragon Forum
 * @author  Bin Emmanuel https://github.com/binbryan
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/dragon-programming/forum
 * 
 * @version	1.0
 */

 // Include our configurations.
require 'libs/config.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php if(!empty($page_title)): ?>
        <title><?= $page_title ?> | Dragon Programming Forum</title>
    
    <?php else: ?>
        <title>Dragon Programming Forum</title>

    <?php endif ?>

    <!-- CSS files -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/ck.css">
    <link rel="shortcut icon" type="image/jpg" href="favicon.jpg" />

    <!-- JS files -->
    <script src="assets/js/main.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Text editor -->
    <script src="assets\ckeditor\ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script> -->
    
</head>

<body>
    <header class="header-section col-md-12">
        <div class="row">
            <div class="logo col-md-1">
                <a href="index.php">
                    <img src="assets/images/logo.jpg" alt="Logo">
                </a>
            </div>

            <?php
            // Include our main menu.
            include_once 'menu.php';
            ?>
        </div>

        <?php
        // Include our main menu.
        include_once 'mobile-nav-menu.php';
        ?>

    </header>

    <!-- .container -->
    <main class="container">
        <!-- .main-content -->
        <div class="main-content row">