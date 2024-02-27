<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CURIO</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="a-background" id="header">
            <div class="wrapper">
                <div class="nav-bar">
                    <img src="images/logos/curio-13-midden-blauw-logo-rgb.png" alt="" class="curio-logo">
                    <div class="nav-menu">
                        <nav>
                            <a href="">HOME</a>
                            <a href="">ROOSTER/VAKKEN</a>
                            <a href="">DOCENTEN</a>                              
                            <a href="">TRAJECT</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="content">
          <div class="background">
              <div class="wrapper">
                  <div class="info-bg">
                    <div class="info-opl">
                      <h2>Informatie Opleiding</h2>
                      <h4>In de opleiding Software Developer op mbo-niveau doe je uitgebreide kennis op over het ontwikkelen van apps en programmeren. Je wordt een specialist in talen zoals C#, PHP en Javascript. Of het nu gaat om het creëren van apps, websites, toepassingssoftware of mediaproducten, je hebt de vaardigheden om precies te begrijpen wat de klant nodig heeft en kunt deze wensen omzetten in realiteit. Je bent pas tevreden als de apps die je ontwikkelt foutloos functioneren, door ze grondig te testen tot ze aan alle eisen voldoen.</h4>
                  </div>
                </div>
              </div>
          </div>
          <section id="rooster">
            <div class="b-background">
                <div class="wrapper rooster">
                    <h1><span class="letterROO">ROO</span>STER</h1>
                    <div class="containers-rooster">
                        <img src="images/Rooster eerste leerjaar.png" alt="" class="roosterfoto">
                        <div class="rooster-info">
                            <h1>ROOSTER</h1>
                            <p>de start- en eindtijden van de schooldagen verschillen aanzienlijk. Sommige dagen beginnen vroeg in de ochtend, terwijl andere dagen juist een late start hebben. Dit specifieke voorbeeld beschrijft het rooster van een klas in blok A, wat af te leiden is aan de hand van de aangeboden vakken.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="vakken">
            <div class="wrapper vakken">
                <div class="head-vakken">
                    <h2><span class="letterVA">VA</span>KKEN</h2>
                </div>
            </div>
        </section>
        <section id="traject">
            <div class="wrapper traject">
                <div class="head-traject">
                    <h2><span class="letterTRA">TRA</span>JECT</h2>
                </div>
                <div class="wrapper rooster">
                    <h1><span class="letterROO">ROO</span>STERS EN VAKKEN</h1>
                    <div class="containers">
                    </div>
                </div>
            </div>
        </section>
      </div>
    </main>
    <script>
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

var header = document.getElementById("header");
var sticky = header.offsetTop;

// Modified myFunction using debounce
var myFunction = debounce(function() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}, 10); // Adjust the debounce time (10ms) as needed

window.onscroll = function() {
    myFunction();
};

    </script>
</body>
</html>
