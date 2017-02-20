<h1>Edit </h1>
<?php echo $this->Form->create('DienThoai'); ?>
<?php echo $this->Form->hidden('Seri', ['value' => $dienthoai->Seri]); ?>
<table class="table table-responsive">
    <tr>
        <td><div class="dienthoai-img"><img src="<?php echo $dienthoai->HinhAnh?>"></div> </td>
        <td></td>
    </tr>
    <tr>
        <td>Tên Điện thoại</td>
        <td><?php echo $this->Form->input('TenDT', ['value' => $dienthoai->TenDT, 'label' => false]); ?></td>
    </tr>
    <tr>
        <td>Hình Ảnh</td>
        <td><?php echo $this->Form->input('HinhAnh', ['value' => $dienthoai->HinhAnh, 'label' => false]); ?></td>
    </tr>
    <tr>
        <td>Mã Loại</td>
        <td><?php echo $this->Form->input('maloai', ['value' => $dienthoai->maloai, 'label' => false]); ?></td>
    </tr>
    <tr>
        <td>Giá Gốc</td>
        <td><?php echo $this->Form->input('GiaGoc', ['value' => $dienthoai->GiaGoc, 'label' => false]); ?></td>
    </tr>
    <tr>
        <td>Giá Bán</td>
        <td><?php echo $this->Form->input('GiaBan', ['value' => $dienthoai->GiaBan, 'label' => false]); ?></td>
    </tr>
    <tr>
        <td>
            <a href="/dienthoais/danhsach"><button type="button" class="btn btn-default">Back</button> </a>
        </td>
        <td><?php echo $this->Form->submit(__('Update'),['class'=>'btn btn-primary']);
            echo $this->Form->end();
            ?></td>
    </tr>

</table>





