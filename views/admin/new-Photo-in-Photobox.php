<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 1. 8. 2015
 * Time: 7:20
 */
$cont = "
        <form action='' method='post' enctype='multipart/form-data'>
        <div id='nadpis_entry'>Nadpis: <input type='text' value='$nadpis' name='nadpis' placeholder='Nadpis'></div>
        <div id='url_photobox'>Odkaz - url: <input type='url' placeholder='http://' value='$url' name='url'></div>
        <div id='url_photobox'>Pozadí: $img<input type='file' name='image'></div>
        <input type='submit' value='uložit'  class='submit_entry'>
        <textarea name='text'>$text</textarea>
        <input type='submit' value='uložit'  class='submit_entry'>
        </form>
        <script>
         tinymce.init({
            selector: 'textarea',
            mode : \"textareas\",
            theme: 'modern',
            menubar: 'file view edit',
            toolbar: 'fullscreen undo redo | bold italic underline '
                  })
        </script>
        ";

return $cont;