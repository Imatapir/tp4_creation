<?php partial('head', ['title' => 'Contact']) ?>

<section class="contact">
    <div class="contact__intro">
        <h2 class="mainText contact__sous-titre">Contactez-nous</h2>
        <p class="text contact__lead">
            Une question, une soumission ou un service d'urgence?
            Remplissez le formulaire ou joignez-nous directement.
        </p>
    </div>

    <div class="contact__contenu">
        <form class="contact__formulaire" action="#" method="post">
            <h3 class="textTitles contact__formulaire-titre">Envoyez-nous un message</h3>
            <p class="smallText contact__formulaire-note">Réponse sous 24h ouvrables</p>

            <div class="contact__champ-ligne">
                <div>
                    <label class="contact__etiquette" for="prenom">Prénom</label>
                    <input class="contact__champ" type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label class="contact__etiquette" for="nom">Nom</label>
                    <input class="contact__champ" type="text" id="nom" name="nom" required>
                </div>
            </div>

            <label class="contact__etiquette" for="courriel">Courriel</label>
            <input class="contact__champ" type="email" id="courriel" name="courriel" required>

            <label class="contact__etiquette" for="telephone">Téléphone</label>
            <input class="contact__champ" type="tel" id="telephone" name="telephone">

            <label class="contact__etiquette" for="sujet">Sujet</label>
            <select class="contact__champ contact__champ--liste" id="sujet" name="sujet">
                <option value="piscine-creusee">Piscine creusée</option>
                <option value="piscine-hors-terre">Piscine hors-terre</option>
                <option value="thermopompe">Thermopompe</option>
                <option value="filtration">Filtration</option>
                <option value="systeme-sel">Système au sel</option>
                <option value="autre">Autre</option>
            </select>

            <label class="contact__etiquette" for="message">Message</label>
            <textarea class="contact__champ contact__champ--zone" id="message" name="message" rows="5"></textarea>

            <button class="contact__bouton" type="submit">Envoyer</button>
        </form>

        <div class="contact__info">
            <h3 class="textTitles contact__info-titre">Informations</h3>

            <div class="contact__info-bloc">
                <h4 class="text contact__info-etiquette">Téléphone</h4>
                <p class="smallText contact__info-texte">514-919-8028</p>
                <p class="smallText contact__info-texte">514-619-8028</p>
            </div>

            <div class="contact__info-bloc">
                <h4 class="text contact__info-etiquette">Courriel</h4>
                <p class="smallText contact__info-texte">info@aquannord.com</p>
            </div>

            <div class="contact__info-bloc">
                <h4 class="contact__info-etiquette">Adresse</h4>
                <p class="smallText contact__info-texte">123, boul. des Laurentides</p>
                <p class="smallText contact__info-texte">Laval, QC · H7X 3T7</p>
            </div>

            <div class="contact__info-bloc">
                <h4 class="text contact__info-etiquette">Heures</h4>
                <p class="smallText contact__info-texte">Lun-Ven : 8h à 18h</p>
                <p class="smallText contact__info-texte">Sam-Dim : 9h à 17h</p>
            </div>
        </div>
    </div>
</section>

<?php partial('footer') ?>