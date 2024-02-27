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
                  <div class="info-opl">
                    <div class="info-bg">
                      <h2>Informatie Opleiding</h2>
                      <h4>In de opleiding Software Developer op mbo-niveau doe je uitgebreide kennis op over het ontwikkelen van apps en programmeren. Je wordt een specialist in talen zoals C#, PHP en Javascript. Of het nu gaat om het creëren van apps, websites, toepassingssoftware of mediaproducten, je hebt de vaardigheden om precies te begrijpen wat de klant nodig heeft en kunt deze wensen omzetten in realiteit. Je bent pas tevreden als de apps die je ontwikkelt foutloos functioneren, door ze grondig te testen tot ze aan alle eisen voldoen.</h4>
                  </div>
                </div>
              </div>
          </div>
          <section id="rooster">
            <div class="b-background">
                <div class="wrapper rooster">
                    <h1><span class="letterROO">ROO</span>STERS EN VAKKEN</h1>
                    <div class="containers">
                        <div class="rooster-container">
                            <img src="img/Icon_coffee.png" alt="" />
                            <h2>COFFEE</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_instant.png" alt="" />
                            <h2>INSTANT</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_serious.png" alt="" />
                            <h2>SERIOUS</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_frame.png" alt="" />
                            <h2>FRAME</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="docenten">
            <div class="wrapper docenten">
                <div class="head-docenten">
                    <h2><span class="letterDO">DO</span>CENTEN</h2>
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
                        <div class="rooster-container">
                            <img src="img/Icon_coffee.png" alt="" />
                            <h2>COFFEE</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_instant.png" alt="" />
                            <h2>INSTANT</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_serious.png" alt="" />
                            <h2>SERIOUS</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                        <div class="rooster-container">
                            <img src="img/Icon_frame.png" alt="" />
                            <h2>FRAME</h2>
                            <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </main>
    <script>
// Debounce function to limit the rate at which a function is executed
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
