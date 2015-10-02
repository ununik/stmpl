<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 24. 7. 2015
 * Time: 16:59
 */
$allEntries = "<a href='admin.php?page=home_entry'>Přidat nový text</a>";
while ( $entry = $entries->fetchObject() ){
    $allEntries .= "<div class='home_entry_div'><h1>{$entry->nadpis} <span class='clen_uprava'><a href='admin.php?page=home_entry&id=$entry->id'><img src='images/admin/uprava.png'></a><br><a href='admin.php?page=delete_entry_home&id=$entry->id'><img src='images/admin/smazat.png'></a></h1>
        <div class='home_entry_div_text'>{$entry->text} <a href='admin.php?page=home_entry&id={$entry->id}' class='home_entry_pokracovani'>Pokra?ování</a></div>";
    $allEntries .= "</div>";
}


return "<div id='home_content'>$allEntries</div>";