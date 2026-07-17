<?php partial('head', ['title' => 'Système au sel']) ?>

<section class="produit">
    <div class="produit__intro">
        <h2 class="mainText produit__sous-titre">Système au sel pour piscines</h2>
        <p class="text produit__lead">Deux modèles différents selon vos besoins</p>
    </div>

    <div class="produit__modeles">
        <button class="produit__modele produit__modele--actif" type="button">Système au sel E</button>
        <button class="produit__modele" type="button">Système au sel VX</button>
    </div>

    <div class="produit__vitrine">
        <img class="produit__image" src="/assets/images/syst-sel.avif" alt="Système au sel modèle E">

        <div class="produit__caracteristiques">
            <h3 class="textTitles produit__caracteristiques-titre">Caractéristiques</h3>
            <ul class="produit__caracteristiques-liste">
                <li class="text produit__caracteristiques-item">Désinfecte et assainit automatiquement l'eau du spa et de la piscine</li>
                <li class="text produit__caracteristiques-item">Autonettoyant et ne nécessite pas d'entretien</li>
                <li class="text produit__caracteristiques-item">Conçu pour conditions extrêmes</li>
                <li class="text produit__caracteristiques-item">Abordable, fiable et solide</li>
            </ul>
            <button class="produit__bouton" type="button">Fiche technique</button>
        </div>
    </div>
</section>

<?php partial('footer') ?>