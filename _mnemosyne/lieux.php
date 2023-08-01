<?php include 'header.php' ;?>

<h2>Tri par Lieux</h2>

<div id="map"></div>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLEF_API_GOOGLE_MAPS&callback=initMap&v=weekly" defer></script>
  <script>
    var map;
    var markerContents={};

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        zoom: 6,
        center: new google.maps.LatLng(47, 2),
        mapTypeId: "terrain",
      });

      $.getJSON('js/data.json', eqfeed_callback)
    }

    // Boucler les résultats
    const eqfeed_callback = function (results) {

      for (let k = 0; k < results.lieux.length; k++) {
          results.albums.map(function(obj) {
            (obj.adresse1 === results.lieux[k].nom) && (obj.adresse1 = results.lieux[k].coordinates);
            (obj.adresse2 === results.lieux[k].nom) && (obj.adresse2 = results.lieux[k].coordinates);
            (obj.adresse1 === results.lieux[k].coordinates) && (obj.descr1 = results.lieux[k].description);
            (obj.adresse2 === results.lieux[k].coordinates) && (obj.descr2 = results.lieux[k].description);
          });
        };

      for (let i = 0; i < results.albums.length; i++) {

        var coords1 = {};
        var coords2 = {};

        var coords1 = results.albums[i].adresse1;
        var coords2 = results.albums[i].adresse2;

        var latLng1 = new google.maps.LatLng(coords1[0], coords1[1]);
        var latLng2 = new google.maps.LatLng(coords2[0], coords2[1]);

        var nom = results.albums[i].nom;
        var date = results.albums[i].date;
        var contentString = '<a target="_blank" href="../parse.php?images_dossier=' + date + '_' + nom + '">' + date + '_' + nom + '</a>';
        var infoWindow = new google.maps.InfoWindow;

        var markerId1 = latLng1.toString();
        var markerId2 = latLng2.toString();

        if(!markerContents[markerId1]){
          markerContents[markerId1] = [];
        } 

        if(!markerContents[markerId2]){
          markerContents[markerId2] = [];
        } 

        // Placer les marqueurs        
        var descr1 = results.albums[i].descr1;
        var descr2 = results.albums[i].descr2;
        markerContents[markerId1].push('<div id="text-infowindow"><li><span>' + descr1 + '</span>');
        markerContents[markerId1].push(contentString);
        markerContents[markerId2].push('<div id="text-infowindow"><li><span>' + descr2 + '</span>');
        markerContents[markerId2].push(contentString);

        var marker1 = new google.maps.Marker({
          position: latLng1,
          map: map,
          content: contentString,
          title: descr1,
        });        
        
        var marker2 = new google.maps.Marker({
          position: latLng2,
          map: map,
          content: contentString,
          title: descr2,
        });

        // Fusionner les résultats dans la même infowindow
        bindInfoWindow(marker1, map, infoWindow, markerContents[markerId1]);
        bindInfoWindow(marker2, map, infoWindow, markerContents[markerId2]);

        function bindInfoWindow(marker1, map, infoWindow, html) {
          google.maps.event.addListener(marker1, 'click', function() {
            infoWindow.setContent(html.join('<hr/>'));
            infoWindow.open(map, marker1);
          });
          // Fermer l'infowindow quand on clic à côté
          google.maps.event.addListener(map, "click", function() {infoWindow.close();});
        }

        function bindInfoWindow(marker2, map, infoWindow, html) {
          google.maps.event.addListener(marker2, 'click', function() {
            infoWindow.setContent(html.join('<hr/>'));
            infoWindow.open(map, marker2);
          });
          // Fermer l'infowindow quand on clic à côté
          google.maps.event.addListener(map, "click", function() {infoWindow.close();});
         }

        }
    };
    window.initMap = initMap;
    window.eqfeed_callback = eqfeed_callback;
  </script>
</body>

<?php include 'footer.php' ;?>

</html>