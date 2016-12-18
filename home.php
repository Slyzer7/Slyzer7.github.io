<!DOCTYPE html>
<html>
<head>

	<meta charset="uft-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Kingdom Hearts 2.8</title>

	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	
</head>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
$(function() {

    var $sidebar   = $("#sidebar"), 
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });
    
});

</script>


<style>

	*{
		margin: 0;
		padding: 0;
	}

	body{
		background-color: #E6E6FA;
	}

	header{
		background-color: #191929;
		height: 75px;
		widths: auto;
	}

	nav{
		float: right;
		padding: 15px 10px 0 0;
	}

	nav ul li{
		display: inline-block;
		padding: 9px;
		font-size: 20px;
	}

	nav ul li a{
		text-decoration: none;
		color: #F5F5F5;
		padding: 15px;
	}

	nav ul li a:hover{
		color: violet;
		transition: all 0.3s ease 0s;
	}

	#sidebar{
		height: 237px;
		width: 120px;
		border: 3.3px solid #0A0A0A;
		background-color: #191929;
		border-radius: 6px;
		float: right;
		padding: 18px;
		margin: 4px 15px 12px;
		opacity: 0.97;
	}

	#sidebar2{
		height: auto;
		width: auto;
		border-bottom: 3.3px solid #191929;
		padding: 0;
		margin: 0px 0px 5px 0px;
	}

	.russia{
		padding: 20px;
		font-family: arial;
		font-size: 15px;
		text-align: left;
		width: 75%;
	}

	#menu-icon{
		display: hidden;
		width: 40px;
		height: 40px;
		background-size: 37px;
	}

	footer{
		background: #191929;
		opacity: 0.9;
		width: 100%;
		margin-top: 5%;
		padding: 1% 0;
		overflow: auto;
		color: #fff;
	}

	footer p{
		color: #fff;
		text-align: center;
	}

	.new ul li{
		list-style-type: none;
		padding: 5px;
		font-size: 17px;
		font-family: arial;
	}

	.new ul li a{
		text-decoration: none;
		color: white;
		font-family: arial;
	}

	.new ul li a:hover{
		color: violet;
		transition: all 0.3s ease 0s;
	}

	button{
	color: white;
	border: 2px solid white;
	border-radius: 2px;
	background-color: #191929;
	transition: all 0.3s ease 0s;
}

	button:hover{
	background-color: violet;
	}


/*----PARALLAX SECTION START-----*/
	.parallax-1{
		background: url("http://wallpaperstock.net/stars-night-snow-forest-house-wallpapers_42514_1920x1080.jpg") repeat fixed 100%;
	}

	.parallax-inner{
		padding: 55px;
		font-family: arial;
	}

	.parallax-inner h2, .parallax-inner p {
		color: #F0F0F0;
	}
/*-----END PARALLAX SECTION----*/

	@media screen and (max-width: 780px){

	*{
		margin: 0;
	}

	#menu-icon{
		display: inline-block;
		background: black;
		border: 1px solid grey;
		border-radius: 5px;
	}

	nav ul,nav:active ul{
		display: none;
		z-index: 1000;
		position: absolute;
		padding: 10px;
		background: #191929;
		right: 25px;
		top: 30px;
		border: 2px solid #F0F0F0;
		border-radius: 8px 8px 8px 8px;
		width: 45%;
		opacity: 0.92;
	}

	nav:hover ul{
		display: block;
	}

	nav li{
		text-align: center;
		width: 100%;
		padding: 10px 0;
	}

	nav li a {
		text-align: center;
		display: inline-block;
	}

	#sidebar{
		display: none;
	}

	#sidebar2{
		height: auto;
		width: 93%;
		border: 3px solid #191929;
		border-radius: 6px;
		padding: 0;
		margin: 8px 8px;
	}

	.new ul li{
		list-style-type: none;
		padding: 5px;
		font-size: 17px;
		text-align: center;
	}

	.russia{
		width: 85%;
	}

	.parallax-1{
		background: url("http://wallpaperstock.net/stars-night-snow-forest-house-wallpapers_42514_1920x1080.jpg") repeat fixed 100%;
		text-align: center;
	}

	button{
	color: white;
	border: 2px solid white;
	border-radius: 2px;
	background-color: #191929;
	transition: all 0.3s ease 0s;
	}

	button:hover{
	background-color: violet;
	}

}

