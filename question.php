<?php

include "config.php";


$step = $_POST['step'];



if($step<=3)
{
    $qst = $_POST['qst'];
    $sql_q = $conn->query("SELECT * FROM quizz WHERE id = '$qst'");
    $row_q = $sql_q->fetch_assoc();

    ?>
    <input value="<?php echo $step; ?>" id="step" hidden>
    

                <h1 style="text-align: left;"><?php echo $step; ?>/3</h1>
                <p></p>
                    <h2 style="font-size: 25px; background: #f6ebff; border-radius: 20px;">
                        <?php echo $row_q['question']; ?>
                    </h2>
                <br>
                <input name="answer" id="answer" placeholder="Votre reponse ici..." />
                <div class="evviede-venir-title" style="padding: 20px;">
                    <a href="javascript:void(0)" onclick="ad()">Envoyer votre reponse</a>
                </div>
    
    <?php
} else {
    if($_POST['rep_1']!="") $rep_1 = addslashes($_POST['rep_1']); else $rep_1 = 0000;
    if($_POST['rep_2']!="") $rep_2 = addslashes($_POST['rep_2']); else $rep_2 = 0000;
    if($_POST['rep_3']!="") $rep_3 = addslashes($_POST['rep_3']); else $rep_3 = 0000;

    $qst_1 = $_POST['qst_1'];
    $qst_2 = $_POST['qst_2'];
    $qst_3 = $_POST['qst_3'];

    $sql_q_1 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_1' AND answer LIKE '%$rep_1%'");
    $num_q_1 = $sql_q_1->num_rows;
    $sql_q_1 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_1'");
    $row_q_1 = $sql_q_1->fetch_assoc();

    $sql_q_2 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_2' AND answer LIKE '%$rep_2%'");
    $num_q_2 = $sql_q_2->num_rows;
    $sql_q_2 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_2'");
    $row_q_2 = $sql_q_2->fetch_assoc();

    $sql_q_3 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_3' AND answer LIKE '%$rep_3%'");
    $num_q_3 = $sql_q_3->num_rows;
    $sql_q_3 = $conn->query("SELECT * FROM quizz WHERE id = '$qst_3'");
    $row_q_3 = $sql_q_3->fetch_assoc();

    $score = $num_q_1 + $num_q_2 + $num_q_3;

    $q_1 = addslashes($row_q_1['question']);
    $r_1 = addslashes($row_q_1['answer']);
    $q_2 = addslashes($row_q_2['question']);
    $r_2 = addslashes($row_q_2['answer']);
    $q_3 = addslashes($row_q_3['question']);
    $r_3 = addslashes($row_q_3['answer']);

    $gps_ip = $_SESSION['ip'];
    $gps_city = $_SESSION['city'];
    $gps_region = $_SESSION['region'];
    $gps_country = $_SESSION['country'];
    $gps_loc = $_SESSION['loc'];

    $date = date("d-m-Y");
    $time = date("H:i:s");

    $taxi = $_SESSION['taxi_serial'];

    if(isset($_SESSION['id'])) $user_info = $_SESSION['nom'].' '.$_SESSION['prenom'].' '.$_SESSION['company'].' '.$_SESSION['owner']; 
    else $user_info = $session;


    $sql_winner = $conn->query("SELECT id FROM quizz_stats WHERE score = 3");
    $num_winner = $sql_winner->num_rows;

    if($num_winner%5 == 0 && $score==3)
    {
        $winner = 1;
        ?>
            
                                <h2 style="font-size: 25px;"><span>BRAVO! COURSE GRATUITE!</span> <br>Vous avez gagnez avec un score de <span><?php echo $score; ?>/3</span></h2>
                                <ol style="font-size: 16px; text-align: left; line-height: normal;">
                                    <li><?php echo $r_1; ?></li>
                                    <li><?php echo $r_2; ?></li>
                                    <li><?php echo $r_3; ?></li>
                                </ol>
                                <p></p>
                                <a href="index.php">Page d'acceuil </a>
                            

        <?php
    } else {
        $winner = 0;
        ?>
            <div class="container">
                <div class="evviede-venir-wrapper-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="evviede-venir-title">
                                <h2>Votre score est de <span><?php echo $score; ?>/3</span></h2>
                                <p></p>
                                <ol style="font-size: 16px; text-align: left; line-height: normal;">
                                    <li><?php echo $r_1; ?></li>
                                    <li><?php echo $r_2; ?></li>
                                    <li><?php echo $r_3; ?></li>
                                </ol>
                                <p>Tentez votre chance la prochaine fois pour gagner!</p>
                                <a href="quizz.php">Rejouer le Quizz </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php
    }

    $conn->query("INSERT INTO `quizz_stats`
        (`taxi`, `user`, `q_1`, `q_1_id`, `q_1_score`, `r_1`, `c_1`, `q_2`, `q_2_id`, `q_2_score`, `r_2`, `c_2`, `q_3`, `q_3_id`, `q_3_score`, `r_3`, `c_3`, `score`, `ip`, `gps_city`, `gps_region`, `gps_country`, `gps_loc`, `date`, `time`, `winner`) VALUES
        ('$taxi', '$user_info,', '$q_1', '$qst_1', '$num_q_1', '$rep_1', '$r_1', '$q_2', '$qst_2', '$num_q_2',  '$rep_2', '$r_2', '$q_3', '$qst_3', '$num_q_3',  '$rep_3', '$r_3', '$score', '$gps_ip', '$gps_city', '$regionName', '$gps_country', '$gps_loc', '$date', '$time', '$winner')");

}

?>
