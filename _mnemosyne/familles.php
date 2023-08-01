<?php include 'header.php' ;?>

<h2>Tri par Familles</h2>

<div id="list">
    <div class="button-group filters-button-group">
        <button class="button is-checked" data-filter="*">Voir tous</button>
        <button class="button" data-filter=".bailliard">Bailliard</button>
        <button class="button" data-filter=".bellet">Bellet</button>
        <button class="button" data-filter=".contant">Contant</button>
        <button class="button" data-filter=".genet">Genet</button>
        <button class="button" data-filter=".graber">Graber</button>
        <button class="button" data-filter=".hutinet">Hutinet</button>
        <button class="button" data-filter=".mazarguil">Mazarguil</button>
        <button class="button" data-filter=".roret">Roret</button>
        <button class="button" data-filter=".valleteau">Valleteau</button>
    </div>
    <div class="grid"> 
        <table id="albums" class="table"> 
        </table>
    </div> 
    <script> 
        var request = new XMLHttpRequest();
        request.open("GET", "js/data.json", false);
        request.send(null)
        var results = JSON.parse(request.responseText);
        var local_data = results.albums; 
        var row_data = ''; 
        for (var i = 0; i < local_data.length; i++) { 
        var row_data = row_data + '<tr>' + 
        ' <td><a target="blank" href="../parse.php?images_dossier=' + local_data[i].date + '_' + local_data[i].nom + '"><div style="background-image: url(img/albums/'
        + local_data[i].date + '_' + local_data[i].nom + '.jpg)" class="element-item ' + local_data[i].familles + ' ' + local_data[i].personnes + '"><h3 class="name">' 
        + local_data[i].nom + '</h3><p class="annee">' + local_data[i].date + '</p></div></a></td></tr>'; 
        } 
        var table_body_element = document.createElement('tbody'); 
        table_body_element.innerHTML = row_data; 
        document.getElementById('albums').appendChild(table_body_element); 
    </script>
</div>
</body>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/isotope-groupes.js"></script>

<?php include 'footer.php' ;?>

</html>