</style>

<a name="home">

<body>

<header>
	<div>
		<nav>
			<a href="#" id="menu-icon"></a>
			<ul>
				<li><a href="https://www.theguardian.com/world/russia">News</a><a href="https://www.google.com/">Google</a> <a href="#ref">References</a> <a href="logout.php"><button>Logout</button></a></li>
			</ul>
		</nav>
	</div>
</header>


<!--PARALLAX SECTION START-->
<div id="sidebar2">

<section class="parallax-1">
	<div class="parallax-inner">
		<h2>History of Russia</h2>
		<p style="font-size: 20px;">One of the most complex histories on the planet.</p>
	</div>
</section>

</div>
<!--PARALLAX SECTION END-->


<div id="sidebar">
	<section class="new">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#russia">Russia</a></li>
				<li><a href="#crimea">Crimea</a></li>
				<li><a href="#Soviet_Union">Soviet Union</a></li>
				<li><a href="#Cold_war">Cold War</a></li>
				<li><a href="#Fall_of_the_USSR">Fall of The USSR</a></li>
				<li><a href="#Modern Times">Modern Times</a></li>
			</ul>
	</section>
</div>

<a name="russia">

<div class="russia">
	<h3>Russia</h3>

	<br>

	<p>The Russian Federation, known by most as just Russia, is a federal state in Eurasia. Russia is the largest country in the world at 17,075,200 square kilometres by surface area, covering more than one eighth of Earth's inhabited land, and the ninth most populous, with over 146.6 million people as of end of March 2016. The European western part of the country is much more populated and urbanised than the East, with almost eight-tenths of the population living within the European region of Russia. Russia's capital, Moscow is one of the largest cities in Europe and the world. Its ohter major urban cities include Saint Petersburg, Novosibirsk, Yekaterinburg, Nizhny Novgorod and Samara.</p>

	<br>

	<p>Extending across the entirety of Northern Asia and even most of Eastern Europe, Russia spans a total of eleven time zones and incorporates a variety environments within it. From northwest to southeast, Russia shares a number of different land borders with the following countries: Finland, Norway, Estonia, Latvia, Lithuania, Poland, Belarus, Ukraine, Georgia, Azerbaijan, Kazakhstan, China, Mongolia, and even North Korea. It shares maritime borders with The State of Japan by the Sea of Okhotsk and the American state of Alaska across the Bering Strait.</p>

	<br>

	<p>What would later be know as Russia' history began with that of the East Slavs, whom only emerged as their own distinct group within Europe somewhere between the 3rd and 8th centuries AD. Founded and ruled by a Varangian warrior and his descendants, the medieval state of 'Rus' finally arose around the 9th century. In 988 AD it adopted Orthodox Christianity from the neighboring Byzantine Empire, beginning a sort of synthesis of Byzantine and Slavic cultures that went on to define Russian culture for the next 1000 years. The State of Rus eventually disintegrated into a variety of smaller states; with most of former states territories overrun by the Mongol invasion, leading to them eventually becoming tributaries of the nomadic Golden Horde around 13th century. The Grand Duchy of Moscow gradually reunified the surrounding Russian principalities, achieved independence from the Golden Horde, and came to dominate the cultural and political legacy of Kievan Rus'. By the 18th century, the nation had greatly expanded through its imperialism, annexation of surrounding lands, and exploration to eventually become the Russian Empire, which, to this day, was the third largest empire in all of human history, stretching its borders from Poland on the west of Europe, to Alaska on the east of North America. Following the Communist Revolution, Russia, also known as the Russian Soviet Federative Socialist Republic became the largest and also the leading state of the Union of Soviet Socialist Republics, the world's first constitutionally socialist state. The Soviet Union when on to play a decisive role in the Allied victory in World War II against Hitler's Nazi Germany, and emerged as a globally recognized superpower and from the 1950's to the 1990's, rival the United States of America during the Cold War.  
	</p>

	<br>

	<p>It was during this time frame that humanity would see some of the most significant technological advancements of the 20th century, including the world's first successful satellite and the launching of the first humans into orbit. By the end of 1990, the Soviet Union had the world's second largest economy, largest standing military in the world and the largest stockpile of nuclear weapons. Following the partition of the Soviet Union in 1991, fourteen independent republics emerged from the fallen USSR; as the largest, most populous, and most economically developed republic, the Russian SFSR reconstituted itself as the Russian Federation and is recognized as the continuing legal personality and sole successor state of the Soviet Union.</p>

	<br>

	<p>The name Russia is derived from the name of a medieval nation populated by East Slavs once known as Rus. This proper name became more prominent later in history, and the country was usually called by its population as the "Russian Land" or the "Land of Rus'". In order to distinguish this nation from any of the other nations derived from it, it is denoted as "Kievan Rus" by most modern historiography. The name 'Rus' itself comes from the Rus people, a group of Varangians who founded the nation-state of Rus. An old Latin version of the name Rus' was Ruthenia, mostly applied to the southern and western regions of Rus' that were adjacent to then Catholic Europe. The current name of the country comes from the Byzantine Greek designation of the Kievan Rus in Modern Greek. The common word to refer to a citizen of the Russian Federation is "Russian".</p>

	<br>

