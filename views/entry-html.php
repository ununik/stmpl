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

$cont .= "<h3>Další články:</h3>";
$i = 0;
while ( $entryA = $entries->fetchObject() ){
    if($i > 2){
        break;
    }
    if($entryA->id != $entry->id) {
        $cont .= "<h4><a href='/clanek/{$entryA->id}'>{$entryA->nadpis}</a></h4>";
        $i++;
    }
}

return $cont;