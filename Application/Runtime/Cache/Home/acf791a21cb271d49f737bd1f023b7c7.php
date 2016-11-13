<?php if (!defined('THINK_PATH')) exit(); if($data): ?><div class="widget">
   <div class="widget-title">
     <i class="fa fa-folder-o">分类</i></div>
   <ul class="category-list">
     <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="category-list-item">
       <a class="category-list-link" href="/blog/category/<?php echo ($vo['name']); ?>/"><?php echo ($vo['name']); ?></a>
      </li><?php endforeach; endif; ?>
   </ul>
 </div><?php endif; ?>