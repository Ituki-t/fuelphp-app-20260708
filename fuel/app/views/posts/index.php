<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h2 mb-0">投稿一覧</h1>

    <?php echo Html::anchor(
        'posts/create',
        '新規投稿',
        array('class' => 'btn btn-primary')
    ); ?>
</div>

<form action="<?php echo Uri::create('posts/index'); ?>" method="get" class="mb-4">
    <div class="input-group">
        <input
            type="text"
            name="keyword"
            class="form-control"
            value="<?php echo e($keyword); ?>"
            placeholder="キーワードを入力"
        >

        <button type="submit" class="btn btn-outline-primary">
            検索
        </button>
    </div>
</form>

<?php if (empty($posts)): ?>

    <div class="alert alert-secondary">
        投稿が見つかりませんでした。
    </div>

<?php else: ?>

    <div class="row g-3">
        <?php foreach ($posts as $post): ?>
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title h5">
                            <?php echo Html::anchor(
                                'posts/detail/'.$post['id'],
                                e($post['title']),
                                array('class' => 'text-decoration-none')
                            ); ?>
                        </h2>

                        <p class="card-text text-secondary">
                            <?php echo nl2br(e($post['body'])); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>
</div>