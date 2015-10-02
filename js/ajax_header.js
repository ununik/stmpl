function photoboxHeaderAll(idInFolder, name, title, href, text, add){
    vytvoritZadostK('controllers/ajax_photobox.php', idInFolder, name, title, href, text, add)
}
function photoboxHeaderAllAdmin(idInFolder, name, title, href, text, add){
    vytvoritZadostK('controllers/admin/ajax_photobox.php', idInFolder, name, title, href, text, add)
}
function vytvoritZadostK (url, idInFolder, name, title, href, text, add) {
    var http_zadost = false;

    if (window.XMLHttpRequest) { // Mozilla, Safari, Opera, Konqueror...
        http_zadost = new XMLHttpRequest();
        if (http_zadost.overrideMimeType) {
            http_zadost.overrideMimeType('text/xml');
            // Podívejte na poznámku o tomto øádku ní¾e
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
        alert('Giving up :( Nemohu vytvoøit XMLHTTP instanci');
        return false;
    }
    http_zadost.onreadystatechange = function() { stavObsahuK(http_zadost, name, title, href, text, add); };
    http_zadost.open('GET', url + '?id=' + idInFolder + '&name=' + name, true);
    http_zadost.send(null);

}

function stavObsahuK(http_zadost, name, title, href, text, add) {

    if (http_zadost.readyState == 4) {
        if (http_zadost.status == 200) {
            if(add === false){
                document.getElementById('header_home').innerHTML = "<a href='" + href + "' target='_blank'><div><h1>" + title + "</h1><acrticle>" + text + "</acrticle></div></a>"
                document.getElementById('header_home').style.backgroundImage = "url(images/header/1000/"+name+")";
            }else{
                document.getElementById('photoBoxAll').innerHTML += http_zadost.responseText;
            }
        } else {
            alert('Byl problém se ¾ádostí.');
        }
    }else{
        if(add == false){
            document.getElementById('header_home').innerHTML = '<img src="images/header/loading.gif" id="loading">';
        }
    }

}
function photoboxHeaderPhoto(name, title, href, text){
    photoboxHeaderAll(0, name, title, href, text, false)
}