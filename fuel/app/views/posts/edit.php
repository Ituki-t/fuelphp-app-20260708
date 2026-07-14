<div class="card shadow-sm">
    <div class="card-body">

        <h1 class="h3 mb-4">投稿編集</h1>

        <form action="<?php echo Uri::create('posts/edit/'.$post['id']); ?>" method="post">

            <div class="mb-3">
                <label for="title" class="form-label">
                    タイトル
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control"
                    value="<?php echo e(Input::post('title', $post['title'])); ?>"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">
                    本文
                </label>

                <textarea
                    id="body"
                    name="body"
                    rows="8"
                    class="form-control"
                    required
                ><?php echo e(Input::post('body', $post['body'])); ?></textarea>
            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-primary">
                    更新する
                </button>

                <?php echo Html::anchor(
                    'posts/detail/'.$post['id'],
                    'キャンセル',
                    array('class' => 'btn btn-secondary')
                ); ?>

            </div>

        </form>

    </div>
</div>