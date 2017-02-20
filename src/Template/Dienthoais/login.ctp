<?php echo $this->Form->create('Form') ?>
<fieldset>
    <legend>Đăng nhập</legend>
    <div class="form-group">
        <label for="username">Tên đăng nhập</label>
        <div class="form-control">
            <?php echo $this->Form->input('username', ['type' => 'text']) ?>
        </div>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu</label>
        <div class="form-control">
            <?php echo $this->Form->input('password', ['type' => 'password']) ?>
        </div>
    </div>
    <?php echo $this->Form->submit('Login', ['class' => 'btn btn-primary']) ?>
</fieldset>
<?php echo $this->Form->end() ?>
