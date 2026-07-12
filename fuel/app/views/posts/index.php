<h1>Posts</h1>

<?php if (empty($posts)): ?>
    <p>No posts found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <div>
                <h2><?php echo Html::anchor('posts/detail/' . $post['id'], e($post['title'])); ?></h2>
                <p><?php echo e($post['content']); ?></p>
            </div>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>