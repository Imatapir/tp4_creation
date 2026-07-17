<?php partial('head', ['title' => 'Filtration']) ?>

<section class="produit">
    <div class="produit__intro">
        <h1 class="sectionTitles produit__titre">Filtration</h1>
        <h2 class="mainText produit__sous-titre">Trouvez la pompe idéale</h2>
        <p class="text produit__lead">Quatre modèles différents adaptés à vos besoins</p>
    </div>

    <div class="produit__modeles">
        <button class="produit__modele produit__modele--actif" type="button">P-260</button>
        <button class="produit__modele" type="button">Filtreur hors terre</button>
        <button class="produit__modele" type="button">Pompe LX creusé</button>
        <button class="produit__modele" type="button">Pompe LX hors terre</button>
    </div>

    <div class="produit__vitrine">
        <img class="produit__image" src="/assets/images/pompe-fil.avif" alt="Pompe de filtration P-260">

        <div class="produit__caracteristiques">
            <h3 class="textTitles produit__caracteristiques-titre">Caractéristiques</h3>
            <ul class="produit__caracteristiques-liste">
                <li class="text produit__caracteristiques-item">Jusqu'à 90% d'économie d'énergie</li>
                <li class="text produit__caracteristiques-item">Roulement silencieux</li>
                <li class="text produit__caracteristiques-item">Base universelle, installation rapide</li>
                <li class="text produit__caracteristiques-item">Réduit jusqu'à 1 dimension CO2/a</li>
            </ul>
            <button class="produit__bouton" type="button">Fiche technique</button>
        </div>
    </div>
</section>

<?php partial('footer') ?>