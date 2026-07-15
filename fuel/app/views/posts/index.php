<?php echo Asset::js('posts/index.js'); ?>
<form
    action="<?php echo Uri::create('posts/index'); ?>"
    method="get"
    class="mb-4"
    data-bind="submit: search">
    <div class="input-group">
        <input
            type="text"
            name="keyword"
            class="form-control"
            value="<?php echo e($keyword); ?>"
            placeholder="キーワードを入力"
            data-bind="value: keyword , valueUpdate: 'input'"
        >

        <button
            type="submit"
            class="btn btn-outline-primary"
        >
            検索
        </button>
    </div>
</form>

<?php if (empty($posts)): ?>

    <div class="alert alert-secondary">
        投稿が見つかりませんでした。
    </div>

<?php else: ?>

    <div class="row g-3" data-bind="foreach: posts">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title h5">
                            <a
                                class="text-decoration-none"
                                data-bind="
                                    text: title,
                                    attr: { href: 'posts/detail/' + id }
                                "
                            >
                        </a>
                        </h2>

                        <p class="card-text text-secondary">
                        <p
                            data-bind="text: body"
                        ></p>
                        </p>
                    </div>
                </div>
            </div>
    </div>

<?php endif; ?>
</div>