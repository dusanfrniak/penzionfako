<?php
$counterFile = __DIR__ . '/counter.txt';
if (file_exists($counterFile)) {
    $count = (int)file_get_contents($counterFile);
} else {
    $count = 0;
}
$count++;
file_put_contents($counterFile, $count);
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Penzión FAKO, Liptovský Mikuláš</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
  <body class="landing is-preload">
    <!-- Page Wrapper -->
    <div id="page-wrapper">
      <!-- Header -->
      <header id="header" class="alt">
        <h1><a href="index.php">Penzión FAKO</a></h1>
        <nav id="nav">
          <ul>
            <li class="special">
              <a href="#menu" class="menuToggle"><span>Menu</span></a>
              <div id="menu">
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="cennik.html">Ceny</a></li>
                  <li><a href="galeria.html">Galéria</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </header>
      <!-- Banner -->
      <section id="banner">
        <div class="inner">
          <h2>Penzión FAKO</h2>
          <p>Vitajte<br /></p>
          <ul class="actions special">
            <li><a href="index_gb.html" class="button primary">English</a></li>
            <li><a href="index_pl.html" class="button primary">Polski</a></li>
          </ul>
        </div>
        <a href="#one" class="more scrolly">Kontakt</a>
      </section>
      <!-- Two -->
      <section id="two" class="wrapper alt style2">
        <section class="spotlight">
          <div class="image"><img src="images/2V8A3110.jpg" alt="" /></div><div class="content">
            <h2>Penzión FAKO<br /></h2>
            <p>
              Penzión FAKO je svojím štýlovým interiérom, kvalitnými službami a ústretovým personálom vhodný pre rodiny s deťmi, mladých ľudí, obchodných cestujúcich, skupiny či jednotlivcov. Hostia majú k dispozícii izby s kompletným vybavením s vlastnou kúpeľnou a toaletou, kuchynským kútikom, internetové pripojenie, zastrešený záhradný bazén a bezplatné parkovisko.
              Nachádzajú sa v tichom prostredí mesta Liptovský Mikuláš, s ľahkým prístupom k hlavnej trase. V ich blízkosti sú príležitosti k športu aj relaxácii: lyžiarske stredisko Opalisko v Závažnej Porube, motokárová dráha Monaco Grand Prix, termálne kúpaliská v Liptovskom Jáne, najväčší aquapark na Slovensku Tatralandia, najznámejšie a najväčšie lyžiarske stredisko Jasná, Demänovské jaskyne, cyklistické a turistické trasy v Žiarskej doline.
              Ak sa rozhodnete ubytovať v našich zariadeniach, ste u nás srdečne vítaní.
              Príjmite pozvanie a vyberte si z našej ponuky
            </p>
          </div>
        </section>
        <section class="spotlight">
          <div class="image"><img src="images/2V8A3144.jpg" alt="" /></div><div class="content">
            <h2>Penzión Fako - štúdiá s balkónom<br /></h2>
            <p>
              Moderne a účelne vybavené štúdiá, v ktorých nájdete:<br />
              • LCD TV<br />
              • satelitný príjem<br />
              • pripojenie na internet WiFi zdarma<br />
              • vlastná kúpeľňa a toaleta<br />
              • veľký slnečný balkón s posedením.<br />
              • malý kuchynský kútik s vybavením
            </p>
          </div>
        </section>
        <section class="spotlight">
          <div class="image"><img src="images/2V8A3078.jpg" alt="" /></div><div class="content">
            <h2>Penzión Fako - Apartmány s balkónom <br /></h2>
            <p>
              Apartmán pozostáva z 2 izieb, spálne s dvoma pevnými lôžkami a obývacej časti s možnosťou 2-3 prísteliek. Je vybavený:<br />
              • LCD TV<br />
              • satelitný príjem<br />
              • pripojenie na internet WiFi zdarma<br />
              • kompletne zariadená kuchyňa s jedálenským stolom
              • vlastná kúpeľňa a toaleta<br />
              • veľký slnečný balkón s posedením.<br />
            </p>
          </div>
        </section>
        <section class="spotlight">
          <div class="image"><img src="images/2V8A3071.jpg" alt="" /></div><div class="content">
            <h2>Apartmány Fako - bez balkónov <br /></h2>
            <p>Apartmány sú umiestnené v samostatnej budove, ktorá sa nachádza v tesnej blízkosti penziónu. Hostia ubytovaní v apartmánoch majú k dispozícii všetky služby a vybavenie penziónu FAKO, vrátane záhradného bazéna, tenisového kurtu a bezplatného parkovania.</p>
            <p>
              4 moderné a účelne vybavené Apartmány, v ktorých nájdete:<br />
              • LCD TV<br />
              • satelitný príjem<br />
              • pripojenie na internet WiFi zdarma<br />
              • vlastná kúpeľňa a toaleta<br />
              • apartmánové izby nemajú balkón<br />
              • kompletne zariadená kuchyňa s jedálenským stolom
            </p>
          </div>
        </section>
      </section>
      <!-- Three -->
      <section id="three" class="wrapper style3 special">
        <div class="inner">
          <header class="major">
            <h2>Dalej ponúkame: </h2>
            <p>
              Možnosť zapožičania detskej postieľky na Vašu izbu. V tesnej blízkosti penziónu sa nachádza záhradný bazén ( v prevádzke JÚL - AUGUST )
              a tenisový antukový kurt s možnosťou prenajatia. Parkovanie je zabezpečené priamo v objekte bezplatne.
            </p>
          </header>
          <ul class="features">
            <li class="icon fa-paper-plane">
              <h3>Detská postieľka</h3>
              <p>Možnosť zapožičania detskej postieľky na Vašu izbu.</p>
            </li>
            <li class="icon solid fa-paper-plane">
              <h3>Prístelka</h3>
              <p>Možnosť pridania jednej prístelky do každého študia.</p>
            </li>
            <li class="icon solid fa-paper-plane">
              <h3>Bazén</h3>
              <p>V tesnej blízkosti penziónu sa nachádza záhradný bazén (v prevádzke JÚL - AUGUST).</p>
            </li>
            <li class="icon solid fa-paper-plane">
              <h3>Tenisový kurt</h3>
              <p>V tesnej blízkosti penziónu sa nachádza aj tenisový antukový kurt s možnosťou prenajatia.</p>
            </li>
            <li class="icon fa-paper-plane">
              <h3>Parkovanie</h3>
              <p>Parkovanie je zabezpečené priamo v objekte bezplatne.</p>
            </li>
            <li class="icon fa-paper-plane">
              <h3>Wifi</h3>
              <p>Bezplatné pripojenie na internet WiFi je k dispozícii vo všetkých priestoroch penziónu.</p>
            </li>
          </ul>
        </div>
      </section>
      <!-- One -->
      <section id="one" class="wrapper style4 special">
        <div class="inner">
          <ul class="icons major">
            <li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
            <li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
            <li><span class="icon solid fa-code major style3"><span class="label">Dolor</span></span></li>
          </ul>
          <header class="major">
            <h2>Penzión FAKO<br /></h2>
            </p>Kláštorná 907<br />
            031 04 Liptovský Mikuláš<br />
            Slovenská republika<br />
            <a href="tel:+421918832275">+421 918 832 275</a><br />
            <a href="mailto:penzionfako@gmail.com">e-mail: penzionfako@gmail.com</a></p>
            <li><a href="https://www.google.com/maps/dir//Penzi%C3%B3n+Fako/@49.0724928,19.6515216,300m" class="icon solid fa-map-pin">Google Maps<span class="label">Maps</span></a></li>
          </header>
        </div>
      </section>
      <!-- Footer -->
      <footer id="footer">
        <ul class="icons">
          <li><a href="tel:+421918832275" class="icon solid fa-phone"> +421 918 832 275<span class="label">Phone</span></a></li>
          <li><a href="mailto:penzionfako@gmail.com" class="icon solid fa-envelope">penzionfako@gmail.com<span class="label">Email</span></a></li>
          <li><a href="https://www.google.com/maps/dir//Penzi%C3%B3n+Fako/@49.0724928,19.6515216,300m" class="icon solid fa-map-pin">Google Maps<span class="label">Maps</span></a></li>
        </ul>
        <ul class="copyright">
          <li>&copy; 2026 df </li>
          <li>Design: <a href="http://html5up.net">HTML5 UP </a></li>
          <p>Túto stránku navštívilo <strong><?php echo $count; ?></strong> návštevníkov.</p>
        </ul>
      </footer>
    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>