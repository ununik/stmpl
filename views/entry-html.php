<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 31. 7. 2015
 * Time: 16:56
 */
$cont = "<h1 class='entry-h1'>$entry->nadpis</h1>
         <div class='entry'>$entry->text</div>";
$cont .=  "<div class='fb-like'
                        data-href='{$www}index.php?page=entry&id={$entry->id}'
                        data-layout='standard'
                        data-action='like'
                        data-show-faces='true'
                        data-share='true'>
   </div>";
return $cont;