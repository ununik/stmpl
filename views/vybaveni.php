<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 19.10.15
 * Time: 10:52
 */
$container = "<h1>Vybavení</h1>";

$container .= "<ul id='menu_vybaveni'>";
$container .= "<li>Léto";
$container .= "<ul id='leto_menu_vybaveni'>
                    <li  onclick='showVybaveniPage(\"obuv_leto\")'>Obuv</li>
                    <li  onclick='showVybaveniPage(\"obleceni_leto\")'>Oblečení</li>
                </ul>";
$container .= "</li>";
$container .= "<li>Zima";
$container .= "<ul id='zima_menu_vybaveni'>
                    <li onclick='showVybaveniPage(\"obuv_zima\")'>Obuv</li>
                    <li onclick='showVybaveniPage(\"obleceni_zima\")'>Oblečení</li>
                    <li onclick='showVybaveniPage(\"lyze_zima\")'>Lyže</li>
                    <li onclick='showVybaveniPage(\"hulky_zima\")'>Hůlky</li>
                </ul>";
$container .= "</li>";
$container .= "<li>Zbraně";
$container .= "<ul  id='zbrane_menu_vybaveni'>
                    <li onclick='showVybaveniPage(\"zbrane_vzduchovka\")'>Vzduchová puška</li>
                    <li onclick='showVybaveniPage(\"zbrane_malorazka\")'>Malorážka</li>
                    <li onclick='showVybaveniPage(\"zbrane_doplnky\")'>Doplňky</li>
                </ul>";
$container .= "</li>";
$container .= "<li>Jiné";
$container .= "<ul id='jine_menu_vybaveni'>
                    <li onclick='showVybaveniPage(\"jine_nastrel\")'>Nástřel</li>
                    <li onclick='showVybaveniPage(\"jine_dalekohled\")'>Dalekohled</li>
                </ul>";
