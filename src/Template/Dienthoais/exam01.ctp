<div class="box-index">
    <div class="row">
    <?php foreach($dienthoais as $dienthoai):?>
      <div class="item col-md-3 col-sm-3 col-xs-6">
        <span><a href="#" class="thumbnail"><img src="<?php echo $dienthoai->HinhAnh?>"></a></span>
        <h3><a href="#">
        <?php echo $dienthoai->TenDT?><br> <?php echo $this->Number->currency($dienthoai->GiaBan, 'VND')?></a></h3>
      </div>
      <?php endforeach;?>
    </div>
</div>