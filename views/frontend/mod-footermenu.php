<?php
use App\Models\Menu;
$mod_footermenu = Menu::where([['status','=',1],['position','=','footermenu']])
         ->orderBy('sort_order','ASC')
         ->get();
?>

<ul class="footer-menu">
<h3 class="widgettilte">
   <strong>Hỗ trợ khách hàng</strong>
   
</h3>
   <?php foreach($mod_footermenu as $rowmenu) :?>
   <li><a href="<?=$rowmenu->link; ?>"><?=$rowmenu->name; ?></a></li>
   <?php endforeach;?>
  
</ul>