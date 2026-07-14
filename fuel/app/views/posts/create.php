<div class="card shadow-sm">
    <div class="card-body">
        <h1 class="h3 mb-4">新規投稿</h1>

        <form action="<?php echo Uri::create('posts/create'); ?>" method="post">

            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control"
                    value="<?php echo e(Input::post('title', '')); ?>"
                    placeholder="タイトルを入力してください"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">本文</label>

                <textarea
                    id="body"
                    name="body"
                    class="form-control"
                    rows="8"
                    placeholder="本文を入力してください"
                    required
                ><?php echo e(Input::post('body', '')); ?></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>

                <?php echo Html::anchor(
                    'posts/index',
                    'キャンセル',
                    array('class' => 'btn btn-secondary')
                ); ?>
            </div>

        </form>
    </div>
</div>