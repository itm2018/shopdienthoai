<div class="box-index">
    <div class="row">
    <?php foreach ($dienthoais as $dienthoai): ?>
    <tr>
        <td><?php echo $dienthoai['Dienthoai']['Seri']; ?></td>
        <td>
        <div class="item col-md-3 col-sm-3 col-xs-6">
           <span><a class="thumbnail"><img src="<?php echo $dienthoai->HinhAnh?>"></a></span>
            <h3>
       Seri:<?php echo $dienthoai->Seri?><br> TenDT:<?php echo $dienthoai->TenDT?><br>  Maloai:<?php echo $dienthoai->maloai?><br>
  <a href="#"><?php echo $this->Form->submit('Delete'); 
       echo $this->Form->end();?></a>
       <a href="edit"><?php echo $this->Form->submit('Edit'); 
       echo $this->Form->end();?></a>
     
       </a></h3>

      </div>
            
        </td>
        </td>
    </tr>
    <?php endforeach; ?>
    </div>
</div>