# MusicShop application

Voici mon projet d'examen de certification. J'ai crée une société fictive "MusicShop", qui grâce à son application web, gère les stocks de ses produits. L'application permet tout d'abord d'arriver sur l'auhentification. Une fois enregistré et connecté le gérant de cette société arrive sur une page d'acceuil. Ici il peut voir un méssage de bienvenue avec son nom d'affiché. Il a alors accès à plusieurs onglets dans une barre de navigation ainsi qu'un bouton pour se déconnecté. Il peut de ce fait aller voir les produits disponible sur son site, les supprimer au besoins, en ajouter de nouveaux ou encore de les mettre à jour.

## Technologies utilisé

* HTML
* CSS/LESS Compiler
* Framework Laravel
    ```
    Migration
    Seeder
    Authentication
    MVC
    Eloquent
* JavaScript
* GIT


## Description de la création de l'application

Voici la description point par point de ce que j'ai réalisé

### Laravel install

J'ai tout d'abord installé un projet laravel via une vagrant. J'avais crée un script pour éviter de perdre trop de temps là dessus. Le reste était surtout de la redirection d'URL, d'afficher les erreurs PHP pour travailler correctement et d'installer SQL sur le serveur. 

### Laravel auth

J'ai voulu créer le système d'authentification pour à la base palié mes lacunes en JavaScript, comme nous l'avions peut vu en cours c'était l'occasion de pouvoir à la fois travailler ce point mais aussi les redirections des vues si l'utilisateur est enregistré ou non. J'ai donc crée des routes qui ne sont accessible que si l'utilisateur est enregistré et connecté, dans les autres cas toute nouvelle personnes sans compte n'aura accès à rien d'autre que la page pour se connecté ou s'enregistrer. J'ai ensuite crée une vue acceuil, une route et une method via le controller HomeController, qui une fois conneté nous redirige directement sur celle-ci.

### Laravel Migrations&Seeder

J'ai crée quatre migrations, une pour les instruments, une pour les couleurs, une pour les nombres en stock ainsi qu'une pour relier l'instrument au nombre en stock. J'ai ensuite crée autant de seeder pour permettre de remplir directement ma database avec les commandes associées. J'ai aussi changer mon DatabaseSeeder pour pouvoir appeller dans la method run chaque seeder crée.

### CRUD

J'ai ici crée tout d'abord des routes concernant chaque étapes ainsi que deux controller me permetant de réaliser les actions du CRUD. ProductController pour gerer l'aspect lecture et ProductActionController pour gerer la création, l'insertion et la suppréssion. J'ai ensuite crée 3 model permetant de gerer la liaison entre les diverses données à afficher. Par la suite j'ai crée les vues qui permete la présentation de l'interface graphique.

### UX disign

J'ai installé nodeJS et npm pour permettre de faire de la compilation LESS et ainsi pourvoir créer un design de site sobre mais éfficace. Le fichier est déjà compilé puisqu'a la fin j'ai lancé un npm run production. J'ai aussi rendu le site responsive via les Media Queries.

### GIT

J'ai utilisé git au possible avec une branche master et une branche dev. J'ai souvent fait des commits même si à certain moment la résolution de plusieurs bugs et le stress qui allait avec ne m'on pas permis d'en faire autant que je l'aurais voulu. A cause de ça j'ai parfois réaliser plusieurs features avant de commit alors que généralement je le fais à chaque fois qu'une feature est fini. J'ai ensuite merger à la fin sur la branche master et j'ai crée un tag pour avoir une release que j'estimais fini et acceptable.

## Problèmes rencontré

J'ai rencontré plusieurs problèmes lors de la création de mon CRUD notamement. J'ai pu réussir à en résoudre pas mal et ainsi avancé mais cela m'a fait perdre beaucoup de temps, surtout pour des érreurs d'inattention. Un problème lié directement à celui-ci est l'utilisation du JS. J'ai encore du mal avec ce langage que je trouve parfois brouillons. Etant quelqu'un d'organisé j'apprécie largement plus Laravel et le PHP en général que je trouve mieux structuré. J'ai bien compris la logique qui est dérrière, et bien entendu les queryselector pour selectioner des éléments du DOM, mais j'ai encore du travail à faire sur ce langage pour m'en sortir correctement. De ce fait et avec le peu de temps qu'il me restait à cause des bugs j'ai préféré me concentrer sur le design du site pour éviter de rendre quelque chose que je n'aurais pas trouvé acceptable et "fini". J'ai voulu aussi afficher des images mais cela avec notament :
        
        
        $img = $request->file('img')->storeAs(
        'img', $request->file('img')->getClientOriginalName()
            );
        
Et :    
        ```
        $newInstrument->cover = $img;
        ```

Mais cela n'a pas marché.

J'ai aussi rencontré un problème pour attacher ou détacher mes valeurs de nombre d'articles disponible. Pour éviter tout bug pendant la correction j'ai recrée deux method (insert et update) qui sont en commentaire dans le controller "ProductActionController". Vu que celles-ci étaient en commentaire j'ai du aussi supprimer les multiple class ainsi que l'array attaché : multiple class="" name="number[]".

Je n'ai pas eu le temps de finir le css de la page de connexion et d'enregistrement, j'en suis vraiment désolé.








