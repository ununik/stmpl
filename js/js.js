function showANDhideMenu(div){
    nav = document.getElementById("nav");
    if(nav.style.height != "250px"){
        nav.style.height = "250px"
    }else{
        nav.style.height = "44px"
    }
}
function hideAllVybaveni(page){
    var pages = ["obuv_leto", "obleceni_leto", "obuv_zima", "obleceni_zima", "lyze_zima", "hulky_zima", "zbrane_vzduchovka", "zbrane_malorazka", "zbrane_doplnky", "jine_nastrel", "jine_dalekohled"];
    for (var index = 0; index < pages.length; ++index) {
        document.getElementById(pages[index]).style.display = "none";
    }
    document.getElementById(page).style.display = "block";
}
function showVybaveniPage(page){
    hideAllVybaveni(page);
    window.history.pushState("object or string", "Title", "/vybaveni/"+page);
}
function openChat(){
    var chat = document.getElementById('chat');

    if(chat.style.bottom != "-455px"){
        chat.style.bottom = "-455px";
    }else{
        chat.style.bottom = "0px";
    }
}

function chat_treninky(){
    treninky = document.getElementById('chat_trenink');
    zavody = document.getElementById('chat_zavody');
    ostatni = document.getElementById('chat_ostatni');
    text = document.getElementById('chatentries');
    text.style.display = 'none';
    treninky.style.textDecoration = 'none';
    zavody.style.textDecoration = 'none';
    ostatni.style.textDecoration = 'none';
    if(treninky.style.bottom != '90px'){
        treninky.style.bottom = '90px';
        zavody.style.bottom = '45px';
        ostatni.style.bottom = '0px';
    }else{
        treninky.style.bottom = '410px';
        treninky.style.textDecoration = 'underline';
        text.style.bottom = '90px';
        zavody.style.bottom = '45px';
        ostatni.style.bottom = '0px';
        chatAjax("trenink");
        setTimeout(function(){ document.getElementById('chatentries').style.display = 'block';}, 1000);
    }
}
function chat_zavody(){
    treninky = document.getElementById('chat_trenink');
    zavody = document.getElementById('chat_zavody');
    ostatni = document.getElementById('chat_ostatni');
    text = document.getElementById('chatentries');
    text.style.display = 'none';
    treninky.style.textDecoration = 'none';
    zavody.style.textDecoration = 'none';
    ostatni.style.textDecoration = 'none';
    if(zavody.style.bottom != '45px'){
        chatAjax("trenink");
        treninky.style.bottom = '410px';
        zavody.style.bottom = '45px';
        ostatni.style.bottom = '0px';
        text.style.bottom = '90px';
    }else{
        text.style.bottom = '45px';
        zavody.style.textDecoration = 'underline';
        treninky.style.bottom = '410px';
        zavody.style.bottom = '365px';
        ostatni.style.bottom = '0px';
        chatAjax("zavody");
    }
    setTimeout(function(){ document.getElementById('chatentries').style.display = 'block';}, 1000);
}
function chat_ostatni(){
    treninky = document.getElementById('chat_trenink');
    zavody = document.getElementById('chat_zavody');
    ostatni = document.getElementById('chat_ostatni');
    text = document.getElementById('chatentries');
    treninky.style.textDecoration = 'none';
    zavody.style.textDecoration = 'none';
    ostatni.style.textDecoration = 'none';
    text.style.display = 'none';
    if(ostatni.style.bottom != '0px'){
        treninky.style.bottom = '410px';
        zavody.style.bottom = '365px';
        ostatni.style.bottom = '0px';
        text.style.bottom = '45px';
    }else{
        text.style.bottom = '0px';
        treninky.style.bottom = '410px';
        zavody.style.bottom = '365px';
        ostatni.style.bottom = '320px';
        ostatni.style.textDecoration = 'underline';
        chatAjax("ostatni");
    }
    setTimeout(function(){ document.getElementById('chatentries').style.display = 'block';}, 1000);
}

function saveChat(form, type){
    var value = form.getElementsByTagName('input')[0].value;
    form.getElementsByTagName('input')[0].value = "";
    chatAjaxInput(value, type)
}
function chatAjaxInput(text, type){
    vytvoritZadostChatInput('controllers/ajax_chat_input.php', type, text);
}