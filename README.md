# mnemosyne

## Archives photographiques
### Base de données photographiques familiales

*Version 1.4*

### 1. Généralités :

fonctionne avec :
@html, css et php pour le front,
@json pour la bdd,
@isotope pour le tri des données,
@fontawesome pour le style,
@electron pour une version desktop.

### 2. Changelog :

- 2021.07 - version 1.4 : 
	    BDD réécrite en JSON.
	    Web-app responsive.
	    MAJ Electron win32, darwin64 et arm64.
- 2021.05 - version 1.3 :
    	Reprise de la bdd en javascript et améliorations graphiques.
    	Intégration Electron et build win32, darwin64 et arm64.
- 2021.01 - version 1.2 :
    	Ajout de contenu (confidentiel).
- 2020.12 - version 1.1 : 
    	Première version mise à disposition.
    
### 3. Instructions :

- Le dossier "_mnemosyne" ne doit pas être déplacé.
	Ni tout autre dossier à l'intérieur de celui-ci.

### 4. Code HTML - JS - PHP :

#### 4.1 - JSON :

- Le fichier data.json contient l'ensemble de la base de données
- Les familles sont taguées par le nom en entier.
- Les personnes sont taguées selon leurs initiales :
       
        par exemple :

        - Bernard Graber - BG
        - Henri Bellet - HB
        - Stéphane Bellet - SB
        - Anne-Sophie Bellet - ASB
        - Nicolas Bellet - NB

#### 4.2 - PHP :  

- Le fichier index.php protège la base de donnée par un mot de passe
- Le fichier parse.php permet de parcourir l'ensemble des dossiers par un script récursif qui vient chercher l'ensemble des photos dans un dossier pour les mettre en forme dans une seule page.
