<?php
include "config.php";

$sql_online = $conn->query("SELECT * FROM online_users ORDER BY id DESC");
$num_online = $sql_online->num_rows;

$sql_online_quizz = $conn->query("SELECT * FROM online_users WHERE page='quizz.php'");
$num_online_quizz = $sql_online_quizz->num_rows;

$sql_glob = $conn->query("SELECT * FROM global_stats WHERE date='$online_date'");
$row_glob = $sql_glob->num_rows;

?>		<div class="ui statistics" style="float: right">
			<div class="statistic">
                <div class="value">
                  <?php echo $num_online; ?> 
                </div>
                <div class="label">
                  Utilisateurs en ligne
                </div>
              </div>
              <div class="statistic">
                <div class="value">
                  <?php echo $num_online_quizz; ?> 
                </div>
                <div class="label">
                  Entrain de jouer le Quizz
                </div>
              </div>
              <div class="statistic">
                <div class="value">
                  <?php echo $row_glob; ?> 
                </div>
                <div class="label">
                  Aujourd'hui
                </div>
              </div>
            </div>  
            <br>
                <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
                
