<?php if (!defined('THINK_PATH')) exit();?><div class="widget">
  <div class="widget-title">
    <i class="fa fa-file-o">最新文章</i></div>
  <ul class="post-list">
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="post-list-item">
      <a class="post-list-link" href="/blog/<?php echo ($vo['id']); ?>.html"><?php echo ($vo['title']); ?></a>
    </li><?php endforeach; endif; ?>
   
  </ul>
</div>