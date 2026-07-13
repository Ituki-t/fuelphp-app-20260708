<h2>login</h2>

<?php if ($error): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<?php echo Form::open(array('method' => 'post')); ?>

    <p>
        <?php echo Form::label('Username', 'username'); ?>
        <?php echo Form::input('username'); ?>
    </p>
    <p>
        <?php echo Form::label('Password', 'password'); ?>
        <?php echo Form::password('password'); ?>
    </p>
    <p>
        <?php echo Form::submit('submit', 'Login'); ?>
    </p>
<?php echo Form::close(); ?>