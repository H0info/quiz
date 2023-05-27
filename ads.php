<?php
include "config.php";

$step = $_POST['step'];
$ad_interest = $_POST['ad_interest'];

$interests = explode(",", $ad_interest);

?>
<div class="container">
    <div class="row">
        <?php
        // Build the SQL WHERE clause
        $whereClause = array();
        foreach ($interests as $interest) {
            $whereClause[] = "`ad_group` LIKE '%$interest%'";
        }
        $whereClause = implode(' OR ', $whereClause);

        // Query the database
        $sql = "SELECT * FROM `ads` WHERE ($whereClause) AND requested_views > views ORDER BY rand() LIMIT 3";
        $result = $conn->query($sql);

        // Display the number of results
        $numResults = $result->num_rows;
        echo '<input id="num_q" value="'.$numResults.'" hidden>';
        echo '<h2>Regardez une publicité pour continuer </h2>';
        echo '<p id="timer"></p>';

        // Display the results
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="price-box" style="text-align: center;">
                        <h5><?php echo $row['titre']; ?></h5>
                        <p><?php echo $row['description']; ?></p>
                        <img src="<?php echo $row['image']; ?>" style="cursor: pointer" onclick="single_ad(<?php echo $row['id']; ?>);">
                    </div>
                </div>
            </div>
            <?php
        }

        // If there are less than 3 results, fetch more until there are 3
        while ($numResults < 3) {
            $sql = "SELECT * FROM `ads` WHERE ($whereClause) AND requested_views > views ORDER BY rand() LIMIT 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="price-box" style="text-align: center;">
                        <h5><?php echo $row['titre']; ?></h5>
                        <p><?php echo $row['description']; ?></p>
                        <img src="<?php echo $row['image']; ?>" style="cursor: pointer" onclick="single_ad(<?php echo $row['id']; ?>);">
                    </div>
                </div>
            </div>
            <?php
            $numResults++;
        }
        ?>
    </div>
</div>
<?php
$next = $step + 1;
?>
<input value="<?php echo $next; ?>" id="step" hidden>

<script>
    var num_q = document.getElementById("num_q").value;
    function set_timer(s) {
        var step = document.getElementById("step").value;
        document.getElementById("timer").innerHTML="Question suivante dans "+s;
        setTimeout(() => {
            s--;
            if(s==0) { question(step); } else {set_timer(s);}
        }, 1000);
    }
    if(num_q == 0) {set_timer(10);}
</script>