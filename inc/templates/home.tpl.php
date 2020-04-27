  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">
      <?php foreach ($allArticles as $currentArticleId=>$currentArticle) : ?>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="index.php?page=article&id=<?= $currentArticleId ?>"><?= $currentArticle->title ?></a></h2>
            <p class="card-text"><?= $currentArticle->resume ?></p>
            <p class="infos">
              Posté par <a href="index.php?page=author&authorName=<?=$currentArticle->author?>" class="card-link"><?= $currentArticle->author ?></a> le <time datetime="<?php $currentArticle->date ?>"><?= $currentArticle->getDateFr() ?></time> dans <a href="index.php?page=category&catName=<?=$currentArticle->category?>"
                class="card-link">#<?= $currentArticle->getCategory() ?></a>
            </p>
          </div>
        </article>
     <?php endforeach ;?>
      
       

      </main>

      <aside class="col-lg-3">
        

        <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
          <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush"> 
          <!-- Création d'un foreach pour créer la liste des catégories -->
            <?php foreach($dataCategoriesList as $index => $category) : ?>
            <!-- La liste se crée en créant un lien par catégorie et allant chercher l'information dans le Array $dataCategorysList -> dans l'objet new Category-> la propriété category -->
            <li class="list-group-item"><a href="index.php?page=category&catName=<?=$category->category ?>"><?=$category->category ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>
   

        <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
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
