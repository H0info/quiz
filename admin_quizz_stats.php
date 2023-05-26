<?php
include "config.php";

$sql = $conn->query("SELECT * FROM quizz_stats WHERE date='$online_date' ORDER BY id DESC");
$row = $sql->fetch_assoc();


$sql_taxis = $conn->query("SELECT count(taxi) as taxis FROM quizz_stats WHERE date='$online_date'");
$row_taxis = $sql_taxis->fetch_assoc();

$sql_quizzs = $conn->query("SELECT count(*) as quizz FROM quizz_stats WHERE date='$online_date'");
$row_quizzs = $sql_quizzs->fetch_assoc();

$sql_winners = $conn->query("SELECT count(winner) as winners FROM quizz_stats WHERE winner = 1 AND date='$online_date'");
$row_winners = $sql_winners->fetch_assoc();


?>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script src="dist/semantic.min.js"></script>

<div class="ui large modal" id="modal_gps">
    <div class="header">Information confidentielle</div>
      <div class="content">
        <iframe 
            id="maps_frame"
            width="100%" 
            height="400" 
            frameborder="0" 
            scrolling="no" 
            marginheight="0" 
            marginwidth="0" 
            src="s"
           >
           </iframe>
      </div>
      <div class="actions">
          <div class="ui positive right icon button">
            Confirmer
            <i class="checkmark icon"></i>
          </div>
       </div>
</div>


    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;"><div class="ui statistics" style="float: right">
              <div class="statistic">
                <div class="value">
                  <?php echo $row_taxis['taxis']; ?> 
                </div>
                <div class="label">
                  Taxi active
                </div>
              </div>
              <div class="statistic">
                <div class="value">
                  <?php echo $row_quizzs['quizz']; ?> 
                </div>
                <div class="label">
                  Quizz Joué
                </div>
              </div>
              <div class="statistic">
                <div class="value">
                  <?php echo $row_winners['winners']; ?> 
                </div>
                <div class="label">
                  Victorieux
                </div>
              </div>
            </div>  
            <br>
                <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
                
            <br>



                <table class="ui fixed table" style="padding: 0; margin-top: 30px">
                  <thead>
                    <tr>
                      <th style="width: 20%">Visiteur</th>
                      <th style="width: 20%">Taxi</th>
                      <th style="width: 15%">Score</th>
                      <th style="width: 20%">Région / Cité</th>
                      <th style="width: 20%">Date / Heure</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = $sql->fetch_assoc())
                  {
                    ?>
                      <tr id="<?php echo $row['id']; ?>">
                        <td><?php echo $row['user']; ?></td>
                        <td><?php echo $row['taxi']; ?></td>
                        <td><?php echo $row['score']; ?> / 3</td>
                        <td><i class="<?php echo strtolower($row['gps_country']); ?> flag" onclick="user_gps_modal('https://maps.google.com/maps?q=<?php echo $row['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')"></i><?php echo $row['gps_region'].' '.$row['gps_city']; ?></td>
                        <td><?php echo $row['date']; ?> - <?php echo $row['time']; ?></td>
                      </tr>
                    <?php
                  }
                  ?>      
                </tbody>
              </table>
          </div>
        </div>
      </div>

      <script>
function user_gps_modal(gps)
  { 
    document.getElementById("maps_frame").src=gps;
    $('#modal_gps').modal('show');
  }
      </script>