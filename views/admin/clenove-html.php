<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 29. 7. 2015
 * Time: 7:04
 */
$allMembers .= "<div class='clen_div'><h2>Přidat člena</h2>
                <form method='post' action='' enctype='multipart/form-data'>
                <h3>$err</h3>
                <table>
                <tr><td>Jméno:</td><td><input type='text' name='jmeno' value='$jmeno' class='input_clenove'></td></tr>
                <tr><td>Příjmení:</td><td><input type='text' name='prijmeni' value='$prijmeni' class='input_clenove'></td></tr>
                <tr><td>Datum narození:</td><td><input type='date' name='narozeni' value='$narozeni' class='input_clenove'></td></tr>
                <tr><td>Fotografie:</td><td><input type='file' name='image' class='input_clenove'></td></tr>
                <tr><td>Text:</td><td><textarea name='text' class='input_textarea'>$text</textarea></td></tr>
                <tr><td colspan='2'><input type='submit' value='Uložit' class='submit_clenove'></td></tr>
                </table>
                </form>
                </div>";

while ( $clen = $clenove->fetchObject() ){
    $member = new Member($clen->jmeno, $clen->prijmeni, $clen->narozeni_timestamp, $clen->profil_image, $clen->text);
    $allMembers .= "<div class='clen_div'><h2>{$member->getFullName()} <span class='clen_uprava'><a href='admin.php?page=clen_smazat&id=$clen->id'><img src='images/admin/smazat.png' class='uprava_tlacitko'></a><a href='admin.php?page=clen_upr&id=$clen->id'><img src='images/admin/uprava.png' class='uprava_tlacitko'></a></span></h2>
        <div>Rok narozeni: <strong>{$member->getRokNarozeni()}</strong></div>";
    $allMembers .= "{$member->getProfilImage()}";
    $allMembers .= "<br><div class='clen_text'>{$member->getTextForView()}</div>";
    $allMembers .= "</div>";
}
return $allMembers;