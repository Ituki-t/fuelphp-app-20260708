<div class="card shadow-sm">

    <div class="card-body">

        <h1 class="card-title mb-3">
            <?php echo e($post['title']); ?>
        </h1>

        <p class="card-text">
            <p><?php echo nl2br(e($post['body'])); ?></p>
            <p>作成日時: <?php echo nl2br(e($post['created_at'])); ?></p>
            <p>更新日時: <?php echo nl2br(e($post['updated_at'])); ?></p>
            <p>作成者: <?php echo nl2br(e($post['username'])); ?></p>
        </p>

    </div>

</div>

<div class="mt-4 d-flex gap-2">

    <?php
    echo Html::anchor(
        'posts/edit/'.$post['id'],
        '編集',
        array('class' => 'btn btn-warning')
    );
    ?>

    <?php
    echo Html::anchor(
        'posts/delete/'.$post['id'],
        '削除',
        array(
            'class' => 'btn btn-danger',
            'onclick' => "return confirm('本当に削除しますか？')"
        )
    );
    ?>

    <?php
    echo Html::anchor(
        'posts/index',
        '一覧へ戻る',
        array('class' => 'btn btn-secondary')
    );
    ?>

</div>