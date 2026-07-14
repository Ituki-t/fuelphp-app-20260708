<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? e($title) : '掲示板'; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= Uri::create('posts/index') ?>">
                掲示板アプリ
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="ナビゲーションを開く">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="<?= Uri::create('posts/index') ?>">
                            投稿一覧
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="<?= Uri::create('posts/create') ?>">
                            新規投稿
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <?php if (\Session::get('user_id') !== null): ?>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="<?= Uri::create('accounts/logout') ?>">
                                ログアウト
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="<?= Uri::create('accounts/signup') ?>">
                                新規登録
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="<?= Uri::create('accounts/login') ?>">
                                ログイン
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <h1 class="mb-4">
            <?= isset($title) ? e($title) : '' ?>
        </h1>

        <?php echo $content; ?>
    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>



</body>
</html>