</div>



<a name="crimea">



<div class="russia">
	<h3>Crimea</h3>

	<br>

	<p>Crimea, is a relatively small mass of land on the northern coast of the Black Sea. Crimea is located south of Kherson, a location within Ukraine and west of Kuban, a location within the Russian Federation. It is also connected to The Kherson Oblast by the Isthmus of Perekop and is separated from Kuban by the Strait of Kerch. The Arabat Spit is located to the northeast, a narrow strip of land that separates a system of lagoons named Sivash from the Sea of Azov. Crimea has historically been at the boundary between the classical world and the Pontic-Caspian steppe. Its southern fringe has been colonised by the ancient Greeks, the Persian Empire, the Roman Empire, the Byzantine Empire, the Crimean Goths, the Genoese and eventually the Ottoman Empire, while at the same time its interior was occupied by invading steppe nomads, such as the Cimmerians, Alans, Scythians, Sarmatians, Goths, Bulgars, The Huns, Khazars, Kipchaks, and finally, the Golden Horde. Crimea and its adjacent territories were united in the Crimean Khanate during the 15th to 18th century. It eventually become a part of the Russian Empire before it was given to Soviet Ukraine by Soviet Russia as a sign of the companionship between the two nations.</p>

	<br>

	<p>As of 2016, it is a de-facto republic within the Russian Federation, due to the 2014 annexation of Crimea by the Russian Federation. Russia's annexation of Crimea is seen as a violation of international law by most UN members states and has lead to heavy sanctions against the Russian Federation.</p>

	<br>

</div>



<a name="Soviet_Union">



<div class="russia">
	<h3>Soviet Union</h3>

	<br>

	<p>The Soviet Union, officially called the Union of Soviet Socialist Republics (USSR), was at one time a communist state in Eurasia that existed as a political entity from the year 1922 to the year 1991. A union of multiple seperate Soviet republics, its government and economy were highly centralized, as is expected of a communist country. The Soviet Union was a single-party federation, governed by the Communist Party of the USSR with Moscow as the union's capital.</p>

	<br>

	<p>The Soviet Union had its beginnings in the October Revolution of 1917, when the Bolsheviks, led by revolutionary leader Vladimir Lenin, overthrew the provisional government that had replaced the Tsar of the Russian Empire. They established the Russian Socialist Federative Soviet Republic, beginning a civil war in Russia between the revolutionary Red Army and the counter-revolutionary White Army. The Red Army entered several territories of the former Russian Empire and helped local Communists militias take power through soviets, which nominally acted on behalf of the workers and peasant population.</p>

	<br>

	<p>In the year 1922, four years after the end of the First World War, the Communists were the victorious force in the Russian Civil War, forming the Soviet Union with the unification of the Russian, Ukrainian, Transcaucasian, and Byelorussian republics. Following Vladimir Lenin's death in the year 1924, Joseph Stalin came to power around the mid-1920's as the last man stading from the turmoil that began after Lenin's death. Stalin managed to suppressed all political opposition to his dictatorship, implemented the state ideology of Marxism-Leninism, and implemented the USSR's centrally planned command economy. As a result, the union began a period of rapid industrialization and collectivization which laid the ground work for its eventual victory in World War II against Hitler's Nazi Germany and its post-second world war dominance of the eastern half of Europe. Stalin also fomented political paranoia within the USSR, and conducted a purge known as the "great purge" to remove his enemies from the Communist Party and further secure his power within the Soviet Union.</p>

	<br>

</div>



<a name="Cold_war">



