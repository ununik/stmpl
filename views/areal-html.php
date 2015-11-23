<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 2. 8. 2015
 * Time: 7:45
 */

return "<h1>Areál</h1>
        <div id='areal_popis'>
            <p>Klub biatlonu Staré Město pod Landštejnem má jedinečnou tréninkovou lokalitu - střelnici s běžeckými okruhy pod hrází vodní nádrže Landštejn.</p>
            <p>Sřelnice je vybavena 25 mechanickými stavy na které je možno střílet dlouhými zbraněmi ráže .22 lr (na 50m) nebo vzduchovými puškami (na 10m).</p>
            <p>V areálu se nachází 8 běžeckých okruhů s různou terenní obtížností.</p>
            <p>V dosahu areálu je cyklostezka, vhodná k inline bruslení i jízdě na kolečkových lyžích.</p>
            <p>GPS: <strong><a href='http://mapy.cz/zakladni?x=15.2452606&y=49.0181835&z=17&source=coor&id=15.244692%2C49.018282' target='_blank'>N:49.018282 E:15.244692</a></strong></p>
        </div>
        <h2 class='areal_nadpis'>Plán tratí</h2>
        <img src='images/areal/trate.png' id='plan_trati'>
        <table class='plan_trati'>
        <tr>
            <td><img src='images/areal/cervena.png'></td><td>1,40 km</td>
        </tr><tr>
            <td><img src='images/areal/cerna.png'></td><td>1,33 km</td>
        </tr><tr>
            <td><img src='images/areal/hneda.png'></td><td>1,25 km</td>
        </tr><tr>
            <td><img src='images/areal/modra.png'></td><td>1,20 km</td>
        </tr><tr>
            <td><img src='images/areal/zluta.png'></td><td>1,00 km</td>
        </tr><tr>
            <td><img src='images/areal/seda.png'></td><td>0,75 km</td>
        </tr><tr>
            <td><img src='images/areal/zelena.png'></td><td>0,66 km</td>
        </tr><tr>
            <td><img src='images/areal/fialova.png'></td><td>0,50 km</td>
        </tr>
        </table>
        <div id='foto_z_trati'><h2>Fotografie z trati</h2>
            <a href='images/areal/trat/1000/1.jpg' rel='lightbox[trat]'><img src='images/areal/trat/250/1.jpg'></a>
            <a href='images/areal/trat/1000/2.jpg' rel='lightbox[trat]'><img src='images/areal/trat/250/2.jpg'></a>
            <a href='images/areal/trat/1000/3.jpg' rel='lightbox[trat]'><img src='images/areal/trat/250/3.jpg'></a>
        </div>
        <div id='foto_ze_strelnice'><h2>Fotografie ze střelnice</h2>
            <a href='images/areal/strelnice/1000/_H107628.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H107628.jpg'></a>
            <a href='images/areal/strelnice/1000/_H107643.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H107643.jpg'></a>
            <a href='images/areal/strelnice/1000/_H107849.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H107849.jpg'></a>
            <a href='images/areal/strelnice/1000/_H108069.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H108069.jpg'></a>
            <a href='images/areal/strelnice/1000/_H108065.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H108065.jpg'></a>
            <a href='images/areal/strelnice/1000/_H108053.jpg' rel='lightbox[strelnice]'><img src='images/areal/strelnice/250/_H108053.jpg'></a>

        </div>
		<div class='clearBoth zajimavosti'>
		<h2  class='areal_nadpis'>Zajímavosti v okolí</h2>
		<h3><img onclick='zajimavosti_roll_out(\"hrad_landstejn\")' src='images/areal/arrowDown.png' class='arrow_down'>Hrad Landštejn (<small>2km</small>)</h3>
			<div id='hrad_landstejn'>
				<p>
					Dominantou okolí Starého Města pod Landštejnem je bezesporu hrad Landštejn. Tento hrad z období Přemysla Otakara I. střeží hranici Čech, Moravy a Rakouska.
			Z hlavní věže si lze prohlédnout nejen hradní komplex, ale za přívětivého počasí i 140km vzdálené vrcholky Dolnorakouských Alp. 
				</p>
				<p><iframe src='//api.mapy.cz/frame?params=%7B%22x%22%3A15.243021558778452%2C%22y%22%3A49.02265068929559%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A13%2C%22url%22%3A%22http%3A%2F%2Fmapy.cz%2Fs%2FmGSc%22%2C%22mark%22%3A%7B%22x%22%3A%2215.230211328523314%22%2C%22y%22%3A%2249.02432160393407%22%2C%22title%22%3A%22St%C3%A1tn%C3%AD%20hrad%20Land%C5%A1tejn%22%7D%2C%22overview%22%3Afalse%7D&amp;width=700&amp;height=200' width='700' height='200' style='border:none' frameBorder='0'></iframe></p>
				<p><a href='http://www.hrad-landstejn.eu/' target='_blank'>www.hrad-landstejn.eu</a></p>
			</div>
		
		<h3><img onclick='zajimavosti_roll_out(\"bizoni_farma\")' src='images/areal/arrowDown.png' class='arrow_down'>Bizoní farma (<small>5km</small>)</h3>
			<div id='bizoni_farma'>
				<p>
					Bizon americký (Bison bison) je velmi netradiční exemplář v české fauně. Směrem k rakouským hranicím se nachází celá farma.   
				</p>
				<p><iframe src='//api.mapy.cz/frame?params=%7B%22x%22%3A15.214099064469139%2C%22y%22%3A48.99709081913072%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A12%2C%22url%22%3A%22http%3A%2F%2Fmapy.cz%2Fs%2FmGTl%22%2C%22mark%22%3A%7B%22x%22%3A%2215.242187157273094%22%2C%22y%22%3A%2248.977877244795295%22%2C%22title%22%3A%2248%C2%B058'40.358%5C%22N%2015%C2%B014'31.874%5C%22E%22%7D%2C%22overview%22%3Afalse%7D&amp;width=700&amp;height=200' width='700' height='200' style='border:none' frameBorder='0'></iframe></p>
		</div>
		
		<h3><img onclick='zajimavosti_roll_out(\"jindrichohradecka_uzkokolejka\")' src='images/areal/arrowDown.png' class='arrow_down'>Jindřichohradecká úzkokolejka - Nová Bystřice (<small>8km</small>)</h3>
			<div id='jindrichohradecka_uzkokolejka'>
				<p>
					Poslední úzkorozchodná železnice v Čechách spojuje Jindřichův Hradec a Novou Bystřici. Od května do září vyjíždí na trať parní lokomotiva, po zbytek roku jezdí po trati motoráček.   
				</p>
				<p><iframe src='//api.mapy.cz/frame?params=%7B%22x%22%3A15.18595464527587%2C%22y%22%3A49.02571613640858%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A12%2C%22url%22%3A%22http%3A%2F%2Fmapy.cz%2Fs%2FmGSW%22%2C%22mark%22%3A%7B%22x%22%3A%2215.137825086712638%22%2C%22y%22%3A%2249.02980337023833%22%2C%22title%22%3A%22Albe%C5%99%20103%2C%20Nov%C3%A1%20Byst%C5%99ice%22%7D%2C%22overview%22%3Afalse%7D&amp;width=700&amp;height=200' width='700' height='200' style='border:none' frameBorder='0'></iframe></p>
				<p><a href='http://jhmd.cz/' target='_blank'>jhmd.cz</a></p>
			</div>
		
		<h3><img onclick='zajimavosti_roll_out(\"slavonice\")' src='images/areal/arrowDown.png' class='arrow_down'>Slavonice (<small>10km</small>)</h3>
			<div id='slavonice'>
				<p>
					Typické jihočeské město s renesančním jádrem je velmi příjemným zpestřením přírodních krás České Kanady.
				</p>
				<p>
					Dech dějin minulého století je cítit ze zrekonstruovaného opevnění z roku 1938 v Pevnostním areálu Slavonice.
				</p>
				<p><iframe src='//api.mapy.cz/frame?params=%7B%22x%22%3A15.291113052244327%2C%22y%22%3A49.014030244923866%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A12%2C%22url%22%3A%22http%3A%2F%2Fmapy.cz%2Fs%2FmGSM%22%2C%22mark%22%3A%7B%22x%22%3A%2215.351537856931834%22%2C%22y%22%3A%2248.99753333102879%22%2C%22title%22%3A%22Slavonice%22%7D%2C%22overview%22%3Afalse%7D&amp;width=700&amp;height=200' width='700' height='200' style='border:none' frameBorder='0'></iframe></p>
			</div>
		</div>
        ";