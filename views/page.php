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
        <script src='/js/ajax_header.js'></script>
        <script src='js/ajax_chat.js'></script>
        <script src='/js/tinymce/js/tinymce/tinymce.min.js'></script>
        <link rel='stylesheet' href='/js/lightbox/css/lightbox.css' type='text/css' media='screen' />
        <script src='/js/lightbox/js/jquery-1.7.2.min.js'></script>
        <script src='/js/lightbox/js/jquery-ui-1.8.18.custom.min.js'></script>
        <script src='/js/lightbox/js/jquery.smooth-scroll.min.js'></script>
        <script src='/js/lightbox/js/lightbox.js'></script>
        <style>
 /* Active navigation link */
        #nav [href *= '/$getPage']{
            background-color:#A41717
        }
        </style>
    </head>
    <body>
            <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-68703541-1', 'auto');
          ga('send', 'pageview');
        </script>
        <div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.5';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    {$data->getNavigation()}
    {$data->getHeader()}
    {$data->getPhototoPhotobox()}
    <div id='content'>{$data->getContent()}</div>
    {$data->getFooter()}
    <div id='chat'><div onclick='openChat()' id='chatOPEN_CLOSE'></div><div id='chatText'>{$data->getChat()}</div></div>
    <script>openChat(); chat_treninky()</script>
    </body>
</html>";