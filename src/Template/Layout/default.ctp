<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('logo') ?>
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('dienthoai') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

  <body>
 
   <body>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.js"></script>
    <link href="logo.css" rel="stylesheet">
    <header>
  <div class="container">
    <div class="row">
      <div class="logo col-md-6 col-sm-6 col-xs-12"><h1><a href="/"><img src="/img/logo.png"></a></h1></div>
      <div class="search col-md-6 col-sm-6 col-xs-12 text-right">
        <form method="get" action="#">
          <input type="text" placeholder="Nhập từ khóa tìm kiếm" id="q" name="q" value="">
          <input type="submit" value="Tìm Kiếm">
        </form>
      </div>
      <div class="clearfix"></div>
    </div>
    <?php echo $this->element('header')?>
    </div>
  </div>
</header>
<div id="wrapper">
  <div class="container">
    <div class="row">
     
 
      </div>
    </div>
  </div>
</div>
<div class="content col-md-9 col-sm-9 col-xs-12">
    <div class="flash-message">
        <?php
        //de o tren cho de thay
        echo $this->Flash->render()
        ?>
    </div>
  <?php echo $this->fetch('content');?>

  </div>
</div>
<div class="sidebar col-md-3 col-sm-3 col-xs-12">
  <div class="sidebar-item">
    <div class="textwidget">
    <a href="#"><img src="/img/462x462-samsang-galaxy-a7.jpg"></a>  
    </div>
  </div>
   <div class="sidebar-item" >
    <h4 class="widget-title"></h4>
    <div class="textwidget" > <a href="#"> <img src="/img/fbdbcadc886a6222710e18c84108f573.jpg"></a>
    </div>
  <div class="sidebar-item" >
    <h4 class="widget-title"></h4>
    <div class="textwidget" > <a href="#"> <img src="/img/7cb2c3fda0d5f5a9bdcdda100c884755.jpg"></a>
    </div> 
  </div>
</div>
<?php echo $this->element('footer')?>
</body>

</html>
