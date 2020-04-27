

  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">
  <?php if (!empty($filteredAuthor)): ?>
      <?php foreach ($filteredAuthor as $currentArticleId=>$currentArticle) : ?>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?= $currentArticle->title ?></a></h2>
            <p class="card-text"><?= $currentArticle->content ?></p>
            <p class="infos">
              Posté par <a href="#" class="card-link"><?= $currentArticle->author ?></a> le <time datetime="<?php $currentArticle->date ?>"><?= $currentArticle->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= $currentArticle->getCategory() ?></a>
            </p>
          </div>
        </article>
            
     <?php endforeach ;?>
     <?php else : ?>
      
      <div class="img-404">
      <img src="images/404.png" alt="">
      </div>
      <?php endif?>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="./"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
          </ul>
        </nav>

      </main>

      <aside class="col-lg-3">

        <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>

        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <?php foreach($dataCategoriesList as $index => $category) : ?>
            <li class="list-group-item"><a href="index.php?page=category&catName=<?=$category->category ?>"><?=$category->category ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>

        <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">
        <!-- Création d'un foreach pour créer la liste des auteurs -->
          <?php foreach($dataAuthorsList as $index => $author) : ?>
          <!-- La liste se crée en créant un lien par auteur et allant chercher l'information dans le Array $dataAuthorsList -> dans l'objet new Author-> la propriété name -->
            <li class="list-group-item"><a href="index.php?page=author&authorName=<?= $author->name ?>"><?=$author->name?></li>
          <?php endforeach ?>
        </ul>
        </div>
        
      </aside>
    </div><!-- /.row -->