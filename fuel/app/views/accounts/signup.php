<h2>Sign Up</h2>

<?php echo Form::open(array('method' => 'post')); ?>

    <p>
        <?php echo Form::label('Username', 'username'); ?>
        <?php echo Form::input('username'); ?>
    </p>
    <p>
        <?php echo Form::label('Email', 'email'); ?>
        <?php echo Form::input('email'); ?>
    </p>
    <p>
        <?php echo Form::label('Password', 'password'); ?>
        <?php echo Form::password('password'); ?>
    </p>
    <p>
        <?php echo Form::submit('submit', 'Sign Up'); ?>
    </p>
<?php echo Form::close(); ?>
