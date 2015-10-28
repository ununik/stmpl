<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 26.10.2015
 * Time: 9:30
 */
$dny_nazev = ['Po', 'Út', 'St', 'Čt', 'Pá', 'So', 'Ne'];
$mesice_nazev = ['leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec'];
$mesice_nazev_genitiv = ['ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosinece'];
if(!isset($_GET['timestamp']) || $_GET['timestamp'] == ""){
    $timestamp = time();
}else{
    $timestamp = $_GET['timestamp'];
}
$title = 'Kalendář';
$today = strtotime('today', time());
$firstday_timestamp = strtotime(date('Y-m-01', $timestamp));
$lastday_timestamp = strtotime('next month', $firstday_timestamp) - 1 ;
$termFromTo = $mesice_nazev[date("m", $firstday_timestamp) -1 ] . ' ' . date("Y", $lastday_timestamp);
$prewiousmonth = strtotime('last month', $firstday_timestamp);
if(date('Y-m', $timestamp) == date('Y-m', $today)){
    $today = date('j', $today);
}else{
    $today = 0;
}
$nextmonth = strtotime('next month', $firstday_timestamp);
$firstdayInWeeknum = date('w', $firstday_timestamp) - 1;
if($firstdayInWeeknum == "-1"){ $firstdayInWeeknum = 6;};
$numberDaysInMonth = cal_days_in_month(CAL_GREGORIAN,date('m', $firstday_timestamp),date('Y'));
$kalendar = new Database($db);
$kalendarNext10 = $kalendar->getNext10Calendar();
$kalendar = $kalendar->getCalendar($firstday_timestamp, $lastday_timestamp);
foreach($kalendar as $kalendar){
    if(strtotime(date('Y-m-j', $kalendar['from'])) < $firstday_timestamp){
        $den['kalendar'][1][] = $kalendar;
    }else{
        $den['kalendar'][date('j', $kalendar['from'])][] = $kalendar;
    }
    $from = $kalendar['from'] + 86400;
    while($from < $kalendar['to']+86400){
        $den['kalendar'][date('j', $from)][] = $kalendar;
        $from += 86400;
    }
}

return include_once('views/kalendar-page.php');