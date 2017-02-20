<div class="box-index">
    <div class="row">
       <table class="table table-responsive">
           <tr>
               <th>Hinh</th>
               <th>Seri</th>
               <th>Maloai</th>
               <th>TenDT</th>
               <th>Xoa</th>
               <th>Sua</th>
           </tr>
           <?php foreach ($dienthoais as $dienthoai): ?>
               <tr>
                   <td><span><a class="thumbnail"><img src="<?php echo $dienthoai->HinhAnh?>"></a></span></td>
                   <td><?php echo $dienthoai->Seri?></td>
                   <td><?php echo $dienthoai->maloai?></td>
                   <td><?php echo $dienthoai->TenDT?></td>
                   <td>
                       <!--tao form delete-->
                       <?php
                       echo $this->Form->create('DienThoai',array('url'=>array('controller'=>'dienthoais', 'action'=>'delete')));
                       echo $this->Form->hidden('Seri',array('value'=> $dienthoai->Seri));
                       echo $this->Form->submit('Delete', array('class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn có muốn xóa không?")'));
                       echo $this->Form->end();
                       ?>
                   </td>
                   <td><a href="<?php echo $this->Url->build(array('controller'=>'dienthoais','action'=>'edit', 'Seri'=>$dienthoai->Seri))?>"><button type="button" class="btn btn-default"><?php echo __('Edit')?></button> </a> </td>
               </tr>
           <?php endforeach; ?>
       </table>
    </div>
</div>