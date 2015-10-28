function kalendarAjax(id){
    vytvoritZadostKalendar('/controllers/ajax_kalendar.php', id);
}
function kalendarAjaxAdmin(id, tim){
    vytvoritZadostKalendar('/controllers/admin/ajax_kalendar.php', id, tim);
}
function vytvoritZadostKalendar (url, id, tim) {
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
    http_zadost.onreadystatechange = function() { stavObsahuKalendar(http_zadost, id); };
    http_zadost.open('GET', url + '?id=' + id + '&timestamp=' + tim, true);
    http_zadost.send(null);

}

function stavObsahuKalendar(http_zadost, id) {

    if (http_zadost.readyState == 4) {
        if (http_zadost.status == 200) {
            document.getElementById('kalendar_popis').innerHTML = http_zadost.responseText;
        } else {
            // alert('Byl problém se žádostí.');
        }
    }

}

function vytvoritZadostKalendarSave(url, nadpis, from, to, popis, odkaz, category){
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
    http_zadost.onreadystatechange = function() { stavObsahuKalendarSave(http_zadost); };
    http_zadost.open('GET', url + '&nadpis=' + nadpis + '&from=' + from + '&to=' + to + '&popis=' + popis + '&odkaz=' + odkaz + '&category=' + category, true);
    http_zadost.send(null);

}

function stavObsahuKalendarSave(http_zadost) {

    if (http_zadost.readyState == 4) {
        if (http_zadost.status == 200) {
            document.getElementById('kalendar_popis').innerHTML = http_zadost.responseText;
        } else {
            // alert('Byl problém se žádostí.');
        }
    }else{
    }

}