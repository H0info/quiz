<?php

// Récupération des données POST
$acc_type = $_POST['acc_type'];
$email = $_POST['email'];

// Vérification du type de compte
if($acc_type == 1) {
    // Si le type de compte est individuel
    ?>
    <h5>Inscription de compte Individuel</h5>
    <p>Accédez à l'univers LOWXY depuis un seul compte</p>
    <center>
        <!-- Formulaire d'inscription pour un compte individuel -->
        <ul style="display: inline-flex;">
            <li style="margin: 0">
                <!-- Champ pour le nom -->
                <input type="text" id="nom" name="nom" placeholder="Nom" />
            </li>
            <li style="margin: 0">
                <!-- Champ pour le prénom -->
                <input type="text" id="prenom" name="prenom" placeholder="Prenom" />
            </li>
        </ul>
        <!-- Messages d'erreur pour le nom et le prénom -->
        <div class="ui pointing red basic label" id="nom_error" style="display:none;">
            Veuillez entrer votre nom.
        </div>
        <div class="ui pointing red basic label" id="prenom_error" style="display:none;">
            Veuillez entrer votre prenom.
        </div>
        <br />
        <!-- Champ caché pour le type de compte -->
        <input type="text" id="type" name="type" value="<?php echo $acc_type; ?>" hidden />
        <!-- Champ pour la date de naissance -->
        <input type="date" id="date" name="date" />
        <!-- Message d'erreur pour la date de naissance -->
        <div class="ui pointing red basic label" id="date_error" style="display:none;">
            Entrer une date correcte.
        </div>
        <!-- Champ pour la ville -->
        <input type="text" id="ville" name="ville" placeholder="Ville" />
        <!-- Champ pour le téléphone -->
        <input type="tel" id="tel" name="tel" placeholder="Téléphone" />
        <!-- Champ pour l'email (désactivé) -->
        <input type="text" id="email" name="email" disabled value="<?php echo $email; ?>" />
        <!-- Champ pour le mot de passe -->
        <input type="password" id="password" name="password" placeholder="Password"/>
        <!-- Message d'erreur pour le mot de passe -->
        <div class="ui pointing red basic label" id="password_error" style="display:none;">
            Mot de passe necessaire.
        </div>
    </center>
    <!-- Bouton d'inscription -->
    <div class="evviede-venir-title" style="margin: 20px;">
        <a href="javascript:void(0)" onclick="inscription_3()">Inscription</a>
    </div>
    <?php
} else {
    // Si le type de compte est Business
    ?>
    <h5>Inscription de compte Business</h5>
    <p>Accédez à l'univers LOWXY depuis un seul compte</p>
    <center>
        <!-- Formulaire d'inscription pour un compte Business -->
        <ul style="display: inline-flex;">
            <li style="margin: 0; width: 70%">
                <!-- Champ pour le nom de l'entreprise -->
                <input type="text" id="company" name="company" placeholder="Nom de l'entreprise" />
            </li>
            <li style="margin: 0">
                <!-- Champ pour le propriétaire -->
                <input type="text" id="owner" name="owner" placeholder="Le propriétaire" />
            </li>
        </ul>
        <!-- Messages d'erreur pour le nom de l'entreprise et le propriétaire -->
        <div class="ui pointing red basic label" id="company_error" style="display:none;">
            Entrer le nom de votre société.
        </div>
        <div class="ui pointing red basic label" id="owner_error" style="display:none;">
            Entrer le nom du propriétaire.
        </div>
        <br />
        <ul style="display: inline-flex; width: 95%;">
            <li style="margin: 0; width: 60%">
                <!-- Champ pour la ville -->
                <input type="text" id="town" name="town" placeholder="Ville" />
            </li>
            <li style="margin: 0; width: 40%">
                <!-- Champ pour l'industrie -->
                <select name="industry" id="industry" style="width: 100%">
                    <option value="1">aaaaaa</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </li>
        </ul>
        <br />
        <!-- Champ caché pour le type de compte -->
        <input type="text" id="type" name="type" value="<?php echo $acc_type; ?>" hidden />
        <!-- Champ pour l'adresse -->
        <input type="text" id="address" name="address" placeholder="Adresse" />
        <!-- Champ pour le téléphone -->
        <input type="tel" id="tel" name="tel" placeholder="Téléphone" />
        <!-- Champ pour l'email (désactivé) -->
        <input type="text" id="email" disabled name="email" value="<?php echo $email; ?>" />
        <!-- Champ pour le mot de passe -->
        <input type="password" id="password" name="password" placeholder="Password" />
        <!-- Message d'erreur pour le mot de passe -->
        <div class="ui pointing red basic label" id="password_error" style="display:none;">
            Mot de passe necessaire.
        </div>
    </center>
    <!-- Bouton d'inscription -->
    <div class="evviede-venir-title" style="margin: 20px;">
        <a href="javascript:void(0)" onclick="inscription_3()">Inscription</a>
    </div>
    <?php
}
?>
