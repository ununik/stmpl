<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 11:38
 */
$cont = "";
$cont .= "<h1>{$clen->getFullName()}</h1>";
$cont .= "<h2>$err</h2>";
$cont .= "<form action='' method='post' enctype='multipart/form-data'>
          <form method='post' action='' enctype='multipart/form-data'>
                <h3>$err</h3>
                <table>
                <tr><td>Jméno:</td><td><input type='text' name='jmeno' value='$jmeno' class='input_clenove'></td></tr>
                <tr><td>Příjmení:</td><td><input type='text' name='prijmeni' value='$prijmeni' class='input_clenove'></td></tr>
                <tr><td>Datum narození:</td><td><input type='date' name='narozeni' value='$narozeni' class='input_clenove'></td></tr>
                <tr><td>Fotografie:</td><td>$picture<input type='file' name='image' class='input_clenove'></td></tr>
                <tr><td>Text:</td><td><textarea name='text' class='input_textarea'>$text</textarea></td></tr>
                <tr><td colspan='2'><input type='submit' value='Uložit' class='submit_clenove'></td></tr>
                </table>
                </form>
                </div>
          <input type='submit' value='Uložit'>
          </form>";
return $cont;