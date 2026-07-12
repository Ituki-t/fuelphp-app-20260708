<h2>詳細画面</h2>

<p><?php echo e($post['title']); ?></p>
<p><?php echo e($post['body']); ?></p>
<p>作成日時: <?php echo date('Y-m-d H:i:s', $post['created_at']); ?></p>
<p>更新日時: <?php echo date('Y-m-d H:i:s', $post['updated_at']); ?></p>