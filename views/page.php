<?php
return "
<!doctype>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width; initial-scale=1.0'>
        <title>{$data->getTitle()}</title>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:500,500italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='css/style.css' type='text/css' media='screen'/>
        <link rel='stylesheet' href='css/style_mobil.css' type='text/css' media='handheld, only screen and (max-device-width: 990px)'/>
        <script src='js/js.js'></script>
        <script src='js/ajax_header.js'></script>
        <script src='js/tinymce/js/tinymce/tinymce.min.js'></script>
        <link rel='stylesheet' href='js/lightbox/css/lightbox.css' type='text/css' media='screen' />
        <script src='js/lightbox/js/jquery-1.7.2.min.js'></script>
        <script src='js/lightbox/js/jquery-ui-1.8.18.custom.min.js'></script>
        <script src='js/lightbox/js/jquery.smooth-scroll.min.js'></script>
        <script src='js/lightbox/js/lightbox.js'></script>
        <style>
 /* Active navigation link */
        #nav [href *= '?page=$getPage']{
            background-color:#A41717
        }
        </style>
    </head>
    <body>
    {$data->getNavigation()}
    {$data->getHeader()}
    {$data->getPhototoPhotobox()}
    <div id='content'>{$data->getContent()}</div>
    {$data->getFooter()}
    </body>
</html>";