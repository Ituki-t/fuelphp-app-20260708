<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? e($title) : '掲示板'; ?></title>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>