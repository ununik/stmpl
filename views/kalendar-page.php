<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.2015
 * Time: 9:31
 */
$container = "<h1>Kalendář</h1>";

$container .= "<h3>$termFromTo</h3>";
$container .= "<table id='kalendar_table'>";
/**
 * Nazev dnu v tydnu
 */
    for($i = 0; $i < 7; $i++){
        $container .= "<th>{$dny_nazev[$i]}</th>";
    }

$container .= "<tr>";
for($i = 0; $i < $firstdayInWeeknum; $i++){
    $container .= "<td></td>";
}
for($daynumber = 1; $daynumber <= $numberDaysInMonth; $daynumber++){
    if($i == 7){
        $container .= "</tr><tr>";
        $i = 0;
    }
    /**
     * Vypis dnu
     */
    if($i == 6){
        $container .= "<td class='kalendar_activeDay_td kalendar_nedele'><div class='kalendar_den_number'>$daynumber</div></td>";
    }else{
        $container .= "<td class='kalendar_activeDay_td'><div class='kalendar_den_number'>$daynumber</div></td>";
    }


    $i++;
}
for($i; $i < 7; $i++){
    $container .= "<td></td>";
}
$container .= "</tr>";
$container .= "</table>";
return $container;