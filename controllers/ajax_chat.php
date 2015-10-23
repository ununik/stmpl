<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 21.10.2015
 * Time: 14:21
 */
$chat = "<div id='chat_trenink'><div  onclick='chat_treninky()'>Tréninky</div><form onsubmit='saveChat(this, \"trenink\"); return false'><input type='text' class='input_chat' placeholder='Zpráva'></form></div>";
$chat .= "<div id='chat_zavody'><div  onclick='chat_zavody()'>Závody</div><form onsubmit='saveChat(this, \"zavody\"); return false'><input type='text' class='input_chat' placeholder='Zpráva'></form></div>";
$chat .= "<div id='chat_ostatni'><div onclick='chat_ostatni()'>Ostatní</div><form onsubmit='saveChat(this, \"ostatni\"); return false'><input type='text' class='input_chat' placeholder='Zpráva'></form></div>";
$chat .= "<div id='chatentries'></div>";
return $chat;