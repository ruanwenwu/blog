<?php if (!defined('THINK_PATH')) exit();?><div class="widget">
  <div class="widget-title">
    <i class="fa fa-comment-o">最新评论</i></div>
  <ul class="post-list">
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="post-list-item">
      <a class="post-list-link" href="/blog/<?php echo ($vo['postid']); ?>.html"><?php echo ($vo['content']); ?></a>
    </li><?php endforeach; endif; ?>
  </ul>
</div>