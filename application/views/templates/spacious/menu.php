<!-- 
<div class="col-sm-4 col-xs-12 text-right">
 <?php $mptt = new Zebra_Mptt(); ?>
 <ul class="tools">                    
   <?php foreach ($mptt->get_tree(1) as $tree): ?>
    <li><a href="<?php echo menu_url($tree); ?>"><?php echo $tree['title']; ?></a>
        <?php if (count($tree['children']) > 0): ?>
            <ul class="dropdown-menu">
                <?php foreach ($tree['children'] as $key => $node): ?>
                    <li class="dropdown item">
                        <a class="dropdown-toggle" href="<?php echo menu_url($node); ?>"><?php echo $node['title']; ?></a>
                        <?php if (count($node['children']) > 0): ?>
                            <ul class="dropdown-menu">
                                <?php foreach ($node['children'] as $key => $grandchild): ?>
                                    <li class="dropdown item">
                                        <a class="dropdown-toggle" href="<?php echo menu_url($grandchild); ?>"><?php echo $grandchild['title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?></li> 
    <?php endforeach; ?>                
</ul>
</div>
 -->
 <div class="col-sm-4 col-xs-12 text-right">
          <ul class="tools">                    
           <li>
             <a href="default.php"><small>Home</small></a>                  
           </li>
           <li>
             <a href="career.php"><small>Career</small></a>                  
           </li>
           <li>
             <a href="news.php"><small>News</small></a>                  
           </li>
           <li>
             <a href="contact.php"><small>Contact</small></a>                  
           </li>                   
         </ul>
       </div>