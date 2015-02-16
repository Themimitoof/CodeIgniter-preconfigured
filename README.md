#CodeIgniter 3.x Preconfigured
Ceci est le dépôt Git préconfiguré pour tous mes prochains projets utilisant CodeIgniter version 3.

##Ajouts effectués
###htaccess
Le fichier htaccess a été crée afin d'avoir une url plus propre.
###Helpers
Trois helpers ont étés créer pour gérer l’importation des fichiers

```ruby
require 'redcarpet'
markdown = Redcarpet.new("Hello World!")
puts markdown.to_html
```


