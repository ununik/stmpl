<?php
$container = "<h1>Kinesiotaping</h1>";
$container .= '<img src="/images/kinesiotaping/postava_zaklad.png" id="postava" usemap="#bodyMap" width="506px" height="501px">';
$container .= '<map name="bodyMap">
				  <area shape="poly" coords="115,39,117,54,123,77,137,83,152,77,156,64,159,44,158,39" id="test" title="Obličej" onclick="kinesiotapingPart(this, \'oblicej\')">
				  <area shape="poly" coords="125,450,110,495,180,495,145,450" title="Noha" onclick="kinesiotapingPart(this, \'noha\')">
				  <area shape="poly" coords="110,450,100,395,190,395,170,450" title="Holeň"  onclick="kinesiotapingPart(this, \'holen\')">
				  <area shape="poly" coords="105,385,105,340,175,340,175,385" title="Koleno"  onclick="kinesiotapingPart(this, \'koleno\')">
		          <area shape="poly" coords="95,250,105,330,175,330,180,250,130,280" title="Stehno"  onclick="kinesiotapingPart(this, \'stehno\')">
				  <area shape="poly" coords="110,240,80,120,205,120,170,240" title="Břicho a hrudník" onclick="kinesiotapingPart(this, \'bricho\')">
				  <area shape="poly" coords="61,151,58,135,73,106,96,104,92,157" title="Rameno" onclick="kinesiotapingPart(this, \'rameno\')">
				  <area shape="poly" coords="182,104,205,107,222,147,217,158,189,159"  title="Rameno"  onclick="kinesiotapingPart(this, \'rameno\')">
				  <area shape="poly" coords="64,154,91,174,89,197,93,227,87,252,94,275,91,299,79,297,71,285,71,257,61,209" title="Ruka"  onclick="kinesiotapingPart(this, \'ruka\')">
				  <area shape="poly" coords="189,162,214,161,220,195,227,222,219,249,215,267,212,291,203,302,195,277,202,253,192,221,196,199" title="Ruka"  onclick="kinesiotapingPart(this, \'ruka\')">
				  <area shape="poly" coords="370,387,399,390,403,407,408,390,435,390,439,406,426,457,422,469,409,467,403,425,399,442,401,470,384,466,367,413"  title="Lýtko a achilovka" onclick="kinesiotapingPart(this, \'lytko\')">
				  <area shape="poly" coords="385,469,400,469,422,470,438,491,405,496,368,493,380,480"  title="Noha"  onclick="kinesiotapingPart(this, \'noha\')">
				  <area shape="poly" coords="360,278,403,279,448,276,443,327,433,355,372,351,362,320" title="Stehno"  onclick="kinesiotapingPart(this, \'stehno\')">
				  <area shape="poly" coords="357,105,450,104,456,148,441,198,442,221,366,217,351,156"  title="Záda" onclick="kinesiotapingPart(this, \'zada\')">
				  <area shape="poly" coords="382,70,421,72,420,91,433,98,402,111,369,102,384,94" title="Krk" onclick="kinesiotapingPart(this, \'krk\')">
				  <area shape="poly" coords="362,106,340,107,329,127,327,156,350,158"  title="Rameno" onclick="kinesiotapingPart(this, \'rameno\')">
				  <area shape="poly" coords="450,103,469,104,485,142,478,157,454,156"  title="Rameno" onclick="kinesiotapingPart(this, \'rameno\')">
				  <area shape="poly" coords="329,155,354,157,351,205,358,254,362,286,360,311,334,248,326,200" title="Ruka" onclick="kinesiotapingPart(this, \'ruka\')">
				  <area shape="poly" coords="454,158,476,159,484,205,475,250,462,293,453,300,441,293,455,262,458,205,450,178" title="Ruka" onclick="kinesiotapingPart(this, \'ruka\')">
				</map>';

$container .= "<div id='kinesiotaping_all'>";

//UVOD
$container .= "<div id='uvod' class='kinesiotaping_part'>";
	$container .= "<h2>Kinesiotaping úvod</h2>";
	$container .= "<p>Kinesiotaping [ <i>kineziotejping</i> ] je fyzioterapeutická metoda vhodná pro sportovce bez narušení sportovních aktivit. Její hlavní a jedinou pomůckou je kinesiotape. Tato bavlněná páska lze natáhnout až na 160% své délky.</p>
					<p>Aplikací kinesiotapu nelze v naprosté většině nijak uškodit, proto se nemusí bát ani méně zkušený člověk.</p>";


$container .= "<div id='noha' class='kinesiotaping_part'>";
	$container .= "<h2>Kinesiotaping nohou a kotníků</h2>";
	
$container .= "</div>";
	
$container .= "<div id='holen' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping holeně</h2>";

$container .= "</div>";

// KOLENO
$container .= "<div id='koleno' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping kolene</h2>";

	$container .= "<h3>Pevna fixace čéšky</h3>
					<p>Popis problému:</p>";
	
	$container .= "<h3>Podpora čéšky</h3>
					<p><strong>Popis problému:</strong>
						<ul>
							<li>Tlak ze spodní části čéšky působí nekomfortní bolest při pohybu kolene.</li>
							<li>Pocit je podobný nateklému kolenu.</li>
						</ul>
					</p>
					
					<p><strong>Postup tejpování:</strong>
						<ol>
							<li>Připravíme si tejp o normální šířce a délce cca 10cm.</li>
							<li>Napnutý (možno napnout silněji) tejp nalepíme tak, aby střed byl na ose čéšky a současně čéšku do výšky 1-2 cm překrýval.</li>
							<li>Báze (konce) přilepíme bez napnutí.</li>
						</ol>
					</p>
			";
	

$container .= "</div>";

$container .= "<div id='stehno' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping stehen</h2>";

$container .= "</div>";

$container .= "<div id='bricho' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping břicha a hrudníku</h2>";

$container .= "</div>";

$container .= "<div id='rameno' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping ramene</h2>";

$container .= "</div>";

$container .= "<div id='ruka' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping rukou</h2>";

$container .= "</div>";

$container .= "<div id='lytko' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping lýtek a achilovek</h2>";

$container .= "</div>";

$container .= "<div id='zada' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping zad</h2>";

$container .= "</div>";

$container .= "<div id='krk' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping krku</h2>";

$container .= "</div>";

$container .= "<div id='oblicej' class='kinesiotaping_part'>";
$container .= "<h2>Kinesiotaping obličeje</h2>";

$container .= "</div>";

if(isset($_GET['part']) && $_GET['part'] != ""){
	$part = $_GET['part'];
	$container .= "<script>
			all = document.getElementById('test')
			kinesiotapingPart(all, \'uvod\')
								</script>";
	
}else{
	$container .= "<script>all = document.getElementById('test')
			kinesiotapingPart(all, \'uvod\')
	</script>";
}


$container .= "</div>";


return $container;