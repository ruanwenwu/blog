<?php if (!defined('THINK_PATH')) exit();?><div class="widget">
   <div class="widget-title">
     <i class="fa fa-star-o">标签</i></div>
   <div class="tagcloud">
     <?php if(is_array($data)): foreach($data as $key=>$vo): ?><a href="/blog/tag/<?php echo ($vo['name']); ?>/" style="font-size: 15px;"><?php echo ($vo['name']); ?></a><?php endforeach; endif; ?>
   </div>
 </div>