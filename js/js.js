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