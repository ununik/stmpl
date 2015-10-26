<?php
return "
<!doctype>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>{$data->getTitle()}</title>
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='css/style_mobil.css' type='text/css' media='handheld, only screen and (max-device-width: 990px)'/>
        <script src='js/js.js'></script>
        <script src='js/ajax_header.js'></script>
        <script src='js/ajax_kalendar.js'></script>
        <script src='js/tinymce/js/tinymce/tinymce.min.js'></script>
    </head>
    <body>
    {$data->getNavigation()}
    {$data->getHeader()}
    {$data->getPhototoPhotoboxAdmin()}
    <div id='content'>{$data->getContent()}</div>
    {$data->getFooter()}
    </body>
</html>";