<h2>詳細画面</h2>

<p><?php echo e($post['title']); ?></p>
<p><?php echo e($post['body']); ?></p>
<p>作成日時: <?php echo date('Y-m-d H:i:s', $post['created_at']); ?></p>
<p>更新日時: <?php echo date('Y-m-d H:i:s', $post['updated_at']); ?></p>
<p>作成者: <?php echo e($post['username']); ?></p>

<p><?php echo Html::anchor('posts/edit/' . $post['id'], '編集'); ?></p>
<p><?php echo Html::anchor('posts/delete/' . $post['id'], '削除', array('onclick' => "return confirm('本当に削除しますか？')")); ?></p>
<p><?php echo Html::anchor('posts/index', '一覧に戻る'); ?></p>