<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 29. 7. 2015
 * Time: 7:04
 */
while ( $clen = $clenove->fetchObject() ){
    $member = new Member($clen->jmeno, $clen->prijmeni, $clen->narozeni_timestamp, $clen->profil_image, $clen->text);
    $allMembers .= "<div class='clen_div'><h2>{$member->getFullName()}</h2>
        <div>Year of birth: <strong>{$member->getRokNarozeni()}</strong></div>";
    $allMembers .= "{$member->getProfilImage()}";
    $allMembers .= "<br><div class='clen_text'>{$member->getTextForView()}</div>";
    $allMembers .= "</div>";
}
return $allMembers;