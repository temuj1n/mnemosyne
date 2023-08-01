# mnemosyne

## Photographic Archives
### Family Pictures Database

*Version 2.0*

### 1. General :

works with :
- @php, html and css for the front,
- @json for the data,
- @isotope to sort values,
- @fontawesome for the pirate style,

### 2. Changelog :

- 2022.12 - version 2.0 :
  	    Remove electron, too fuzy,
  	    Rewrote everything in php : including files is much effective,
  	    Rewrote css with 1 variable to switch accent color,
  	    Added audio and video pages, both automaticly add things to read from a folder.
  	    Added adresses in the JSON and a places page. Need to add yourself your Google Maps API Key.
- 2021.07 - version 1.4 : 
	    Database written in JSON.
	    Web-app responsive.
	    Update Electron win32, darwin64 and arm64.
- 2021.05 - version 1.3 :
    	New database written in javascript and graphic optimisations.
    	New Electron app and build win32, darwin64.
- 2021.01 - version 1.2 :
    	Data update and added more picture.
- 2020.12 - version 1.1 : 
    	First try and launching the database in my family.
    
### 3. Instructions :

- The folder named "_mnemosyne" should NOT be moved.
  Or any other folder inside.

### 4. Code specs :

#### 4.1 - JSON :

- The file data.json contain the whole database
- A variable loop through all this data to create the table and links
- Family names are taggued by their entire name.
- People are taggued with their initials :
       
        for instance :

        - Bernard Graber - BG
        - Henri Bellet - HB
        - Stéphane Bellet - SB
        - Anne-Sophie Bellet - ASB
        - Nicolas Bellet - NB

#### 4.2 - PHP :  

- The file index.php protects the database with a password
- The file parse.php allows you to go through all folders with a recursive script that gets all the images inside a folder to put them in one single page.
