<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
  
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parason Software - Home</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

  <?= $this->Html->css("bootstrap.min.css") ?>
  <?= $this->Html->css("all.min.css") ?>
  <?= $this->Html->css("themify-icons.css") ?>
  <?= $this->Html->css("homeStyle.css") ?>
  <?= $this->Html->css("owl.theme.default.min.css") ?>
  <?= $this->Html->css("owl.carousel.min.css") ?>
  <?= $this->Html->css("font-awesome/css/font-awesome.min.css") ?>
  <?= $this->Html->css("style.css") ?>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h"><?= $this->Html->image("logoArray.png") ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="">Home</a></li> 
              <li class="nav-item">
                <a class="nav-link" <?php echo $this->Html->link(('Products'),['controller' => 'comment', 'action' => 'index']); ?></a></li> 
              <li class="nav-item">
                <a class="nav-link" <?php echo $this->Html->link(('sign in'),['controller' => 'users', 'action' => 'add']); ?></a>
              </li>
            </ul>

            <ul class="navbar-right">
              <li class="nav-item">
                <a class="button bg" <?php echo $this->Html->link(('sign up'),['controller' => 'users', 'action' => 'login']); ?></a>
              </li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <?= $this->Html->image("banner/hero-banner.png") ?>
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Advanced software made simple</h1>
              <p>Vel aliquam quis, nulla pede mi commodo tristique nam hac Luctun torquent velit felis commodo pellentesque nulla cras vel aliqua quisan nulla pede mi commoda</p>
              <a class="button bg" <?php echo $this->Html->link(('sign in'),['controller' => 'users', 'action' => 'add']); ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

  <?= $this->Html->script("jquery-3.2.1.min.js") ?>
  <?= $this->Html->script("bootstrap.bundle.min.js") ?>
  <?= $this->Html->script("owl.carousel.min.js") ?>
  <?= $this->Html->script("jquery.ajaxchimp.min.js") ?>
  <?= $this->Html->script("mail-script.js") ?>
  <?= $this->Html->script("main.js") ?>
</body>
</html>