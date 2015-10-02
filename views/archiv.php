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
        <div class='home_entry_div_text'>{$entry->text} <a href='index.php?page=entry&id={$entry->id}' class='home_entry_pokracovani'>Pokračování</a></div>";
    $cont .= "</div>";
}

return $cont;