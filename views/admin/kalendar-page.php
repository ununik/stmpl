<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.2015
 * Time: 9:31
 */
$container = "<h1>Kalendář</h1>";


$container .= "<table id='kalendar_table'>";
$container .= "<tr><th colspan='7'><h3><a href='?page=kalendar&timestamp=$prewiousmonth'><<</a> $termFromTo <a href='?page=kalendar&timestamp=$nextmonth'>>></a></h3></th></tr>";
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
    $container .= "<td class='kalendar_activeDay_td";
    if($i == 6){
        $container .= " kalendar_nedele";
    }else{

    }
    $container .= "'><div class='kalendar_den_number'>$daynumber</div>";
    $timestamp_day = strtotime(date('Y-m-' . $daynumber, $timestamp));
    if(isset($den['kalendar'][$daynumber])) {
        foreach ($den['kalendar'][$daynumber] as $kalendar) {
            /**
             * udalosti behem dne
             */
            $container .= "<a class='kalendar_{$kalendar["kategorie"]}' title='{$kalendar['nadpis']}' onclick='kalendar_udalost_admin(\"{$kalendar['id']}\", \"$timestamp_day\")'>{$kalendar['nadpis']}</a>";
        }
    }
    $container .= "<div onclick='kalendar_udalost_admin(\"0\", \"$timestamp_day\")'>+</div>";
    $container .= "</td>";


    $i++;
}
for($i; $i < 7; $i++){
    $container .= "<td></td>";
}
$container .= "</tr>";
$container .= "</table>";

$container .= "<div id='kalendar_popis'></div>";
return $container;