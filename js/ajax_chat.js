function chatAjax(type){
    vytvoritZadostChat('controllers/ajax_chat_result.php', type);
}
function vytvoritZadostChat (url, type) {
    var http_zadost = false;
    if (window.XMLHttpRequest) { // Mozilla, Safari, Opera, Konqueror...
        http_zadost = new XMLHttpRequest();
        if (http_zadost.overrideMimeType) {
            http_zadost.overrideMimeType('text/xml');
            // Pod�vejte na pozn�mku o tomto ��dku n�e
        }
    } else if (window.ActiveXObject) { // Internet Explorer
        try {
            http_zadost = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_zadost = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    if (!http_zadost) {
        alert('Giving up :( Nemohu vytvo�it XMLHTTP instanci');
        return false;
    }
    http_zadost.onreadystatechange = function() { stavObsahuChat(http_zadost, type); };
    http_zadost.open('GET', url + '?type=' + type, true);
    http_zadost.send(null);

}

function stavObsahuChat(http_zadost, type) {

    if (http_zadost.readyState == 4) {
        if (http_zadost.status == 200) {
            document.getElementById('chatentries').innerHTML = http_zadost.responseText;
            if(document.getElementById('chatentries').style.display != 'none') {
                setTimeout(chatAjax(type), 8000);
           }
        } else {
            // alert('Byl problém se žádostí.');
        }
    }else{
        if(add == false){
            //document.getElementById('chatentries').innerHTML = '<img src="images/header/loading.gif" id="loading">';
        }
    }

}
function vytvoritZadostChatInput (url, type, text) {
    var http_zadost = false;
    if (window.XMLHttpRequest) { // Mozilla, Safari, Opera, Konqueror...
        http_zadost = new XMLHttpRequest();
        if (http_zadost.overrideMimeType) {
            http_zadost.overrideMimeType('text/xml');
            // Pod�vejte na pozn�mku o tomto ��dku n�e
        }
    } else if (window.ActiveXObject) { // Internet Explorer
        try {
            http_zadost = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_zadost = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    if (!http_zadost) {
        alert('Giving up :( Nemohu vytvo�it XMLHTTP instanci');
        return false;
    }
    http_zadost.onreadystatechange = function() { stavObsahuChatInput(http_zadost, type); };
    http_zadost.open('GET', url + '?type=' + type + '&text=' + text, true);
    http_zadost.send(null);

}

function stavObsahuChatInput(http_zadost, type) {

    if (http_zadost.readyState == 4) {
        if (http_zadost.status == 200) {
            chatAjax(type)
        } else {
            // alert('Byl problém se žádostí.');
        }
    }else{
        if(add == false){
            //document.getElementById('chatentries').innerHTML = '<img src="images/header/loading.gif" id="loading">';
        }
    }

}