<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 30. 7. 2015
 * Time: 13:54
 */
$cont = "
        <form action='' method='post'>
        <div id='nadpis_entry'>Nadpis: <input type='text' value='$nadpis' name='nadpis' placeholder='Nadpis'></div>
        <input type='submit' value='uložit'  class='submit_entry'>
        <textarea name='text'>$text</textarea>
        <input type='submit' value='uložit'  class='submit_entry'>
        </form>
        <script>
         tinymce.init({
            selector: 'textarea',
            mode : \"textareas\",
            theme: 'modern',
            image_advtab: true,
            fontsize_formats: \"10pt 12pt 14pt 16pt 18pt 24pt 36pt\",
            plugins: 'image table link autolink textcolor media fullscreen textpattern charmap lists',
            textcolor_cols: 6,
            toolbar1: 'fullscreen undo redo | styleselect | bullist numlist outdent indent | link image media',
            toolbar2: 'bold italic underline forecolor backcolor charmap fontsizeselect | alignleft aligncenter alignright alignjustify '
                  })
        </script>
        ";

return $cont;