<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 29. 7. 2015
 * Time: 7:04
 */
while ( $clen = $clenove->fetchObject() ){
    $member = new Member($clen->jmeno, $clen->prijmeni, $clen->narozeni_timestamp, $clen->profil_image);
    $allMembers .= "<div class='clen_div'><h2>{$member->getFullName()}</h2>
        <div>Rok narozeni: <strong>{$member->getRokNarozeni()}</strong></div>";
    $allMembers .= "{$member->getProfilImage()}";
    $allMembers .= "</div>";
}
return $allMembers;