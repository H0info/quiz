<?php

$acc_type = $_POST['acc_type'];
$email = $_POST['email'];

if($acc_type == 1)
{
  ?>
  <h5>Inscription de compte Individuel</h5>
  <p>Accédez à l'univers LOWXY depuis un seul compte</p>
  <center>
      <ul style="display: inline-flex;">
          <li style="margin: 0">
              <input type="text" id="nom" name="nom" placeholder="Nom" />

          </li>
          <li style="margin: 0">
              <input type="text" id="prenom" name="prenom" placeholder="Prenom" />

          </li>
      </ul> 
        <div class="ui pointing red basic label" id="nom_error" style="display:none;">
              Veuillez entrer votre nom.
          </div>
              <div class="ui pointing red basic label" id="prenom_error" style="display:none;">
                Veuillez entrer votre prenom.
            </div>
      <br />
      <input type="text" id="type" name="type" value="<?php echo $acc_type; ?>" hidden />
      <input type="date" id="date" name="date" />
      <div class="ui pointing red basic label" id="date_error" style="display:none;">
          Entrer une date correcte.
      </div>
      <input type="text" id="ville" name="ville" placeholder="Ville" />
      <input type="tel" id="tel" name="tel" placeholder="Téléphone" />
      <input type="text" id="email" name="email" disabled value="<?php echo $email; ?>" />
      <input type="password" id="password" name="password" placeholder="Password"/>
      <div class="ui pointing red basic label" id="password_error" style="display:none;">
          Mot de passe necessaire.
      </div>
   <!--
      <div style="float: left">
          <input type="checkbox">
      </div>
      <div style="display: contents">
           <p style="font-size: : 14px; ">I accept the Lowxy collects and uses the data provided, in accordance with thier terms and conditions and privacy policy.</p>
       </div>
   -->
  </center>

  <div class="evviede-venir-title" style="margin: 20px;">
      <a href="javascript:void(0)" onclick="inscription_3()">Inscription</a>
  </div>

  <?php
} else {
  ?>
  <h5>Inscription de compte Business</h5>
  <p>Accédez à l'univers LOWXY depuis un seul compte</p>
  <center>
      <ul style="display: inline-flex;">
          <li style="margin: 0; width: 70%">
              <input type="text" id="company" name="company" placeholder="Nom de l'entreprise" />
          </li>
          <li style="margin: 0">
              <input type="text" id="owner" name="owner" placeholder="Le propriétaire" />
          </li>
      </ul>
      <div class="ui pointing red basic label" id="company_error" style="display:none;">
        Entrer le nom de votre société.
      </div>
      <div class="ui pointing red basic label" id="owner_error" style="display:none;">
        Entrer me nom du propriétaire.
      </div>
      <br />

      <ul style="display: inline-flex; width: 95%;">
          <li style="margin: 0; width: 60%">
              <input type="text" id="town" name="town" placeholder="Ville" />
          </li>
          <li style="margin: 0; width: 40%">
              <select name="industry" id="industry" style="width: 100%">
                <option value="1">aaaaaa</option>
                <option value="1">1</option>
                <option value="1">1</option>
                <option value="1">1</option>
              </select>
          </li>
      </ul>
      <br />
      
      <input type="text" id="type" name="type" value="<?php echo $acc_type; ?>" hidden />
      <input type="text" id="address" name="address" placeholder="Adresse" />
      <input type="tel" id="tel" name="tel" placeholder="Téléphone" />
      <input type="text" id="email" disabled name="email" value="<?php echo $email; ?>" />
      <input type="password" id="password" name="password" placeholder="Password" />
      <div class="ui pointing red basic label" id="password_error" style="display:none;">
        Mot de passe necessaire.
      </div>
  <!--
      <input type="password" id="password" name="password" placeholder="Password"/>
      <div style="float: left">
          <input type="checkbox">
      </div>
      <div style="display: contents">
           <p style="font-size: : 14px; ">I accept the Lowxy collects and uses the data provided, in accordance with thier terms and conditions and privacy policy.</p>
       </div>
   -->
  </center>

  <div class="evviede-venir-title" style="margin: 20px;">
      <a href="javascript:void(0)" onclick="inscription_3()">Inscription</a>
  </div>

  <?php
}

?>