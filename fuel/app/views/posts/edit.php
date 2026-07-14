<?php echo Form::open(array('action' => 'posts/edit/' . $post['id'], 'method' => 'post')); ?>

    <p>
        <?php echo Form::label('Title', 'title'); ?>
        <?php echo Form::input('title', $post['title']); ?>
    </p>
    <p>
        <?php echo Form::label('Body', 'body'); ?>
        <?php echo Form::textarea('body', $post['body']); ?>
    </p>
    <p>
        <?php echo Form::submit('submit', 'Update'); ?>
    </p>