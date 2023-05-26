<?php
include "config.php";

$sql_gestion = $conn->query("SELECT * FROM gestion");
$row_ges = $sql_gestion->fetch_assoc();

?>


    <div class="container">
        <div class="row">
          <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
                <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
            </div>
            <table class="ui celled striped table wow fadeInLeft" style="padding: 0; ">
                <thead>
                  <tr><th colspan="3">
                    Gestion Générale
                  </th>
                </tr></thead>
                <tbody>
                  <tr style="vertical-align: middle">
                    <td class="collapsing" style="width: 15%">Mot de passe </td>
                    <td><input id="admin_passcode" value="<?php echo $row_ges['admin_passcode']; ?>" onchange="upd_data('gestion', this.id, this.value)"></td>
                  </tr>
                  <tr style="vertical-align: middle">
                    <td class="collapsing" style="width: 15%">Titre du site </td>
                    <td><input id="title" value="<?php echo $row_ges['title']; ?>" onchange="upd_data('gestion', this.id, this.value)"></td>
                  </tr>
                  <tr style="vertical-align: middle">
                    <td class="collapsing" style="width: 15%">E-mail du site </td>
                    <td><input id="email" value="<?php echo $row_ges['email']; ?>" onchange="upd_data('gestion', this.id, this.value)"></td>
                  </tr>
                  <tr style="vertical-align: middle">
                    <td class="collapsing" style="width: 15%">Téléphone </td>
                    <td><input id="tel" value="<?php echo $row_ges['tel']; ?>" onchange="upd_data('gestion', this.id, this.value)"></td>
                  </tr>
                  <tr style="vertical-align: middle">
                    <td class="collapsing" style="width: 15%">Vues par 100€ </td>
                    <td><input id="ads_params" value="<?php echo $row_ges['ads_params']; ?>" onchange="upd_data('gestion', this.id, this.value)"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          