<div class="russia">
	<h3>Cold War</h3>

	<br>

	<p>The Cold War was a state of political and military tension after the Second World War between the states in the Western Bloc, lead by the United States, and the states in the Eastern Bloc (controlled by the USSR). Even thou historians do not fully agree on the dates, a common timeframe for the beginning and end of the cold war is between the year 1947, the very year the Truman Doctrine, a U.S. policy pledging support to any nation threatened by Soviet expansionism, was put into effect, and 1991, the year the Soviet Union finally collapsed.</p>

	<br>

	<p>The term "cold war" is used by historians because there was no outright war between the USA and the USSR, though there were major proxy wars, supported by the two rival nations. The Cold War split the temporary wartime alliance against Nazi Germany, leaving the Soviet Union and the United States as the two sole superpowers with profound economic and political differences. The USSR was a Communist state ruled by the Communist Party of the USSR with the help of its secret police, who were under the command of the USSR's dictator. The Communist Party controlled the media, the military and the economy. It also controlled the other nations in the Eastern bloc, and funded Communist parties around the world, sometimes in direct competition with The People's Republic of China, following the Sino-Soviet split of the 1960's. In opposition to the USSR were the western countries of NATO, mostly democratic and capitalist with a free press and mostly independent organizations. A third neutral bloc arose called the Non-Aligned Movement; it sought good relations with both sides of the cold war. The two superpowers never engaged directly in full-scale war, but they were heavily armed in preparation for an all-out third world war, this time however, with the aid of nuclear weapons on both sides. Each side had a nuclear deterrent that discouraged an attack by the other side, on the basis that such an attack would lead to total destruction of both nations. Aside from the development of the two sides' nuclear arsenals, and deployment of conventional military forces, the struggle for dominance was expressed across regional proxy wars around the globe, massive propaganda campaigns by both nations, espionage, rivalry at international sports events, and technological competitions such as the Space Race of the 1960's.</p>

	<br>

</div>


<a name="Fall_of_the_USSR">


<div class="russia">
	<h3>Fall of The USSR</h3>

	<br>

	<p>The USSR was finally fell on December 26, 1991, as a result of the declaration no. 142-H of the Soviet of the Republics of the Supreme Soviet of the Soviet Union. What the declaration did was acknowledged the independence of the former Soviet republics and created the Commonwealth of Independent States, of which some states chose not to participate in at all. On the previous day, The final Soviet President Mikhail Gorbachev, resigned, declared his office extinct, and handed over its powers, including control of the Soviet Union's nuclear missile launching codes to then Russian President Boris Yeltsin. This was the final day of the Soviet Union.</p>

	<br>

</div>


<a name="Modern Times">

<div class="russia">
	<h3>Modern Times</h3>

	<br>

	<p>As of 2015, the size Russian Federation's economy currently ranks as the twelfth largest in the world by nominal GDP and sixth largest by purchasing power parity (PPP). Russia's massive mineral and energy reserves are the largest in the world, making it one of the leading producers of oil and natural gas globally. The country is also one of the five officially recognized nuclear weapons states in the world and possesses the largest stockpile of nuclear weapons as well.</p>

	<br>

</div>


<br>

<a name="ref">

<div class="russia">
	<h4>References</h4>

	<br>

	<ol style="text-decoration: none; color: grey; font-family: times; text-align: left;
		width: 75%; list-style-type: none;">
		<li><a href="https://en.wikipedia.org/wiki/Russia<">https://en.wikipedia.org/wiki/Russia</a></li>
		<br>
		<li><a href="https://en.wikipedia.org/wiki/Dissolution_of_the_Soviet_Union">https://en.wikipedia.org/wiki/Dissolution_of_the_Soviet_Union</a></li>
		<br>
		<li><a href="https://en.wikipedia.org/wiki/Cold_War">https://en.wikipedia.org/wiki/Cold_War</a></li>
		<br>
		<li><a href="https://en.wikipedia.org/wiki/Crimea">https://en.wikipedia.org/wiki/Crimea</a></li>
		<br>
		<li><a href="https://en.wikipedia.org/wiki/Union_of_Soviet_Socialist_Republics">https://en.wikipedia.org/wiki/Union_of_Soviet_Socialist_Republics</a></li>
	</ol>
</div>


<footer>
	<p>&copy; Template 1 </p>
</footer>


</body>
</html>