<?php

include "config.php";

$step = $_POST['step'];
$ad_interest = $_POST['ad_interest'];

$int_table = explode(",",$ad_interest);
$num_rows = 0;
?>
        <div class="container">
            <div class="row">
                <?php
                $i = 0;
foreach ($int_table as $v)
{
    if ($i!=0) $req_interest = ' OR '.$req_interest;
    $req_interest = "`ad_group` LIKE '%$v%' ".$req_interest;
    $i++;
}   
    ?>
                <?php 
                $sql_q = $conn->query("SELECT * FROM `ads` WHERE $req_interest AND requested_views > views ORDER BY rand() LIMIT 3");
                $num_q = $sql_q->num_rows;

                echo '<input id="num_q" value="'.$num_q.'" hidden>';
                echo'<h2>Regardez une publicié pour continuer </h2>';
                echo'<p id="timer"></p>';
                while ($row_q = $sql_q->fetch_assoc())
                {
                   ?>

                   <div class="col-md-6 col-lg-4">
                        <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="price-box" style="text-align: center;">
                                <h5><?php echo $row_q['titre']; ?></h5>
                                <p><?php echo $row_q['description']; ?></p>
                                <img src="<?php echo $row_q['image']; ?>" style="cursor: pointer" href="javascript:void(0)" onclick="single_ad(<?php echo $row_q['id']; ?>);">
                                
                            </div>
                        </div>
                    </div>
                   <?php 
                }

                while ($num_q<3)
                {

                    $sql_q = $conn->query("SELECT * FROM `ads` WHERE $req_interest AND requested_views > views ORDER BY rand() LIMIT 1");
                    $row_q = $sql_q->fetch_assoc();
                       ?>
                       
                       <div class="col-md-6 col-lg-4">
                            <div class="price-box-inner wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <div class="price-box" style="text-align: center;">
                                    <h5><?php echo $row_q['titre']; ?></h5>
                                    <p>Google?<?php echo $row_q['description']; ?></p>
                                    <img src="<?php echo $row_q['image']; ?>" style="cursor: pointer" href="javascript:void(0)" onclick="single_ad(<?php echo $row_q['id']; ?>);">
                                    
                                </div>
                            </div>
                        </div>
                       <?php 
                   $num_q++;
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
        function set_timer(s)
        {
            var step = document.getElementById("step").value;
            document.getElementById("timer").innerHTML="Question prochaine dans "+s;
            setTimeout(() => {
                s--;
                if(s==0) { question(step); } else {set_timer(s);}
             }, 1000);
        
        }
        if(num_q == 0) {set_timer(10);}
        
        
    </script>




