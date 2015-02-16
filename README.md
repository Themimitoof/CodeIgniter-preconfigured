#CodeIgniter 3.x Preconfigured
Ceci est le dépôt Git préconfiguré pour tous mes prochains projets utilisant CodeIgniter version 3.

##Ajouts effectués
###htaccess
Le fichier htaccess a été crée afin d'avoir une url plus propre.
###Helpers
Trois helpers ont étés créer pour gérer l’importation des fichiers
### Importation CSS
Permet l'importation d'un fichier CSS. Il suffit simplement d'ajouter le nom du fichier, la fonction s'occupera d'écrire le reste de l'url.
```php
$this->load->helper('assets');
echo js('css-script.css'); // http://site.tld/assets/css/css-script.css
```

### Importation Javascript
Permet l'importation d'un fichier Javascript. Il suffit simplement d'ajouter le nom du fichier, la fonction s'occupera d'écrire le reste de l'url.
```php
$this->load->helper('assets');
echo js('js-script.min.js'); // http://site.tld/assets/js/js-script.min.js
```

### Importation images
Permet l'importation d'une image. Il suffit simplement d'ajouter le nom du fichier, la fonction s'occupera d'écrire le reste de l'url.
```php
$this->load->helper('assets');
echo image('image.png'); // http://site.tld/assets/img/image.png
```



