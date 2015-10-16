<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 9. 8. 2015
 * Time: 8:35
 */
    $cont = '<h1>Archiv</h1>';
while ( $entry = $entries->fetchObject() ){
    $cont .= "<div class='home_entry_div'><h1>{$entry->nadpis}</h1>
        <div class='home_entry_div_text'>{$entry->text} <a href='/clanek/{$entry->id}' class='home_entry_pokracovani'>Pokračování</a></div>";
    $cont .=  "<div class='fb-like'
                        data-href='{$www}index.php?page=entry&id={$entry->id}'
                        data-layout='standard'
                        data-action='like'
                        data-show-faces='true'
                        data-share='true'>
   </div>";
    $cont .= "</div>";
}

return $cont;