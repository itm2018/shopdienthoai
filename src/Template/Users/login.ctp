<div class="col-lg-4">
    <?php echo $this->Form->create('Form') ?>
    <fieldset>
        <legend>Đăng nhập</legend>
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <?php echo $this->Form->input('username', ['type' => 'text', 'class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <?php echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control']) ?>
        </div>
        <?php echo $this->Form->submit('Login', ['class' => 'btn btn-primary']) ?>
    </fieldset>
    <?php echo $this->Form->end() ?>
</div>
