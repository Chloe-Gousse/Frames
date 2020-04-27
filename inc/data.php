<?php

// Les différents articles sous forme d'objet
$dataArticlesList = [
    1 => new Article(
        'Zarafa, une nouvelle école pour Rémi Bezançon',
        'Le réalisateur de Ma vie en l\'air et Le Premier jour du reste de ta vie a dû s\'adapter aux contraintes de cette technique qu\'il ne connaissait pas...',
        'Le réalisateur de Ma vie en l\'air et Le Premier jour du reste de ta vie a dû s\'adapter aux contraintes de cette technique qu\'il ne connaissait pas : "Au départ, je croyais qu\'en faisant un film d\'animation j\'allais pouvoir faire tout ce qui est impossible en prises de vues réelles. Moi qui aime que tout aille vite, j\'ai appris à mes dépens que l\'animation était l\'école de la patience et de l\'humilité", se remémore-t-il.',
        'Hélène',
        '2013-02-13',
        'Team2D'
    ),
    2 => new Article(
        'USD : que donne la technologie en pratique ?',
        'Lors du SIGGRAPH 2019, le système Universal Scene Description (USD) était LA technologie sur toutes les lèvres...',
        'Lors du SIGGRAPH 2019, le système Universal Scene Description (USD) était LA technologie sur toutes les lèvres. Le support USD va par ailleurs arriver dans différents outils logiciels du marché très rapidement. D’où une question inévitable : concrètement, que donne USD ? Efficacité créative, collaboration entre départements, processus d’approbation facilité, aspect non destructif, système de variations qui donne un meilleur contrôle artistique pour chaque plan, optimisation mémoire… A en croire le studio Pixar, les avantages sont immenses.',
        'Maxime',
        '2019-07-04',
        'Technologies'
    ),
    3 => new Article(
        'Animer l\'impressionnante chevelure de Raiponce : un travail de longue haleine !',
        'Créer et animer l\'interminable chevelure de Raiponce représentait un véritable défi. L\'équipe chargée de l\'animation a dû développer un nouveau logiciel, et de nouvelles techniques...',
        'Créer et animer l\'interminable chevelure de Raiponce représentait un véritable défi. L\'équipe chargée de l\'animation a dû développer un nouveau logiciel, et de nouvelles techniques. Ils sont allés jusqu\'à simuler manuellement les mouvements de chevelure de la princesse grâce à 147 tubes, pour un rendu final de 140 000 cheveux différents. </br>Pour Glen Keane, les cheveux dans l\'animation ont toujours eu une grande importance esthétique, mais aussi symbolique, dépeignant d\'une certaine façon le caractère et l\'histoire du personnage.',
        'Fabien',
        '2017-06-19',
        'Team3D'
    ),
    4 => new Article(
        'Le prochain film d\'Hayao Miyazaki prévu pour fin 2020 !',
        'Le Studio Ghibli a enfin communiqué sur le nouveau film du réalisateur de Mon voisin Totoro, Hayao Miyazaki. Intitulé "La couronne de Willus", il devrait sortir en fin d\'année 2020...',
        'Le Studio Ghibli a enfin communiqué sur le nouveau film du réalisateur de Mon voisin Totoro, Hayao Miyazaki. Intitulé "La couronne de Willus", il devrait sortir en fin d\'année 2020. Impossible de s\'arrêter de créer pour le réalisateur nippon. Occupé jusque là avec Boro la petite chenille, Hayao Miyazaki a tenu à s\'adonner à un "dernier" long-métrage. </br>Intitulé Kimi-tachi wa Dō Ikiru ka, ce film d\'animation relatera les aventures de Koperu, un jeune garçon de 15 ans qui entame une quête spirituelle après la mort de son père. L\'histoire est tirée de l\'oeuvre éponyme de Genzaburō Yoshino, écrite en 1937.',
        'Jeffrey',
        '2020-04-24',
        'A venir'
    ),

    5 => new Article(
        'Klaus : découvrez les outils utilisés par les artistes pour donner vie au film',
        'Alors que le film d’animation Klaus cartonne sur Netflix, voici un petit aperçu de ses coulisses techniques et artistiques...',
        'Alors que le film d’animation Klaus cartonne sur Netflix, voici un petit aperçu de ses coulisses techniques et artistiques. </br>MOE, tout d’abord, est un outil qui permet de gérer des rendus complexes en animation 2D, 3D et prises de vue réelles : un système de tracking permet d’appliquer brosses et textures sur les formes et volumes. En pratique, MOE a été utilisé par les équipes des Films du Poisson Rouge pour le texturing de Klaus.
        </br>LAS, de son côté, est un outil de lighting et ombrage qui permet à un artiste d’appliquer des effets variés qui seront ensuite adaptés au personnage en mouvement. Une version customisée de cet outil, KLAS, a été employée par les équipes de SPA Studios pour créer Klaus.',
        'Sharmili',
        '2019-12-29',
        'Technologies'
    ),





    
];

// Les catégories
$dataCategoriesList = [
    // ID => objet Category
    1 => new Category('Team2D'),
    2 => new Category('Team3D'),
    3 => new Category('Technologies'),
    4 => new Category('A venir')
];

// Les auteurs
$dataAuthorsList = [
    // ID => objet Author
    1 => new Author('Maxime'),
    2 => new Author('Jeffrey'),
    3 => new Author('Sharmili'),
    4 => new Author('Hélène'),
    5 => new Author('Fabien'),
];

