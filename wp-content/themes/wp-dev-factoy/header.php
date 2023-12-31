<?php
/**
 *  Header File
 * 
 * @package wp-dev-factory
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(""); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav'); ?>
        </header>
        <div id="content" class="site-content">
            
        </div>
    </div>