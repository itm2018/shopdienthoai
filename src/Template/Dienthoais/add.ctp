<?php echo $this->Form->create('Dienthoai'); ?>
	<fieldset>
		<legend><?php echo __('Add'); ?></legend>
	<?php
		echo $this->Form->input('TenDT');		
		echo $this->Form->input('HinhAnh');
		echo $this->Form->input('maloai');
		echo $this->Form->input('GiaGoc');
		echo $this->Form->input('GiaBan');
	?>
	</fieldset>
<?php echo $this->Form->submit('Add'); 
echo $this->Form->end();?>