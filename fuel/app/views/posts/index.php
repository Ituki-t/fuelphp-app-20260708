<form action="/posts/index" method="get">
    <div class="input-group">
        <input type="text" name="keyword" value="<?php echo e($keyword) ?>" placeholder="キーワードを入力">
        <button type="submit">検索</button>
    </div>
</form>

<?php echo Html::anchor('posts/create', 'Create New Post'); ?>

<?php echo Html::anchor('accounts/logout', 'Logout'); ?>


<?php if (empty($posts)): ?>
    <p>No posts found.</p>
<?php else: ?>
    <ul>
        <?php foreach ($posts as $post): ?>
            <div>
                <h2><?php echo Html::anchor('posts/detail/' . $post['id'], e($post['title'])); ?></h2>
                <p><?php echo e($post['body']); ?></p>
            </div>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>