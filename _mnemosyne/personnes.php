<?php include 'header.php' ;?>

<h2>Tri par Personnes</h2>

<div id="list">
    <div class="button-group filters-button-group">
        <div class="row" data-group="tous">
            <div class="column tree">
                <i style="font-size: 12px;text-decoration: underline;">Famille BELLET :</i>
                    <ul>
                    <li><label class="male"><input type="checkbox" value=".HB">Henri BELLET</label><span class="dates">1908 - 2002</span></li>
                    <li><label class="female"><input type="checkbox" value=".AV">Armande VALLETEAU</label><span class="dates">1911 - 2004</span></li>
                        <ul>
                        <li><label class="male"><input type="checkbox" value=".MIB">Michel BELLET</label><span class="dates">1937 - 1972</span></li>
                        <li><label class="female"><input type="checkbox" value=".CD">Colette DUCAS</label><span class="dates">1936 - </span></li>
                            <ul>
                            <li><label class="male"><input type="checkbox" value=".TB">Thierry BELLET</label><span class="dates">1965 - </span></li>
                            </ul>
                        <li><label class="male"><input type="checkbox" value=".RB">Régis BELLET</label><span class="dates">1944 - 2012</span></li>
                        <li><label class="female"><input type="checkbox" value=".CS">Colette SEPTIER</label><span class="dates">1947 - 2007</span></li>
                            <ul>
                            <li><label class="female"><input type="checkbox" value=".MB">Mallory BELLET</label><span class="dates">1977 - </span></li>
                            </ul>
                        <li><label class="male"><input type="checkbox" value=".GB">Gilles BELLET</label><span class="dates">1954 - </span></li>
                        <li><label class="female"><input type="checkbox" value=".PG">Patricia GRABER</label><span class="dates">1953 - </span></li>
                            <ul>
                            <li><label class="male"><input type="checkbox" value=".SB">Stéphane BELLET</label><span class="dates">1978 - </span></li>
                            <li><label class="female"><input type="checkbox" value=".ASB">Anne-Sophie BELLET</label><span class="dates">1981 - </span></li>
                            <li><label class="male"><input type="checkbox" value=".NB">Nicolas BELLET</label><span class="dates">1990 - </span></li>
                            </ul>
                        </ul>
                    </ul>
            </div>
    
            <div class="column tree">
                <i style="font-size: 12px;text-decoration: underline;">Famille GRABER :</i>
                    <ul>
                    <li><label class="male"><input type="checkbox" value=".BG">Bernard GRABER</label><span class="dates">1921 - 1999</span></li>
                    <li><label class="female"><input type="checkbox" value=".DH">Denise HUTINET</label><span class="dates">1922 - 1992</span></li>
                        <ul>
                        <li><label class="male"><input type="checkbox" value=".GG">Gérard GRABER</label><span class="dates">1950 - </span></li>
                        <li><label class="female"><input type="checkbox" value=".MCB">Marie-Christine BAILLIARD</label><span class="dates">1950 - </span></li>
                            <ul>
                            <li><label class="female"><input type="checkbox" value=".BEG">Bénédicte GRABER</label><span class="dates">1976 - </span></li>
                            <li><label class="male"><input type="checkbox" value=".LG">Laurent GRABER</label><span class="dates">1979 - </span></li>
                            </ul>
                        </ul>
                    </ul>
            </div>
        </div>
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
<script src="js/isotope-personnes.js"></script>

<?php include 'footer.php' ;?>

</html>