<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Localisation | LimogesHack</title>
        <link href="css/style.css" rel="stylesheet">
        <style>
          #map-canvas {
            width: 100%;
            height: 500px;
            margin: 0px;
            padding: 0px
          }
        </style>
    </head>
    <body>
        <div id="dotlane-wrapper">
            <header class="nav-header nav-header-fixed dark-shadow">
                <div class="container container-header nav-header-inner nav-header-inner-no-title">
                    <a href="home">
                        <div class="title text-center">LimogesHack</div>
                    </a>
                    <nav class="nav-header-inner-right">
                        <ul>
                            <li><a href="home">Accueil</a></li><!--
                            --><li><a href="about">A propos</a></li><!--
                            --><li><a href="contact">Contact</a></li><!--
                            --><li><a href="localisation" class="current">Localisation</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content content-no-pdb bg-grey-200 h-640">
                <div class="container">
                    <section id="section1">
                        <h1>Localisation</h1>
                        <p class=" text-center lead">FabLab - LimouziLab</p>
                        <p class="text-center">
                            2 bis Impasse Daguerre<br>
                            87100 Limoges<br>
                            France
                        </p>
                    </section>
                </div>
                <div id="map-canvas"></div>
            </div>
            <?php require_once("includes/footer.inc.php") ?>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/scrollspy.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
            var map;
            function initialize() {
                var myLatlng = new google.maps.LatLng(45.839738, 1.267048);

                var mapOptions = {
                    zoom: 16,
                    scrollwheel: false,
                    center: myLatlng
                };
                map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'LimogesHack au FabLab - LimouziLab'
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
