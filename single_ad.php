<?php

include "config.php";

$id = $_POST['id'];
$step = $_POST['step'];

$gps_ip = $_SESSION['ip'];
$gps_city = $_SESSION['city'];
$gps_region = $_SESSION['region'];
$gps_country = $_SESSION['country'];
$gps_loc = $_SESSION['loc'];

$country_code = $_SESSION['countryCode'];
$regionName = $_SESSION['regionName'];
$zip = $_SESSION['zip'];
$isp = $_SESSION['isp'];

$taxi = $_SESSION['taxi'];

$date = date("d-m-Y");
$time = date("H:i:s");

$sql_q = $conn->query("SELECT * FROM `ads` WHERE `id` = '$id'");
$row_q = $sql_q->fetch_assoc();

$old_views = $row_q['views'];
$new_view = $old_views + 1;

if ($_SESSION['type'] == 1) {
    $user_info = $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
} else {
    $user_info = "Guest";
}

$conn->query("UPDATE ads SET views = '$new_view' WHERE `id` = '$id'");
$conn->query("INSERT INTO `ads_viewers` (`user`, `ad_id`, `ip`, `city`, `region`, `country`, `date`, `time`, `gps_countrycode`, `gps_regionname`, `gps_zip`, `gps_isp`, `gps_loc`, `taxi`) 
              VALUES ('$user_info', '$id', '$gps_ip', '$gps_city', '$gps_region', '$gps_country', '$date', '$time', '$country_code', '$regionName', '$zip', '$isp', '$gps_loc', '$taxi')");

?>

<input id="pub" value="<?php echo $row_q['id']; ?>" hidden>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script src="dist/semantic.min.js"></script>

<div class="ui modal" id="modal">
    <div class="header"></div>
    <div class="content">
        <iframe src="<?php echo $row_q['link']; ?>" style="width: 100%; height: 600px"></iframe>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="price-box" style="text-align: center;">
                    <h5><?php echo $row_q['titre']; ?></h5>
                    <p><?php echo $row_q['description']; ?></p>
                    <div style="background: #07ffd2; width: 0%" id="ad_progress"></div>
                    <video id="this_video" src="<?php echo $row_q['video']; ?>" autoplay></video>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="boysge-right wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; height: 450px;">
                <h3>Aidez-nous à améliorer les annonces</h3>
                <div id="evaluation">
                    <p>Pouvez-vous nous donner votre avis sur <?php echo $row_q['titre']; ?>?</p>
                    <p><input id="feedback" placeholder="Votre avis ici..." /></p>
                    <div class="evviede-venir-title">
                        <a href="javascript:void(0)" onclick="evaluation()">Envoyer votre commentaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        document.getElementById("ad_progress").scrollIntoView();

        $("#this_video").on("timeupdate", function(event) {
            var duration = this.duration;
            var duration_ms = duration * 1000;
            document.getElementById("ad_progress").style = "background: #07ffd2; width: 100%; transition: all " + duration + "s";
        });

        setTimeout(function() {
            $('#modal').modal('show');
        }, 10000);

        setTimeout(function() {
            question(<?php echo $step; ?>);
        }, 10000);
    });

    function evaluation() {
        let pub = $('#pub').val();
        let feedback = $('#feedback').val();
        let user = $('#user').val();

        document.getElementById("evaluation").style = "opacity: 0; transition: all 0.5s";
        $.ajax({
            url: 'evaluation.php',
            type: 'POST',
            data: {
                pub: pub,
                feedback: feedback,
                user: user
            },
            success: function(html) {
                setTimeout(() => {
                    $('#evaluation').html(html);
                    document.getElementById("evaluation").style = "opacity: 1; transition: all 0.5s";
                }, 1000);
            }
        });
    }
</script>