$container .= "</li>";
$container .= "</ul>";





        $obuv_leto = "<div id='obuv_leto'>";
        $obuv_leto .= "<h2>Běžecká obuv</h2>";
        $obuv_leto .= "<p>Boty bychom si měli vybrat podle podkladu, na kterém budeme běhat. Pokud běháme především kros (terénní běhy), jako je tomu v letním biatlonu, je dobré mít hrubší vzorek podrášky. Běháme-li především na asfaltu nebo an zpevněných cestách, pak je příjemnější hladší podrážka. Je lepší mít 2 páry bot pro různé terény, než mít univerzální boty pro každý terén.</p>";
        $obuv_leto .= "<hr><p><strong><u>Tip</u>:</strong> Boty na běhání by se měly vyměnit po 800km, proto je i dobré kupovat boty přesně na nohu (palec by se měl dotýkat špičky boty). Po pár trénincích se boty roztáhnou a teprve poté sedí dokonale na noze.</p>";
        $obuv_leto .= "</div>";


        $obleceni_leto = "<div id='obleceni_leto'>";
        $obleceni_leto .= "<h2>Běžecké oblečení</h2>";

        $obleceni_leto .= "</div>";







        $obuv_zima = "<div id='obuv_zima'>";
        $obuv_zima .= "<h2>Lyžařská obuv</h2>";
        $obuv_zima .= "<p>Obuv můžeme rozdělit na 3 kategorie - univerzální, skate a klasické</p>";
        $obuv_zima .= "<p><b>Univerzální boty</b> jsou ideální pro začátečníky, jako levnější varianta pro výuku jak bruslení, tak i klasické techniky.</p>";
        $obuv_zima .= "<p><b>Boty na skate (bruslení)</b> mívají tvrdší podrážku a zpevnění kotníku, aby se plně využila síla odrazu.</p>";
        $obuv_zima .= "<p><b>Boty na klasiku</b> jsou zpravidla bez zpevnění kotníku s měkkou podrážku, aby nedocházelo k namáhání podélné klenby chodidla.</p>";
        $obuv_zima .= "<hr><p><strong><u>Tip</u>:</strong> Lyžařské boty by neměly být na noze \"natěsno\". Příliš krátké boty totiž mohou způsobovat pocitově mnohem větší prochladnutí a zima je to poslední, co si na sněhu přejete.</p>";

        $obuv_zima .= "</div>";


        $obleceni_zima = "<div id='obleceni_zima'>";
        $obleceni_zima .= "<h2>Lyžařské oblečení</h2>";

        $obleceni_zima .= "</div>";


        $lyze_zima = "<div id='lyze_zima'>";
        $lyze_zima .= "<h2>Lyže</h2>";

        $lyze_zima .= "</div>";


        $hulky_zima = "<div id='hulky_zima'>";
        $hulky_zima .= "<h2>Hůlky</h2>";
        $hulky_zima .= "<p>Hůlky se výbírají především podle výšky. Ideální výška hůlek pro klasiku je - od země po úroveň ramen.</p>";
        $hulky_zima .= "</div>";





        $zbrane_vzduchovka = "<div id='zbrane_vzduchovka'>";
        $zbrane_vzduchovka .= "<h2>Vzduchová puška</h2>";

        $zbrane_vzduchovka .= "</div>";


        $zbrane_malorazka = "<div id='zbrane_malorazka'>";
        $zbrane_malorazka .= "<h2>Malorážka</h2>";
        $zbrane_malorazka .= "<p>V biatlonu se používá více typů malorážek.</p>
                                <p>Nejpoužívanější zbraní je německá <strong>Anschütz 1827</strong> v různých variantách. Její největší předností je hlaveň ze speciální slitiny, která má minimální změny rozměrů při různých teplotách.
                                Pro vyhození a následné nabití stačí jednoduchý a přímý pohyb ukazováčku směrem k obličeji a následné zatlačení otevřeného závěru palcem opačným směrem.
                                Nevýhodou této zbraně je její citlivost na znečištění (zbraň poměrně snadno podléhá korozi, může dojít k \"zaseknutí\" závěru kvůli znečištění nebo přimrznutí (voda se dostane mezi ložiska závěru a tam zamrzne - nestává se to nijak často)</p>
                                <p>video rozborka a sborka</p>";
    $zbrane_malorazka .= "<p>Další užívanou zbraní je ruská <strong>Izhmash BI-7</strong>. Tato zbraň je vytvořená tak, aby byla co nejsnazší na údržbu, proto i samotný mechanizmus je oproti německé zbrani velice jednoduchý
                           Postup při nabíjení je velmi podobný s Anschütz s tím rozdílem, že se nenabíjí v přímém směru dozadu, ale \"vylamuje\" se raménko závěru.
                           Tato zbraň má pojistku, která nedovolí vystřelit, pokud není zásobník v komoře.</p>
                           <p>video rozborka a sborka</p>";
        $zbrane_malorazka .= "</div>";




        $zbrane_doplnky = "<div id='zbrane_doplnky'>";
        $zbrane_doplnky .= "<h2>Doplňky ke zbraním</h2>";
        $zbrane_doplnky .= "<h3>Krytka oka</h3>";
        $zbrane_doplnky .= "<p>Někteří lidé nedokáží mít zavřené levé oko při střelbě nebo hrozí, že bude sluníčko oslňovat oči, proto se ke zbrani dá přidělat krytka oka.</p>";
        $zbrane_doplnky .= "<p>Tentyto návody jsou pro zbraně Anschütz, ale po menších úpravách lze použít i na jiný typ zbraně.</p>";
        $zbrane_doplnky .= "<h4>Návod I (pouze na levé oko)</h4>";
        $zbrane_doplnky .= "<h4>Návod II (krytka na obě oči)</h4>";
        $zbrane_doplnky .= "</div>";







$jine_nastrel = "<div id='jine_nastrel'>";
$jine_nastrel .= "<h2>Vybavení pro nástřel</h2>";

$jine_nastrel .= "</div>";


$jine_dalekohled = "<div id='jine_dalekohled'>";
$jine_dalekohled .= "<h2>Dalekohled</h2>";

$jine_dalekohled .= "</div>";






$container .= "<div id='content_vybaveni'>";
$container .= $obuv_leto;
$container .= $obleceni_leto;
$container .= $obuv_zima;
$container .= $obleceni_zima;
$container .= $lyze_zima;
$container .= $hulky_zima;
$container .= $zbrane_vzduchovka;
$container .= $zbrane_malorazka;
$container .= $zbrane_doplnky;
$container .= $jine_nastrel;
$container .= $jine_dalekohled;
$container .= "</div>";
$container .= "<script>hideAllVybaveni()</script>";

return $container;