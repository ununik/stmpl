<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 16:59
 */
while ( $entry = $entries->fetchObject() ){
    $allEntries .= "<div class='home_entry_div'><h1>{$entry->nadpis}</h1>
        <div class='home_entry_div_text'>{$entry->text} <a href='index.php?page=entry&id={$entry->id}' class='home_entry_pokracovani'>Pokračování</a></div>";


  $allEntries .= "<div class='fb-like'
                        data-href='{$www}index.php?page=entry&id={$entry->id}'
                        data-layout='standard'
                        data-action='like'
                        data-show-faces='true'
                        data-share='true'>
   </div>";
    $allEntries .= "</div>";
}


return "<div id='home_content'>$allEntries</div>";